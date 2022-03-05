<div>
	<div class="flex h-screen">
		<x-loading-indicator />

		@include('layouts.sidebar')
		<!-- component -->
		<div class="z-0 bg-brownish w-full md:w-5/6">
			<div class="lg:w-10/12 px-4 mx-auto">
				<div class="relative bg-gray-100 flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg  border-0">
					<div class="rounded-t bg-white mb-0 px-6 py-3 border-b">
						<div class="text-center flex justify-between">
							<h6 class="text-blueGray-700 text-xl font-bold">
								Pending Bookings
							</h6>
						</div>
					</div>

					<!-- component -->
					<div class="p-8 rounded-md w-full">
						<div>
							<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
								<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
									@if (count($pendingBookings))
									<table class="min-w-full leading-normal bg-white">
										<thead>
											<tr>
												<th class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
													Name
												</th>
												<th class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
													Phone Number
												</th>
												<th class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
													Booking Day
												</th>
												<th class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
													Style
												</th>
												<th class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

												</th>
											</tr>
										</thead>
										<tbody>
											@foreach($pendingBookings as $pendingBooking)
											<tr>
												<td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-sm">
													<div class="flex items-center">
														<p class="text-gray-900 whitespace-no-wrap">
															{{ $pendingBooking->name}}
														</p>
													</div>
												</td>
												<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
													<p class="text-gray-900 whitespace-no-wrap">{{ $pendingBooking->phone_number}}</p>
												</td>
												<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
													<p class="text-gray-900 whitespace-no-wrap">
														{{ $pendingBooking->booking_day}}
													</p>
												</td>
												<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
													<p class="text-gray-900 whitespace-no-wrap">
														{{ $pendingBooking->style->name}}
													</p>
												</td>
												<td class="flex gap-2 px-5 py-5 border-b border-gray-200 bg-white text-sm">
													<div class="btn-success">
														<button wire:click="$emit('addBooking',{{$pendingBooking->id}})" class="acceptBtn">Accept</button>
														<!-- <button wire:click="acceptBooking({{$pendingBooking->id}})">Accept</button> -->
													</div>
													<div class="btn-danger">
														<button wire:click="$emit('requestDelete',{{$pendingBooking->id}})" class="declineBtn">Decline</button>
													</div>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>

									<div class="">
										{{ $pendingBookings->links() }}
									</div>
									@else
									<div class="p-4 text-gray-600 flex justify-center bg-gray-50">
										No pending Booking Requests at the moment!
									</div>
									@endif
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		@push('scripts')
		<script>
			// Delete Request Alert
			Livewire.on('requestDelete', bookingId => {
				swal({
						title: "Are you sure?",
						text: "Once Declined, you will not be able to recover this request!",
						icon: "warning",
						buttons: true,
						dangerMode: true,
					})
					.then((willDelete) => {
						if (willDelete) {
							@this.declineBooking(bookingId);
							swal("Request has been Deleted", {
								icon: "success",
							});
						} else {
							swal("Operation Cancelled");
						}
					});
			})

			// Accept Request Alert
			Livewire.on('addBooking', bookingId => {
				swal({
						title: "Adding Request to Booking?",
						text: "This action will accept the request!",
						icon: "warning",
						buttons: true,
					})
					.then((willDelete) => {
						if (willDelete) {
							@this.acceptBooking(bookingId);
							swal("Request has been Accepted", {
								icon: "success",
							});
						} else {
							swal("Operation Cancelled");
						}
					});
			})
		</script>
		@endpush
	</div>
</div>