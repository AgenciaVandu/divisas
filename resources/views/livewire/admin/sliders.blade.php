<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Divisas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container py-12">
                    <div class="flex flex-col">
                        <div class="flex justify-end px-4">
                            <x-jet-button wire:click="create" wire:loading.attr="disabled">
                                {{ __('Crear nuevo') }}
                            </x-jet-button>
                        </div>
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Imagen
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Titulo
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Fecha de creación
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Fecha de actualizacion
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Editar</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($sliders as $slider)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <img src="{{ Storage::url($slider->url) }}" class="w-28" alt="">
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        {{ $slider->title }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ $slider->created_at }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ $slider->updated_at }}
                                                    </td>
                                                    {{-- <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a class="text-indigo-600 hover:text-indigo-900 hover:cursor-pointer"
                                                            wire:click="edit({{ $divisa }})">Edit</a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-jet-dialog-modal wire:model="create">
            <x-slot name="title">Agrega Slider</x-slot>
            <x-slot name="content">
                <div class="space-y-3">
                    @if ($file)
                        File Preview:
                        <img src="{{ $file->temporaryUrl() }}">
                    @endif

                    <input type="file" wire:model="file" name="file{{ rand() }}">

                    @error('photo')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
                <div class="space-y-3 mt-4">
                    <div>
                        <x-jet-label value="Titulo" />
                        <x-jet-input wire:model="title" type="text" placeholder="Titulo" class="w-full" />
                        <x-jet-input-error for="name" />
                    </div>
                </div>

            </x-slot>
            <x-slot name="footer">
                <x-jet-button wire:loading.attr="disabled" wire:target="store" wire:click="store">Agregar
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>

        {{-- Modal para editar las imagenes --}}

        <x-jet-dialog-modal wire:model="edit">
            <x-slot name="title">Editar Divisa</x-slot>
            <x-slot name="content">
                <div class="space-y-3">
                    <div>
                        <x-jet-label value="Nombre" />
                        <x-jet-input wire:model="name" type="text" placeholder="Nombre de color"
                            class="w-full bg-gray-100" disabled />
                        <x-jet-input-error for="name" />
                    </div>
                    <div>
                        <x-jet-label value="Compra" />
                        <x-jet-input wire:model="compra" type="text" class="w-full bg-gray-100" />
                        <x-jet-input-error for="compra" />
                    </div>
                    <div>
                        <x-jet-label value="Descripción Compra" />
                        <textarea wire:model="description_compra" class="w-full bg-gray-100 rounded-xl border-none focus:border-0"> </textarea>
                        <x-jet-input-error for="description_compra" />
                    </div>
                    <div>
                        <x-jet-label value="Venta" />
                        <x-jet-input wire:model="venta" type="text" class="w-full bg-gray-100" />
                        <x-jet-input-error for="venta" />
                    </div>
                    <div>
                        <x-jet-label value="Descripción Venta" />
                        <textarea wire:model="description_venta" class="w-full bg-gray-100 rounded-xl border-none focus:border-0"> </textarea>
                        <x-jet-input-error for="description_venta" />
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-jet-button wire:loading.attr="disabled" wire:target="update" wire:click="update">Actualizar
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>

    </div>
