<div class="flex h-screen">
    @include('layouts.sidebar')
    <div class="z-0 bg-brownish w-full md:w-5/6">
        <div class="w-full lg:w-10/12 px-4 mx-auto">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-100 border-b">

                <!-- component -->
                <div x-data="{messageSelected : null}" class="flex flex-row h-screen antialiased text-gray-800">
                    <div class="flex flex-row w-1/3 flex-shrink-0 bg-gray-100 p-4">
                        <div class="flex flex-col w-full h-full pl-4 pr-4 py-4 -mr-4">
                            <div class="flex flex-row items-center">
                                <div class="flex flex-row items-center">
                                    <div class="text-xl font-semibold">Messages</div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="flex flex-col -mx-4">
                                    @foreach ($feedbacks as $feedback)
                                    <div @click='messageSelected = @json($feedback)' class="relative cursor-pointer flex flex-row items-center p-4 bg-gradient-to-r from-pinkish to-transparent border-l-2 border-yellow-800">
                                        <div class="absolute text-xs text-gray-500 right-0 top-0 mr-4 mt-3">{{$feedback->created_at->diffForHumans()}}</div>
                                        <div class="flex items-center justify-center h-10 w-10 rounded-full bg-yellow-900 text-white font-bold flex-shrink-0">
                                            {{substr($feedback->user_name,0,1)}}
                                        </div>
                                        <div class="flex flex-col flex-grow ml-3">
                                            <div class="text-sm font-medium">{{$feedback->user_name}}</div>
                                            <div class="text-xs truncate w-40">{{substr($feedback->message,0,20)}}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <template x-if="messageSelected">
                        <div class="flex flex-col h-full w-full bg-white px-4 py-6">
                            <div class="flex flex-row items-center py-4 px-6 rounded-2xl shadow">
                                <div class="flex items-center justify-center h-10 w-10 rounded-full bg-yellow-900 text-pink-100">
                                    T
                                </div>
                                <div class="flex flex-col ml-3">
                                    <div class="font-semibold text-sm">
                                        <h1 x-text="messageSelected.user_name"></h1>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <ul class="flex flex-row items-center space-x-2">
                                        <li>
                                            <a href="#" class="flex items-center justify-center bg-gray-100 hover:bg-gray-200 text-gray-400 h-10 w-10 rounded-full">
                                                <span>
                                                    <svg class="w-5 h-5" fill="currentColor" stroke="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center bg-gray-100 hover:bg-gray-200 text-gray-400 h-10 w-10 rounded-full">
                                                <span>
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="h-full overflow-hidden py-4">
                                <div class="h-full overflow-y-auto">
                                    <div class="grid grid-cols-12 gap-y-2">
                                        <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                            <div class="flex flex-row items-center">
                                                <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                                    <div x-text="messageSelected.message">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

        </div>
    </div>
</div>