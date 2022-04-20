<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Video') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex ">
                    <div class="px-2">
                        @if ($video1)
                            <div class="w-52 mb-4">
                                <video src="{{ Storage::url($video1->url) }}" autoplay>
                                    Tu navegador no admite el elemento <code>video</code>.
                                </video>
                            </div>
                        @endif
                        <form wire:submit.prevent="store1">
                            <input type="file" wire:model="file1">

                            @error('file1')
                                <span class="error">{{ $message }}</span>
                            @enderror

                            <x-jet-button wire:loading.attr="disabled" type="submit">
                                {{ __('Guardar') }}
                            </x-jet-button>
                        </form>
                    </div>
                    <div class="px-2">
                        @if ($video2)
                            <div class="w-52 mb-4">
                                <video src="{{ Storage::url($video2->url) }}" autoplay>
                                    Tu navegador no admite el elemento <code>video</code>.
                                </video>
                            </div>
                        @endif
                        <form wire:submit.prevent="store2">
                            <input type="file" wire:model="file2">

                            @error('file2')
                                <span class="error">{{ $message }}</span>
                            @enderror

                            <x-jet-button wire:loading.attr="disabled" type="submit">
                                {{ __('Guardar') }}
                            </x-jet-button>
                        </form>
                    </div>
                    <div class="px-2">
                        @if ($video3)
                            <div class="w-52 mb-4">
                                <video src="{{ Storage::url($video3->url) }}" autoplay>
                                    Tu navegador no admite el elemento <code>video</code>.
                                </video>
                            </div>
                        @endif
                        <form wire:submit.prevent="store3">
                            <input type="file" wire:model="file3">

                            @error('file3')
                                <span class="error">{{ $message }}</span>
                            @enderror

                            <x-jet-button wire:loading.attr="disabled" type="submit">
                                {{ __('Guardar') }}
                            </x-jet-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

