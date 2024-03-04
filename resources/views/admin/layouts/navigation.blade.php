<nav x-data="{ open: true }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">

    <aside
        class="overflow-auto absolute top-0 left-0 bottom-0 p-2 w-64 h-screen text-center bg-gray-800 transition-all duration-300 lg:translate-x-0"
        :class="{ '-translate-x-full': open }">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center justify-between">
                <div class="flex items-center">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-200 dark:text-gray-200" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 text-lg text-gray-200 sm:-my-px sm:ms-10 sm:flex">
                        {{ __('Admin') }}
                    </div>
                </div>
                <i class="bi bi-x cursor-pointer lg:hidden" @click="open=!open"></i>
            </div>
            <div class="my-2 bg-gray-600 h-[1px]"></div>
        </div>

        <div>
            <div x-data="{ openChild: false }">
                <div class="p-2.5 mt-3 flex items-center px-4 cursor-pointer hover:bg-gray-600 text-white"
                    @click="openChild =!openChild">
                    <i class="bi bi-shop-window"></i>
                    <div class="flex justify-between w-full items-center">
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Catalog</span>
                        <span class="text-sm">
                            <i class="bi-chevron-down"></i>
                        </span>
                    </div>
                </div>

                <div :class="{ 'hidden': !openChild }">
                    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-300 font-bold">
                        <a href="{{ route('category.index') }}" class="block cursor-pointer p-2 hover:bg-gray-600 mt-1">
                            Categories
                        </a>
                    </div>
                    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-300 font-bold">
                        <a href="child.path" class="block cursor-pointer p-2 hover:bg-gray-600 mt-1">
                            Products
                        </a>
                    </div>
                </div>
            </div>
            <div x-data="{ openChild: false }">
                <div class="p-2.5 mt-3 flex items-center px-4 cursor-pointer hover:bg-gray-600 text-white"
                    @click="openChild =!openChild">
                    <i class="bi bi-cart4"></i>
                    <div class="flex justify-between w-full items-center">
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Sells</span>
                        <span class="text-sm">
                            <i class="bi-chevron-down"></i>
                        </span>
                    </div>
                </div>

                <div :class="{ 'hidden': !openChild }">
                    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-300 font-bold">
                        <a href="child.path" class="block cursor-pointer p-2 hover:bg-gray-600 mt-1">
                            Orders
                        </a>
                    </div>
                    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-300 font-bold">
                        <a href="child.path" class="block cursor-pointer p-2 hover:bg-gray-600 mt-1">
                            Returns
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" class="p-2.5 mt-3 flex items-center px-4 cursor-pointer hover:bg-gray-600 text-white">
                    <i class="bi bi-gear"></i>
                    <div class="flex justify-between w-full items-center">
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Settings</span>
                    </div>
                </a>
            </div>

            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="#"
                        class="p-2.5 mt-3 flex items-center px-4 cursor-pointer hover:bg-gray-600 text-white"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <div class="flex justify-between w-full items-center">
                            <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
                        </div>
                    </a>
                </form>
            </div>
        </div>
    </aside>
    <div class="flex text-white text-4xl cursor-pointer w-full bg-gray-700 lg:hidden" @click="open=!open">
        <i class="bi bi-filter-left p-2 bg-gray-700 rounded-md"></i>
    </div>
</nav>
