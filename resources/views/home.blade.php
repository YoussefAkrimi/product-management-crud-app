<x-layout>
    <x-slot:heading>
      Welcome
    </x-slot:heading>

   <div class="flex flex-col items-center justify-center min-h-[20vh] text-center px-4">
     <h1 class="text-2xl font-bold mb-4">Low on money? you came to the right place!</h1>
    <p>
        Check our
        <a href="{{ url('/products') }}" class="text-blue-600 hover:text-blue-800 underline font-semibold">
            products
        </a>
    </p>
   </div>
</x-layout>
