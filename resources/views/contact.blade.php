@extends('layouts/main')
@section('content')
    <!--  Body -->

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
        <form class="max-w-lg mx-auto">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    Name <span class="text-red-500">*</span>
                </label>
                <input
                    class="appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" name="name" type="text" placeholder="Enter your name" required />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email <span class="text-red-500">*</span>
                </label>
                <input
                    class="appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" name="email" type="email" placeholder="Enter your email address" required />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="subject">
                    Subject <span class="text-red-500">*</span>
                </label>
                <input
                    class="appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="subject" name="subject" type="text" placeholder="Enter the subject of your message" required />
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="message">
                    Message <span class="text-red-500">*</span>
                </label>
                <textarea
                    class="appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="message" name="message" rows="6" placeholder="Enter your message" required></textarea>
            </div>
            <div class="flex justify-center">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline"
                    type="submit">
                    <i class="fas fa-paper-plane mr-2"></i> Submit
                </button>
            </div>
        </form>
    </div>
    <!--  Body -->
@endsection
