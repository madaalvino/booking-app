@extends('layout.app')

   @section('content')
   <div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 relative overflow-hidden">
       <div class="absolute inset-0 overflow-hidden pointer-events-none">
           <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-400/10 to-purple-400/10 rounded-full blur-3xl animate-pulse"></div>
           <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-cyan-400/10 to-teal-400/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
       </div>

       <div class="container mx-auto px-4 py-12 relative z-10">
           <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-2xl">
               <h2 class="text-3xl font-bold mb-6 text-center bg-gradient-to-r from-gray-900 via-blue-800 to-indigo-900 bg-clip-text text-transparent">
                   Tambah Pengguna Baru
               </h2>

               @if ($errors->any())
                   <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   </div>
               @endif

               @if (session('success'))
                   <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                       {{ session('success') }}
                   </div>
               @endif

               <form action="{{ route('auth.store') }}" method="POST" class="space-y-4">
                   @csrf
                   <div>
                       <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                       <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                   </div>
                   <div>
                       <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                       <input type="email" name="email" id="email" value="{{ old('email') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                   </div>
                   <div>
                       <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                       <input type="password" name="password" id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                   </div>
                   <div>
                       <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi</label>
                       <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                   </div>
                   <div>
                       <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                       <select name="role" id="role" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                           <option value="pengguna">Pengguna</option>
                           <option value="admin">Admin</option>
                       </select>
                   </div>
                   <button type="submit" class="w-full relative px-4 py-2 rounded-lg bg-cyan-600 text-white font-semibold hover:bg-cyan-700/70 hover:text-yellow-300 transition-all duration-300 shadow hover:scale-105">
                       Tambah Pengguna
                   </button>
               </form>
           </div>
       </div>
   </div>
   @endsection
