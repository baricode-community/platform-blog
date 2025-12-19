<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="">

        {{ $slot }}

        <!-- Footer -->
        <footer class="border-t border-purple-500/20 backdrop-blur py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-6 md:mb-0">
                        <p class="text-purple-300 font-semibold mb-2">Baricode Community</p>
                        <p class="text-purple-200/60">Belajar, Berkembang, dan Berbagi Bersama</p>
                    </div>
                    <div class="flex gap-6 text-purple-300">
                        <a href="https://youtube.com/@baricode_org" class="hover:text-purple-200 transition">YouTube</a>
                        <a href="https://github.com/baricode-community" class="hover:text-purple-200 transition">GitHub</a>
                    </div>
                </div>
                <div class="border-t border-purple-500/20 mt-8 pt-8 text-center text-purple-200/60">
                    <p>&copy; 2025 Baricode Community. Made with ❤️ by developers, for developers.</p>
                </div>
            </div>
        </footer>

        @fluxScripts
    </body>
</html>
