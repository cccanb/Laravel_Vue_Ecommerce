<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Add new category
        </h2>
        <div class="mt-3 text-sm">
            <a href="{{ route('dashboard') }}" class="text-blue-500 underline"><i class="bi bi-house"></i></a> -> <a
                href="{{ route('category.index') }}" class="text-blue-500 underline">Categories</a> -> <span>Add new
                category</span>
        </div>
    </x-slot>

    <form action="{{ route('category.store') }}" method="post"
        class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md mt-10">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Category Title:</label>
            <input type="text" name="title" id="title" placeholder="Enter category title"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Add</button>
    </form>

</x-admin-layout>
