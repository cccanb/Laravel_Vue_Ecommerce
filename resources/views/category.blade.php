@extends('layouts/main')
@section('content')
    <!--  Body -->
    <div class="container grid grid-cols-4 gap-6 pt-4 pb-16 items-start mx-auto">
        <!--  Sidebar -->
        <div class="col-span-1 bg-white px-4 pb-6 shadow overflow-hidden">
            <div class="divide-y divide-gray-200 space-y-5">
                <div>
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Categories</h3>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <input type="checkbox" name="cat-1" id="cat-1"
                                class="text-primary focus:ring-0 cursor-pointer">
                            <label for="cat-1" class="text-gray-600 ml-3 cusror-pointer">Hats</label>
                            <div class="ml-auto text-gray-600 text-sm">(2)</div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="cat-2" id="cat-2"
                                class="text-primary focus:ring-0 cursor-pointer">
                            <label for="cat-2" class="text-gray-600 ml-3 cusror-pointer">Tops</label>
                            <div class="ml-auto text-gray-600 text-sm">(9)</div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="cat-3" id="cat-3"
                                class="text-primary focus:ring-0 cursor-pointer">
                            <label for="cat-3" class="text-gray-600 ml-3 cusror-pointer">Bottoms</label>
                            <div class="ml-auto text-gray-600 text-sm">(11)</div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="cat-4" id="cat-4"
                                class="text-primary focus:ring-0 cursor-pointer">
                            <label for="cat-4" class="text-gray-600 ml-3 cusror-pointer">Accessories</label>
                            <div class="ml-auto text-gray-600 text-sm">(23)</div>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Brands</h3>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <input type="checkbox" name="brand-1" id="brand-1"
                                class="text-primary focus:ring-0 cursor-pointer">
                            <label for="brand-1" class="text-gray-600 ml-3 cusror-pointer">Acme</label>
                            <div class="ml-auto text-gray-600 text-sm">(15)</div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="brand-2" id="brand-2"
                                class="text-primary focus:ring-0 cursor-pointer">
                            <label for="brand-2" class="text-gray-600 ml-3 cusror-pointer">Elastic Path</label>
                            <div class="ml-auto text-gray-600 text-sm">(9)</div>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Price</h3>
                    <div class="mt-4 flex items-center">
                        <input type="text" name="min" id="min"
                            class="w-full border-gray-300 focus:border-primary focus:ring-0 px-3 py-1 text-gray-600 shadow-sm"
                            placeholder="min">
                        <span class="mx-3 text-gray-500">-</span>
                        <input type="text" name="max" id="max"
                            class="w-full border-gray-300 focus:border-primary focus:ring-0 px-3 py-1 text-gray-600 shadow-sm"
                            placeholder="max">
                    </div>
                </div>

                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">size</h3>
                    <div class="flex items-center gap-2">
                        <div class="size-selector">
                            <input type="radio" name="size" id="size-xs" class="hidden">
                            <label for="size-xs"
                                class="text-xs border border-gray-200 h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">XS</label>
                        </div>
                        <div class="size-selector">
                            <input type="radio" name="size" id="size-sm" class="hidden">
                            <label for="size-sm"
                                class="text-xs border border-gray-200 h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">S</label>
                        </div>
                        <div class="size-selector">
                            <input type="radio" name="size" id="size-m" class="hidden">
                            <label for="size-m"
                                class="text-xs border border-gray-200 h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">M</label>
                        </div>
                        <div class="size-selector">
                            <input type="radio" name="size" id="size-l" class="hidden">
                            <label for="size-l"
                                class="text-xs border border-gray-200 h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">L</label>
                        </div>
                        <div class="size-selector">
                            <input type="radio" name="size" id="size-xl" class="hidden">
                            <label for="size-xl"
                                class="text-xs border border-gray-200 h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">XL</label>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Color</h3>
                    <div class="flex items-center gap-2">
                        <div class="color-selector">
                            <input type="radio" name="color" id="black" class="hidden">
                            <label for="black" class="border border-gray-200 h-6 w-6  cursor-pointer shadow-sm block"
                                style="background-color: #000;"></label>
                        </div>
                        <div class="color-selector">
                            <input type="radio" name="color" id="white" class="hidden">
                            <label for="white" class="border border-gray-200 h-6 w-6  cursor-pointer shadow-sm block"
                                style="background-color: #fff;"></label>
                        </div>
                        <div class="color-selector">
                            <input type="radio" name="color" id="gray" class="hidden">
                            <label for="gray" class="border border-gray-200 h-6 w-6  cursor-pointer shadow-sm block"
                                style="background-color: #a4a9ad;"></label>
                        </div>
                        <div class="color-selector">
                            <input type="radio" name="color" id="blue" class="hidden">
                            <label for="blue" class="border border-gray-200 h-6 w-6  cursor-pointer shadow-sm block"
                                style="background-color: #0033cc;"></label>
                        </div>
                        <div class="color-selector">
                            <input type="radio" name="color" id="navy" class="hidden">
                            <label for="navy" class="border border-gray-200 h-6 w-6  cursor-pointer shadow-sm block"
                                style="background-color: #091740;"></label>
                        </div>
                        <div class="color-selector">
                            <input type="radio" name="color" id="red" class="hidden">
                            <label for="red" class="border border-gray-200 h-6 w-6  cursor-pointer shadow-sm block"
                                style="background-color: #990000;"></label>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--  Sidebar -->

        <!--  Products -->
        <div class="col-span-3">
            <div class="flex items-center mb-4">
                <select name="sort" id="sort"
                    class="w-44 text-sm text-gray-600 py-3 px-4 border-gray-300 shadow-sm focus:ring-primary focus:border-primary">
                    <option value="">Default sorting</option>
                    <option value="price-low-to-high">Price low to high</option>
                    <option value="price-high-to-low">Price high to low</option>
                    <option value="latest">Latest product</option>
                </select>

                <div class="flex gap-2 ml-auto">
                    <div
                        class="border border-gray-900 w-10 h-9 flex items-center justify-center text-gray-600 cursor-pointer">
                        <i class="gg-layout-grid"></i>
                    </div>
                    <div
                        class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600 cursor-pointer">
                        <i class="gg-layout-list"></i>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white shadow-md overflow-hidden">
                    <div class="relative group">
                        <img src="images/tshirt-front-white-small.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="gg-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="gg-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Shirt</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">$9.99</p>
                            <p class="text-sm text-gray-400 line-through">$19.99</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1">
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-3 text-center text-white bg-green-700 border border-primary hover:bg-green-500 transition">Add
                        to cart</a>
                </div>
                <div class="bg-white shadow-md overflow-hidden">
                    <div class="relative group">
                        <img src="images/tshirt-front-white-small.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="gg-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="gg-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Shirt</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">$9.99</p>
                            <p class="text-sm text-gray-400 line-through">$19.99</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1">
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-3 text-center text-white bg-green-700 border border-primary hover:bg-green-500 transition">Add
                        to cart</a>
                </div>
                <div class="bg-white shadow-md overflow-hidden">
                    <div class="relative group">
                        <img src="images/tshirt-front-white-small.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="gg-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="gg-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Shirt</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">$9.99</p>
                            <p class="text-sm text-gray-400 line-through">$19.99</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1">
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-3 text-center text-white bg-green-700 border border-primary hover:bg-green-500 transition">Add
                        to cart</a>
                </div>
                <div class="bg-white shadow-md overflow-hidden">
                    <div class="relative group">
                        <img src="images/tshirt-front-white-small.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="gg-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="gg-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Shirt</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">$9.99</p>
                            <p class="text-sm text-gray-400 line-through">$19.99</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1">
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-3 text-center text-white bg-green-700 border border-primary hover:bg-green-500 transition">Add
                        to cart</a>
                </div>
                <div class="bg-white shadow-md overflow-hidden">
                    <div class="relative group">
                        <img src="images/tshirt-front-white-small.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="gg-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="gg-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Shirt</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">$9.99</p>
                            <p class="text-sm text-gray-400 line-through">$19.99</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1">
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-3 text-center text-white bg-green-700 border border-primary hover:bg-green-500 transition">Add
                        to cart</a>
                </div>
                <div class="bg-white shadow-md overflow-hidden">
                    <div class="relative group">
                        <img src="images/tshirt-front-white-small.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="gg-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="gg-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Shirt</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">$9.99</p>
                            <p class="text-sm text-gray-400 line-through">$19.99</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1">
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-3 text-center text-white bg-green-700 border border-primary hover:bg-green-500 transition">Add
                        to cart</a>
                </div>
                <div class="bg-white shadow-md overflow-hidden">
                    <div class="relative group">
                        <img src="images/tshirt-front-white-small.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="gg-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="gg-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Shirt</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">$9.99</p>
                            <p class="text-sm text-gray-400 line-through">$19.99</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1">
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-3 text-center text-white bg-green-700 border border-primary hover:bg-green-500 transition">Add
                        to cart</a>
                </div>
                <div class="bg-white shadow-md overflow-hidden">
                    <div class="relative group">
                        <img src="images/tshirt-front-white-small.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="gg-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="gg-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Shirt</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">$9.99</p>
                            <p class="text-sm text-gray-400 line-through">$19.99</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1">
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-3 text-center text-white bg-green-700 border border-primary hover:bg-green-500 transition">Add
                        to cart</a>
                </div>
                <div class="bg-white shadow-md overflow-hidden">
                    <div class="relative group">
                        <img src="images/tshirt-front-white-small.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="gg-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="gg-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Shirt</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">$9.99</p>
                            <p class="text-sm text-gray-400 line-through">$19.99</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1">
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-3 text-center text-white bg-green-700 border border-primary hover:bg-green-500 transition">Add
                        to cart</a>
                </div>
            </div>
        </div>
        <!--  Products -->
    </div>

    <!--  Body -->
@endsection
