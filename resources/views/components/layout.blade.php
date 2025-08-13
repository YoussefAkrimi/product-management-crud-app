<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopify</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">

    <div class="h-full">
        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img src="data:image/png;base64,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"
                                    alt="Your Company" class="size-8" />
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                    <x-nav-link href="/products" :active="request()->is('products')">Products</x-nav-link>
                                    <x-nav-link href="/contact" :active="request()->is('contact')" type="button">Contact us</x-nav-link>

                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                @guest
                                    <x-nav-link href='/login' :active="request()->is('login')">Log In</x-nav-link>
                                    <x-nav-link href='/register' :active="request()->is('register')">Register</x-nav-link>
                                @endguest
                                @auth
                                    <form method="POST" action="/logout">
                                        @csrf

                                        <x-form-button>Log Out</x-form-button>
                                    </form>
                                @endauth

                            </div>
                        </div>

                    </div>
                </div>

                <el-disclosure id="mobile-menu" hidden class="block md:hidden">
                    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/" aria-current="page"
                            class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
                        <a href="/products"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Products
                            Listings</a>
                        <a href="/contact"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact
                            us</a>

                    </div>

                </el-disclosure>
            </nav>

            <header class="bg-white shadow-sm">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>

                    <div class="flex flex-col items-start gap-1">
                        <x-button href="/products/create">Create Product</x-button>
                        <p class="text-sm text-gray-500 ml-3">Or check <a href="{{ url('/products') }}"
                                class="text-blue-600 hover:text-blue-800 underline font-semibold">
                                Products
                            </a>?</p>
                    </div>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <!-- Your content -->
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

</body>

</html>
