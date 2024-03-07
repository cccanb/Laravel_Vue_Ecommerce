<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Homepage - TailwindCSS Ecommerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="TailwindCSS Ecommerce Template">

    @vite(['resources/css/app.css'])
</head>

<body>
    <div>
        <!--  Header -->
        <header class="bg-white">
            <div class="container mx-auto px-6 py-3">
                <div class="flex items-center justify-between">
                    <div class="hidden w-full text-gray-600 md:flex md:items-center">
                        <i class="gg-profile"></i>
                    </div>
                    <div
                        class="w-full text-blue-900 md:text-center font-mono text-4xl font-semibold uppercase tracking-widest">
                        Acme
                    </div>
                    <div class="flex items-center justify-end w-full">
                        <button class="text-gray-600 focus:outline-none mx-4 sm:mx-0">
                            <i class="gg-shopping-cart"></i>
                        </button>

                        <div class="flex sm:hidden">
                            <button type="button"
                                class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                                aria-label="toggle menu">
                                <i class="gg-menu-grid-r"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
                    <div class="flex flex-col sm:flex-row">
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0"
                            href="{{ route('home') }}">Home</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0"
                            href="{{ route('category') }}">Category</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0"
                            href="{{ route('product') }}">Product</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0"
                            href="{{ route('cart') }}">Cart</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0"
                            href="{{ route('contact') }}">Contact</a>
                    </div>
                </nav>
                <div class="relative mt-6 max-w-lg mx-auto">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <i class="gg-search"></i>
                    </span>

                    <input
                        class="pl-10 block w-full border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        type="text" placeholder="Search">
                </div>
            </div>
        </header>
        <!--  Header -->

        <!--  Cart -->
        <div :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'"
            class="fixed right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300 hidden"
            x-init="() => { $el.classList.remove('hidden'); }">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-medium text-gray-700">Your cart</h3>
                <button class="text-gray-600 focus:outline-none">
                    <i class="gg-close"></i>
                </button>
            </div>
            <hr class="my-3">
            <div class="flex justify-between mt-6">
                <div class="flex">
                    <img class="h-20 w-20 object-cover" src="{{ asset('images/tshirt-front-white-small.png') }}"
                        alt="">
                    <div class="mx-3">
                        <h3 class="text-sm text-gray-600">T-Shirt</h3>
                        <div class="flex items-center mt-2">
                            <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                <i class="gg-remove"></i>
                            </button>
                            <span class="text-gray-700 mx-2">2</span>
                            <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                <i class="gg-add"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <span class="text-gray-600">$24.99</span>
            </div>
            <a
                class="flex cursor-pointer items-center justify-center mt-4 px-3 py-2 bg-green-700 text-white text-sm uppercase font-medium hover:bg-green-500 focus:outline-none focus:bg-green-500">
                <span>Checkout</span>
                <i class="px-2 gg-arrow-right"></i>
            </a>
        </div>
        <!--  Cart -->

        <main class="my-8">
            @yield('content')
        </main>

        <!--  Footer-->
        <footer class="bg-slate-200">
            <div class="bg-slate-900 text-white">
                <div class="py-16 sm:py-20 md:py-24 container mx-auto px-6">
                    <div class="mx-auto flex flex-col items-center justify-between lg:flex-row">
                        <div class="text-center lg:text-left w-full">
                            <h4 class="pb-8 text-xl font-bold">Contact</h4>
                            <ul>
                                <li class="block pb-2">
                                    <a href="mailto:test.email0123@elyssi.com"
                                        class="text-base transition-colors hover:text-primary">support@acme.com</a>
                                </li>
                                <li class="block pb-2">
                                    <a href="tel:5555555555"
                                        class="text-base transition-colors hover:text-primary">(555) 555-5555</a>
                                </li>
                            </ul>
                        </div>
                        <div class="py-16 text-center lg:py-0 w-full">
                            <a href="{{ route('home') }}" class="font-mono text-4xl uppercase tracking-widest">Acme</a>
                            <div class="flex items-center justify-center pt-5">
                                <a href="#">
                                    <div
                                        class="mr-5 flex items-center rounded-full bg-white px-2 py-2 group-hover:bg-blue-200">
                                        <i class="gg-facebook text-gray-900"></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="mr-5 flex items-center rounded-full bg-white px-2 py-2 group-hover:bg-blue-200">
                                        <i class="gg-twitter text-gray-900"></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="mr-5 flex items-center rounded-full bg-white px-2 py-2 group-hover:bg-blue-200">
                                        <i class="gg-instagram text-gray-900"></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="flex items-center rounded-full bg-white px-2 py-2 group-hover:bg-blue-200">
                                        <i class="gg-slack text-gray-900"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-center lg:text-right w-full">
                            <h4 class="pb-8 text-xl font-bold">Links</h4>
                            <ul>
                                <li class="block pb-2">
                                    <a href="{{ route('home') }}"
                                        class="text-base transition-colors hover:text-primary">Home</a>
                                </li>
                                <li class="block pb-2">
                                    <a href="{{ route('category') }}"
                                        class="text-base transition-colors hover:text-primary">Category</a>
                                </li>
                                <li class="block pb-2">
                                    <a href="{{ route('product') }}"
                                        class="text-base transition-colors hover:text-primary">Product</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <!--  Footer -->
    </div>

    @vite(['resources/js/app.js'])
</body>

</html>
