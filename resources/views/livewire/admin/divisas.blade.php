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
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Divisa
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Compra
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Venta
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Editar</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($divisas as $divisa)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        {{ $divisa->name }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ $divisa->compra }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ $divisa->venta }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a class="text-indigo-600 hover:text-indigo-900 hover:cursor-pointer"
                                                            wire:click="edit({{ $divisa }})">Edit</a>
                                                    </td>
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
        <x-jet-dialog-modal wire:model="edit">
            <x-slot name="title">Editar Color</x-slot>
            <x-slot name="content">
                <div class="space-y-3">
                    <div>
                        <x-jet-label value="Nombre" />
                        <x-jet-input wire:model="name" type="text" placeholder="Nombre de color"
                            class="w-full bg-gray-100" disabled />
                        <x-jet-input-error for="editForm.name" />
                    </div>
                    <div>
                        <x-jet-label value="Compra" />
                        <x-jet-input wire:model="compra" type="text"
                            class="w-full bg-gray-100" />
                        <x-jet-input-error for="editForm.name" />
                    </div>
                    <div>
                        <x-jet-label value="Venta" />
                        <x-jet-input wire:model="venta" type="text"
                            class="w-full bg-gray-100" />
                        <x-jet-input-error for="editForm.name" />
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-jet-button wire:loading.attr="disabled" wire:target="update" wire:click="update">Actualizar
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>

    </div>
