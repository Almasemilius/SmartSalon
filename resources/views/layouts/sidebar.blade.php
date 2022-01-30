<div class="bg-brownish w-1/6 border hidden md:block">
    <div class="w-full bg-white rounded h-full">
        <div class="flex items-center space-x-4 p-2 mb-5 justify-center">
            <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">{{Auth::user()->name }}</h4>
        </div>
        <ul class="space-y-2 text-sm">
            <li>
                <a href="{{route('edit.general')}}" class="@if(Route::is('edit.general')) bg-gray-200 @endif flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-50  focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </span>
                    <span>General Information</span>
                </a>
            </li>
            <li>
                <a href="{{route('edit.styles')}}" class="@if(Route::is('edit.styles')) bg-gray-200 @endif flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-50  focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z" />
                        </svg>
                    </span>
                    <span>Styles</span>
                </a>
            </li>
            <li>
                <a href="{{route('edit.services')}}" class="@if(Route::is('edit.services')) bg-gray-200 @endif flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-50  focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <span>Services</span>
                </a>
            </li>
            <li>
                <a href="{{route('pending.bookings')}}" class="@if(Route::is('pending.bookings')) bg-gray-200 @endif flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-50  focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    <span>Pending Bookings</span>
                </a>
            </li>
            <li>
                <a href="{{route('feedback')}}" class="@if(Route::is('feedback')) bg-gray-200 @endif flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-50  focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                    </span>
                    <span>Feedback</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="w-9/12">
        <div class="p-4 text-gray-500 overflow-y-auto">
            @yield('content')
        </div>
    </div>
</div>