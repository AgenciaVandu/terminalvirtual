<div x-data="{open:open}">
    <div class="bg-gray-200 py-1 px-2 cursor-pointer" x-on:click="open=!open">
        <h2 class="text-xl text-gray-800 font-semibold">Header-Index</h2>
    </div>
    <form wire:submit.prevent="save" class="p-4" x-show="open">
        @if ($photo)
            <div class="flex justify-center mt-4 mb-4">
                <img class="w-full object-cover object-center h-96 text-center" src="{{ $photo->temporaryUrl() }}">
            </div>
        @endif
        @if ($header->image && !$photo)
            <div>
                <i wire:click="delete({{ $header->image }})"
                    class="fas fa-trash cursor-pointer text-gray-800 hover:text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                    alt="Eliminar"></i>
            </div>
            <div class="flex justify-center mt-4 mb-4">
                <img class="w-full object-cover object-center h-96 text-center"
                    src="{{ Storage::url($header->image->url) }}">
            </div>

        @endif

        <div
            class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
            <div class="absolute">
                <div class="flex flex-col items-center ">
                    <i class="fa fa-cloud-upload fa-3x text-gray-200"></i>
                    <span class="block text-gray-400 font-normal">Arrastra la imagen del header aqui</span>
                    <span class="block text-gray-400 font-normal">o</span>
                    <span class="block text-blue-400 font-normal">Examina archivos</span>
                </div>
            </div>
            <input type="file" class="h-full w-full opacity-0" wire:model="photo">
        </div>
        @error('photo') <span class="error">{{ $message }}</span> @enderror

        <div class="flex justify-end mt-4">
            <x-jet-action-message class="mr-3" on="saved">
                Actualizado
            </x-jet-action-message>
            @if ($photo)
                <x-jet-button wire:click="save" wire:loading.attr="disabled">Actualizar
                </x-jet-button>
            @endif
        </div>
    </form>
</div>
