<div>
    <div class="pt-24">
      <div x-cloak x-data="{open:false,info: @entangle('bookingData')}" @openmodal.window="info=$event.detail,open=true" class="relative">
        <x-loading-indicator />
        <div x-show="open" class="absolute flex justify-center h-screen items-center w-full z-10 bg-gray-200 antialiased">
          <div class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl">
            <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
              <p class="font-semibold text-gray-800">Please fill the information below.</p>
              <div @click="open=false" class="cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </div>
            </div>
            <div class="flex flex-col px-6 py-5 bg-gray-50">
              <div class="flex w-full">
                <div class="w-full sm:w-1/2 pr-2">
                  <label for="name">Full Name</label>
                  <input wire:model.defer="pendingBooking.name" type="text" name="name" id="name" placeholder="Aggie" class="input w-full" autocomplete="off" required>
                </div>
                <div class="w-full sm:w-1/2 pl-2">
                  <label for="phone_number">Phone Number</label>
                  <input wire:model.defer="pendingBooking.phone_number" type="text" name="phone_number" placeholder="0712345678" class="input w-full" id="phone_number" autocomplete="off" required>
                </div>
              </div>
              <div class="flex w-full">
                <div class="w-full sm:w-1/2 pr-2">
                  <label for="style">Style</label>
                  <select wire:model="pendingBooking.style_id" type="text" name="style" id="style" class="input w-full" required>
                    <option value=""></option>
                    @foreach($styles as $style)
                    <option value="{{$style->id}}">{{$style->name}}</option>
                    @endforeach
                  </select>

                </div>
                <div class="w-full sm:w-1/2 pl-2">
                  <label for="Price">Price</label>
                  <input wire:model="stylePrice" type="text" name="phone_number" class="input w-full" id="phone_number" autocomplete="off" disabled>
                </div>
              </div>
              <hr />
            </div>
            <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
              <button @click="open=false" class="font-semibold text-gray-600">Cancel</button>
              <button @click="open=false" wire:click="addPendingRequest" class="px-4 py-2 text-white font-semibold bg-blue-500 rounded">
                Book
              </button>
            </div>
          </div>
        </div>

        <div class="h-1/5">
          <div class="w-full flex justify-center" wire:ignore>
            <div class="w-5/6 bg-gray-100 p-4 shadow-md" id='calendar'></div>
          </div>
        </div>



        @push('scripts')
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>
        <script>
          Livewire.on('requestAdded', function() {
            swal(
              'Successfully Booked',
              'You need to make an advance payment of atleast 10K to secure your booking through +255789 276 894',
              'success'
            )
          })
          document.addEventListener('livewire:load', function() {
            document.addEventListener('DOMContentLoaded', function() {
              var calendarEl = document.getElementById('calendar');
              var data = @this.bookings;

              var calendar = new FullCalendar.Calendar(calendarEl, {
                events: JSON.parse(data),

                expandRows: true,
                allDaySlot: false,
                initialView: 'timeGridWeek',
                slotDuration: '01:00',
                slotMinTime: '08:00',
                slotMaxTime: '18:00',
                headerToolbar: {
                  left: 'prev,next today',
                  center: 'title',
                  right: 'timeGridWeek,timeGridDay'
                },


                dateClick(info) {
                  var now = new Date();
                  if (info.date < now)
                    return false;
                  const event = new CustomEvent('openmodal', {
                    detail: info,
                    bubbles: true,
                  })

                  window.dispatchEvent(event);

                },
              });

              calendar.render();
            });
          });
        </script>
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet' />
        @endpush
      </div>
    </div>

</div>