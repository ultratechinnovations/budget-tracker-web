<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Budget Tracker</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://livewire.laravel.com/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://livewire.laravel.com/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://livewire.laravel.com/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    @livewireStyles
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css" integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    @auth
    <div x-data="{ userDropdownOpen: false, mobileNavOpen: false }">
        <!-- Page Container -->
        <div id="page-container" class="mx-auto flex min-h-screen w-full min-w-[320px] flex-col bg-slate-50">
            <!-- Page Header -->
            <x-layouts.header/>
            <!-- END Page Header -->

            <!-- Page Content -->
            <main id="page-content" class="flex max-w-full flex-auto flex-col">
                {{ $slot }}
            </main>
            <!-- END Page Content -->

            <!-- Page Footer -->
            <x-layouts.footer/>
            <!-- END Page Footer -->
        </div>
        <!-- END Page Container -->
    </div>



    @stack('layouts')

    @endauth

    @guest
        {{ $slot }}
    @endguest
    @livewireScripts
    @stack('scripts')
</body>

</html>
