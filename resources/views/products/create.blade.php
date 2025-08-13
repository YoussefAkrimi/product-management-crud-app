<x-layout>
    <x-slot:heading>
        Create Product
    </x-slot:heading>

    <form method="POST" action="/products">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New product</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need some details of your product.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for='name'>Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="name" name="name" placeholder="Android" />
                            <x-form-error name='name' />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for='description'>Description</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="description" name="description" placeholder="Android" />
                            <x-form-error name='description' />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for='price'>Price</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="price" name="price" placeholder="$50,000" />
                            <x-form-error name='price' />
                        </div>
                    </x-form-field>
                </div>

                {{-- display validation error at the bootom of the form --}}
                {{-- <div class="mt-10">
                     @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 italic">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                </div> --}}

            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/products" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Create</x-form-button>
        </div>
    </form>
</x-layout>
