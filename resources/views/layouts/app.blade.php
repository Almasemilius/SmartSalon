<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>

<body class="bg-brownish">
    {{-- Header Section --}}
    <header>
        <nav class="container flex items-center py-4 mt-4 sm:mt-8 bg-white rounded-xl text-yellow-800 shadow-md">
            <div class="capitalize flex-1 font-dancing text-3xl font-bold">
               <a href="{{route('home')}}"> <h1>braids by aggie</h1> </a>
            </div>
            <ul class="hidden md:flex flex-1 justify-end items-center uppercase gap-12">
                <li class="flex cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <div class="px-2">
                        <h2>book now</h2>
                    </div>
                </li>
                <li class="flex cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                      </svg>
                      <div class="px-2">
                          contact us
                      </div>
                </li>

            </ul>
        </nav>
    </header>
    {{ $slot }}
    @livewireScripts
</body>

</html>
