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
        <p class="text-4xl font-bold text-gray-900 dark:text-white">Galeri</p>
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
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gambar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>

                @forelse ($galeris as $galeri)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $galeri->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $galeri->description }}
                        </td>
                        <td class="px-6 py-4">
                            <img class="w-12 h-12 object-cover" src=" {{ asset('storage/' . $galeri->image_photo) }}"
                                alt="">
                        </td>
                        <td class="px-6 py-4">
                            <button class="hover:text-positive-500" wire:click="edit({{ $galeri->id }})">
                                Edit
                            </button>
                            <button class="hover:text-negative-500" wire:click="delete({{ $galeri->id }})">
                                Hapus
                            </button>
                        </td>
                    </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>

    <x-modal wire:model.live="modalCreate">
        <x-card title="Create">
            <div class=" flex flex-col gap-3">
                <div>
                    <x-input wire:model="name" label="Nama" placeholder="Nama" />
                </div>
                <div>
                    <x-input wire:model="description" label="Deskripsi" placeholder="Deskripsi" />
                </div>

                <div>
                    <x-input-label for="image_photo" :value="__('Image to Upload')" />
                    <x-text-input wire:model="image_photo" id="image_photo" name="image_photo" type="file"
                        class="mt-1 block w-full" />
                    <x-input-error class="mt-2" :messages="$errors->get('image_photo')" />
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

    {{-- Create --}}
    <x-modal wire:model.live="modalCreate">
        <x-card title="Create">
            <div class="flex flex-col gap-3">
                <div>
                    <x-input wire:model="name" label="Nama" placeholder="Nama" />
                </div>
                <div>
                    <x-input wire:model="description" label="Deskripsi" placeholder="Deskripsi" />
                </div>

                <div>
                    <x-input-label :value="__('Image to Upload')" />
                    <x-text-input wire:model="image_photo" name="image_photo" type="file"
                        class="mt-1 block w-full" />
                    <x-input-error class="mt-2" :messages="$errors->get('image_photo')" />
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
            <div class=" flex flex-col gap-3">
                <div>
                    <x-input wire:model="name" label="Nama" placeholder="Nama" />
                </div>
                <div>
                    <x-input wire:model="description" label="Deskripsi" placeholder="Deskripsi" />
                </div>

                <div>
                    <x-input-label :value="__('Image to Upload')" />
                    <x-text-input wire:model="image_photo" name="image_photo" type="file"
                        class="mt-1 block w-full" />
                    <x-input-error class="mt-2" :messages="$errors->get('image_photo')" />
                </div>
            </div>

            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-button flat label="Cancel" x-on:click="close" />
                    @if ($galeriId)
                        <x-button positive label="Save" wire:click="update({{ $galeriId }})" />
                    @endif
                </div>
            </x-slot>

        </x-card>
    </x-modal>

</div>
