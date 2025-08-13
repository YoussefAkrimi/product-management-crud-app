<x-layout>
    <x-slot:heading>
        New here? please sign up!
    </x-slot:heading>

    <div class="flex flex-col items-center justify-center px-4">
        <form method="POST" action="/register" class="w-full max-w-lg bg-white p-6 rounded-lg shadow-md">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
             
                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for='name'>Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="name" name="name" required/>
                            <x-form-error name='name' />
                        </div>
                    </x-form-field>
                    
                    <x-form-field>
                        <x-form-label for='email'>Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" name="email" type='email' required />
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
                    <x-form-field>
                        <x-form-label for='password_confirmation'>Confirm pasword</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password_confirmation" name="password_confirmation" type='password' required/>
                            <x-form-error name='password_confirmation' />
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
            <a href="/" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
    </div>
</x-layout>
