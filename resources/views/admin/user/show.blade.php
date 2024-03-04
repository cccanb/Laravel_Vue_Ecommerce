<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Add new user
        </h2>
        <div class="mt-3 text-sm">
            <a href="{{ route('dashboard') }}" class="text-blue-500 underline"><i class="bi bi-house"></i></a> -> <a
                href="{{ route('user.index') }}" class="text-blue-500 underline">Users</a> -> <span>Edit
                user</span>
        </div>
    </x-slot>

    <form action="{{ route('user.update', $user->id) }}" method="post"
        class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md mt-10">
        @csrf
        @method('patch')

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">User name:</label>
            <input type="text" name="name" id="name" placeholder="Enter user name"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                value="{{ old('name') ?? $user->name }}">
            @error('name')
                <div class="text-red-600 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">User email:</label>
            <input type="text" name="email" id="email" placeholder="Enter user email"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                value="{{ old('email') ?? $user->email }}">
            @error('email')
                <div class="text-red-600 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>

            <input id="password" type="password" name="password" autocomplete="new-password"
                placeholder="leave blank to keep current password"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            @error('password')
                <div class="text-red-600 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm
                password:</label>

            <input id="password_confirmation" type="password" name="password_confirmation" autocomplete="new-password"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">

            @error('password_confirmation')
                <div class="text-red-600 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Update</button>
    </form>

</x-admin-layout>
