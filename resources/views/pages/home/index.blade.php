<x-layouts.base>
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
        <!-- Navigation -->
        <nav class="sticky top-0 z-50 backdrop-blur-md bg-slate-900/80 border-b border-purple-500/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-400 via-pink-400 to-cyan-400"></div>
                        <span class="font-bold text-lg bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">Baricode</span>
                    </div>
                    <div class="flex gap-6 items-center">
                        <a href="#" class="text-purple-300 hover:text-purple-200 transition">Blog</a>
                        <a href="#" class="text-purple-300 hover:text-purple-200 transition">Komunitas</a>
                        <button class="px-4 py-2 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-semibold transition">Join</button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
            <!-- Animated Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
                <div class="absolute top-40 right-10 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
                <div class="absolute -bottom-8 left-1/2 w-72 h-72 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
            </div>

            <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <!-- Main Heading -->
                <div class="mb-8">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">
                        <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">
                            Baricode Community
                        </span>
                    </h1>
                    <p class="text-xl md:text-2xl text-purple-200 mb-4">
                        Komunitas ngoding kecil yang tumbuh pelan-pelan bersama
                    </p>
                </div>

                <!-- Description Cards -->
                <div class="grid md:grid-cols-2 gap-6 mb-12">
                    <!-- Card 1 -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl blur opacity-0 group-hover:opacity-100 transition duration-500"></div>
                        <div class="relative bg-slate-900/90 border border-purple-500/20 rounded-2xl p-8 backdrop-blur">
                            <h3 class="text-2xl font-bold text-purple-300 mb-4">Belajar Bareng</h3>
                            <p class="text-purple-200">
                                Di sini kita belajar bareng, coba bikin proyek bareng, sambil menikmati hal-hal ringan seperti meme ngoding, update status, dan target harian biar tetap konsisten.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-2xl blur opacity-0 group-hover:opacity-100 transition duration-500"></div>
                        <div class="relative bg-slate-900/90 border border-cyan-500/20 rounded-2xl p-8 backdrop-blur">
                            <h3 class="text-2xl font-bold text-cyan-300 mb-4">Tumbuh Bersama</h3>
                            <p class="text-cyan-200">
                                Meski baru mulai, tujuan kami sederhana: menciptakan tempat yang nyaman untuk saling mendukung, berkembang, dan seru-seruan bareng sebagai sesama programmer.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tagline -->
                <div class="mb-12">
                    <p class="text-3xl md:text-4xl font-bold text-transparent bg-gradient-to-r from-purple-300 to-cyan-300 bg-clip-text mb-6">
                        Bersama Bertumbuh, Belajar, dan Berbagi
                    </p>
                    <p class="text-lg text-purple-300 mb-8">
                        Bangun proyek bareng, ikut tantangan harian, dan berkembang bersama komunitas developer yang positif.
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#features" class="px-8 py-4 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-semibold transition transform hover:scale-105">
                        Mulai Sekarang
                    </a>
                    <a href="#" class="px-8 py-4 rounded-lg border border-cyan-400 text-cyan-300 hover:bg-cyan-400/10 font-semibold transition">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-16">
                <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">
                    Fitur Menarik
                </span>
            </h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600/20 to-pink-600/20 rounded-xl blur opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-slate-800/50 border border-purple-500/20 rounded-xl p-8 backdrop-blur">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-purple-400 to-pink-400 mb-4 flex items-center justify-center text-xl">💻</div>
                        <h3 class="text-xl font-bold text-purple-300 mb-3">Proyek Bersama</h3>
                        <p class="text-purple-200">Kolaborasi dalam mengembangkan proyek coding yang seru dan edukatif bersama anggota komunitas.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-600/20 to-blue-600/20 rounded-xl blur opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-slate-800/50 border border-cyan-500/20 rounded-xl p-8 backdrop-blur">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-cyan-400 to-blue-400 mb-4 flex items-center justify-center text-xl">🎯</div>
                        <h3 class="text-xl font-bold text-cyan-300 mb-3">Tantangan Harian</h3>
                        <p class="text-cyan-200">Ikuti tantangan coding harian untuk meningkatkan skill dan tetap konsisten dalam belajar.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-pink-600/20 to-purple-600/20 rounded-xl blur opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-slate-800/50 border border-pink-500/20 rounded-xl p-8 backdrop-blur">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-pink-400 to-purple-400 mb-4 flex items-center justify-center text-xl">👥</div>
                        <h3 class="text-xl font-bold text-pink-300 mb-3">Komunitas Positif</h3>
                        <p class="text-pink-200">Bergabung dengan developer yang saling mendukung, berbagi pengetahuan, dan tumbuh bersama.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Community Features -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="relative group">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-cyan-600 rounded-2xl blur opacity-10 group-hover:opacity-20 transition duration-500"></div>
                <div class="relative bg-gradient-to-br from-slate-800/90 to-slate-900/90 border border-purple-500/20 rounded-2xl p-12 backdrop-blur">
                    <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">
                        <span class="bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent">
                            Kami Berbasis Komunitas
                        </span>
                    </h2>
                    <p class="text-center text-purple-300 text-lg mb-8">
                        Ada banyak fitur menarik yang tersedia khusus untuk kamu sebagai bagian dari komunitas Baricode.
                    </p>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-purple-500 flex items-center justify-center flex-shrink-0 mt-1">✓</div>
                            <div>
                                <h3 class="text-purple-300 font-semibold mb-2">Resource Library</h3>
                                <p class="text-purple-200/80">Akses koleksi tutorial dan resource coding dari anggota komunitas.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-cyan-500 flex items-center justify-center flex-shrink-0 mt-1">✓</div>
                            <div>
                                <h3 class="text-cyan-300 font-semibold mb-2">Mentoring Program</h3>
                                <p class="text-cyan-200/80">Dapatkan bimbingan langsung dari developer berpengalaman.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-pink-500 flex items-center justify-center flex-shrink-0 mt-1">✓</div>
                            <div>
                                <h3 class="text-pink-300 font-semibold mb-2">Event & Meetup</h3>
                                <p class="text-pink-200/80">Ikuti event, webinar, dan meetup offline komunitas.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-purple-400 flex items-center justify-center flex-shrink-0 mt-1">✓</div>
                            <div>
                                <h3 class="text-purple-400 font-semibold mb-2">Job Board</h3>
                                <p class="text-purple-300/80">Temukan peluang kerja dan project freelance dari anggota.</p>
                            </div>
                        </div>
                    </div>
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

    <style>
        @keyframes blob {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(30px, -50px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</x-layouts.base>