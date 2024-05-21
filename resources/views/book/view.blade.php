<x-app-layout>
    <div class="mx-auto w-1/2 rounded overflow-hidden shadow-lg p-4 bg-white relative m-2">
        <div class="mb-4">
           <h2 class="text-xl font-bold mb-2">{{ $book->name }}</h2>
           <p class="text-gray-700 text-base">by {{ $book->author }}</p>
           <p class="text-gray-600 text-sm">Released on {{ $book->released_at }}</p>
        </div>

        <div class="absolute bottom-4 right-4 flex gap-2 group-hover:opacity-100 transition-opacity duration-300">
          
           <a href="{{ route('book.edit', $book) }}" class="bg-blue-600 text-white px-3 py-2 rounded">
                 Edit
           </a>
           <a href="{{ route('book.index', $book) }}" class="bg-yellow-500 text-white px-3 py-2 rounded">
            Back
      </a>

           <form action="{{ route('book.destroy', $book) }}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="bg-red-500 text-white px-3 py-2 rounded">Delete</button>
           </form>
           
        </div>
     </div>

</x-app-layout>
