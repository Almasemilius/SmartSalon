<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    @livewireStyles
    <!-- End Styles -->


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- End scripts -->
</head>

<body class="bg-brownish  min-h-full">
    <style>
        [x-cloak] {
            display: none
        }

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
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
        <div x-data="{drawer:false}">
            <div  class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2  @if(!Route::is('home')) bg-white shadow-md rounded-full  @endif">
                <!-- Site name -->
                <div class="pl-4 flex items-center">
                    <a class="toggleColour text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                        <!--Icon from: http://www.potlabicons.com/ -->
                        <!-- <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                        <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                        <path class="plane-take-off" d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                    </svg> -->
                        {{App\Models\General::first()->name}}
                    </a>
                </div>

                <!-- App Drawer for mobile view -->
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
                        <div class="fixed flex flex-col top-0 left-0 w-64 bg-yellow-600 opacity-60 h-full border-r mt-5 rounded-tr-sm ">
                            <div class="overflow-y-auto overflow-x-hidden flex-grow text-yellow-800">
                                <ul class="flex flex-col py-4 space-y-1">
                                    <li class="px-5">
                                        <div class="flex flex-row items-center h-8 py-8">
                                            <div class="text-2xl font-bold tracking-wide text-white"> {{App\Models\General::first()->name}}</div>
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

                <div class="block lg:hidden pr-4">
                    <button @click="drawer = true" id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>

                <!-- App Drawer ends -->
                <div class="items-center w-auto flex mt-0 bg-transparent text-black p-4 z-20" id="nav-content">
                    <ul class="list-reset flex justify-end items-center">
                        <li class="mr-3">
                            <a href="{{route('home')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 text-xl">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-6 text-gray-700 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 tracking-wide truncate text-gray-900">Home</span>
                            </a>
                        </li>


                        <li class="mr-3">
                            <a href="{{route('booking')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 text-xl">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 tracking-wide truncate text-gray-900">Book Now</span>
                            </a>
                        </li>


                        <li class="mr-3">
                            <a href="{{route('contact.us')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 text-xl">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </span>
                                <span class="ml-2 tracking-wide truncate text-gray-900">Contact Us</span>
                            </a>
                        </li>
                        @if(!auth()->user())
                        <li class="mr-3">
                            <a href="{{route('login')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 text-xl">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </span>
                                <span class="ml-2 tracking-wide truncate text-gray-900">Login</span>
                            </a>
                        </li>
                        @else
                        <li class="mr-3">
                            <a href="{{route('login')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 text-xl">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </span>
                                <span class="ml-2 tracking-wide truncate text-gray-900">Profile</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>

    {{-- Content --}}
    <div>
        {{ $slot }}
    </div>
    {{-- Content Ends --}}



    @livewireScripts
    @stack('scripts')
</body>