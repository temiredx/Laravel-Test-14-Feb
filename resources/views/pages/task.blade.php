@extends('layouts.app')
@section('title', 'Task')

@section('content')
  <div class="flex flex-col justify-center items-center h-screen bg-gray-100 overflow-hidden">
    <form class="bg-white text-black p-6 rounded-lg shadow-md w-full max-w-sm mb-4">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-bold">Task #456</h2>
      <div class="flex justify-end items-center">
      <span class="text-sm text-gray-500 mr-2">{{ now()->toDateString() }}</span>
      <span class="inline-block px-2 py-1 rounded-full text-white text-xs bg-green-500">Done</span>
      </div>
    </div>
    <div class="mb-4">
      <label for="title" class="block text-sm font-medium mb-2">Title</label>
      <input type="text" id="title" name="title" class="w-full p-2 bg-gray-100 text-black rounded" required>
    </div>
    <div class="mb-4">
      <label for="description" class="block text-sm font-medium mb-2">Description</label>
      <textarea id="description" name="description" class="w-full p-2 bg-gray-100 text-black rounded"
      required></textarea>
    </div>
    <button type="submit" class="w-full bg-black text-white font-bold py-2 rounded hover:bg-gray-800">Save</button>
    </form>
    <form class="bg-white text-black p-6 rounded-lg shadow-md w-full max-w-sm">
    <button type="button" class="w-full bg-red-500 text-white font-bold py-2 rounded hover:bg-red-700 mb-2">Mark as Not
      Done</button>
    <button type="button" class="w-full bg-gray-500 text-white font-bold py-2 rounded hover:bg-gray-700">Delete</button>
    </form>
  </div>
@endsection