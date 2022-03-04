<div>
    <x-loading-indicator />

    <style>
        .swiper {
            width: 82%;
        }
    </style>
    <!-- component -->
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    <div class="py-5 px-4">

        <div class="w-full flex justify-center">
            <div class="w-full md:w-11/12 xl:w-10/12 bg-gradient-to-r from-yellow-600 to-yellow-900 md:py-2 md:px-8 px-5 xl:px-12 xl:py-3">
                <div class="flex flex-wrap items-center md:flex-row flex-col-reverse">
                    <div class="md:w-2/3 w-full pb-6 md:pb-0 md:pr-6 flex-col md:block flex items-center justify-center md:pt-0 pt-4">
                        <div>
                            <h1 role="heading" class="text-xl md:text-2xl lg:text-4xl xl:text-4xl text-white font-black leading-6 lg:leading-10 md:text-left text-center">{{$general->message}}</h1>
                        </div>
                        <button onclick="location.href='{{route('booking')}}' " role="button" aria-label="Join the community" class="mt-5 lg:mt-8 py-3 lg:py-4 px-4 lg:px-8 bg-white font-bold text-yellow-00 rounded-lg text-sm lg:text-lg xl:text-xl hover:bg-opacity-90  focus:ring-2 focus:ring-offset-2 focus:ring-white focus:outline-none">Book Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach($styles as $style)
            <div class="swiper-slide">
                <!-- <img src="{{$style->stylePicture}}" alt="">
                <h2>{{$style->name}}</h2> -->

                <div class="max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="h-60 lg:h-60 lg:w-96 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url({{$style->stylePicture}})" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <div class="text-gray-900 font-bold text-xl mb-2">{{$style->name}}</div>
                            <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination bg-yellow-800"></div>


    </div>
    


    <script>
        const swiper = new Swiper('.swiper', {
            speed: 400,
            spaceBetween: 50,
            initialSlide: 0,
            //truewrapper adoptsheight of active slide
            autoHeight: false,
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            // delay between transitions in ms
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },

            // If we need pagination
            pagination: '.swiper-pagination',
            paginationType: "bullets",

            // Navigation arrows
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',

            effect: 'slide',
            // Distance between slides in px.
            //
            slidesPerView: 1,
            //
            centeredSlides: true,
            //
            slidesOffsetBefore: 0,
            //
            grabCursor: true,
        });
    </script>
</div>