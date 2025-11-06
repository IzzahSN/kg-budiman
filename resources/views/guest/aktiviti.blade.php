<x-app-layout :title="'Aktiviti'">
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden font-sans">
        <!-- Background Image Container -->
        <div class="absolute inset-0">
            <!-- Placeholder for the actual image of the supermarket aisle -->
            <img src="{{ asset('images/aktiviti.jpg') }}"
                alt="Supermarket Aisle Background"
                class="w-full h-full object-cover">
                    
            <!-- Black/Dark Layer to ensure readability -->
            <div class="absolute inset-0 bg-black/50"></div>
        </div>

        <!-- Content Container (Centered and Responsive) -->
        <div class="relative z-10 text-center text-white p-6 max-w-6xl mx-auto">
            <!-- Main Title -->
            <h1 class="text-6xl sm:text-7xl lg:text-8xl font-black mb-6 leading-tight drop-shadow-lg">
                Aktiviti
                <!-- Accent text color using the vibrant accent variable -->
                <span > Kampung</span>
            </h1>

            <!-- Subtitle/Description -->
            <p class="text-lg md:text-xl font-light mb-16 max-w-3xl mx-auto px-4 drop-shadow-md">
                Pelbagai program dan aktiviti untuk pembangunan komuniti
            </p>

        </div>
    </section>
   
    <!-- aktiviti dan pengunguman baru -->
    @php

        // Define the custom gradient for headings and primary elements
        $gradientClass = "bg-gradient-to-r from-primary to-tertiary";

        // --- Data Mockup Aktiviti (5 items) ---
        $aktivitiList = [
            ['date' => '2024', 'title' => 'Program Service Learning Malaysia University For Society (SULAM 2024)', 'description' => 'Bertempat di Dewan Orang Ramai Kampung Budiman telah diadakan Program Service Learning Malaysia University For Society (SULAM 2024) bersama penduduk Kampung Budiman dengan kerjasama mahasiswa UTM.', 'tags' => ['Pendidikan', 'Kerjasama UTM', 'Komuniti'], 'image_urls' => [
                'https://placehold.co/600x400/D0D0D0/202020?text=SULAM+Gambar+1',
                'https://placehold.co/600x400/C0C0C0/303030?text=SULAM+Gambar+2',
                'https://placehold.co/600x400/E0E0E0/101010?text=SULAM+Gambar+3',
            ]],
            ['date' => '2024', 'title' => 'Gotong Royong Perdana Kawasan Balai Raya', 'description' => 'Semua ahli komuniti dijemput hadir dalam aktiviti gotong royong membersihkan kawasan Balai Raya bagi persiapan majlis akan datang.', 'tags' => ['Komuniti', 'Gotong Royong', 'Kebersihan'], 'image_urls' => [
                'https://placehold.co/600x400/A0A0A0/101010?text=Gotong+Royong+1',
                'https://placehold.co/600x400/B0B0B0/202020?text=Gotong+Royong+2',
            ]],
            ['date' => '2024', 'title' => 'Kursus Digital Marketing untuk Usahawan Tempatan', 'description' => 'Kelas intensif bagi membantu usahawan kampung mempelajari asas pemasaran digital dan e-dagang untuk meningkatkan jualan.', 'tags' => ['Perniagaan', 'Latihan', 'Digital'], 'image_urls' => [
                'https://placehold.co/600x400/F0F0F0/505050?text=Kursus+Digital+1',
                'https://placehold.co/600x400/D5D5D5/404040?text=Kursus+Digital+2',
            ]],
            ['date' => '2025', 'title' => 'Kempen Derma Darah Tahunan', 'description' => 'Kerjasama dengan Hospital Besar untuk mengendalikan kempen derma darah bagi membantu masyarakat setempat.', 'tags' => ['Kesihatan', 'Komuniti'], 'image_urls' => [
                'https://placehold.co/600x400/E5E5E5/303030?text=Derma+Darah+1',
            ]],
            ['date' => '2025', 'title' => 'Sesi Ceramah Pembangunan Keluarga', 'description' => 'Sesi ceramah yang memberi fokus kepada komunikasi dan pengurusan kewangan dalam institusi keluarga.', 'tags' => ['Keluarga', 'Pembangunan', 'Ilmu'], 'image_urls' => [
                'https://placehold.co/600x400/B5B5B5/808080?text=Ceramah+Keluarga+1',
            ]],
        ];

        // --- Data Mockup Pengumuman ---
        $pengumumanList = [
            ['date' => 'September 28, 2025', 'text' => 'Pendaftaran Program Mahabbah Kasih kini dibuka. Sila tekan link dibawah untuk mendaftar.'],
            ['date' => 'September 28, 2025', 'text' => 'Sila Klik Pwkelling TNC HEP Bil. 11/2025.', 'new' => true],
            ['date' => 'September 25, 2025', 'text' => 'Pendaftaran Program Mahabbah Kasih kini dibuka. Sila tekan link dibawah untuk mendaftar.'],
            ['date' => 'September 25, 2025', 'text' => 'Sila Klik Pwkelling TNC HEP Bil. 11/2025.', 'new' => true],
            ['date' => 'September 20, 2025', 'text' => 'Notis Pemakluman Mesyuarat Agung Tahunan akan diadakan pada 10 Oktober 2025.'],
        ];
    @endphp

    <section class="py-16 md:py-20 bg-gray-50 font-sans">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <!-- Kiri: Senarai Aktiviti (FULL SECTION) -->
                <div class="lg:col-span-2">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 border-b-2 border-gray-200 pb-2">
                        Senarai Aktiviti Terbaru
                    </h3>

                    <div class="space-y-6">
                        @foreach ($aktivitiList as $index => $aktiviti)
                        
                        <!-- Card Aktiviti dengan Carousel Gambar -->
                        <div class="activity-card bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden transform transition duration-500 ease-in-out hover:shadow-xl hover:scale-[1.01] grid grid-cols-1 md:grid-cols-3" data-card-index="{{ $index }}">
                            
                            <!-- Carousel Gambar (Kiri) -->
                            <div class="md:col-span-1 relative h-56 md:h-full overflow-hidden" id="carousel-{{ $index }}">
                                
                                @foreach ($aktiviti['image_urls'] as $imgIndex => $imageUrl)
                                <!-- Gambar Carousel -->
                                <img src="{{ $imageUrl }}" 
                                    alt="Gambar Aktiviti {{ $index + 1 }} - {{ $imgIndex + 1 }}" 
                                    class="carousel-img absolute top-0 left-0 w-full h-full object-cover transition duration-700 ease-in-out"
                                    data-img-index="{{ $imgIndex }}"
                                    style="opacity: {{ $imgIndex === 0 ? 1 : 0 }};"
                                    onerror="this.onerror=null;this.src='https://placehold.co/600x400/CCCCCC/303030?text=Gambar+Aktiviti'">
                                @endforeach
                                
                                <!-- Carousel Controls (Simple Dots) -->
                                <div class="absolute bottom-2 left-0 right-0 flex justify-center space-x-2 p-1">
                                    @foreach ($aktiviti['image_urls'] as $imgIndex => $imageUrl)
                                        <button class="carousel-dot-{{ $index }} w-2 h-2 rounded-full transition duration-300" 
                                                data-img-index="{{ $imgIndex }}"
                                                style="bg-primary"></button>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Kandungan (Kanan) -->
                            <div class="md:col-span-2 p-6 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-start mb-2">
                                        <!-- Date Badge (Mockup original image style) -->
                                        <span class="px-3 py-1 text-xs font-medium rounded-full text-white {{ $gradientClass }}">
                                            {{ $aktiviti['date'] }}
                                        </span>
                                    </div>
                                    
                                    <h4 class="text-xl font-bold text-gray-900 mb-3">{{ $aktiviti['title'] }}</h4>
                                    <p class="text-gray-600 mb-4 text-sm line-clamp-3">{{ $aktiviti['description'] }}</p>
                                </div>
                                
                                <div class="flex flex-wrap gap-2 mt-auto pt-3 border-t border-gray-100">
                                    @foreach ($aktiviti['tags'] as $tag)
                                        <!-- Menggunakan warna secondary untuk tag -->
                                        <span class="px-3 py-1 text-xs font-medium rounded-full text-white bg-secondary shadow-sm">
                                            # {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Kanan: Pengumuman (FULL SECTION) -->
                <div class="lg:col-span-1 bg-white rounded-xl shadow-xl overflow-hidden border border-gray-200 h-fit sticky top-6">
                    
                    <!-- Header Pengumuman dengan Gradien -->
                    <div class="p-4 text-center text-white font-bold text-lg uppercase {{ $gradientClass }}">
                        Pengumuman Terkini
                    </div>

                    <!-- Senarai Pengumuman -->
                    <div class="p-5 divide-y divide-gray-100">
                        @foreach ($pengumumanList as $pengumuman)
                            <div class="py-3">
                                <p class="text-xs text-gray-500 mb-1">{{ $pengumuman['date'] }}</p>
                                <p class="text-sm text-gray-800 leading-relaxed">
                                    
                                    <!-- Ikon Loceng -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2 inline text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M10.36 21a2 2 0 0 0 3.28 0"/></svg>
                                    
                                    {{ $pengumuman['text'] }}
                                    
                                    @if (isset($pengumuman['new']) && $pengumuman['new'])
                                        <!-- 'Baru!' dengan animasi kelip-kelip (animate-pulse) dan warna merah terang -->
                                        <span class="text-red-600 font-extrabold ml-1 animate-pulse">
                                            Baru!
                                        </span>
                                    @endif
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- JavaScript untuk Carousel Imej dalam Setiap Kad Aktiviti -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const activityCards = document.querySelectorAll('.activity-card');
            const intervalTime = 4000; // 4 seconds per slide change

            activityCards.forEach(card => {
                const cardIndex = card.dataset.cardIndex;
                const images = card.querySelectorAll(`#carousel-${cardIndex} .carousel-img`);
                const dots = card.querySelectorAll(`.carousel-dot-${cardIndex}`);
                let currentImgIndex = 0;

                if (images.length === 0) return;

                // Fungsi untuk menukar gambar
                function showImage(index) {
                    images.forEach((img, i) => {
                        img.style.opacity = (i === index) ? 1 : 0;
                        img.style.zIndex = (i === index) ? 10 : 1;
                    });
                    dots.forEach((dot, i) => {
                        // Warna dot aktif menggunakan primary color
                        dot.style.bg-primary;
                        dot.style.border = (i === index) ? 'none' : '1px solid #ccc';
                    });
                    currentImgIndex = index;
                }

                // Fungsi untuk menukar kepada gambar seterusnya
                function nextImage() {
                    let newIndex = (currentImgIndex + 1) % images.length;
                    showImage(newIndex);
                }
                
                // Auto-play interval untuk setiap kad
                setInterval(nextImage, intervalTime);

                // Event listener untuk dots (jika user klik secara manual)
                dots.forEach(dot => {
                    dot.addEventListener('click', (e) => {
                        const index = parseInt(e.target.dataset.imgIndex);
                        // Reset auto-play (optional, but good practice)
                        // clearInterval(interval); 
                        showImage(index);
                    });
                });

                // Initial setup
                showImage(0);
            });
        });
    </script>

</x-app-layout>