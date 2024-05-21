<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="max-w-lg mx-auto bg-white p-8 rounded shadow">
            <h2 class="text-2xl font-bold mb-6">Edit Book</h2>
            <form action="{{ route('book.update', $book) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input value="{{$book->name}}" type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </input>
                </div>
                <div class="mb-4">
                    <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author</label>
                    <input value="{{$book->author}}" type="text" id="author" name="author" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="released_at" class="block text-gray-700 text-sm font-bold mb-2">Release Date</label>
                    <input value="{{$book->released_at}}" type="date" id="released_at" name="released_at" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Submit
                    </button>
                    <a href="{{ route('book.index') }}" class="inline-block align-baseline font-bold text-sm text-red-500 hover:text-red-800">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
