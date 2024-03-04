<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="flex m-3">
            <div class="rounded-lg text-gray-100 w-full mx-4">
                <div class="text-lg rounded-t-lg bg-blue-500 p-3">
                    <div class="text-2xl font-bold">150</div>
                    <div>orders</div>
                </div>
                <a href="#" class="block py-1 bg-blue-800 rounded-b-lg text-center">
                    Details
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
            <div class="rounded-lg text-gray-100 w-full mx-4">
                <div class="text-lg rounded-t-lg bg-green-600 p-3">
                    <div class="text-2xl font-bold">150</div>
                    <div>orders</div>
                </div>
                <a href="#" class="block py-1 bg-green-800 rounded-b-lg text-center">
                    Details
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
            <div class="rounded-lg text-gray-100 w-full mx-4">
                <div class="text-lg rounded-t-lg bg-yellow-500 p-3">
                    <div class="text-2xl font-bold">150</div>
                    <div>orders</div>
                </div>
                <a href="#" class="block py-1 bg-yellow-600 rounded-b-lg text-center">
                    Details
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
            <div class="rounded-lg text-gray-100 w-full mx-4">
                <div class="text-lg rounded-t-lg bg-red-500 p-3">
                    <div class="text-2xl font-bold">150</div>
                    <div>orders</div>
                </div>
                <a href="#" class="block py-1 bg-red-800 rounded-b-lg text-center">
                    Details
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>
    </div>
</x-admin-layout>
