@extends('layouts/main')
@section('content')
    <!--  Body -->
    <div class="container mx-auto grid md:grid-cols-3 gap-6">
        <div class="col-span-2">
            <table class="w-full text-gray-700 shadow-md">
                <thead>
                    <tr class="border-b">
                        <th class="py-4 px-6 text-left font-medium uppercase"></th>
                        <th class="py-4 px-6 text-left font-medium uppercase">Product</th>
                        <th class="py-4 px-6 text-left font-medium uppercase">Quantity</th>
                        <th class="py-4 px-6 text-right font-medium uppercase">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td><img class="max-w-xs" src="images/jersey-front-black-small.png" alt="Thumbnail" alt="Product" />
                        </td>
                        <td class="py-4 px-6 text-left">Product 1</td>
                        <td class="py-4 px-6 text-left">
                            <div class="flex items-center">
                                <button class="text-gray-700 hover:text-gray-900 p-2">
                                    <i class="gg-math-minus"></i>
                                </button>
                                <input class="mx-2 w-8 text-center" type="number" value="1">
                                <button class="text-gray-700 hover:text-gray-900 p-2">
                                    <i class="gg-math-plus"></i>
                                </button>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-right">$19.99</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Summary -->
        <div class="bg-white shadow-md">
            <table class="w-full text-gray-700">
                <tbody>
                    <tr class="border-b">
                        <td class="py-4 px-6 text-left font-medium">Subtotal</td>
                        <td class="py-4 px-6 text-right">$34.98</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-4 px-6 text-left font-medium">Discount</td>
                        <td class="py-4 px-6 text-right">-$10.49</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-4 px-6 text-left font-medium">Total</td>
                        <td class="py-4 px-6 text-right">$24.49</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-6 mx-6">
                <label class="block font-medium text-gray-700 mb-2" for="promotions">Enter a promotion
                    code:</label>
                <div class="flex items-center">
                    <input
                        class="w-full py-2 px-3 border border-gray-300 shadow-sm mr-4 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        type="text" name="promotions" id="promotions" placeholder="Enter code">
                    <button class="bg-gray-300 text-white py-2 px-4 hover:bg-gray-400">
                        Apply
                    </button>
                </div>
            </div>
            <div class="mx-6 my-6 flex justify-end">
                <button class="bg-green-700 text-white py-2 px-4 hover:bg-green-500">
                    Checkout now
                </button>
            </div>
        </div>
    </div>


    <!--  Body -->
@endsection
