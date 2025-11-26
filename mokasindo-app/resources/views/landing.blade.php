<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mokasindo - Lelang Mobil & Motor Bekas Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-indigo-600">Mokasindo</h1>
                </div>
                
                <!-- Navigation Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium">Beranda</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium">Tentang</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium">Kontak</a>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium">Masuk</a>
                    <a href="#" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 font-medium">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-indigo-600 via-indigo-700 to-purple-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full mb-6">
                    <span class="text-sm font-medium">🚗 Platform Lelang Terpercaya Indonesia</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    Lelang Mobil & Motor<br>Bekas Terpercaya
                </h1>

                <!-- Subheading -->
                <p class="text-xl md:text-2xl text-indigo-100 mb-8 max-w-3xl mx-auto">
                    Temukan kendaraan impian Anda dengan harga terbaik melalui sistem lelang yang aman dan transparan
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="bg-white text-indigo-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-50 transition shadow-lg">
                        Mulai Lelang
                    </a>
                    <a href="#" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white/10 transition">
                        Lihat Kendaraan
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 mt-16 max-w-3xl mx-auto">
                    <div>
                        <div class="text-4xl font-bold mb-2">1000+</div>
                        <div class="text-indigo-200">Kendaraan Terjual</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">5000+</div>
                        <div class="text-indigo-200">Member Aktif</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">100%</div>
                        <div class="text-indigo-200">Aman & Terpercaya</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave SVG -->
        <div class="absolute bottom-0 w-full">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V0Z" fill="#F9FAFB"/>
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Mengapa Mokasindo?</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Platform lelang kendaraan bekas yang memberikan pengalaman terbaik untuk pembeli dan penjual</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Aman & Terpercaya</h3>
                    <p class="text-gray-600">Sistem deposit dan pembayaran yang aman dengan jaminan transaksi transparan</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Proses Cepat</h3>
                    <p class="text-gray-600">Lelang real-time dengan notifikasi instan melalui Telegram, Email & WhatsApp</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Harga Kompetitif</h3>
                    <p class="text-gray-600">Dapatkan kendaraan dengan harga terbaik melalui sistem lelang yang fair</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Cara Kerja</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Mudah dan sederhana, ikuti 4 langkah berikut</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">1</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Daftar & Verifikasi</h3>
                    <p class="text-gray-600">Buat akun dan lengkapi data untuk mulai lelang</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">2</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Pilih Kendaraan</h3>
                    <p class="text-gray-600">Cari dan pilih kendaraan yang Anda inginkan</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">3</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Ikut Lelang</h3>
                    <p class="text-gray-600">Bayar deposit 5% dan mulai bid real-time</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">4</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Bayar & Ambil</h3>
                    <p class="text-gray-600">Lunasi dalam 24 jam dan kendaraan siap dikirim</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-600 to-purple-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Siap Memulai Lelang?</h2>
            <p class="text-xl text-indigo-100 mb-8">Daftar sekarang dan dapatkan akses ke ribuan kendaraan berkualitas</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-white text-indigo-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-50 transition shadow-lg">
                    Daftar Gratis
                </a>
                <a href="#" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white/10 transition">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-2xl font-bold text-indigo-400 mb-4">Mokasindo</h3>
                    <p class="text-gray-400">Platform lelang mobil dan motor bekas terpercaya di Indonesia</p>
                </div>

                <!-- Links 1 -->
                <div>
                    <h4 class="font-semibold mb-4">Perusahaan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Karir</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                    </ul>
                </div>

                <!-- Links 2 -->
                <div>
                    <h4 class="font-semibold mb-4">Bantuan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cara Lelang</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kontak</a></li>
                    </ul>
                </div>

                <!-- Links 3 -->
                <div>
                    <h4 class="font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kebijakan Cookie</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Mokasindo. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
