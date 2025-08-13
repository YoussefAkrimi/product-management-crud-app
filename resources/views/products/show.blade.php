<x-layout>
    <x-slot:heading>

        Product
    </x-slot:heading>
    <h2 class="font-bold text-lg text-blue-600">{{ $product->name }}</h2>

    <p>
        this product was made by <strong>{{ $product->company->name }}</strong> and it costs around <strong>{{ $product->price }}</strong>.
    </p>
    @can('edit', $product)
        <p class="mt-6">
            <x-button href="/products/{{ $product->id }}/edit">Edit Product</x-button>

        </p>
    @endcan
</x-layout>
