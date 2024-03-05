<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Add new product
        </h2>
        <div class="mt-3 text-sm">
            <a href="{{ route('dashboard') }}" class="text-blue-500 underline"><i class="bi bi-house"></i></a> -> <a
                href="{{ route('product.index') }}" class="text-blue-500 underline">Products</a> -> <span>Add new
                product</span>
        </div>
    </x-slot>

    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data"
        class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md mt-10">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Product Title:</label>
            <input type="text" name="title" id="title" required placeholder="Enter product title"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                value="{{ old('title') }}">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
            <textarea type="text" name="description" id="description"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">{{ old('description') }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Product image:</label>

            <div class="flex items-center" x-data="{ imagePreview: null }">
                <div class="max-w-[100px]" x-show="imagePreview">
                    <img :src="imagePreview" alt="Image Preview" class="mt-2 max-w-full h-auto">
                </div>
                <input type="file" name="image" @input="imagePreview = URL.createObjectURL($event.target.files[0])"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>

        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
            <input type="number" name="price" id="price" required
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                value="{{ old('price') ?? 0 }}">
        </div>
        <div class="mb-4">
            <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                value="{{ old('quantity') ?? 0 }}">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
            <select name="status" id="status"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                <option disabled>Status</option>
                <option {{ old('status') == 0 ? 'selected' : '' }} value="0">Disabled</option>
                <option {{ old('status') == 1 ? 'selected' : '' }} value="1">Enabled</option>
            </select>
        </div>

        <label class="block mb-2 text-sm font-bold text-gray-700">Product Categories:</label>

        <div x-data="{ selectedCategories: [] }">
            <select multiple x-model="selectedCategories" name="categories[]" class="w-full p-2 border rounded-md">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Add</button>
    </form>

</x-admin-layout>
