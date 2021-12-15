<div>

  <div class="h-1/5">
    <div class="w-full flex justify-center" wire:ignore>
      <div class="w-5/6 bg-gray-100 p-4 shadow-md" id='calendar'></div>
    </div>
  </div>

  <div class="flex justify-center h-screen items-center bg-gray-200 antialiased">
    <div class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl">
      <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
        <p class="font-semibold text-gray-800">Please fill the information below.</p>
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </div>
      <div class="flex flex-col px-6 py-5 bg-gray-50">
        <div class="flex w-full">
          <div class="w-full sm:w-1/2 pr-2">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" placeholder="Aggie" class="input w-full" autocomplete="off" required>
          </div>
          <div class="w-full sm:w-1/2 pl-2">
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" placeholder="0712345678" class="input w-full" id="phone_number" autocomplete="off" required>
          </div>
        </div>
        <div class="flex w-full">
          <div class="w-full sm:w-1/2 pr-2">
            <label for="style">Style</label>
            <select type="text" name="style" id="style" class="input w-full" required>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          </div>
          <div class="w-full sm:w-1/2 pl-2">
            <label for="Price">Price</label>
            <input type="text" name="phone_number" class="input w-full" id="phone_number" autocomplete="off" disabled>
          </div>
        </div>
        <hr />
      </div>
      <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
        <p class="font-semibold text-gray-600">Cancel</p>
        <button class="px-4 py-2 text-white font-semibold bg-blue-500 rounded">
          Book
        </button>
      </div>
    </div>
  </div>

  @push('scripts')
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>
  <script>
    document.addEventListener('livewire:load', function() {
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var data = @this.bookings;

        var calendar = new FullCalendar.Calendar(calendarEl, {
          events: JSON.parse(data),
          initialView: 'timeGridWeek',
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'timeGridWeek,timeGridDay'
          },
          dateClick(info) {
            // document.getElementById('')
            //     var title = prompt('Enter Event Title');
            //     var date = new Date(info.dateStr + 'T00:00:00');
            //     if (title != null && title != '') {
            //         calendar.addEvent({
            //             title: title,
            //             start: date,
            //             allDay: false
            //         });
            //         var eventAdd = {
            //             title: title,
            //             start: date
            //         };
            //         // @this.addevent(eventAdd);
            //         alert('Great. Now, update your database...');
            //         alert(info.dateStr);
            //     } else {
            //         alert('Event Title Is Required');
            //     }
          },
        });

        calendar.render();
      });
    });
    calendar.render();
  </script>
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet' />
  @endpush
</div>