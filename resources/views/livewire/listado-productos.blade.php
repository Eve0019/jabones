<div>
    <div class="grid grid-cols-2 w-full gap-2 ml-auto mr-auto mt-8 lg:grid-cols-3 xl:grid-cols-4 mt-6 lg:gap-8 border ">
        {{-- <ProductCard key={product._id} {...product} /> --}}
        @foreach ($productos as $producto)
        <div class="w-full max-w-sm mx-auto overflow-hidden border border-black">
            <div class="h-30 w-full justify-end object-contain">
                <a href="/LinkAProducto">
                    <img alt="Imagen del Producto" src="{{ $producto->image ? asset('storage/'. $product->image) : 'https://random.imagecdn.app/500/500' }}">
                </a>
                <x-button onClick="abrirElProductoSOlo" class="mt-6 ml-2">
                    Ver
                </x-button>
            </div>
            {{-- <div class="mb-4 lg:mt-48 mt-12 lg:pt-8"> --}}
            <div class="mb-4 lg:mt-12 mt-6 lg:pt-4">
                <h3 class="ml-2 text-lg font-bold uppercase"> {{ $producto->nombre }}</h3>
                <div class="flex flex-col">
                    <span class="ml-2 text-lg leading-7">
                        {{ $producto->precio }}
                    </span>
                    <span class="ml-2 text-lg leading-7">
                        {{ $producto->categoria }}
                    </span>
                </div>
            </div>
        </div>
            
        @endforeach
    </div>
    <div class="pt-8">
        {{$productos->links()}}
    </div>
</div>
