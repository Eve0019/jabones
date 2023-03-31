<div class="mt-12 flex flex-row overflow-auto">
        @foreach ($categorias as $categoria)
            <button wire:click="$emit('cambioCategoria','{{ $categoria }}')"  class="mx-2 border font-mono p-2 text-xs border-black hover:bg-gray-800 hover:text-white">
                {{ ucfirst($categoria) }}
            </button>
        @endforeach
</div>
