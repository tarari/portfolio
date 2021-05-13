
<body class="text-gray-700 bg-white" style="font-family: 'Source Sans Pro', sans-serif">

</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="text-gray-700 bg-white">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Admin') }}</a>

            @endauth
        </div>
    @endif
        <div class="py-20" style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold mb-2 text-white">
                    {{ config('app.name', 'Laravel') }}
                </h2>
                <h3 class="text-2xl mb-8 text-gray-200">
                    Monitor your health vitals smartly anywhere you go.
                </h3>

                <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
                    More
                </button>
            </div>
        </div>
    <div class="bg-indigo-300 py-6"></div>
<footer class="bg-gray-100">
    <div class="container mx-auto px-6 pt-10 pb-6">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/4 text-center md:text-left">
                <h5 class="uppercase mb-6 font-bold">Links</h5>
                <ul class="mb-4">
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">FAQ</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Help</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Support</a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left">
                <h5 class="uppercase mb-6 font-bold">Legal</h5>
                <ul class="mb-4">
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Terms</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Privacy</a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left">
                <h5 class="uppercase mb-6 font-bold">Social</h5>
                <ul class="mb-4">
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Facebook</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Linkedin</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left">
                <h5 class="uppercase mb-6 font-bold">Company</h5>
                <ul class="mb-4">
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Official Blog</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">About Us</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
