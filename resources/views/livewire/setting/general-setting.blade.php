<div class="flex">
    @include('layouts.sidebar')
    <!-- component -->
    <div class="z-0 bg-brownish w-5/6">
        <div class="w-full lg:w-10/12 px-4 mx-auto">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-100 border-b">
                <div class="rounded-t bg-white mb-0 px-6 py-3 border-b">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            General Information
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
                                    <label class="block capitalize text-xs font-bold mb-2" for="name">
                                        name
                                    </label>
                                    <input wire:model.defer="general.name" type="text"
                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        id="name">
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block capitalize text-xs font-bold mb-2" for="message">
                                        Welcome Message
                                    </label>
                                    <textarea  wire:model.defer="general.message" id="message" type="textarea"
                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></textarea>
                                </div>
                            </div>
                           
                            <div class="w-full">
                                <label for="">&nbsp</label>
                                <div class="mb-3  text-center">
                                    <button wire:click="saveGeneralSetting" class="w-64 shadow-lg bg-brownish rounded-md px-4 py-6">Edit Settings</button>
                                </div>
                            </div>
                        </div>
                        {{-- List Of Services Ends --}}
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
