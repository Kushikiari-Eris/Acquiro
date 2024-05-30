<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Acquiro' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script>
            // Get modal and buttons
            const modal = document.getElementById('default-modal');
            const openModalButton = document.getElementById('open-modal');
            const closeModalButtons = document.querySelectorAll('[data-modal-hide="default-modal"]');
            const alertButton = document.getElementById('alert-button');
        
            // Function to open modal
            openModalButton.addEventListener('click', () => {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        
            // Function to close modal
            closeModalButtons.forEach(button => {
                button.addEventListener('click', () => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                });
            });
        
            // Function to show alert
            alertButton.addEventListener('click', () => {
                alert('Thank you for Donating :)');
            });
        
            // Close modal when clicking outside the modal content
            window.addEventListener('click', (event) => {
                if (event.target === modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            });
        </script>
    </body>
</html>
