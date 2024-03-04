<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Categories
        </h2>
        <div class="mt-3 text-sm">
            <a href="{{ route('dashboard') }}" class="text-blue-500 underline"><i class="bi bi-house"></i></a> ->
            <span>Categories</span>
        </div>
    </x-slot>

    <div class="text-right mb-5">
        <a href="{{ route('category.create') }}"
            class="bg-blue-600 shadow-md hover:bg-blue-500 text-white rounded-md px-4 py-2"><i
                class="bi bi-plus-circle"></i> Add</a>


        <button type="button"
            onclick="confirm('Данное действие необратимо. Вы уверены?') ? document.getElementById('form-category').submit() : false;"
            class="bg-red-600 shadow-md hover:bg-red-500 text-white rounded-md px-4 py-2 ml-3">
            <i class="bi bi-trash"></i> Delete
        </button>

    </div>

    <form id="form-category" action="{{ route('category.delete') }}" method="post">
        @csrf
        @method('delete')
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="text-left">
                        <th class="border border-gray-300 px-4 py-2 w-5">
                            <label class="inline-flex items-center align-middle">
                                <input type="checkbox" class="form-checkbox rounded-sm ">
                            </label>
                        </th>
                        <th class="border border-gray-300 px-4 py-2">Category name</th>
                        <th class="border border-gray-300 px-4 py-2">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">
                                <label class="inline-flex items-center align-middle">
                                    <input type="checkbox" name="selected[]" value="{{ $category->id }}"
                                        class="form-checkbox rounded-sm">
                                </label>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">{{ $category->title }}</td>
                            <td class="border border-gray-300 px-4 py-2"><a
                                    href="{{ route('category.show', $category->id) }}"
                                    class="bg-blue-600 shadow-md hover:bg-blue-500 text-white rounded-md px-3 py-1"><i
                                        class="bi bi-pencil-square"></i></a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </form>


</x-admin-layout>