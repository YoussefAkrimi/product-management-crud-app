<x-layout>

    <x-slot:heading>
        Please fill the form to contact us! </x-slot:heading>
    <h1></h1>
    <form>
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
                <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what
                    you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for='name'>Full Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="name" name="name" placeholder="Jane doe" />
                            <x-form-error name='name' />
                        </div>
                    </x-form-field>

                    <div class="sm:col-span-4">
                        <x-form-label for="email">Email address</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" name="email" type="email" placeholder="you@example.com" />
                        </div>
                    </div>
                    <div class="col-span-full">
                        <x-form-label for='about'>About</x-form-label>
                        <div class="mt-2">
                            <x-form-textarea id="about" name="about" rows="3"
                                placeholder="Describe what the issue is..." />

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send</button>
        </div>
    </form>

</x-layout>
