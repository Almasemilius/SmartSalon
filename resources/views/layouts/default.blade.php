<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    @livewireStyles

    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</head>

<body class="bg-brownish  min-h-full">
    <style>
        .la-ball-scale-multiple,
        .la-ball-scale-multiple>div {
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .la-ball-scale-multiple {
            display: block;
            font-size: 0;
            color: #fff;
        }

        .la-ball-scale-multiple.la-dark {
            color: #333;
        }

        .la-ball-scale-multiple>div {
            display: inline-block;
            float: none;
            background-color: currentColor;
            border: 0 solid currentColor;
        }

        .la-ball-scale-multiple {
            width: 32px;
            height: 32px;
        }

        .la-ball-scale-multiple>div {
            position: absolute;
            top: 0;
            left: 0;
            width: 32px;
            height: 32px;
            border-radius: 100%;
            opacity: 0;
            -webkit-animation: ball-scale-multiple 1s 0s linear infinite;
            -moz-animation: ball-scale-multiple 1s 0s linear infinite;
            -o-animation: ball-scale-multiple 1s 0s linear infinite;
            animation: ball-scale-multiple 1s 0s linear infinite;
        }

        .la-ball-scale-multiple>div:nth-child(2) {
            -webkit-animation-delay: .2s;
            -moz-animation-delay: .2s;
            -o-animation-delay: .2s;
            animation-delay: .2s;
        }

        .la-ball-scale-multiple>div:nth-child(3) {
            -webkit-animation-delay: .4s;
            -moz-animation-delay: .4s;
            -o-animation-delay: .4s;
            animation-delay: .4s;
        }

        .la-ball-scale-multiple.la-sm {
            width: 16px;
            height: 16px;
        }

        .la-ball-scale-multiple.la-sm>div {
            width: 16px;
            height: 16px;
        }

        .la-ball-scale-multiple.la-2x {
            width: 64px;
            height: 64px;
        }

        .la-ball-scale-multiple.la-2x>div {
            width: 64px;
            height: 64px;
        }

        .la-ball-scale-multiple.la-3x {
            width: 96px;
            height: 96px;
        }

        .la-ball-scale-multiple.la-3x>div {
            width: 96px;
            height: 96px;
        }

        @-webkit-keyframes ball-scale-multiple {
            0% {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            5% {
                opacity: .75;
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-moz-keyframes ball-scale-multiple {
            0% {
                opacity: 0;
                -moz-transform: scale(0);
                transform: scale(0);
            }

            5% {
                opacity: .75;
            }

            100% {
                opacity: 0;
                -moz-transform: scale(1);
                transform: scale(1);
            }
        }

        @-o-keyframes ball-scale-multiple {
            0% {
                opacity: 0;
                -o-transform: scale(0);
                transform: scale(0);
            }

            5% {
                opacity: .75;
            }

            100% {
                opacity: 0;
                -o-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes ball-scale-multiple {
            0% {
                opacity: 0;
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                -o-transform: scale(0);
                transform: scale(0);
            }

            5% {
                opacity: .75;
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }
        }
    </style>
    {{-- Header Section --}}
    <header class="">
        <nav x-data="{drawer:false}" class="opacity-90 container flex items-center py-4 mt-5 sm:mt-1 bg-white rounded-xl text-yellow-800 shadow-md fixed inset-x-0 mx-auto z-10 ">
            <div class="capitalize flex-1 font-dancing text-3xl font-bold">
                <a href="{{route('home')}}">
                    <h1>braids by aggie</h1>
                </a>
            </div>
            <!-- App Drawer -->
            <div x-show="drawer" class="fixed inset-0 flex z-40 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true" style="display: none;">

                <div x-show="drawer" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="drawer = false" aria-hidden="true" style="display: none;">
                </div>

                <div x-show="drawer" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-cyan-700" style="display: none;">

                    <div x-show="drawer" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Close button, show/hide based on off-canvas menu state." class="absolute top-0 right-0 -mr-12 pt-2" style="display: none;">
                        <button @click="drawer=false" type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Close sidebar</span>

                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- component -->
                    <div class="fixed flex flex-col top-0 left-0 w-64 bg-yellow-800 h-full border-r mt-5 rounded-tr-sm">
                        <div class="overflow-y-auto overflow-x-hidden flex-grow text-yellow-800">
                            <ul class="flex flex-col py-4 space-y-1">
                                <li class="px-5">
                                    <div class="flex flex-row items-center h-8 py-8">
                                        <div class="text-2xl font-bold tracking-wide text-white">Braids By Aggie</div>
                                    </div>
                                    <hr>
                                </li>
                                <li class="pt-3">
                                    <a href="{{route('home')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 text-xl">
                                        <span class="inline-flex justify-center items-center ml-4">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                            </svg>
                                        </span>
                                        <span class="ml-2 tracking-wide truncate">Home</span>
                                    </a>
                                </li>

                                <li class="pt-3">
                                    <a href="{{route('booking')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 text-xl">
                                        <span class="inline-flex justify-center items-center ml-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <span class="ml-2 tracking-wide truncate">Book Now</span>
                                    </a>
                                </li>

                                <li class="pt-3">
                                    <a href="{{route('contact.us')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 text-xl">
                                        <span class="inline-flex justify-center items-center ml-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                        </span>
                                        <span class="ml-2 tracking-wide truncate">Contact Us</span>
                                    </a>
                                </li>
                                @if(!auth()->user())
                                <li class="pt-3">
                                    <a href="{{route('login')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 text-xl">
                                        <span class="inline-flex justify-center items-center ml-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>

                                        </span>
                                        <span class="ml-2 tracking-wide truncate">Login</span>
                                    </a>
                                </li>
                                @else
                                <li class="pt-3">
                                    <a href="{{route('login')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 text-xl">
                                        <span class="inline-flex justify-center items-center ml-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>

                                        </span>
                                        <span class="ml-2 tracking-wide truncate">Profile</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex-shrink-0 w-14" aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>
            <div class="md:hidden">
                <button @click="drawer = true" class="navbar-burger flex items-center text-yellow-800 p-3">
                    <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul class="hidden md:flex flex-1 justify-end items-center uppercase gap-10">
                <a href="{{route('booking')}}" class="flex cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <div class="px-2">
                        <h2>book now</h2>
                    </div>
                </a>
                <a href="{{route('contact.us')}}" class="flex cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <div class="px-2">
                        contact us
                    </div>
                </a>

                <a href="@if(!auth()->user()) {{route('login')}} @else {{route('edit.general')}} @endif" class="flex cursor-pointer mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                </a>

            </ul>

        </nav>
    </header>

    {{-- Content --}}
    <div class="py-5 md:py-24">
        {{ $slot }}
    </div>
    {{-- Content Ends --}}

    <!-- Foooter -->
    <footer class="bg-white fixed bottom-0 inset-x-0">
        <div class="max-w-screen-xl px-4 py-2 mx-auto space-y-2 overflow-hidden sm:px-6 lg:px-8">
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-blue-600 hover:text-blue-700">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-yellow-800 hover:text-pink-800">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-blue-500 hover:text-blue-600">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                    </svg>
                </a>
            </div>
            <p class="mt-8 text-base leading-6 text-center text-yellow-800">

                © {{date('Y');}} SomeCompany, Inc. All rights reserved.
            </p>
        </div>
    </footer>
    <!-- Footer Ends -->

    @livewireScripts
    @stack('scripts')
</body>