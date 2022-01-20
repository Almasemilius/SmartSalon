<div class="flex h-screen">
	@include('layouts.sidebar')
	<!-- component -->
	<div class="z-0 bg-brownish w-full md:w-5/6">
		<div class="lg:w-10/12 px-4 mx-auto">
			<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg  border-0">
				<div class="rounded-t bg-white mb-0 px-6 py-3 border-b">
					<div class="text-center flex justify-between">
						<h6 class="text-blueGray-700 text-xl font-bold">
							Pending Bookings
						</h6>
					</div>

					<!-- component -->
					<div class="bg-white p-8 rounded-md w-full">
						<div class="flex justify-center w-full">
							<h2 class="text-gray-600 font-semibold">Products Oder</h2>

						</div>

						<div>
							<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
								<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
									<table class="min-w-full leading-normal">
										<thead>
											<tr>
												<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
													Name
												</th>
												<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
													Phone Number
												</th>
												<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
													Booking Day
												</th>
												<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
													Style
												</th>
												<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
													Status
												</th>
											</tr>
										</thead>
										<tbody>
											@foreach($pendingBookings as $pendingBooking)
											<tr>
												<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
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
														<button wire:click="acceptBooking({{$pendingBooking->id}})">Accept</button>
													</div>
													<div class="btn-danger">
														<button wire:click="deletePendingRequest({{$pendingBooking->id}})">Decline</button>
													</div>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									<div class="">
										{{ $pendingBookings->links() }}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>