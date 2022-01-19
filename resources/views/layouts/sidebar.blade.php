<div class="bg-brownish w-1/6 border hidden md:block">
    <div class="w-full bg-white rounded h-full">
        <div class="flex items-center space-x-4 p-2 mb-5 justify-center">
            <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">{{Auth::user()->name }}</h4>
        </div>
        <ul class="space-y-2 text-sm">
            <li>
                <a href="{{route('edit.general')}}" class="@if(Route::is('edit.general')) bg-gray-200 @endif flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-50  focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <span>General Information</span>
                </a>
            </li>
            <li>
                <a href="{{route('edit.styles')}}" class="@if(Route::is('edit.styles')) bg-gray-200 @endif flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-50  focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </span>
                    <span>Styles</span>
                </a>
            </li>
            <li>
                <a href="{{route('edit.services')}}" class="@if(Route::is('edit.services')) bg-gray-200 @endif flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-50  focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                    </span>
                    <span>Services</span>
                </a>
            </li>
            <li>
                <a href="{{route('pending.bookings')}}" class="@if(Route::is('pending.bookings')) bg-gray-200 @endif flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-50  focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                    </span>
                    <span>Pending Bookings</span>
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