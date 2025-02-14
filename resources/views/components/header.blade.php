<div
  class="container mx-auto bg-black text-white h-12 flex items-center justify-between fixed top-0 left-0 right-0 z-10 px-8">
  <a href="/" class="text-lg font-bold">Todos</a>
  <span class="absolute left-1/2 transform -translate-x-1/2">1/10 completed</span>
  <div class="flex space-x-4">
    <a href="{{ route('login') }}" class="bg-white text-black font-bold px-3 py-1 rounded-full hover:bg-gray-200">Sign
      in</a>
    <a href="{{ route('join') }}" class="bg-white text-black font-bold px-3 py-1 rounded-full hover:bg-gray-200">Sign
      up</a>
  </div>
</div>