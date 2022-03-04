<div>
    <x-loading-indicator />

    <!-- component -->
    <section id="contact" class="relative w-full text-gray-600">
        <div class="hidden md:block">
            <h1 class="text-4xl ml-28 font-bold tracking-wide">
                Contact Us
            </h1>
            <div class="flex justify-center mt-1 md:hidden">
                <hr class="border-1 border-gray-500 w-1/2 ">
            </div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-pinkish h-32 w-full"></div>
        </div>
        <!-- wrapper -->
        <div class="relative px-5 lg:px-20 flex flex-col md:flex-row items-center justify-center">

            <!-- Social Media -->
            <div class="w-full md:w-1/2 p-3 md:px-0 mx-5">
                <div class="bg-gray-50 border border-pinkish w-full lg:w-1/2 h-full p-5 pt-8">
                    <!-- list -->
                    <div class="flex flex-col gap-3">
                        <a href="#" class="flex items-center hover:text-gray-800 hover:bg-gray-100 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 m-2 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            {{$contacts->phone_number}}
                        </a>
                        <a href="#" class="flex items-center hover:text-gray-800 hover:bg-gray-100 p-2">
                            <svg fill="currentColor" class="w-6 h-6 m-2 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,0C5.373,0,0,5.373,0,12c0,6.016,4.432,10.984,10.206,11.852V15.18H7.237v-3.154h2.969V9.927c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L16.73,15.18h-3.106v8.697 C19.481,23.083,24,18.075,24,12C24,5.373,18.627,0,12,0z" />
                            </svg>
                            {{$contacts->facebook}}
                        </a>
                        <a href="#" class="flex items-center hover:text-gray-800 hover:bg-gray-100 p-2">
                            <svg class="w-6 h-6 m-2 text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                            {{$contacts->twitter}}
                        </a>
                        <a href="#" class="flex items-center hover:text-gray-800 hover:bg-gray-100 p-2">
                            <svg class="w-6 h-6 m-2 text-yellow-900" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                            </svg>
                            {{$contacts->instagram}}
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Me -->
            <form wire:submit.prevent="addFeedback" class="w-full md:w-1/2 border border-pinkish p-4 bg-gray-50">
                <h2 class="text-2xl pb-1 font-semibold">
                    Send Message
                </h2>
                <hr>
                <div class="pt-1">
                    <div class="flex flex-col mb-1">
                        <label for="user_name">Name</label>
                        <input wire:model.defer="feedback.user_name" type="text" id="user_name" class="input" autocomplete="off">
                    </div>
                    <div class="flex flex-col mb-1">
                        <label for="phone_number">Phone Number</label>
                        <input wire:model.defer="feedback.phone_number" type="text" id="phone_number" class="input" autocomplete="off">
                    </div>
                    <div class="flex flex-col mb-1">
                        <label for="message">Message</label>
                        <textarea wire:model.defer="feedback.message" rows="4" id="message" class="input"></textarea>
                    </div>
                </div>
                <div class="w-full flex justify-center pt-2">
                    <button type="submit" class="border w-1/2 border-gray-700 px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-pinkish text-xl cursor-pointer">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>