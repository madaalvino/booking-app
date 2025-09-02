<?php

   namespace App\Http\Controllers;

   use App\Models\User;
   use Illuminate\Http\Request;
   use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\Hash;
   use Illuminate\Http\JsonResponse;
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
               'password' => 'required|string|min:8',
               'tlp' => 'nullable|string',
           ]);

           $user = User::create([
               'username' => $validated['username'],
               'email' => $validated['email'],
               'password' => Hash::make($validated['password']),
               'tlp' => $validated['tlp'],
           ]);

           Auth::login($user);
           return redirect()->route('home');
       }

       public function logout(Request $request): RedirectResponse
       {
           Auth::logout();
           $request->session()->invalidate();
           $request->session()->regenerateToken();
           return redirect('/login');
       }

       public function me(Request $request): JsonResponse
       {
           return response()->json([
               'user' => $request->user()
           ]);
       }
         public function showProfile(): \Illuminate\View\View
         {
              $user = Auth::user();
              return view('profile', compact('user'));
         }
   }
