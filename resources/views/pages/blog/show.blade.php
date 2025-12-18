<x-layouts.base>
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
        <!-- Navigation -->
        <nav class="sticky top-0 z-50 backdrop-blur-md bg-slate-900/80 border-b border-purple-500/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center gap-2">
                        <a href="/" class="flex items-center gap-2 hover:opacity-80 transition">
                            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-400 via-pink-400 to-cyan-400"></div>
                            <span class="font-bold text-lg bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">Baricode</span>
                        </a>
                    </div>
                    <div class="flex gap-6 items-center">
                        <a href="/" class="text-purple-300 hover:text-purple-200 transition">Home</a>
                        <a href="#" class="text-purple-300 hover:text-purple-200 transition">Blog</a>
                        <button class="px-4 py-2 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-semibold transition">Join</button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Article Header -->
        <section class="relative py-20 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
            <div class="mb-8">
                <a href="/" class="inline-flex items-center gap-2 text-cyan-400 hover:text-cyan-300 transition mb-6">
                    <span>←</span> Kembali ke Beranda
                </a>
            </div>

            <article class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600/20 to-cyan-600/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition duration-500"></div>
                <div class="relative bg-slate-900/90 border border-purple-500/20 rounded-2xl p-12 backdrop-blur">
                    <!-- Article Title -->
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">
                        <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">
                            {{ $blog->title }}
                        </span>
                    </h1>

                    <!-- Article Meta -->
                    <div class="flex flex-wrap gap-4 mb-8 pb-8 border-b border-purple-500/20">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-400 to-pink-400"></div>
                            <div>
                                <p class="text-purple-300 font-semibold">Baricode Community</p>
                                <p class="text-purple-200/60 text-sm">{{ $blog->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 ml-auto">
                            <span class="px-3 py-1 rounded-full bg-purple-500/20 border border-purple-400/40 text-purple-300 text-sm">
                                #komunitas
                            </span>
                        </div>
                    </div>

                    <!-- Article Content -->
                    <div class="prose prose-invert max-w-none mb-12">
                        <div class="text-lg text-purple-200 leading-relaxed whitespace-pre-wrap">
                            {{ $blog->content }}
                        </div>
                    </div>

                    <!-- Share Section -->
                    <div class="border-t border-purple-500/20 pt-8">
                        <p class="text-purple-300 font-semibold mb-4">Bagikan Artikel</p>
                        <div class="flex gap-4">
                            <a href="#" class="px-4 py-2 rounded-lg bg-purple-500/20 border border-purple-400/40 text-purple-300 hover:bg-purple-500/30 transition">
                                Twitter
                            </a>
                            <a href="#" class="px-4 py-2 rounded-lg bg-cyan-500/20 border border-cyan-400/40 text-cyan-300 hover:bg-cyan-500/30 transition">
                                LinkedIn
                            </a>
                            <a href="#" class="px-4 py-2 rounded-lg bg-pink-500/20 border border-pink-400/40 text-pink-300 hover:bg-pink-500/30 transition">
                                Copy Link
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- Related Articles Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-16">
                <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">
                    Artikel Lainnya
                </span>
            </h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Sample Article Card -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600/20 to-pink-600/20 rounded-xl blur opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-slate-800/50 border border-purple-500/20 rounded-xl p-6 backdrop-blur h-full flex flex-col hover:border-purple-400/40 transition cursor-pointer">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-purple-400 to-pink-400 mb-4"></div>
                        <h3 class="text-xl font-bold text-purple-300 mb-3 flex-grow">Cara Memulai Perjalanan Developer</h3>
                        <p class="text-purple-200/60 text-sm mb-4">Panduan lengkap untuk pemula yang ingin memulai karir sebagai developer.</p>
                        <p class="text-purple-200/40 text-xs">5 min read</p>
                    </div>
                </div>

                <!-- Sample Article Card -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-600/20 to-blue-600/20 rounded-xl blur opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-slate-800/50 border border-cyan-500/20 rounded-xl p-6 backdrop-blur h-full flex flex-col hover:border-cyan-400/40 transition cursor-pointer">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-cyan-400 to-blue-400 mb-4"></div>
                        <h3 class="text-xl font-bold text-cyan-300 mb-3 flex-grow">Best Practices dalam Kolaborasi Git</h3>
                        <p class="text-cyan-200/60 text-sm mb-4">Tips dan trik untuk membuat workflow git yang efisien dalam tim.</p>
                        <p class="text-cyan-200/40 text-xs">8 min read</p>
                    </div>
                </div>

                <!-- Sample Article Card -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-pink-600/20 to-purple-600/20 rounded-xl blur opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-slate-800/50 border border-pink-500/20 rounded-xl p-6 backdrop-blur h-full flex flex-col hover:border-pink-400/40 transition cursor-pointer">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-pink-400 to-purple-400 mb-4"></div>
                        <h3 class="text-xl font-bold text-pink-300 mb-3 flex-grow">Membangun Komunitas Developer yang Kuat</h3>
                        <p class="text-pink-200/60 text-sm mb-4">Strategi untuk menciptakan ekosistem komunitas yang mendukung pertumbuhan.</p>
                        <p class="text-pink-200/40 text-xs">6 min read</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="relative group">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-cyan-600 rounded-2xl blur opacity-10 group-hover:opacity-20 transition duration-500"></div>
                <div class="relative bg-gradient-to-br from-slate-800/90 to-slate-900/90 border border-purple-500/20 rounded-2xl p-12 backdrop-blur text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        <span class="bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent">
                            Bergabunglah dengan Komunitas
                        </span>
                    </h2>
                    <p class="text-purple-300 mb-8 max-w-2xl mx-auto">
                        Jangan lewatkan kesempatan untuk belajar dan berkembang bersama developer lainnya di Baricode Community.
                    </p>
                    <button class="px-8 py-4 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-semibold transition transform hover:scale-105">
                        Join Community
                    </button>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-purple-500/20 backdrop-blur py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-6 md:mb-0">
                        <p class="text-purple-300 font-semibold mb-2">Baricode Community</p>
                        <p class="text-purple-200/60">Belajar, Berkembang, dan Berbagi Bersama</p>
                    </div>
                    <div class="flex gap-6 text-purple-300">
                        <a href="#" class="hover:text-purple-200 transition">Twitter</a>
                        <a href="#" class="hover:text-purple-200 transition">Discord</a>
                        <a href="#" class="hover:text-purple-200 transition">GitHub</a>
                    </div>
                </div>
                <div class="border-t border-purple-500/20 mt-8 pt-8 text-center text-purple-200/60">
                    <p>&copy; 2025 Baricode Community. Made with ❤️ by developers, for developers.</p>
                </div>
            </div>
        </footer>
    </div>
</x-layouts.base>