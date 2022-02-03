<div class="flex">
    <x-loading-indicator />

    @include('layouts.sidebar')
    <!-- component -->
    <div class="z-0 bg-brownish w-full md:w-5/6">
        <div class="w-full lg:w-10/12 px-4 mx-auto">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-3 border-b">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Styles
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    {{-- settings form starts --}}
                    <form>
                        {{-- Our Services Starts --}}

                        <div class="flex flex-wrap pt-4">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block capitalize text-xs font-bold mb-2" for="styleName">
                                        name
                                    </label>
                                    <input wire:model.defer="style.name" type="text" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" id="styleName">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block capitalize text-xs font-bold mb-2" for="servicePrice">
                                        Price
                                    </label>
                                    <input wire:model.defer="style.price" type="number" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" id="servicePrice">
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block capitalize text-xs font-bold mb-2" for="styleInfo">
                                        Addition Information
                                    </label>
                                    <textarea wire:model.defer="style.info" id="styleInfo" type="textarea" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></textarea>
                                </div>
                            </div>
                            <div class="lg:w-6/12 px-4">
                                <div class="relamb-3">
                                    <label class="block capitalize text-xs font-bold mb-2" for="">
                                        Image
                                    </label>
                                    <label class="w-64 flex flex-col items-center px-4 py-1 rounded-lg shadow-lg tracking-wide uppercase cursor-pointer bg-brownish">
                                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Select a file</span>
                                        <input wire:model="styleImage" type="file" class="hidden">
                                    </label>
                                </div>
                            </div>
                            <div class="lg:w-6/12 px-4">
                                <label for="">&nbsp</label>
                                <div class="relative mb-3  text-center">
                                    <button wire:click.prevent="addStyle" class="w-64 shadow-lg bg-brownish rounded-md px-4 py-6">Add Style</button>
                                </div>
                            </div>
                        </div>
                        {{-- Our Services Ends --}}
                        <hr class=" mt-6 border-b-1">

                        {{-- List Of Services Start --}}
                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">
                            list of Styles
                        </h6>
                        <div class="h-44 overflow-y-scroll mb-4">
                            @foreach ($styles as $style)
                            <div class="py-3">
                                <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4">
                                    <div class="col-span-2 sm:col-span-1 xl:col-span-1">
                                        <img alt="..." src="{{$style->stylePicture}}" class="h-24 w-24 rounded  mx-auto" />
                                    </div>
                                    <div class="col-span-2 sm:col-span-4 xl:col-span-4">
                                        <h3 class="font-semibold text-black">{{$style->name}}</h3>
                                        <p>
                                            {{$style->info}}
                                        </p>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic font-semibold">Tsh. {{number_format($style->price)}} /=</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{-- List Of Services Ends --}}
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>