<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Video') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if ($video)
                    <div class="w-52 mb-4">
                        <video src="{{ Storage::url($video->url) }}" autoplay>
                            Tu navegador no admite el elemento <code>video</code>.
                        </video>
                    </div>
                @endif
                <form wire:submit.prevent="store">
                    <input type="file" wire:model="file">

                    @error('file')
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
