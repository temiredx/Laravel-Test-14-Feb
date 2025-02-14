@extends('layouts.app')
@section('title', 'Join')

@section('content')
  <div class="flex justify-center items-center h-screen bg-gray-100 overflow-hidden">
    <form class="bg-black text-white p-6 rounded-lg shadow-md w-full max-w-sm mx-auto">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-bold">Join</h2>
      <a href="{{ route('login') }}" class="text-sm text-gray-400 hover:text-gray-200">Login instead</a>
    </div>
    <div class="mb-4">
      <label for="username" class="block text-sm font-medium mb-2">Username</label>
      <input type="text" id="username" name="username" class="w-full p-2 bg-gray-800 text-white rounded" required>
    </div>
    <div class="mb-4">
      <label for="password" class="block text-sm font-medium mb-2">Password</label>
      <input type="password" id="password" name="password" class="w-full p-2 bg-gray-800 text-white rounded" required>
    </div>
    <div class="mb-4">
      <label for="confirm_password" class="block text-sm font-medium mb-2">Confirm Password</label>
      <input type="password" id="confirm_password" name="confirm_password"
      class="w-full p-2 bg-gray-800 text-white rounded" required>
    </div>
    <button type="submit" class="w-full bg-white text-black font-bold py-2 rounded hover:bg-gray-200">Join</button>
    </form>
  </div>
@endsection