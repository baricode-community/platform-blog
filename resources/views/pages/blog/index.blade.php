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
                        <a href="/blog" class="text-cyan-300 hover:text-cyan-200 transition font-semibold">Blog</a>
                        <button class="px-4 py-2 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-semibold transition">Join</button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Blog Header -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">
                        Blog Baricode
                    </span>
                </h1>
                <p class="text-xl text-purple-200 max-w-2xl mx-auto">
                    Artikel terbaru, tips coding, dan insights dari komunitas Baricode Community
                </p>
            </div>

            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto mb-12">
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-cyan-600 rounded-xl blur opacity-20 group-hover:opacity-40 transition duration-500"></div>
                    <input 
                        type="text" 
                        placeholder="Cari artikel..." 
                        class="relative w-full px-6 py-3 rounded-xl bg-slate-800/90 border border-purple-500/40 text-purple-100 placeholder-purple-400/60 focus:outline-none focus:border-purple-300 focus:ring-2 focus:ring-purple-500/20 transition backdrop-blur"
                    >
                </div>
            </div>
        </section>

        <!-- Blog Grid -->
        <section class="py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            @if($blogs->count() > 0)
                <!-- Articles Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                    @foreach($blogs as $blog)
                        <a href="{{ route('blog.show', $blog) }}" class="group relative h-full">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-600/20 to-pink-600/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition duration-500"></div>
                            <div class="relative bg-slate-800/60 border border-purple-500/20 rounded-2xl p-8 backdrop-blur h-full flex flex-col hover:border-purple-400/40 transition">
                                <!-- Category Badge -->
                                <div class="flex justify-between items-start mb-4">
                                    <span class="px-3 py-1 rounded-full bg-purple-500/20 border border-purple-400/40 text-purple-300 text-xs font-semibold">
                                        #komunitas
                                    </span>
                                    <span class="text-purple-400/60 text-xs">{{ $blog->created_at->format('M d, Y') }}</span>
                                </div>

                                <!-- Title -->
                                <h3 class="text-2xl font-bold text-purple-100 mb-3 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:to-cyan-400 group-hover:bg-clip-text transition line-clamp-2 flex-grow">
                                    {{ $blog->title }}
                                </h3>

                                <!-- Description -->
                                <p class="text-purple-200/70 text-sm mb-6 line-clamp-3">
                                    {{ Str::limit(strip_tags($blog->content), 120, '...') }}
                                </p>

                                <!-- Footer -->
                                <div class="flex items-center justify-between pt-4 border-t border-purple-500/10">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-purple-400 to-pink-400"></div>
                                        <span class="text-sm text-purple-300">Baricode</span>
                                    </div>
                                    <span class="text-xs text-purple-400/60">{{ $blog->created_at->diffForHumans() }}</span>
                                </div>

                                <!-- Read More -->
                                <div class="mt-4 inline-flex items-center gap-2 text-cyan-400 group-hover:text-cyan-300 transition">
                                    <span class="text-sm font-semibold">Baca Selengkapnya</span>
                                    <span class="group-hover:translate-x-2 transition">→</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mb-12">
                    <div class="bg-slate-800/60 border border-purple-500/20 rounded-xl p-6 backdrop-blur max-w-fit">
                        <div class="flex items-center gap-2">
                            <!-- Previous Page -->
                            @if($blogs->onFirstPage())
                                <span class="px-3 py-2 rounded-lg bg-slate-700/50 text-purple-400/40 cursor-not-allowed">
                                    ← Sebelumnya
                                </span>
                            @else
                                <a href="{{ $blogs->previousPageUrl() }}" class="px-3 py-2 rounded-lg bg-purple-500/20 border border-purple-400/40 text-purple-300 hover:bg-purple-500/30 transition">
                                    ← Sebelumnya
                                </a>
                            @endif

                            <!-- Page Numbers -->
                            <div class="flex items-center gap-1 mx-4">
                                @foreach($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    @if($page == $blogs->currentPage())
                                        <span class="px-3 py-2 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold">
                                            {{ $page }}
                                        </span>
                                    @else
                                        <a href="{{ $url }}" class="px-3 py-2 rounded-lg bg-slate-700/50 text-purple-300 hover:bg-purple-500/20 transition">
                                            {{ $page }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>

                            <!-- Next Page -->
                            @if($blogs->hasMorePages())
                                <a href="{{ $blogs->nextPageUrl() }}" class="px-3 py-2 rounded-lg bg-purple-500/20 border border-purple-400/40 text-purple-300 hover:bg-purple-500/30 transition">
                                    Selanjutnya →
                                </a>
                            @else
                                <span class="px-3 py-2 rounded-lg bg-slate-700/50 text-purple-400/40 cursor-not-allowed">
                                    Selanjutnya →
                                </span>
                            @endif
                        </div>

                        <!-- Page Info -->
                        <div class="text-center mt-4 text-sm text-purple-300/60">
                            Menampilkan {{ (($blogs->currentPage() - 1) * $blogs->perPage()) + 1 }} hingga {{ min($blogs->currentPage() * $blogs->perPage(), $blogs->total()) }} dari {{ $blogs->total() }} artikel
                        </div>
                    </div>
                </div>
            @else
                <!-- No Blogs -->
                <div class="text-center py-20">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-purple-500/20 to-cyan-500/20 mx-auto mb-6 flex items-center justify-center text-4xl">
                        📚
                    </div>
                    <h3 class="text-2xl font-bold text-purple-300 mb-2">Belum Ada Artikel</h3>
                    <p class="text-purple-200/60 mb-6">Artikel baru akan segera hadir. Nantikan update dari komunitas Baricode!</p>
                    <a href="/" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-semibold transition">
                        Kembali ke Beranda
                    </a>
                </div>
            @endif
        </section>

        <!-- CTA Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto mb-20">
            <div class="relative group">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-cyan-600 rounded-2xl blur opacity-10 group-hover:opacity-20 transition duration-500"></div>
                <div class="relative bg-gradient-to-br from-slate-800/90 to-slate-900/90 border border-purple-500/20 rounded-2xl p-12 backdrop-blur text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        <span class="bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent">
                            Punya Cerita untuk Dibagikan?
                        </span>
                    </h2>
                    <p class="text-purple-300 mb-8 max-w-2xl mx-auto">
                        Tulis artikel tentang perjalanan coding kamu dan bagikan pengetahuan dengan komunitas Baricode.
                    </p>
                    <button class="px-8 py-4 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-semibold transition transform hover:scale-105">
                        Tulis Artikel
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
