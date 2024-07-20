<div class="mt-14">
    <x-dialog />

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="mb-3 flex justify-between">
        <p class="text-4xl font-bold text-gray-900 dark:text-white">Paket</p>
        <x-button positive label="Create" wire:click="create" />
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jadwal Keberangkatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Durasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hotel
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ketersediaan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Berangkat Dari
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>

                @forelse ($pakets as $paket)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $paket->name }}
                        </td>
                        <td class="px-6 py-4">
                            Rp. {{ number_format($paket->harga) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($paket->jadwal_keberangkatan)->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $paket->durasi }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $paket->hotel }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $paket->ketersediaan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $paket->berangkat_dari }}
                        </td>
                        <td class="px-6 py-4">
                            <button class="hover:text-positive-500" wire:click="edit({{ $paket->id }})">
                                Edit
                            </button>
                            <button class="hover:text-negative-500" wire:click="delete({{ $paket->id }})">
                                Hapus
                            </button>
                        </td>
                    </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>

    {{-- Create --}}
    <x-modal wire:model.live="modalCreate">
        <x-card title="Create">
            <div class="flex flex-col gap-3">
                <div>
                    <x-input wire:model="name" label="Name" placeholder="Name" />
                </div>
                <div>
                    <x-input wire:model="harga" label="Harga" placeholder="Harga" />
                </div>
                <div>
                    <x-datetime-picker label="Jadwal Keberangkatan" placeholder="Jadwal Keberangkatan"
                        wire:model.defer="jadwal_keberangkatan" without-time />
                </div>
                <div>
                    <x-input wire:model="durasi" label="Durasi" placeholder="Durasi" />
                </div>
                <div>
                    <x-input wire:model="hotel" label="Hotel" placeholder="Hotel" />
                </div>
                <div>
                    <x-input wire:model="ketersediaan" label="Ketersediaan" placeholder="Ketersediaan" />
                </div>
                <div>
                    <x-input wire:model="berangkat_dari" label="Berangkat Dari" placeholder="Berangkat Dari" />
                </div>
            </div>

            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button positive label="Submit" wire:click="store" />
                </div>
            </x-slot>

        </x-card>
    </x-modal>

    {{-- Edit --}}
    <x-modal wire:model.live="modalEdit">
        <x-card title="Edit">
            <div class="flex flex-col gap-3">
                <div>
                    <x-input wire:model="name" label="Name" placeholder="Name" />
                </div>
                <div>
                    <x-input wire:model="harga" label="Harga" placeholder="Harga" />
                </div>
                <div>
                    <x-datetime-picker label="Jadwal Keberangkatan" placeholder="Jadwal Keberangkatan"
                        wire:model.defer="jadwal_keberangkatan" without-time />
                </div>
                <div>
                    <x-input wire:model="durasi" label="Durasi" placeholder="Durasi" />
                </div>
                <div>
                    <x-input wire:model="hotel" label="Hotel" placeholder="Hotel" />
                </div>
                <div>
                    <x-input wire:model="ketersediaan" label="Ketersediaan" placeholder="Ketersediaan" />
                </div>
                <div>
                    <x-input wire:model="berangkat_dari" label="Berangkat Dari" placeholder="Berangkat Dari" />
                </div>

            </div>

            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-button flat label="Cancel" x-on:click="close" />
                    @if ($paketId)
                        <x-button positive label="Save" wire:click="update({{ $paketId }})" />
                    @endif
                </div>
            </x-slot>

        </x-card>
    </x-modal>

</div>
