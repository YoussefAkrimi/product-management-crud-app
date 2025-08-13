<x-layout>
    <x-slot:heading>
       Welcome back
    </x-slot:heading>

    <div class="flex flex-col items-center justify-center px-4">
        <form method="POST" action="/login" class="w-full max-w-lg bg-white p-6 rounded-lg shadow-md">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
             
                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                   
                    <x-form-field>
                        <x-form-label for='email'>Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" name="email" :value="old('email')" type='email' required />
                            <x-form-error name='email' />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for='password'>Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" name="password" type='password' required/>
                            <x-form-error name='password' />
                        </div>
                    </x-form-field>
                 
                </div>

             

            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Log In</x-form-button>
        </div>
    </form>
    </div>
</x-layout>
