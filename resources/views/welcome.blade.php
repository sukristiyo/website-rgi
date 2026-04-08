<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGI Decor | Desain Interior Eksklusif & Modern</title>
    <meta name="description" content="Hadirkan keanggunan pada hunian Anda bersama RGI Decor. Desain interior eksklusif, artistik, dan disesuaikan untuk kenyamanan gaya hidup Anda.">
    <!-- Google Fonts: Playfair Display (Serif) & Outfit (Sans Serif) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Transparent & Floating Navbar -->
    <header class="navbar" id="navbar">
        <div class="container nav-content">
            <div class="nav-brand">
                <a href="/" class="logo">
                    RGI<span class="logo-light">Decor.</span>
                </a>
            </div>
            <nav class="nav-links">
                <a href="#koleksi">Koleksi</a>
                <a href="#pendekatan">Pendekatan Kami</a>
                <a href="#portofolio">Portofolio</a>
            </nav>
            <div class="nav-actions">
                <a href="https://wa.me/6282268669684?text=Halo%20RGI%20Decor,%20saya%20ingin%20mulai%20konsultasi%20desain%20interior." target="_blank" class="btn-primary">Mulai Konsultasi</a>
            </div>
        </div>
    </header>

    <!-- Full Bleed Hero Section with Image Slider in Background -->
    <section class="hero">
        <div class="hero-slider" id="bgSlider">
            <!-- Background images will be set via JS -->
            <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1600210491369-e753d80a41f3?auto=format&fit=crop&q=80&w=1600');"></div>
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&q=80&w=1600');"></div>
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=1600');"></div>
            <div class="overlay-grad"></div>
        </div>

        <div class="container hero-container">
            <div class="hero-content">
                <div class="hero-text" data-aos="fade-up">
                    <p class="subtitle">Seni Mendefinisikan Ruang</p>
                    <h1>Ciptakan Hunian yang   <br><span>Bercerita Tentang Anda.</span></h1>
                    <p class="desc">Memadukan estetika minimalis dengan kemewahan yang tenang. RGI Decor mentransformasi ruang biasa menjadi karya seni fungsional.</p>
                </div>

                <!-- Glassmorphism Estimation Card over Hero -->
                <div class="glass-card estimation-card" id="konsultasi">
                    <div class="card-header">
                        <h2>Estimasikan Investasi Anda</h2>
                        <p>Dapatkan rancangan biaya awal secara instan.</p>
                    </div>
                    <form id="waForm" class="glass-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" placeholder="Cth: Sarah Wijaya" required>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Whatsapp</label>
                                <input type="tel" id="telepon" name="telepon" placeholder="0812 xxx xxx" required>
                            </div>
                            <div class="form-group">
                                <label for="ruang">Tipe Ruangan</label>
                                <select id="ruang" name="ruang">
                                    <option>Apartemen Utuh</option>
                                    <option>Ruang Keluarga</option>
                                    <option>Dapur & Ruang Makan</option>
                                    <option>Kamar Tidur Utama</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn-dark btn-block">Hitung Estimasi</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>


    <!-- Bento Grid Portfolio Section -->
    <section class="portfolio" id="portofolio">
        <div class="container">
            <div class="section-head text-center">
                <span class="eyebrow">Kurasi Kami</span>
                <h2 class="section-title">Harmoni Dalam Detail</h2>
            </div>
            
            <div class="bento-grid">
                <!-- Large Item -->
                <div class="bento-item large">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&q=80&w=1000" alt="Living Room">
                    <div class="bento-overlay">
                        <h3>Ruang Keluarga Terbuka</h3>
                        <p>Minimalis Kontemporer</p>
                    </div>
                </div>
                <!-- Tall Item -->
                <div class="bento-item tall">
                    <img src="https://images.unsplash.com/photo-1600121848594-d8644e57abab?auto=format&fit=crop&q=80&w=600" alt="Bathroom">
                    <div class="bento-overlay">
                        <h3>Kamar Mandi Zen</h3>
                        <p>Nuansa Spa</p>
                    </div>
                </div>
                <!-- Standard Item 1 -->
                <div class="bento-item standard">
                    <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?auto=format&fit=crop&q=80&w=600" alt="Kitchen">
                    <div class="bento-overlay">
                        <h3>Dapur Monokrom</h3>
                        <p>Fungsional Estetis</p>
                    </div>
                </div>
                <!-- Standard Item 2 -->
                <div class="bento-item standard">
                    <img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format&fit=crop&q=80&w=600" alt="Bedroom">
                    <div class="bento-overlay">
                        <h3>Kamar Tidur Utama</h3>
                        <p>Hangat & Tenang</p>
                    </div>
                </div>
                <!-- Wide Item -->
                <div class="bento-item wide">
                    <img src="https://images.unsplash.com/photo-1616486029423-aaa4789e8c9a?auto=format&fit=crop&q=80&w=1000" alt="Dining Area">
                    <div class="bento-overlay">
                        <h3>Pojok Makan Natural</h3>
                        <p>Kayu & Cahaya Alami</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kebutuhan Section -->
    <section class="kebutuhan" id="kebutuhan">
        <div class="container">
            <div class="section-head text-center">
                <span class="eyebrow">Layanan Kami</span>
                <h2 class="section-title">Solusi Untuk Setiap Ruang</h2>
                <p class="section-desc">Ragam desain interior untuk memenuhi setiap kebutuhan gaya hidup Anda.</p>
            </div>
            <div class="grid-3x2">
                <!-- Kitchen Set -->
                <div class="lux-card">
                    <div class="lux-card-img"><img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&q=80&w=600" alt="Kitchen Set"></div>
                    <div class="lux-card-content">
                        <h3>Kitchen Set</h3>
                        <p>Desain dapur modern dengan fungsionalitas premium dan estetika memukau.</p>
                    </div>
                </div>
                <!-- Interior Premium -->
                <div class="lux-card">
                    <div class="lux-card-img"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&q=80&w=600" alt="Interior Premium"></div>
                    <div class="lux-card-content">
                        <h3>Interior Premium</h3>
                        <p>Kualitas material terbaik dengan detail arsitektur yang mengutamakan kemewahan.</p>
                    </div>
                </div>
                <!-- Rumah -->
                <div class="lux-card">
                    <div class="lux-card-img"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=600" alt="Rumah"></div>
                    <div class="lux-card-content">
                        <h3>Landed House</h3>
                        <p>Interior keseluruhan berkualitas tinggi untuk rumah yang estetik dan nyaman.</p>
                    </div>
                </div>
                <!-- Apartemen -->
                <div class="lux-card">
                    <span class="lux-badge">Space Saving</span>
                    <div class="lux-card-img"><img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&q=80&w=600" alt="Apartemen"></div>
                    <div class="lux-card-content">
                        <h3>Apartemen</h3>
                        <p>Optimalisasi ruangan vertikal yang memberikan kesan lega dan leluasa.</p>
                    </div>
                </div>
                <!-- Kantor -->
                <div class="lux-card">
                    <div class="lux-card-img"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=600" alt="Kantor"></div>
                    <div class="lux-card-content">
                        <h3>Kantor Modern</h3>
                        <p>Tingkatkan performa bisnis dengan interior kantor inspiratif pendorong produktivitas milenial.</p>
                    </div>
                </div>
                <!-- Hotel -->
                <div class="lux-card">
                    <div class="lux-card-img"><img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&q=80&w=600" alt="Hotel"></div>
                    <div class="lux-card-content">
                        <h3>Hospitality / Hotel</h3>
                        <p>Berikan pengalaman tak terlupakan untuk customer dengan nuansa kamar eksklusif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gaya Section -->
    <section class="gaya" id="gaya">
        <div class="container">
            <div class="section-head text-center">
                <span class="eyebrow">Inspirasi</span>
                <h2 class="section-title">Eksplorasi Gaya Anda</h2>
                <p class="section-desc">Koleksi kurasi gaya desain interior terbaru oleh tim artistik RGI Decor.</p>
            </div>
            
            <div class="grid-3x1">
                <!-- Modern Kontemporer -->
                <div class="lux-card">
                    <div class="lux-card-img"><img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&q=80&w=600" alt="Modern Kontemporer"></div>
                    <div class="lux-card-content">
                        <h3>Modern Kontemporer</h3>
                        <p>Nuansa modern minimalis yang menyatu dengan estetika garis yang tegas.</p>
                    </div>
                </div>
                <!-- Modern Klasik -->
                <div class="lux-card">
                    <div class="lux-card-img"><img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&q=80&w=600" alt="Modern Klasik"></div>
                    <div class="lux-card-content">
                        <h3>Modern Klasik</h3>
                        <p>Perpaduan kemewahan simetris masa lalu dan kelugasan desain modern masa kini.</p>
                    </div>
                </div>
                <!-- Japandi Natural -->
                <div class="lux-card">
                    <div class="lux-card-img"><img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format&fit=crop&q=80&w=600" alt="Japandi Natural"></div>
                    <div class="lux-card-content">
                        <h3>Japandi Natural</h3>
                        <p>Ciptakan kemewahan dalam kesederhanaan Wabi-Sabi yang harmonis dan fungsional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mengapa Memilih RGI Decor -->
    <section class="features">
        <div class="container">
            <h2 class="features-title text-center">Mengapa Memilih RGI Decor?</h2>
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-box">
                    <div class="feature-icon">✨</div>
                    <div class="feature-text">
                        <h3>Space-Saving Design</h3>
                        <p>Desain efisien oleh profesional kami, memaksimalkan fungsi di setiap jengkal tanpa mengorbankan estetika.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="feature-box">
                    <div class="feature-icon">💳</div>
                    <div class="feature-text">
                        <h3>Program 36x Cicilan</h3>
                        <p>Bayar lebih ringan. Fleksibilitas bertransaksi menjadi lebih mudah demi wujudkan ruang impian.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="feature-box">
                    <div class="feature-icon">🛡️</div>
                    <div class="feature-text">
                        <h3>Garansi Mutu 2 Tahun</h3>
                        <p>Ketenangan pikiran dengan penjaminan kualitas material yang bikin Anda selalu tenang & nyaman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6 Langkah Section -->
    <section class="langkah" id="pendekatan">
        <div class="container text-center">
            <span class="eyebrow">Pendekatan Kami</span>
            <h2 class="section-title">6 Langkah Menuju Interior Impianmu</h2>
            
            <div class="langkah-wrapper">
                <!-- Navigation Dots -->
                <div class="step-nav">
                    <div class="step-line"></div>
                    <div class="step-dots">
                        <button class="step-dot active" onclick="goToStep(0)">1</button>
                        <button class="step-dot" onclick="goToStep(1)">2</button>
                        <button class="step-dot" onclick="goToStep(2)">3</button>
                        <button class="step-dot" onclick="goToStep(3)">4</button>
                        <button class="step-dot" onclick="goToStep(4)">5</button>
                        <button class="step-dot" onclick="goToStep(5)">6</button>
                    </div>
                </div>

                <!-- Sliders -->
                <div class="step-content-area">
                    <button class="step-arrow prev" onclick="prevStepLangkah()">&#10094;</button>
                    
                    <div class="step-panels">
                        <!-- Step 1 -->
                        <div class="step-panel active">
                            <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&q=80&w=600" class="step-img" alt="Registrasi">
                            <div class="step-card">
                                <h3>Registrasi</h3>
                                <p>Konsultasikan kebutuhan desainmu. Cek jangkauan proyek dan daftarkan proyekmu untuk menentukan jadwal kunjungan pertama.</p>
                                <div class="step-progress"><div class="progress-fill gratis" style="width: 20%;"><span>Gratis</span></div></div>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="step-panel">
                            <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&q=80&w=600" class="step-img" alt="Kunjungan Pertama">
                            <div class="step-card">
                                <h3>Kunjungan Pertama</h3>
                                <p>Ada 3 opsi, yaitu konsultasi online, kunjungan langsung ke rumahmu, dan konsultasi tatap muka di Studio kami untuk pengukuran.</p>
                                <div class="step-progress"><div class="progress-fill gratis" style="width: 40%;"><span>Gratis</span></div></div>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="step-panel">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=600" class="step-img" alt="Design">
                            <div class="step-card">
                                <h3>Design & Render 3D</h3>
                                <p>Setelah pembayaran Booking Fee, desainer kami akan merumuskan hunian impianmu secara 3D sesuai detail keinginanmu.</p>
                                <div class="step-progress"><div class="progress-fill bf" style="width: 60%;"><span>BF</span></div></div>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="step-panel">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=600" class="step-img" alt="Produksi">
                            <div class="step-card">
                                <h3>Produksi Presisi</h3>
                                <p>Jika kamu sudah setuju dengan desain yang diberikan, interior siap diproduksi oleh tenaga ahli kami setelah pembayaran DP 50%.</p>
                                <div class="step-progress"><div class="progress-fill dp" style="width: 80%;"><span>DP 50%</span></div></div>
                            </div>
                        </div>
                        <!-- Step 5 -->
                        <div class="step-panel">
                            <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&q=80&w=600" class="step-img" alt="Instalasi">
                            <div class="step-card">
                                <h3>Instalasi & Perakitan</h3>
                                <p>Tim kami memberikan update berkala. Instalasi unit di lokasimu dapat dimulai segera setelah pelunasan sisa pembayaran.</p>
                                <div class="step-progress"><div class="progress-fill lunas" style="width: 95%;"><span>Pelunasan</span></div></div>
                            </div>
                        </div>
                        <!-- Step 6 -->
                        <div class="step-panel">
                            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&q=80&w=600" class="step-img" alt="Serah Terima">
                            <div class="step-card">
                                <h3>Siap Dihuni</h3>
                                <p>Serah terima hunian baru Anda. Nikmati kenyamanan desain interior eksklusif yang bergaransi resmi dari RGI Decor.</p>
                                <div class="step-progress"><div class="progress-fill done" style="width: 100%;"><span>Selesai ✓</span></div></div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="step-arrow next" onclick="nextStepLangkah()">&#10095;</button>
                </div>
                
                <div style="margin-top: 40px;">
                    <a href="#" class="btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="minimal-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <h2>RGI<span class="logo-light">Decor.</span></h2>
                    <p>Mendefinisikan ulang kemewahan ruang.</p>
                </div>
                <div class="footer-links">
                    <a href="#">Instagram</a>
                    <a href="#">Pinterest</a>
                    <a href="#">Email</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} RGI Decor. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6282268669684" class="float-wa" target="_blank" id="floatWa">
        <svg fill="#ffffff" viewBox="0 0 24 24" width="30" height="30" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.015c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.82 9.82 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
    </a>

    <!-- Scripts -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
