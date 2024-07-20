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
        <p class="text-4xl font-bold text-gray-900 dark:text-white">Chart</p>
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
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis Kelamin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bulan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tahun
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>

                @forelse ($charts as $chart)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $chart->category }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $chart->description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $chart->jenis_kelamin }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $chart->bulan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $chart->tahun }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $chart->jumlah }}
                        </td>
                        <td class="px-6 py-4">
                            <button class="hover:text-positive-500" wire:click="edit({{ $chart->id }})">
                                Edit
                            </button>
                            <button class="hover:text-negative-500" wire:click="delete({{ $chart->id }})">
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
                    <x-select label="Category" placeholder="Category" wire:model.defer="category">
                        <x-select.option label="Usia Balita & anak - anak" value="Usia Balita & anak - anak" />
                        <x-select.option label="Usia Remaja dan Dewasa" value="Usia Remaja dan Dewasa" />
                        <x-select.option label="Usia Lanjut" value="Usia Lanjut" />
                    </x-select>
                </div>
                <div>
                    <x-select label="Deskripsi" placeholder="Deskripsi" wire:model.defer="description">
                        <x-select.option label="Umur 1 - 12 tahun" value="Umur 1 - 12 tahun" />
                        <x-select.option label="Umur 13 - 45 tahun" value="Umur 13 - 45 tahun" />
                        <x-select.option label="Umur 45 >" value="Umur 45 >" />
                    </x-select>
                </div>
                <div>
                    <x-select label="Jenis Kelamin" placeholder="Jenis Kelamin" wire:model.defer="jenis_kelamin">
                        <x-select.option label="Laki-laki" value="L" />
                        <x-select.option label="Perempuan" value="P" />
                    </x-select>
                </div>
                <div>
                    <x-select label="Bulan" placeholder="Bulan" wire:model.defer="bulan">
                        <x-select.option label="Januari" value="01" />
                        <x-select.option label="Februari" value="02" />
                        <x-select.option label="Maret" value="03" />
                        <x-select.option label="April" value="04" />
                        <x-select.option label="Mei" value="05" />
                        <x-select.option label="Juni" value="06" />
                        <x-select.option label="Juli" value="07" />
                        <x-select.option label="Agustus" value="08" />
                        <x-select.option label="September" value="09" />
                        <x-select.option label="Oktober" value="10" />
                        <x-select.option label="November" value="11" />
                        <x-select.option label="Desember" value="12" />
                    </x-select>
                </div>
                <div>
                    <x-select label="Tahun" placeholder="Tahun" wire:model.defer="tahun">
                        <x-select.option label="2025" value="2025" />
                        <x-select.option label="2024" value="2024" />
                        <x-select.option label="2023" value="2023" />
                        <x-select.option label="2022" value="2022" />
                    </x-select>
                </div>
                <div>
                    <x-input wire:model="jumlah" label="Jumlah" placeholder="Jumlah" />
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
                    <x-select label="Category" placeholder="Category" wire:model.defer="category">
                        <x-select.option label="Usia Balita & anak - anak" value="Usia Balita & anak - anak" />
                        <x-select.option label="Usia Remaja dan Dewasa" value="Usia Remaja dan Dewasa" />
                        <x-select.option label="Usia Lanjut" value="Usia Lanjut" />
                    </x-select>
                </div>
                <div>
                    <x-select label="Deskripsi" placeholder="Deskripsi" wire:model.defer="description">
                        <x-select.option label="Umur 1 - 12 tahun" value="Umur 1 - 12 tahun" />
                        <x-select.option label="Umur 13 - 45 tahun" value="Umur 13 - 45 tahun" />
                        <x-select.option label="Umur 45 >" value="Umur 45 >" />
                    </x-select>
                </div>
                <div>
                    <x-select label="Jenis Kelamin" placeholder="Jenis Kelamin" wire:model.defer="jenis_kelamin">
                        <x-select.option label="Laki-laki" value="L" />
                        <x-select.option label="Perempuan" value="P" />
                    </x-select>
                </div>
                <div>
                    <x-select label="Bulan" placeholder="Bulan" wire:model.defer="bulan">
                        <x-select.option label="Januari" value="01" />
                        <x-select.option label="Februari" value="02" />
                        <x-select.option label="Maret" value="03" />
                        <x-select.option label="April" value="04" />
                        <x-select.option label="Mei" value="05" />
                        <x-select.option label="Juni" value="06" />
                        <x-select.option label="Juli" value="07" />
                        <x-select.option label="Agustus" value="08" />
                        <x-select.option label="September" value="09" />
                        <x-select.option label="Oktober" value="10" />
                        <x-select.option label="November" value="11" />
                        <x-select.option label="Desember" value="12" />
                    </x-select>
                </div>
                <div>
                    <x-select label="Tahun" placeholder="Tahun" wire:model.defer="tahun">
                        <x-select.option label="2025" value="2025" />
                        <x-select.option label="2024" value="2024" />
                        <x-select.option label="2023" value="2023" />
                        <x-select.option label="2022" value="2022" />
                    </x-select>
                </div>
                <div>
                    <x-input wire:model="jumlah" label="Jumlah" placeholder="Jumlah" />
                </div>
            </div>

            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-button flat label="Cancel" x-on:click="close" />
                    @if ($chartId)
                        <x-button positive label="Save" wire:click="update({{ $chartId }})" />
                    @endif
                </div>
            </x-slot>

        </x-card>
    </x-modal>

</div>
