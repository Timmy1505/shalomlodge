<div class="space-y-8">
    <h1 class="text-gray-800 text-3xl font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">
        Reservation</h1>
    <a class="btn" href="{{ route('rooms.index') }}">New Reservation</a>
    <x-table>
        <thead class="thead">
            <tr>
                <th scope="col" class="th">Code</th>
                <th scope="col" class="th">Room</th>
                <th scope="col" class="th">Check In</th>
                <th scope="col" class="th">Check Out</th>
                <th scope="col" class="th">Total Room(s)</th>
                <th scope="col" class="th">Total Price</th>
                <th scope="col" class="th">Status</th>
                <th scope="col" class="th">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($reservations as $reservation)
            <tr class="bg-white border-b">
                <td class="td font-medium text-gray-900">{{ $reservation->code }}</td>
                <td class="td">
                    <a class="underline" href="{{ route('rooms.show', $reservation->room->code) }}">{{ $reservation->room->name }}</a>
                </td>
                <td class="td">{{ $reservation->check_in }}</td>
                <td class="td">{{ $reservation->check_out }}</td>
                <td class="td">{{ $reservation->total_rooms }}</td>
                <td class="td">K{{ $reservation->total_price }}</td>
                <td class="td capitalize">{{ $reservation->status }}</td>
                <td class="td flex space-x-2">
                    <a target="_blank" rel="noopener noreferrer" href="{{ route('dashboard.user.reservations.proof', $reservation->code) }}" class="btn btn-sm">Print</a>
                    @if ($reservation->status === 'waiting')
                    <div x-data='{ open: false }'>
                        <button x-on:click='open = true' wire:click='cancel("{{ $reservation->code }}")' class="btn btn-sm btn-outline">Cancel</button>
                        <div x-show="open" @reservation:canceled.window="open = false" @reservation:cancel.window="open = true" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 overflow-y-auto z-50">
                            <div x-show="open" x-transition.duration.300ms.opacity class="fixed inset-0 bg-black/50">
                            </div>
                            <div wire:click='cancel' x-show="open" x-transition.duration.300ms x-on:click="open = false" class="relative min-h-screen flex items-center justify-center p-4">
                                <form wire:submit.prevent='canceled' x-on:click.stop x-trap.noscroll.inert="open" class="relative max-w-md w-full bg-white rounded-xl p-10 overflow-y-auto space-y-4">
                                    <div class="text-center space-y-4">
                                        <i class='bx bx-info-circle text-8xl text-red-600'></i>
                                        <h2 class="text-3xl font-bold text-gray-800" :id="$id('modal-title')">Are You
                                            Sure?</h2>
                                        <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                                            Why do you want to cancel the reservation?
                                        </p>
                                    </div>
                                    <div class="form-control">
                                        <label for="message" class="label">Message</label>
                                        <textarea name="message" wire:model="message" wire:loading.attr='disabled' wire:target='selected_reservation' id="message" class="textarea" rows="6"></textarea>
                                        @error('message')
                                        <span class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="flex space-x-2 justify-center">
                                        <button wire:loading.attr='disabled' wire:target='selected_reservation' class="btn">
                                            Confirm
                                        </button>
                                        <button type="button" x-on:click="open = false" class="btn btn-outline">
                                            Nah!
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="td">There is nothing here</td>
            </tr>
            @endforelse
        </tbody>
    </x-table>
    {{ $reservations->links() }}
    <div x-data="{ open: false }">
        <div x-show="open" @reservation:canceled.window="open = true" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 overflow-y-auto z-50">
            <div x-show="open" x-transition.duration.300ms.opacity class="fixed inset-0 bg-black/50"></div>
            <div x-show="open" x-transition.duration.300ms x-on:click="open = false" class="relative min-h-screen flex items-center justify-center p-4">
                <div x-on:click.stop x-trap.noscroll.inert="open" class="relative max-w-md w-full bg-white rounded-xl p-10 overflow-y-auto space-y-4">
                    <div class="text-center space-y-4">
                        <i class='bx bx-check-circle text-8xl text-green-600'></i>
                        <h2 class="text-3xl font-bold text-gray-800" :id="$id('modal-title')">Successfully Canceled</h2>
                        <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                            Managed to cancel reservation! Thank you for using our service!
                        </p>
                    </div>
                    <div class="flex space-x-2 justify-center">
                        <button type="button" x-on:click="open = false" class="btn">
                            Okay
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>