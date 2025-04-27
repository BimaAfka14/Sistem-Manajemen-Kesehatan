<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendeztClinica</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#1e3a8a',
                    }
                }
            }
        }
    </script>
    <style>
        .hero-bg {
            background-image: linear-gradient(rgba(30, 64, 175, 0.8), rgba(30, 58, 138, 0.8)), url('https://plus.unsplash.com/premium_photo-1661773744154-8ac5e89eaad5?q=80&w=2000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-card {
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: scale(1.03);
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Header/Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between relative">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="w-12 h-12 bg-blue-800 rounded-full flex items-center justify-center text-white font-bold text-xl mr-3">S</div>
                <h1 class="text-xl font-bold text-blue-800">SendeztClinica</h1>
            </div>
    
            <!-- Nav Menu (centered) -->
            <nav class="hidden md:flex space-x-8 absolute left-1/2 transform -translate-x-1/2">
                <a href="#home" class="text-blue-800 font-medium hover:text-blue-600 transition">Beranda</a>
                <a href="#features" class="text-gray-600 font-medium hover:text-blue-800 transition">Fitur</a>
                <a href="#testimonials" class="text-gray-600 font-medium hover:text-blue-800 transition">Testimoni</a>
                <a href="#contact" class="text-gray-600 font-medium hover:text-blue-800 transition">Kontak</a>
            </nav>
    
            <!-- Login Button & Mobile Menu Icon -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('login') }}" class="hidden md:inline-block bg-blue-800 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                    Login
                </a>                
                <button class="md:hidden text-blue-800">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </header>    

    <!-- Hero Section -->
    <section id="home" class="hero-bg text-white py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Layanan Kesehatan Digital Terpadu</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Akses layanan kesehatan kami dengan mudah dan cepat melalui platform digital kami.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('register') }}" class="bg-white text-blue-800 px-8 py-3 rounded-md font-bold hover:bg-gray-100 transition">Daftar Sekarang</a>
                <a href="#features" class="border-2 border-white px-8 py-3 rounded-md font-bold hover:bg-white hover:text-blue-800 transition">Pelajari Lebih</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">Fitur Unggulan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menyediakan berbagai layanan digital untuk memudahkan akses kesehatan Anda</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md feature-card transition duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-calendar-check text-blue-800 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Pendaftaran Online</h3>
                    <p class="text-gray-600">Daftar janji temu dengan dokter pilihan Anda secara online tanpa perlu antri di loket.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md feature-card transition duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-file-medical text-blue-800 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Rekam Medis Digital</h3>
                    <p class="text-gray-600">Akses riwayat kesehatan Anda kapan saja dan di mana saja secara digital yang terintegrasi.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-lg shadow-md feature-card transition duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-user-md text-blue-800 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Jadwal Dokter</h3>
                    <p class="text-gray-600">Lihat jadwal praktik dokter spesialis dan pilih waktu yang sesuai dengan kebutuhan Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">Apa Kata Pasien Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Pengalaman nyata dari pasien yang telah menggunakan layanan digital kami</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-6 rounded-lg testimonial-card">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-800 font-bold mr-4">AS</div>
                        <div>
                            <h4 class="font-bold">Andi Susanto</h4>
                            <p class="text-sm text-gray-500">Pasien Poli Jantung</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Sangat memudahkan! Saya bisa daftar dari rumah dan tidak perlu antri lama. Dokternya juga sangat profesional."</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-6 rounded-lg testimonial-card">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-800 font-bold mr-4">BD</div>
                        <div>
                            <h4 class="font-bold">Budi Darmawan</h4>
                            <p class="text-sm text-gray-500">Pasien Poli Anak</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Rekam medis digital sangat membantu saat konsultasi dengan dokter spesialis. Semua riwayat bisa dilihat dengan jelas."</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-6 rounded-lg testimonial-card">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-800 font-bold mr-4">CW</div>
                        <div>
                            <h4 class="font-bold">Citra Wijaya</h4>
                            <p class="text-sm text-gray-500">Pasien Poli Kandungan</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Fitur jadwal dokternya akurat, jadi saya bisa memilih waktu yang tepat. Pelayanannya juga sangat ramah dan cepat."</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Siap Memulai Perawatan Kesehatan Digital?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Daftar sekarang dan nikmati kemudahan akses layanan kesehatan kami.</p>
            <a href="{{ route('register') }}" class="bg-white text-blue-800 px-8 py-3 rounded-md font-bold hover:bg-gray-100 transition inline-block">Daftar Sekarang</a>
        </div>
    </section>

    <!-- Contact & Footer -->
    <footer id="contact" class="bg-gray-900 text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- About -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center text-white font-bold text-lg mr-3">S</div>
                        <h3 class="text-lg font-bold">SendeztClinica</h3>
                    </div>
                    <p class="text-gray-400">Memberikan layanan kesehatan terbaik dengan teknologi digital terkini untuk kenyamanan pasien.</p>
                </div>
                
                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak Kami</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-3 text-blue-400"></i>
                            <span>Jl. Kesehatan No. 123, Semarang</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3 text-blue-400"></i>
                            <span>(+62) 1234-5678</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-blue-400"></i>
                            <span>info@sendeztclinica.com</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Hours -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Jam Operasional</h4>
                    <ul class="space-y-2">
                        <li class="flex justify-between">
                            <span class="text-gray-400">Senin-Jumat</span>
                            <span>07:00 - 21:00</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="text-gray-400">Sabtu</span>
                            <span>08:00 - 17:00</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="text-gray-400">Minggu</span>
                            <span>09:00 - 15:00</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Social Media -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Media Sosial</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-6 text-center text-gray-400">
                <p>&copy; 2025 SendeztClinica. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('button.md\\:hidden');
            const navLinks = document.querySelector('nav');
            
            mobileMenuButton.addEventListener('click', function() {
                navLinks.classList.toggle('hidden');
                navLinks.classList.toggle('flex');
                navLinks.classList.toggle('flex-col');
                navLinks.classList.toggle('absolute');
                navLinks.classList.toggle('top-16');
                navLinks.classList.toggle('left-0');
                navLinks.classList.toggle('right-0');
                navLinks.classList.toggle('bg-white');
                navLinks.classList.toggle('p-4');
                navLinks.classList.toggle('shadow-md');
                navLinks.classList.toggle('space-y-4');
                navLinks.classList.toggle('space-x-8');
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile menu if open
                        if (!navLinks.classList.contains('hidden')) {
                            mobileMenuButton.click();
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>