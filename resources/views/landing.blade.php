<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Parkir Kampus - STT Nurul Fikri</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Custom Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes shake {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(5deg); }
            75% { transform: rotate(-5deg); }
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        .shaking {
            animation: shake 3s ease-in-out infinite;
        }
        
        .moving-car {
            animation: moveCar 15s linear infinite;
        }
        
        @keyframes moveCar {
            0% { transform: translateX(-100px); }
            100% { transform: translateX(calc(100vw + 100px)); }
        }
        
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #3b82f6 0%, #f97316 100%);
        }
        
        .feature-icon {
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            transform: scale(1.2) rotate(10deg);
        }
    </style>
</head>
<body class="flex flex-col min-h-screen text-gray-800 font-sans overflow-x-hidden">
    <!-- Animated Background Elements -->
    <div class="fixed inset-0 overflow-hidden z-0">
        <div class="absolute top-20 left-10 w-16 h-16 rounded-full bg-blue-200 opacity-20 floating"></div>
        <div class="absolute top-1/3 right-20 w-24 h-24 rounded-full bg-orange-200 opacity-20 floating" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/4 w-20 h-20 rounded-full bg-blue-300 opacity-20 floating" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/4 left-1/2 w-12 h-12 rounded-full bg-orange-300 opacity-20 floating" style="animation-delay: 3s;"></div>
        
        <!-- Moving Car Animation -->
        <img src="https://cdn-icons-png.flaticon.com/512/744/744465.png" alt="Moving Car" 
             class="moving-car w-16 h-16 absolute bottom-10 left-0 z-10 opacity-70">
    </div>

    <!-- Header with Animated Logo -->
    <header class="relative z-10">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://nurulfikri.ac.id/wp-content/uploads/2020/08/logo-sttnf-12-300x218.jpg"
                     alt="STT NF Logo" class="h-16 shaking">
                <div class="ml-4">
                    <h1 class="text-2xl font-bold text-blue-800">STT Nurul Fikri</h1>
                    <p class="text-sm text-gray-600">Smart & Excellent Campus</p>
                </div>
            </div>
            <div class="hidden md:flex space-x-4">
                <a href="#beranda" class="px-4 py-2 text-blue-800 font-medium hover:text-orange-500 transition">Beranda</a>
                <a href="#fasilitas" class="px-4 py-2 text-blue-800 font-medium hover:text-orange-500 transition">Fasilitas</a>
                <a href="#tentang" class="px-4 py-2 text-blue-800 font-medium hover:text-orange-500 transition">Tentang</a>
                <a href="#kontak" class="px-4 py-2 text-blue-800 font-medium hover:text-orange-500 transition">Kontak</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="relative z-10 py-16 md:py-24 px-4">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 animate_animated animate_fadeInDown">
                <span class="text-blue-800">Sistem Parkir</span> 
                <span class="text-orange-500">Kampus</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto mb-10 animate_animated animatefadeIn animate_delay-1s">
                Solusi pintar untuk reservasi dan manajemen parkir di STT Nurul Fikri. 
                Nikmati pengalaman parkir yang mudah, cepat, dan terjamin keamanannya.
            </p>
            
            <div class="flex flex-col md:flex-row justify-center gap-6 animate_animated animatefadeInUp animate_delay-1s">
                <a href="{{ route('filament.superadmin.auth.login') }}"
                   class="inline-flex items-center gap-3 bg-blue-700 hover:bg-blue-800 text-white text-lg font-medium py-4 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                    <i class="fas fa-sign-in-alt"></i>
                    Login Admin
                </a>
                <a href="#features"
                   class="inline-flex items-center gap-3 bg-white hover:bg-gray-100 text-blue-800 border border-blue-300 text-lg font-medium py-4 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                    <i class="fas fa-info-circle"></i>
                    Pelajari Lebih Lanjut
                </a>
            </div>
            
            <!-- Animated Illustration -->
            <div class="mt-16 relative h-64">
                <img src="https://cdn-icons-png.flaticon.com/512/3710/3710296.png" 
                     alt="Parking Illustration" class="h-64 mx-auto floating">
                <img src="https://cdn-icons-png.flaticon.com/512/2933/2933245.png" 
                     alt="Student" class="h-20 absolute bottom-0 left-1/4 floating" style="animation-delay: 0.5s;">
                <img src="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" 
                     alt="Security" class="h-24 absolute bottom-0 right-1/4 floating" style="animation-delay: 1s;">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="relative z-10 py-16 bg-white bg-opacity-90 backdrop-blur-sm">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-blue-800">Fitur Unggulan</h2>
            <p class="text-lg text-gray-600 text-center max-w-2xl mx-auto mb-12">
                Sistem parkir kami dilengkapi dengan berbagai fitur canggih untuk kenyamanan Anda
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover feature-card">
                    <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-qrcode text-white text-2xl feature-icon"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3 text-blue-800">Reservasi Online</h3>
                    <p class="text-gray-600 text-center">
                        Booking tempat parkir Anda secara online sebelum datang ke kampus, hemat waktu dan tenaga.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover feature-card">
                    <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-map-marked-alt text-white text-2xl feature-icon"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3 text-blue-800">Panduan Parkir</h3>
                    <p class="text-gray-600 text-center">
                        Sistem navigasi pintar yang memandu Anda ke spot parkir tersedia terdekat.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover feature-card">
                    <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-shield-alt text-white text-2xl feature-icon"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3 text-blue-800">Keamanan 24/7</h3>
                    <p class="text-gray-600 text-center">
                        Pengawasan CCTV dan petugas keamanan selama 24 jam untuk kendaraan Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Campus Section -->
    <section id="fasilitas" class="relative z-10 py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-blue-800">Lokasi Kampus</h2>
            <p class="text-lg text-gray-600 text-center max-w-2xl mx-auto mb-12">
                Temukan lokasi parkir di kedua kampus STT Nurul Fikri
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Campus A -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEixZg6-xsOkgAwIvO2bNlcp_MKvbhZ_bsZyhNiMFntEFZQNMJFdhKgkLbwU4-m5yakWdApmHzZxgrDEG6a6tDj36p6ZoILHXdHxmZa-bAyOfCEMBDL-HolgdeHxRRMJVroRkDVVAAKUuOY9n1piJ8e8zv_9v7jk-hhUuDo5tZQoqlk6LkZjpbG_dvoQ/s1415/hero-1.webp" 
                             alt="Kampus A" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <h3 class="absolute bottom-4 left-4 text-2xl font-bold text-white">Kampus A</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Gedung utama STT Nurul Fikri dengan area parkir luas dan fasilitas lengkap.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-car text-orange-500 mt-1 mr-2"></i>
                                <span>Kapasitas: 150 kendaraan</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-motorcycle text-orange-500 mt-1 mr-2"></i>
                                <span>Area motor: 200 slot</span>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                
                <!-- Campus B -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://media.quipper.com/media/W1siZiIsIjIwMTgvMDEvMjMvMDkvNDQvMDgvYWZlODE5YWQtODVjNi00ZGEzLWIwMjQtZDRiN2NkYzE3ZWNmLyJdLFsicCIsInRodW1iIiwiMTIwMHhcdTAwM2UiLHt9XSxbInAiLCJjb252ZXJ0IiwiLWNvbG9yc3BhY2Ugc1JHQiAtc3RyaXAiLHsiZm9ybWF0IjoianBnIn1dXQ?sha=a0f9fe2daae12d1c" 
                             alt="Kampus B" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <h3 class="absolute bottom-4 left-4 text-2xl font-bold text-white">Kampus B</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Gedung baru STT Nurul Fikri dengan sistem parkir modern dan terintegrasi.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-car text-orange-500 mt-1 mr-2"></i>
                                <span>Kapasitas: 200 kendaraan</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-motorcycle text-orange-500 mt-1 mr-2"></i>
                                <span>Area motor: 250 slot</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="tentang" class="relative z-10 py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-blue-800">Cara Kerja Sistem</h2>
            <p class="text-lg text-gray-600 text-center max-w-2xl mx-auto mb-12">
                Hanya perlu 3 langkah mudah untuk menggunakan sistem parkir kami
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-20 h-20 rounded-full bg-blue-100 flex items-center justify-center mb-4 relative">
                        <span class="text-3xl font-bold text-blue-800">1</span>
                        <div class="absolute -right-20 top-1/2 transform -translate-y-1/2 w-24 h-1 bg-blue-200 hidden md:block"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-blue-800">Reservasi Online</h3>
                    <p class="text-gray-600">
                        Booking tempat parkir melalui website atau aplikasi mobile kami
                    </p>
                    <div class="mt-4 p-4 bg-blue-50 rounded-lg">
                        <i class="fas fa-mobile-alt text-3xl text-blue-600"></i>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-20 h-20 rounded-full bg-orange-100 flex items-center justify-center mb-4 relative">
                        <span class="text-3xl font-bold text-orange-600">2</span>
                        <div class="absolute -right-20 top-1/2 transform -translate-y-1/2 w-24 h-1 bg-orange-200 hidden md:block"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-blue-800">Scan QR Code</h3>
                    <p class="text-gray-600">
                        Saat tiba di kampus, scan QR code Anda di gerbang parkir
                    </p>
                    <div class="mt-4 p-4 bg-orange-50 rounded-lg">
                        <i class="fas fa-qrcode text-3xl text-orange-600"></i>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mb-4">
                        <span class="text-3xl font-bold text-green-600">3</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-blue-800">Parkir Kendaraan</h3>
                    <p class="text-gray-600">
                        Ikuti petunjuk ke spot parkir yang sudah dipesan
                    </p>
                    <div class="mt-4 p-4 bg-green-50 rounded-lg">
                        <i class="fas fa-parking text-3xl text-green-600"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="kontak" class="relative z-10 py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-blue-800">Apa Kata Mereka?</h2>
            <p class="text-lg text-gray-600 text-center max-w-2xl mx-auto mb-12">
                Pendapat mahasiswa dan staf tentang sistem parkir kami
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" 
                             alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-blue-800">Sarah Maharani</h4>
                            <p class="text-sm text-gray-500">Mahasiswa Teknik Informatika</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Sistem parkir online sangat membantu, tidak perlu lagi berkeliling mencari tempat kosong. Tinggal booking dari rumah, langsung dapat spot parkir!"
                    </p>
                    <div class="mt-4 text-orange-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" 
                             alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-blue-800">Budi Santoso</h4>
                            <p class="text-sm text-gray-500">Dosen Sistem Informasi</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Sebagai dosen yang sering membawa mobil, sistem reservasi ini sangat memudahkan. Tidak perlu khawatir datang pagi hanya untuk dapat parkiran."
                    </p>
                    <div class="mt-4 text-orange-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" 
                             alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-blue-800">Dewi Lestari</h4>
                            <p class="text-sm text-gray-500">Staff Administrasi</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Parkir sekarang lebih teratur dan aman. Sistem digitalnya juga memudahkan pelacakan kendaraan jika ada keperluan administrasi."
                    </p>
                    <div class="mt-4 text-orange-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative z-10 py-16 gradient-bg text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Menggunakan Sistem Parkir Kami?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Daftarkan diri Anda sekarang dan nikmati kemudahan reservasi parkir di STT Nurul Fikri
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="{{ route('filament.superadmin.auth.login') }}"
                   class="inline-flex items-center gap-3 bg-white hover:bg-gray-100 text-blue-800 text-lg font-medium py-4 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                    <i class="fas fa-user-shield"></i>
                    Login Admin
                </a>
                <a href="#kontak"
                   class="inline-flex items-center gap-3 bg-transparent hover:bg-white hover:bg-opacity-20 border border-white text-lg font-medium py-4 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                    <i class="fas fa-question-circle"></i>
                    Butuh Bantuan?
                </a>
            </div>
            
            <!-- Animated Parking Meter -->
            <div class="mt-12 relative h-32">
                <img src="https://cdn-icons-png.flaticon.com/512/3149/3149140.png" 
                     alt="Parking Meter" class="h-32 mx-auto animate_animated animate_bounceIn">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12 relative z-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">STT Nurul Fikri</h3>
                    <p class="mb-4">
                        Kampus teknologi terdepan dengan komitmen pada keunggulan akademik dan pengembangan karakter.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#beranda" class="hover:text-white transition">Beranda</a></li>
                        <li><a href="#tentang" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#fasilitas" class="hover:text-white transition">Fasilitas</a></li>
                        <li><a href="#kontak" class="hover:text-white transition">Kontak</a></li>
                        <li><a href="#" class="hover:text-white transition">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">Hubungi Kami</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2 text-orange-500"></i>
                            <span>Jl. Lenteng Agung Raya No.20, Jagakarsa, Jakarta Selatan</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt mt-1 mr-2 text-orange-500"></i>
                            <span>(021) 7863191</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-2 text-orange-500"></i>
                            <span>info@nurulfikri.ac.id</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">Berlangganan</h3>
                    <p class="mb-4">
                        Dapatkan informasi terbaru tentang sistem parkir dan pengumuman kampus.
                    </p>
                    <form class="flex">
                        <input type="email" placeholder="Email Anda" 
                               class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-800 w-full">
                        <button type="submit" 
                                class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-r-lg">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm">
                <p>&copy; 2023 STT Terpadu Nurul Fikri. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating Action Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="#kontak" class="w-14 h-14 rounded-full bg-orange-500 text-white shadow-lg flex items-center justify-center transform hover:scale-110 transition duration-300">
            <i class="fas fa-question text-xl"></i>
        </a>
    </div>

    <!-- Scripts for Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script>
        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Animate elements on scroll
        document.addEventListener('DOMContentLoaded', function() {
            // Animate features on scroll
            gsap.from(".feature-card", {
                scrollTrigger: {
                    trigger: "#features",
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                y: 100,
                opacity: 100,
                duration: 1,
                stagger: 
            });
            
            // Animate campus cards
            gsap.from(".card-hover", {
                scrollTrigger: {
                    trigger: ".bg-gray-50",
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                y: 100,
                opacity: 10,
                duration: 1,
                stagger: 
            });
            
            // Animate testimonials
            gsap.from(".bg-white.rounded-xl", {
                scrollTrigger: {
                    trigger: ".bg-gray-50",
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                y: 100,
                opacity: 100,
                duration: 1,
                stagger: 
            });
        });
    </script>
</body>
</html>