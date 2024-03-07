@extends('layouts/main')
@section('content')
    <!--  Body -->

    <!--  Product Info -->
    <div class="container grid grid-cols-2 gap-6 mx-auto">
        <div>
            <img src="images/tshirt-front-white-large.png" alt="product" class="w-full">
            <div class="grid grid-cols-5 gap-4 mt-4">
                <img src="images/tshirt-front-white-small.png" alt="product"
                    class="w-full cursor-pointer border border-gray-400">
                <img src="images/tshirt-side-white-small.png" alt="product" class="w-full cursor-pointer border">
                <img src="images/tshirt-back-white-small.png" alt="product" class="w-full cursor-pointer border">
            </div>
        </div>

        <div>
            <h2 class="text-3xl font-medium uppercase mb-2">Shirt</h2>
            <div class="flex items-center mb-4">
                <div class="flex gap-1 text-sm text-yellow-400">
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                </div>
                <div class="text-xs text-gray-500 ml-3">(150 Reviews)</div>
            </div>
            <div class="space-y-2">
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>Availability: </span>
                    <span class="text-green-600">In Stock</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Brand: </span>
                    <span class="text-gray-600">Elastic Path</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Category: </span>
                    <span class="text-gray-600">Tops</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">SKU: </span>
                    <span class="text-gray-600">10001-W-L</span>
                </p>
            </div>
            <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
                <p class="text-xl text-primary font-semibold">$9.99</p>
                <p class="text-base text-gray-400 line-through">$19.99</p>
            </div>

            <p class="mt-4 text-gray-600">Looking for a comfortable and stylish way to show off your favorite
                brand? Our logo t-shirt is the perfect choice! Made from high-quality materials and featuring a
                bold and eye-catching logo design, this t-shirt is the ideal way to express your love for your
                favorite brand while staying comfortable and fashionable. Whether you're heading out for a
                casual day with friends or just running errands around town, this logo t-shirt is sure to become
                a staple in your wardrobe.</p>

            <div class="pt-4">
                <h3 class="text-sm text-gray-800 uppercase mb-1">Size</h3>
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

                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-sm text-gray-800 uppercase mb-1">Quantity</h3>
                <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-
                    </div>
                    <div class="h-8 w-8 text-base flex items-center justify-center">4</div>
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+
                    </div>
                </div>
            </div>

            <div class="mt-6 flex gap-3 border-b border-gray-200 pb-5 pt-5">
                <a href="#"
                    class="bg-green-700 border border-primary text-white px-8 py-2 font-medium uppercase flex items-center gap-2 hover:bg-green-500 transition">
                    Add to cart
                </a>
                <a href="#"
                    class="border border-gray-300 text-gray-600 px-8 py-2 font-medium uppercase flex items-center gap-2 hover:text-primary transition">
                    <i class="gg-heart"></i> Wishlist
                </a>
            </div>
        </div>
    </div>
    <!--  Product Info -->

    <!-- description -->
    <div class="container py-16 mx-auto">
        <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium">Product details</h3>
        <div class="w-3/5 pt-6">
            <div class="text-gray-600">
                <p class="py-4">Introducing our premium logo t-shirt, the ultimate combination of style,
                    comfort, and quality. If you're looking for a t-shirt that not only looks great but also
                    feels great to wear, then you're in the right place. Made from the highest quality
                    materials, this shirt is designed to be both durable and breathable, ensuring that you stay
                    comfortable all day long, no matter what your plans are.</p>
                <p class="py-4">Crafted from soft, high-quality cotton, this logo t-shirt is perfect for
                    everyday wear. The lightweight, breathable fabric will keep you cool and comfortable even on
                    the hottest of days, making it the ideal choice for any season. With its classic
                    short-sleeved design, this t-shirt is versatile enough to be worn on its own or layered with
                    your favorite outerwear.</p>
                <p class="py-4">The standout feature of this t-shirt is undoubtedly the bold and eye-catching
                    logo design. Our skilled designers have meticulously crafted this logo to be both stylish
                    and recognizable, making it the perfect way to show off your love for your favorite brand.
                    Whether you're a loyal fan or simply appreciate great design, this logo t-shirt is the
                    perfect addition to your wardrobe.</p>
                <p class="py-4">In terms of fit, this t-shirt has been designed with both comfort and style in
                    mind. The classic cut is flattering and easy to wear, and the relaxed fit provides plenty of
                    room for movement. The ribbed neckline adds an extra touch of style, while the double-needle
                    stitching ensures that this t-shirt will stand up to even the toughest wear and tear.</p>
                <p class="py-4">But it's not just the quality of the materials and design that sets this t-shirt
                    apart. We're committed to sustainable and ethical manufacturing, and all of our products are
                    made with the highest standards of social and environmental responsibility in mind. You can
                    wear this t-shirt with pride, knowing that it was made with care and consideration for both
                    people and the planet.</p>
                <p class="py-4">So whether you're looking for a new addition to your casual wardrobe, a way to
                    show off your love for your favorite brand, or simply a comfortable and stylish t-shirt to
                    wear, our logo t-shirt has got you covered. Order yours today and experience the perfect
                    combination of quality, style, and comfort!</p>
            </div>

            <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Color</th>
                    <th class="py-2 px-4 border border-gray-300 ">White</th>
                </tr>
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Material</th>
                    <th class="py-2 px-4 border border-gray-300 ">Cotton</th>
                </tr>
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Size</th>
                    <th class="py-2 px-4 border border-gray-300 ">Large</th>
                </tr>
            </table>
        </div>
    </div>
    <!-- ./description -->

    <!-- related product -->
    <div class="container pb-16 mx-auto">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Related products</h2>
        <div class="grid grid-cols-4 gap-6">
            <div class="bg-white shadow-md overflow-hidden">
                <div class="relative group">
                    <img src="images/tshirt-front-black-small.png" alt="product 1" class="w-full">
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
                    <img src="images/tshirt-front-grey-small.png" alt="product 1" class="w-full">
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
                    <img src="images/tshirt-front-blue-small.png" alt="product 1" class="w-full">
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
    <!-- ./related product -->

    <!--  Body -->
@endsection
