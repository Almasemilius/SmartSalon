<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body class="font-sans antialiased border m-0 p-0 overflow-x-hidden">
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
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
    @stack('modals')
    @stack('scripts')

</body>

</html>