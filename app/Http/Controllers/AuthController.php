<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function create()
    {
        return view('auth.create'); // Pastikan view ini ada
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'username' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'tlp' => 'nullable|string',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'tlp' => $validated['tlp'],
            'role' => 'pengguna', // Default role
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,pengguna',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('auth.show')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('auth.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:admin,pengguna',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();

        return redirect()->route('auth.show')->with('success', 'Pengguna berhasil diperbarui.');
    }
    
    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('auth.show')
            ->with('success', 'Pengguna berhasil dihapus!');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function showProfile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
    public function show()
{
    $users = User::all(); // Atau query sesuai kebutuhan
    return view('auth.show', compact('users'));
}
}
