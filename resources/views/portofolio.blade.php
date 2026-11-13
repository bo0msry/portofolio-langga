<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#FDF7EC">
    <meta name="description" content="Portofolio Sry Langga Harahap, siswa Rekayasa Perangkat Lunak SMKN 1 Karawang yang berorientasi pada desain grafis dan pengolahan data.">

    <title>Sry Langga Harahap — Portofolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500;1,9..144,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style type="text/tailwindcss">
        @theme {
            --font-sans: "Plus Jakarta Sans", ui-sans-serif, system-ui, sans-serif;
            --font-display: "Fraunces", Georgia, serif;
            --color-cream-50: #FFFDF9;
            --color-cream-100: #FDF7EC;
            --color-cream-200: #F8EEDD;
            --color-cream-300: #EFDFC6;
            --color-navy-950: #071A33;
            --color-navy-900: #0B2342;
            --color-navy-800: #102E55;
            --color-navy-700: #173B6B;
            --color-navy-600: #245184;
            --color-sky-soft: #B7D3EF;
            --color-sky-mid: #7EA6CF;
            --color-sky-deep: #4B7BAA;
            --color-pink-soft: #F8CEDC;
            --color-pink-mid: #F0ABC2;
            --color-pink-deep: #DE7FA2;
            --color-pink-ink: #A83E64;
            --color-gold: #E2B872;
        }
    </style>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 6.5rem;
        }

        body {
            background-color: #FDF7EC;
            color: #0B2342;
            font-family: "Plus Jakarta Sans", ui-sans-serif, system-ui, sans-serif;
            overflow-x: hidden;
            background-image:
                radial-gradient(circle at 8% 6%, rgba(248, 206, 220, 0.42), transparent 27rem),
                radial-gradient(circle at 94% 18%, rgba(183, 211, 239, 0.38), transparent 30rem),
                radial-gradient(circle at 50% 100%, rgba(248, 206, 220, 0.18), transparent 36rem);
            background-attachment: fixed;
        }

        ::selection {
            background: #F8CEDC;
            color: #0B2342;
        }

        :focus-visible {
            outline: 3px solid rgba(222, 127, 162, 0.65);
            outline-offset: 3px;
        }

        .font-display {
            font-family: "Fraunces", Georgia, serif;
        }

        .text-gradient {
            background: linear-gradient(115deg, #173B6B 0%, #4B7BAA 42%, #DE7FA2 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .nav-link {
            position: relative;
            padding-block: 0.35rem;
            color: rgba(11, 35, 66, 0.68);
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.01em;
            transition: color 200ms ease;
            white-space: nowrap;
        }

        .nav-link::after {
            position: absolute;
            inset-inline: 0;
            bottom: 0;
            height: 2px;
            content: "";
            border-radius: 999px;
            background: linear-gradient(90deg, #DE7FA2, #4B7BAA);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 250ms ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #0B2342;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            transform: scaleX(1);
        }

        .blob {
            position: absolute;
            border-radius: 999px;
            filter: blur(70px);
            pointer-events: none;
        }

        .avatar-halo {
            background: conic-gradient(from 140deg, #F8CEDC, #B7D3EF, #FFFDF9, #DE7FA2, #B7D3EF, #F8CEDC);
            box-shadow: 0 30px 90px -32px rgba(16, 46, 85, 0.45);
        }

        .avatar-halo::after {
            position: absolute;
            inset: 0.45rem;
            content: "";
            border-radius: 999px;
            border: 1px solid rgba(255, 253, 249, 0.9);
        }

        .reveal {
            transition:
                opacity 700ms cubic-bezier(0.22, 1, 0.36, 1),
                transform 700ms cubic-bezier(0.22, 1, 0.36, 1);
        }

        .js .reveal {
            opacity: 0;
            transform: translateY(28px);
        }

        .js .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-delay-1 {
            transition-delay: 100ms;
        }

        .reveal-delay-2 {
            transition-delay: 200ms;
        }

        .reveal-delay-3 {
            transition-delay: 300ms;
        }

        .progress-fill {
            width: var(--target);
            height: 100%;
            border-radius: 999px;
            background: linear-gradient(90deg, #4B7BAA 0%, #7EA6CF 45%, #DE7FA2 100%);
            box-shadow: 0 0 18px rgba(222, 127, 162, 0.25);
            transition: width 1400ms cubic-bezier(0.22, 1, 0.36, 1);
        }

        .js .progress-fill {
            width: 0;
        }

        .brand-card::before {
            position: absolute;
            inset: -60% auto auto -30%;
            width: 55%;
            height: 190%;
            content: "";
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.72), transparent);
            transform: rotate(24deg) translateX(-220%);
            transition: transform 700ms ease;
            pointer-events: none;
        }

        .brand-card:hover::before {
            transform: rotate(24deg) translateX(620%);
        }

        .timeline-line {
            background: linear-gradient(180deg, rgba(248, 206, 220, 0.9), rgba(183, 211, 239, 0.15));
        }

        .text-balance {
            text-wrap: balance;
        }

        .float-slow {
            animation: float 7s ease-in-out infinite;
        }

        .float-slower {
            animation: float 9s ease-in-out -3s infinite;
        }

        .spin-slow {
            animation: spin 18s linear infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-14px);
            }
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }

            .js .reveal {
                opacity: 1;
                transform: none;
            }

            .js .progress-fill {
                width: var(--target);
            }
        }
    </style>

    <script>
        document.documentElement.classList.add('js');
    </script>
</head>

<body class="antialiased">
    @php
        $navItems = [
            ['id' => 'beranda', 'label' => 'Beranda'],
            ['id' => 'tentang', 'label' => 'Tentang Saya'],
            ['id' => 'pengalaman', 'label' => 'Pengalaman'],
            ['id' => 'pendidikan', 'label' => 'Pendidikan & Organisasi'],
            ['id' => 'keahlian', 'label' => 'Keahlian'],
            ['id' => 'sertifikasi', 'label' => 'Sertifikasi'],
            ['id' => 'brand-partner', 'label' => 'Brand Partner'],
            ['id' => 'kontak', 'label' => 'Kontak'],
        ];

        $personalDetails = [
            [
                'icon' => 'fa-brands fa-whatsapp',
                'label' => 'Telepon / WhatsApp',
                'value' => '+62 838-7050-3305',
                'href' => 'https://wa.me/6283870503305',
                'external' => true,
            ],
            [
                'icon' => 'fa-regular fa-envelope',
                'label' => 'Email',
                'value' => 'srylangga@gmail.com',
                'href' => 'mailto:srylangga@gmail.com',
                'external' => false,
            ],
            [
                'icon' => 'fa-regular fa-calendar-days',
                'label' => 'Tempat, Tanggal Lahir',
                'value' => 'Karawang, 25 Juni 2009',
                'href' => null,
                'external' => false,
            ],
            [
                'icon' => 'fa-solid fa-location-dot',
                'label' => 'Lokasi',
                'value' => 'Karawang, Jawa Barat',
                'href' => null,
                'external' => false,
            ],
        ];

        $experiences = [
            [
                'company' => 'PT. Nipro Indonesia Jaya',
                'role' => 'Production',
                'period' => 'September 2025 — Desember 2025',
                'mark' => 'NP',
                'accent' => 'pink',
                'achievements' => [
                    'Memeriksa dan memisahkan produk cacat (NG) sesuai kriteria standar PT Nipro Indonesia.',
                    'Mencatat dan mengelompokkan hasil produk NG untuk pelaporan kontrol kualitas harian.',
                    'Bekerja sama dengan tim produksi untuk meminimalkan tingkat cacat produk dan menjaga kelancaran target harian.',
                ],
            ],
            [
                'company' => 'PT. Teraoka Seisakusho Indonesia',
                'role' => 'Quality Control',
                'period' => 'Januari 2026 — April 2026',
                'mark' => 'TS',
                'accent' => 'blue',
                'achievements' => [
                    'Menyusun laporan harian terkait status kelayakan produk serta temuan cacat (Not Good) untuk mendukung analisis kualitas.',
                    'Melakukan scanning barcode data barang untuk pencatatan dan pelacakan status kualitas secara real-time.',
                    'Memastikan ketepatan alur pendataan produk agar sesuai dengan standar prosedur operasional (SOP) perusahaan.',
                ],
            ],
        ];

        $organizations = [
            [
                'name' => 'OSIS SMKN 1 Karawang',
                'role' => 'Seksi Bidang 9 — Publikasi, Dokumentasi, & Teknologi',
                'period' => '2024 — 2026',
                'icon' => 'fa-solid fa-bullhorn',
                'tone' => 'pink',
            ],
            [
                'name' => 'Duta Sekolah SMKN 1 Karawang',
                'role' => 'Duta Sekolah',
                'period' => '2026',
                'icon' => 'fa-solid fa-star',
                'tone' => 'blue',
            ],
            [
                'name' => 'Duta Generasi Remaja Indonesia',
                'role' => 'Duta Generasi Remaja Indonesia',
                'period' => '2026',
                'icon' => 'fa-solid fa-seedling',
                'tone' => 'cream',
            ],
        ];

        $hardSkills = [
            [
                'name' => 'Microsoft Office',
                'description' => 'Dokumen, spreadsheet, dan presentasi',
                'icon' => 'fa-solid fa-file-lines',
            ],
            [
                'name' => 'Canva',
                'description' => 'Desain konten dan materi visual',
                'icon' => 'fa-solid fa-palette',
            ],
            [
                'name' => 'HTML & CSS',
                'description' => 'Dasar struktur dan styling web',
                'icon' => 'fa-solid fa-code',
            ],
            [
                'name' => 'Fotografi & Videografi',
                'description' => 'Produksi visual dan dokumentasi',
                'icon' => 'fa-solid fa-camera-retro',
            ],
        ];

        $softSkills = [
            ['name' => 'Komunikasi', 'score' => 9, 'icon' => 'fa-regular fa-comments'],
            ['name' => 'Pekerja Keras', 'score' => 9, 'icon' => 'fa-solid fa-fire-flame-curved'],
            ['name' => 'Kepemimpinan', 'score' => 9, 'icon' => 'fa-solid fa-people-group'],
            ['name' => 'Ketelitian', 'score' => 8, 'icon' => 'fa-solid fa-magnifying-glass'],
        ];

        $languages = [
            ['name' => 'Indonesia', 'score' => 10, 'level' => 'Native / Aktif'],
            ['name' => 'Inggris', 'score' => 8, 'level' => 'Menengah / Aktif'],
        ];

        $certifications = [
            [
                'title' => 'Lomba Poster FPSH Jabar',
                'description' => 'Mengasah kreativitas visual melalui karya poster dalam ajang tingkat Jawa Barat.',
                'icon' => 'fa-solid fa-paintbrush',
                'tag' => 'Kompetisi',
            ],
            [
                'title' => 'Community Sahabat Aisyah Batch 4',
                'description' => 'Berpartisipasi dalam komunitas pengembangan diri, kepemimpinan, dan kontribusi sosial.',
                'icon' => 'fa-solid fa-people-roof',
                'tag' => 'Komunitas',
            ],
            [
                'title' => 'Runner Up 7 Duta Generasi Remaja Indonesia',
                'description' => 'Meraih posisi Runner Up dalam ajang Duta Generasi Remaja Indonesia ke-7.',
                'icon' => 'fa-solid fa-trophy',
                'tag' => 'Prestasi',
            ],
        ];

        $brandPartners = [
            ['name' => 'Chierra', 'logo' => 'chierra.jpg', 'category' => 'Beauty & Lifestyle'],
            ['name' => 'Glowbe', 'logo' => 'glowbe.jpg', 'category' => 'Beauty & Lifestyle'],
            ['name' => 'Heura', 'logo' => 'heura.png', 'category' => 'Beauty & Lifestyle'],
            ['name' => 'Lea Gloria', 'logo' => 'lea-gloria.png', 'category' => 'Beauty & Lifestyle'],
            ['name' => 'Maybelline', 'logo' => 'maybeline.png', 'category' => 'Beauty & Lifestyle'],
            ['name' => 'Nivea', 'logo' => 'nivea.webp', 'category' => 'Beauty & Lifestyle'],
            ['name' => 'Pigeon Teens', 'logo' => 'pigeon-teens.png', 'category' => 'Beauty & Lifestyle'],
            ['name' => 'Pinkflash', 'logo' => 'pinkflash.jpg', 'category' => 'Beauty & Lifestyle'],
            ['name' => 'Pixy', 'logo' => 'pixy.jpg', 'category' => 'Beauty & Lifestyle'],
            ['name' => 'Some By Mi', 'logo' => 'somebymi.png', 'category' => 'Beauty & Lifestyle'],
            ['name' => 'Vaseline', 'logo' => 'vaseline-optimized.jpg', 'category' => 'Beauty & Lifestyle'],
            ['name' => 'Wardah', 'logo' => 'wardah.jpg', 'category' => 'Beauty & Lifestyle'],
        ];

        $socialLinks = [
            ['label' => 'WhatsApp', 'icon' => 'fa-brands fa-whatsapp', 'url' => 'https://wa.me/6283870503305'],
            ['label' => 'Email', 'icon' => 'fa-regular fa-envelope', 'url' => 'mailto:srylangga@gmail.com'],
            // Ganti tautan di bawah dengan URL media sosial milikmu.
            ['label' => 'Instagram', 'icon' => 'fa-brands fa-instagram', 'url' => 'https://www.instagram.com/'],
            ['label' => 'LinkedIn', 'icon' => 'fa-brands fa-linkedin-in', 'url' => 'https://www.linkedin.com/'],
        ];
    @endphp

    <a href="#beranda" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-full focus:bg-navy-900 focus:px-5 focus:py-3 focus:text-sm focus:font-semibold focus:text-cream-50">
        Lewati ke konten utama
    </a>

    <header id="site-header" class="fixed inset-x-0 top-0 z-50 transition-all duration-300">
        <div class="mx-auto max-w-7xl px-4 pt-4 sm:px-6 lg:px-8">
            <nav id="navbar" class="flex items-center justify-between gap-4 rounded-[1.75rem] border border-white/70 bg-cream-50/72 px-4 py-3 shadow-[0_16px_50px_-30px_rgba(11,35,66,0.5)] backdrop-blur-xl transition-all duration-300 sm:px-5" aria-label="Navigasi utama">
                <a href="#beranda" class="group flex shrink-0 items-center gap-3" aria-label="Sry Langga Harahap — Beranda">
                    <span class="relative flex h-11 w-11 items-center justify-center overflow-hidden rounded-2xl bg-navy-900 text-cream-50 shadow-lg shadow-navy-900/15 transition-transform duration-300 group-hover:-rotate-3 group-hover:scale-105">
                        <span class="font-display text-lg font-semibold">SL</span>
                        <span class="absolute -right-2 -top-2 h-5 w-5 rounded-full bg-pink-soft/90 blur-[1px]"></span>
                        <span class="absolute -bottom-2 -left-2 h-5 w-5 rounded-full bg-sky-soft/80 blur-[1px]"></span>
                    </span>
                    <span class="leading-tight">
                        <span class="block text-sm font-bold tracking-tight text-navy-900">Sry Langga Harahap</span>
                        <span class="mt-0.5 block text-[9px] font-bold uppercase tracking-[0.22em] text-navy-600/65">Creative &amp; Data</span>
                    </span>
                </a>

                <div class="hidden items-center gap-5 xl:flex">
                    @foreach ($navItems as $item)
                        <a href="#{{ $item['id'] }}" class="nav-link" data-nav-link>{{ $item['label'] }}</a>
                    @endforeach
                </div>

                <button id="menu-toggle" type="button" class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl border border-navy-900/10 bg-white/60 text-navy-900 transition-colors hover:bg-pink-soft/50 xl:hidden" aria-controls="mobile-menu" aria-expanded="false" aria-label="Buka menu navigasi">
                    <i id="menu-icon" class="fa-solid fa-bars text-base" aria-hidden="true"></i>
                </button>
            </nav>

            <div id="mobile-menu" class="pointer-events-none max-h-0 overflow-hidden opacity-0 transition-all duration-500 ease-out xl:hidden">
                <div class="mt-3 rounded-[1.75rem] border border-white/70 bg-cream-50/95 p-3 shadow-[0_24px_70px_-32px_rgba(11,35,66,0.55)] backdrop-blur-xl">
                    <div class="grid gap-1 sm:grid-cols-2">
                        @foreach ($navItems as $item)
                            <a href="#{{ $item['id'] }}" class="mobile-nav-link flex items-center justify-between rounded-2xl px-4 py-3 text-sm font-semibold text-navy-700 transition-colors hover:bg-pink-soft/35 hover:text-navy-900" data-nav-link>
                                <span>{{ $item['label'] }}</span>
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-navy-600/45" aria-hidden="true"></i>
                            </a>
                        @endforeach
                    </div>
                    <a href="https://wa.me/6283870503305" target="_blank" rel="noopener noreferrer" class="mt-2 flex items-center justify-center gap-2 rounded-2xl bg-navy-900 px-4 py-3 text-sm font-semibold text-cream-50 transition-colors hover:bg-navy-800">
                        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                        Hubungi Saya
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main id="main-content">
        {{-- Hero --}}
        <section id="beranda" class="relative overflow-hidden pb-20 pt-32 sm:pt-36 lg:pb-28 lg:pt-44">
            <div class="blob -left-24 top-16 h-72 w-72 bg-pink-soft/60"></div>
            <div class="blob -right-24 top-24 h-96 w-96 bg-sky-soft/55"></div>
            <div class="blob bottom-0 left-1/3 h-64 w-64 bg-cream-300/50"></div>

            <div class="relative mx-auto grid max-w-7xl items-center gap-14 px-4 sm:px-6 lg:grid-cols-[1.04fr_0.96fr] lg:gap-10 lg:px-8">
                <div class="reveal">
                    <div class="inline-flex items-center gap-2 rounded-full border border-navy-900/10 bg-white/60 px-4 py-2 text-[10px] font-bold uppercase tracking-[0.2em] text-navy-700 shadow-sm backdrop-blur">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-pink-deep opacity-60"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-pink-deep"></span>
                        </span>
                        Portofolio · 2026
                    </div>

                    <h1 class="mt-6 font-display text-[3.3rem] font-semibold leading-[0.94] tracking-[-0.04em] text-navy-900 sm:text-7xl lg:text-[5.25rem] xl:text-[5.7rem]">
                        <span class="block">Sry Langga</span>
                        <span class="text-gradient block italic">Harahap.</span>
                    </h1>

                    <p class="mt-6 max-w-xl text-lg font-medium leading-relaxed text-navy-700 sm:text-xl">
                        Berorientasi pada
                        <span class="relative inline-block font-bold text-navy-900">
                            Desain Grafis
                            <span class="absolute -bottom-1 left-0 h-1.5 w-full -rotate-1 rounded-full bg-pink-soft/80"></span>
                        </span>
                        dan
                        <span class="relative inline-block font-bold text-navy-900">
                            Pengolahan Data
                            <span class="absolute -bottom-1 left-0 h-1.5 w-full rotate-1 rounded-full bg-sky-soft/90"></span>
                        </span>.
                    </p>

                    <p class="mt-5 max-w-xl text-sm leading-7 text-navy-700/75 sm:text-base">
                        Siswa Rekayasa Perangkat Lunak di SMKN 1 Karawang yang senang mengubah ide menjadi karya visual dan data yang bermakna.
                    </p>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
                        <a href="#kontak" class="group inline-flex items-center justify-center gap-3 rounded-full bg-navy-900 px-6 py-3.5 text-sm font-semibold text-cream-50 shadow-xl shadow-navy-900/20 transition-all duration-300 hover:-translate-y-0.5 hover:bg-navy-800 hover:shadow-2xl hover:shadow-navy-900/25">
                            <i class="fa-solid fa-paper-plane text-xs transition-transform duration-300 group-hover:-translate-y-0.5 group-hover:translate-x-0.5" aria-hidden="true"></i>
                            Hubungi Saya
                            <i class="fa-solid fa-arrow-right text-[10px] transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
                        </a>
                        <a href="{{ asset('files/CV-Sry-Langga-Harahap.pdf') }}" download class="group inline-flex items-center justify-center gap-3 rounded-full border border-navy-900/15 bg-white/60 px-6 py-3.5 text-sm font-semibold text-navy-900 shadow-sm backdrop-blur transition-all duration-300 hover:-translate-y-0.5 hover:border-pink-deep/35 hover:bg-pink-soft/35">
                            <i class="fa-solid fa-download text-xs transition-transform duration-300 group-hover:translate-y-0.5" aria-hidden="true"></i>
                            Unduh CV
                        </a>
                    </div>

                    <div class="mt-10 grid max-w-lg grid-cols-3 gap-3">
                        <div class="rounded-2xl border border-white/70 bg-white/45 px-3 py-4 text-center shadow-sm backdrop-blur">
                            <span class="counter-value font-display text-3xl font-semibold text-navy-900" data-count="2" data-suffix="+">2+</span>
                            <span class="mt-1 block text-[10px] font-bold uppercase tracking-[0.12em] text-navy-600/70">Pengalaman PKL</span>
                        </div>
                        <div class="rounded-2xl border border-white/70 bg-white/45 px-3 py-4 text-center shadow-sm backdrop-blur">
                            <span class="counter-value font-display text-3xl font-semibold text-navy-900" data-count="3" data-suffix="">3</span>
                            <span class="mt-1 block text-[10px] font-bold uppercase tracking-[0.12em] text-navy-600/70">Organisasi</span>
                        </div>
                        <div class="rounded-2xl border border-white/70 bg-white/45 px-3 py-4 text-center shadow-sm backdrop-blur">
                            <span class="counter-value font-display text-3xl font-semibold text-navy-900" data-count="3" data-suffix="">3</span>
                            <span class="mt-1 block text-[10px] font-bold uppercase tracking-[0.12em] text-navy-600/70">Sertifikasi</span>
                        </div>
                    </div>
                </div>

                <div class="reveal reveal-delay-2">
                    <div class="relative mx-auto w-full max-w-md lg:max-w-lg">
                        <div class="absolute inset-6 rounded-full bg-gradient-to-br from-pink-soft/75 via-cream-50/30 to-sky-soft/80 blur-3xl"></div>

                        <div class="absolute -inset-2 hidden rounded-full border border-dashed border-navy-900/15 sm:block"></div>

                        <div class="relative mx-auto aspect-square w-[82%] max-w-[26rem]">
                            <div class="avatar-halo absolute -inset-3 rounded-full p-[3px]">
                                <div class="h-full w-full rounded-full bg-cream-50"></div>
                            </div>

                            <div class="absolute inset-0 overflow-hidden rounded-full border-[9px] border-cream-50 bg-gradient-to-br from-pink-soft via-cream-100 to-sky-soft shadow-2xl shadow-navy-900/20">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="font-display text-8xl font-semibold text-navy-900/10">SL</span>
                                </div>
                                <img
                                    src="{{ asset('images/foto-profil.jpg') }}"
                                    alt="Foto Sry Langga Harahap"
                                    class="relative h-full w-full rounded-full object-cover object-center"
                                    loading="eager"
                                    fetchpriority="high"
                                    decoding="async"
                                    onerror="this.classList.add('opacity-0')"
                                >
                                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-navy-900/12 via-transparent to-pink-soft/10"></div>
                            </div>

                            <div class="float-slow absolute -right-3 top-[13%] flex items-center gap-2 rounded-2xl border border-white/80 bg-cream-50/90 px-3 py-2 shadow-xl shadow-navy-900/10 backdrop-blur sm:-right-6">
                                <span class="flex h-8 w-8 items-center justify-center rounded-xl bg-pink-soft text-pink-ink">
                                    <i class="fa-solid fa-wand-magic-sparkles text-xs" aria-hidden="true"></i>
                                </span>
                                <span class="pr-1">
                                    <span class="block text-[9px] font-bold uppercase tracking-[0.12em] text-navy-600/60">Fokus</span>
                                    <span class="block text-xs font-bold text-navy-900">Graphic Design</span>
                                </span>
                            </div>

                            <div class="float-slower absolute -left-4 bottom-[16%] flex items-center gap-2 rounded-2xl border border-white/80 bg-cream-50/90 px-3 py-2 shadow-xl shadow-navy-900/10 backdrop-blur sm:-left-8">
                                <span class="flex h-8 w-8 items-center justify-center rounded-xl bg-sky-soft text-navy-800">
                                    <i class="fa-solid fa-chart-simple text-xs" aria-hidden="true"></i>
                                </span>
                                <span class="pr-1">
                                    <span class="block text-[9px] font-bold uppercase tracking-[0.12em] text-navy-600/60">Fokus</span>
                                    <span class="block text-xs font-bold text-navy-900">Data Management</span>
                                </span>
                            </div>

                            <div class="absolute -bottom-4 right-[18%] flex items-center gap-2 rounded-full border border-white/80 bg-navy-900 px-4 py-2 text-cream-50 shadow-xl shadow-navy-900/20">
                                <span class="h-1.5 w-1.5 rounded-full bg-pink-soft"></span>
                                <span class="text-[9px] font-bold uppercase tracking-[0.16em]">Open to collaborate</span>
                            </div>

                            <div class="absolute -left-1 top-1 flex h-14 w-14 items-center justify-center rounded-full border border-white/80 bg-cream-50/90 text-pink-deep shadow-lg backdrop-blur sm:-left-3">
                                <i class="fa-solid fa-star text-sm" aria-hidden="true"></i>
                            </div>

                            <div class="spin-slow absolute -right-1 bottom-1 flex h-16 w-16 items-center justify-center rounded-full border border-dashed border-navy-900/20">
                                <span class="h-2 w-2 rounded-full bg-pink-deep"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#tentang" class="relative mx-auto mt-16 hidden w-fit flex-col items-center gap-2 text-[9px] font-bold uppercase tracking-[0.24em] text-navy-600/50 transition-colors hover:text-navy-900 sm:flex">
                Kenali saya
                <span class="flex h-9 w-5 items-start justify-center rounded-full border border-navy-900/20 p-1">
                    <span class="h-2 w-1 animate-bounce rounded-full bg-pink-deep"></span>
                </span>
            </a>
        </section>

        {{-- Tentang Saya --}}
        <section id="tentang" class="relative py-24 sm:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="reveal mx-auto max-w-2xl text-center">
                    <span class="inline-flex items-center gap-2 rounded-full border border-pink-deep/15 bg-pink-soft/35 px-4 py-2 text-[10px] font-bold uppercase tracking-[0.2em] text-pink-ink">
                        <span class="h-1.5 w-1.5 rounded-full bg-pink-deep"></span>
                        Tentang Saya
                    </span>
                    <h2 class="mt-5 font-display text-4xl font-semibold tracking-tight text-navy-900 sm:text-5xl">
                        Profil singkat, <span class="text-gradient italic">cerita panjang.</span>
                    </h2>
                    <p class="mt-4 text-sm leading-7 text-navy-700/70 sm:text-base">
                        Perjalanan saya bertemu di antara kreativitas visual, ketelitian data, dan keinginan untuk terus belajar.
                    </p>
                </div>

                <div class="mt-12 grid gap-6 lg:grid-cols-12">
                    <article class="reveal relative overflow-hidden rounded-[2rem] border border-white/80 bg-white/55 p-7 shadow-[0_24px_80px_-48px_rgba(11,35,66,0.55)] backdrop-blur sm:p-10 lg:col-span-7">
                        <div class="absolute -right-16 -top-16 h-44 w-44 rounded-full bg-pink-soft/50 blur-3xl"></div>
                        <div class="absolute -bottom-16 -left-10 h-44 w-44 rounded-full bg-sky-soft/40 blur-3xl"></div>

                        <div class="relative">
                            <div class="flex items-center justify-between gap-4">
                                <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-navy-900 text-cream-50 shadow-lg shadow-navy-900/15">
                                    <i class="fa-solid fa-quote-left text-lg" aria-hidden="true"></i>
                                </span>
                                <span class="rounded-full border border-navy-900/10 bg-cream-50/80 px-3 py-1.5 text-[9px] font-bold uppercase tracking-[0.16em] text-navy-600/65">
                                    Siswa RPL · SMKN 1 Karawang
                                </span>
                            </div>

                            <p class="mt-8 font-display text-2xl font-medium leading-relaxed text-navy-900 sm:text-3xl">
                                “Saya percaya karya yang baik lahir dari rasa ingin tahu, ketelitian, dan keberanian untuk mencoba.”
                            </p>

                            <p class="mt-6 text-sm leading-7 text-navy-700/75 sm:text-base">
                                Saya adalah siswa Rekayasa Perangkat Lunak (RPL) di SMKN 1 Karawang yang memiliki minat yang kuat di bidang IT. Saya memiliki kemampuan komunikasi yang kuat, serta semangat belajar yang tinggi. Saya disiplin, teliti, dan siap belajar serta berkontribusi.
                            </p>

                            <div class="mt-8 flex flex-wrap gap-2">
                                <span class="rounded-full border border-navy-900/10 bg-cream-100/80 px-3 py-1.5 text-xs font-semibold text-navy-700">Desain Grafis</span>
                                <span class="rounded-full border border-navy-900/10 bg-cream-100/80 px-3 py-1.5 text-xs font-semibold text-navy-700">Pengolahan Data</span>
                                <span class="rounded-full border border-navy-900/10 bg-cream-100/80 px-3 py-1.5 text-xs font-semibold text-navy-700">Komunikasi</span>
                                <span class="rounded-full border border-navy-900/10 bg-cream-100/80 px-3 py-1.5 text-xs font-semibold text-navy-700">Quality Control</span>
                            </div>

                            <div class="mt-8 flex items-center gap-3 border-t border-navy-900/10 pt-6">
                                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-pink-soft/70 text-pink-ink">
                                    <i class="fa-solid fa-location-arrow text-xs" aria-hidden="true"></i>
                                </span>
                                <div>
                                    <span class="block text-xs font-bold text-navy-900">Berbasis di Karawang, Jawa Barat</span>
                                    <span class="block text-[11px] text-navy-600/60">Terbuka untuk kolaborasi, proyek kreatif, dan pengembangan diri.</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <aside class="reveal reveal-delay-2 flex flex-col gap-4 lg:col-span-5">
                        <div class="relative flex-1 overflow-hidden rounded-[2rem] bg-navy-900 p-7 text-cream-50 shadow-[0_30px_80px_-36px_rgba(11,35,66,0.9)] sm:p-8">
                            <div class="absolute -right-14 -top-14 h-40 w-40 rounded-full bg-pink-deep/25 blur-3xl"></div>
                            <div class="absolute -bottom-16 -left-16 h-44 w-44 rounded-full bg-sky-mid/20 blur-3xl"></div>

                            <div class="relative">
                                <span class="text-[10px] font-bold uppercase tracking-[0.22em] text-sky-soft/75">Data Diri</span>
                                <h3 class="mt-2 font-display text-2xl font-semibold">Mari berkenalan.</h3>

                                <div class="mt-6 grid gap-3">
                                    @foreach ($personalDetails as $detail)
                                        <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/[0.055] p-3.5 transition-colors hover:bg-white/[0.09]">
                                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white/10 text-pink-soft">
                                                <i class="{{ $detail['icon'] }} text-xs" aria-hidden="true"></i>
                                            </span>
                                            <div class="min-w-0">
                                                <span class="block text-[9px] font-bold uppercase tracking-[0.15em] text-cream-50/45">{{ $detail['label'] }}</span>
                                                @if ($detail['href'])
                                                    <a
                                                        href="{{ $detail['href'] }}"
                                                        @if ($detail['external']) target="_blank" rel="noopener noreferrer" @endif
                                                        class="mt-0.5 block break-words text-xs font-semibold text-cream-50 transition-colors hover:text-pink-soft"
                                                    >
                                                        {{ $detail['value'] }}
                                                    </a>
                                                @else
                                                    <span class="mt-0.5 block break-words text-xs font-semibold text-cream-50">{{ $detail['value'] }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <a href="#kontak" class="group flex items-center justify-between gap-4 rounded-[1.75rem] border border-pink-deep/15 bg-pink-soft/45 p-5 transition-all duration-300 hover:-translate-y-1 hover:bg-pink-soft/65">
                            <div>
                                <span class="block text-[9px] font-bold uppercase tracking-[0.18em] text-pink-ink/65">Punya proyek atau peluang?</span>
                                <span class="mt-1 block font-display text-lg font-semibold text-navy-900">Mari bicara bersama.</span>
                            </div>
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-navy-900 text-cream-50 transition-transform duration-300 group-hover:rotate-45">
                                <i class="fa-solid fa-arrow-up-right-from-square text-xs" aria-hidden="true"></i>
                            </span>
                        </a>
                    </aside>
                </div>
            </div>
        </section>

        {{-- Pengalaman --}}
        <section id="pengalaman" class="relative overflow-hidden bg-navy-950 py-24 text-cream-50 sm:py-28">
            <div class="blob -left-24 top-16 h-80 w-80 bg-sky-mid/20"></div>
            <div class="blob -right-24 bottom-0 h-96 w-96 bg-pink-deep/15"></div>
            <div class="pointer-events-none absolute inset-0 opacity-[0.06]" style="background-image: linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px); background-size: 64px 64px;"></div>

            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="reveal mx-auto max-w-2xl text-center">
                    <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.06] px-4 py-2 text-[10px] font-bold uppercase tracking-[0.2em] text-sky-soft/85">
                        <span class="h-1.5 w-1.5 rounded-full bg-pink-soft"></span>
                        Pengalaman Kerja
                    </span>
                    <h2 class="mt-5 font-display text-4xl font-semibold tracking-tight sm:text-5xl">
                        Belajar langsung <span class="text-pink-soft italic">di lapangan.</span>
                    </h2>
                    <p class="mt-4 text-sm leading-7 text-cream-50/55 sm:text-base">
                        Pengalaman PKL yang membentuk cara saya bekerja: teliti, komunikatif, dan bertanggung jawab terhadap kualitas.
                    </p>
                </div>

                <div class="relative mx-auto mt-14 max-w-4xl">
                    @foreach ($experiences as $experience)
                        <article class="reveal relative grid gap-5 sm:grid-cols-[auto_1fr] {{ ! $loop->last ? 'pb-8' : '' }}">
                            <div class="hidden flex-col items-center sm:flex">
                                <span class="relative z-10 flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl border {{ $experience['accent'] === 'pink' ? 'border-pink-soft/30 bg-pink-soft/15 text-pink-soft' : 'border-sky-soft/30 bg-sky-soft/15 text-sky-soft' }} font-display text-sm font-bold shadow-lg">
                                    {{ $experience['mark'] }}
                                </span>
                                @if (! $loop->last)
                                    <span class="timeline-line mt-3 h-full w-px"></span>
                                @endif
                            </div>

                            <div class="group relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/[0.055] p-6 shadow-[0_24px_70px_-42px_rgba(0,0,0,0.8)] backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:border-pink-soft/25 hover:bg-white/[0.08] sm:p-8">
                                <div class="absolute -right-20 -top-20 h-48 w-48 rounded-full bg-pink-deep/10 blur-3xl transition-colors group-hover:bg-pink-deep/20"></div>

                                <div class="relative">
                                    <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                                        <div>
                                            <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.06] px-3 py-1.5 text-[9px] font-bold uppercase tracking-[0.14em] text-cream-50/55">
                                                <i class="fa-regular fa-calendar text-[10px]" aria-hidden="true"></i>
                                                {{ $experience['period'] }}
                                            </span>
                                            <h3 class="mt-4 font-display text-2xl font-semibold text-cream-50 sm:text-3xl">{{ $experience['company'] }}</h3>
                                            <p class="mt-1 text-sm font-semibold {{ $experience['accent'] === 'pink' ? 'text-pink-soft' : 'text-sky-soft' }}">{{ $experience['role'] }}</p>
                                        </div>

                                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-white/10 bg-white/[0.06] text-cream-50/45 sm:h-12 sm:w-12">
                                            <i class="fa-solid fa-briefcase text-sm" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <ul class="mt-6 grid gap-3">
                                        @foreach ($experience['achievements'] as $achievement)
                                            <li class="flex items-start gap-3 text-sm leading-6 text-cream-50/68">
                                                <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-pink-soft/15 text-pink-soft">
                                                    <i class="fa-solid fa-check text-[9px]" aria-hidden="true"></i>
                                                </span>
                                                <span>{{ $achievement }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Pendidikan & Organisasi --}}
        <section id="pendidikan" class="relative py-24 sm:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="reveal mx-auto max-w-2xl text-center">
                    <span class="inline-flex items-center gap-2 rounded-full border border-sky-deep/15 bg-sky-soft/30 px-4 py-2 text-[10px] font-bold uppercase tracking-[0.2em] text-navy-700">
                        <span class="h-1.5 w-1.5 rounded-full bg-sky-deep"></span>
                        Pendidikan &amp; Organisasi
                    </span>
                    <h2 class="mt-5 font-display text-4xl font-semibold tracking-tight text-navy-900 sm:text-5xl">
                        Ruang untuk <span class="text-gradient italic">bertumbuh.</span>
                    </h2>
                    <p class="mt-4 text-sm leading-7 text-navy-700/70 sm:text-base">
                        Selain belajar di kelas, saya aktif mengasah kepemimpinan, komunikasi, dan rasa percaya diri melalui organisasi.
                    </p>
                </div>

                <div class="mt-12 grid gap-6 lg:grid-cols-5">
                    <article class="reveal relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-navy-900 to-navy-800 p-7 text-cream-50 shadow-[0_30px_90px_-42px_rgba(11,35,66,0.9)] sm:p-9 lg:col-span-2">
                        <div class="absolute -right-20 -top-20 h-56 w-56 rounded-full bg-pink-deep/20 blur-3xl"></div>
                        <div class="absolute -bottom-20 -left-20 h-56 w-56 rounded-full bg-sky-mid/20 blur-3xl"></div>

                        <div class="relative flex h-full flex-col">
                            <div class="flex items-center justify-between">
                                <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-sky-soft ring-1 ring-white/10">
                                    <i class="fa-solid fa-graduation-cap text-xl" aria-hidden="true"></i>
                                </span>
                                <span class="rounded-full border border-sky-soft/20 bg-sky-soft/10 px-3 py-1.5 text-[9px] font-bold uppercase tracking-[0.16em] text-sky-soft">
                                    2024 — 2027
                                </span>
                            </div>

                            <div class="mt-10">
                                <span class="text-[10px] font-bold uppercase tracking-[0.22em] text-cream-50/45">Pendidikan</span>
                                <h3 class="mt-3 font-display text-3xl font-semibold leading-tight">SMKN 1<br>Karawang</h3>
                                <p class="mt-3 text-sm font-semibold text-pink-soft">Rekayasa Perangkat Lunak / RPL</p>
                            </div>

                            <div class="mt-auto pt-10">
                                <div class="h-1.5 overflow-hidden rounded-full bg-white/10">
                                    <div class="h-full w-[45%] rounded-full bg-gradient-to-r from-pink-soft to-sky-soft"></div>
                                </div>
                                <div class="mt-3 flex items-center justify-between text-[10px] font-semibold text-cream-50/45">
                                    <span>Sedang menempuh</span>
                                    <span>2024 — 2027</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <div class="grid gap-4 sm:grid-cols-2 lg:col-span-3">
                        @foreach ($organizations as $organization)
                            <article class="reveal {{ $loop->iteration === 3 ? 'sm:col-span-2' : '' }} group relative overflow-hidden rounded-[1.75rem] border border-white/80 bg-white/55 p-6 shadow-[0_24px_70px_-50px_rgba(11,35,66,0.6)] backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:border-pink-deep/20 hover:bg-white/80 {{ $loop->iteration === 3 ? 'reveal-delay-2' : ($loop->iteration === 2 ? 'reveal-delay-1' : '') }}">
                                <div class="absolute -right-14 -top-14 h-36 w-36 rounded-full {{ $organization['tone'] === 'pink' ? 'bg-pink-soft/45' : ($organization['tone'] === 'blue' ? 'bg-sky-soft/45' : 'bg-cream-300/45') }} blur-3xl"></div>

                                <div class="relative flex h-full flex-col">
                                    <div class="flex items-start justify-between gap-4">
                                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl {{ $organization['tone'] === 'pink' ? 'bg-pink-soft/60 text-pink-ink' : ($organization['tone'] === 'blue' ? 'bg-sky-soft/75 text-navy-700' : 'bg-cream-300/80 text-navy-700') }} shadow-sm">
                                            <i class="{{ $organization['icon'] }} text-base" aria-hidden="true"></i>
                                        </span>
                                        <span class="rounded-full border border-navy-900/10 bg-cream-50/75 px-3 py-1.5 text-[9px] font-bold uppercase tracking-[0.12em] text-navy-600/65">
                                            {{ $organization['period'] }}
                                        </span>
                                    </div>

                                    <h3 class="mt-6 font-display text-xl font-semibold leading-snug text-navy-900">{{ $organization['name'] }}</h3>
                                    <p class="mt-2 text-sm leading-6 text-navy-700/65">{{ $organization['role'] }}</p>

                                    <div class="mt-auto flex items-center gap-2 pt-5 text-[10px] font-bold uppercase tracking-[0.14em] text-navy-600/50">
                                        <span class="h-px w-6 bg-pink-deep/45"></span>
                                        Organisasi
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Keahlian --}}
        <section id="keahlian" class="relative overflow-hidden py-24 sm:py-28">
            <div class="blob left-0 top-1/3 h-80 w-80 bg-pink-soft/35"></div>
            <div class="blob right-0 top-10 h-80 w-80 bg-sky-soft/35"></div>

            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="reveal mx-auto max-w-2xl text-center">
                    <span class="inline-flex items-center gap-2 rounded-full border border-pink-deep/15 bg-pink-soft/35 px-4 py-2 text-[10px] font-bold uppercase tracking-[0.2em] text-pink-ink">
                        <span class="h-1.5 w-1.5 rounded-full bg-pink-deep"></span>
                        Keahlian &amp; Bahasa
                    </span>
                    <h2 class="mt-5 font-display text-4xl font-semibold tracking-tight text-navy-900 sm:text-5xl">
                        Alat kerja, <span class="text-gradient italic">cara berpikir.</span>
                    </h2>
                    <p class="mt-4 text-sm leading-7 text-navy-700/70 sm:text-base">
                        Kombinasi kemampuan teknis dan soft skills yang saya gunakan untuk menyelesaikan pekerjaan dengan rapi.
                    </p>
                </div>

                <div class="mt-12 grid gap-6 lg:grid-cols-2">
                    <article class="reveal rounded-[2rem] border border-white/80 bg-white/45 p-6 shadow-[0_26px_80px_-54px_rgba(11,35,66,0.75)] backdrop-blur sm:p-8">
                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-navy-600/55">Hard Skills</span>
                                <h3 class="mt-2 font-display text-2xl font-semibold text-navy-900">Peralatan kreatif &amp; teknis</h3>
                            </div>
                            <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-navy-900 text-cream-50">
                                <i class="fa-solid fa-screwdriver-wrench text-sm" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="mt-6 grid gap-3 sm:grid-cols-2">
                            @foreach ($hardSkills as $skill)
                                <div class="group rounded-2xl border border-navy-900/8 bg-cream-50/75 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-pink-deep/20 hover:bg-white">
                                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-pink-soft/45 text-pink-ink transition-colors group-hover:bg-pink-soft/70">
                                        <i class="{{ $skill['icon'] }} text-sm" aria-hidden="true"></i>
                                    </span>
                                    <h4 class="mt-4 text-sm font-bold text-navy-900">{{ $skill['name'] }}</h4>
                                    <p class="mt-1 text-xs leading-5 text-navy-700/60">{{ $skill['description'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </article>

                    <article class="reveal reveal-delay-2 rounded-[2rem] bg-navy-900 p-6 text-cream-50 shadow-[0_30px_90px_-42px_rgba(11,35,66,0.9)] sm:p-8">
                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-sky-soft/65">Soft Skills</span>
                                <h3 class="mt-2 font-display text-2xl font-semibold">Cara saya bekerja</h3>
                            </div>
                            <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white/10 text-pink-soft ring-1 ring-white/10">
                                <i class="fa-solid fa-heart text-sm" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="mt-7 grid gap-5">
                            @foreach ($softSkills as $skill)
                                <div>
                                    <div class="flex items-center justify-between gap-3">
                                        <span class="flex items-center gap-2 text-sm font-semibold text-cream-50">
                                            <i class="{{ $skill['icon'] }} text-[11px] text-pink-soft/80" aria-hidden="true"></i>
                                            {{ $skill['name'] }}
                                        </span>
                                        <span class="text-xs font-bold text-sky-soft">{{ $skill['score'] }}/10</span>
                                    </div>
                                    <div class="mt-2.5 h-2 overflow-hidden rounded-full bg-white/10">
                                        <div class="progress-fill" data-width="{{ $skill['score'] * 10 }}" style="--target: {{ $skill['score'] * 10 }}%" role="progressbar" aria-valuenow="{{ $skill['score'] }}" aria-valuemin="0" aria-valuemax="10" aria-label="{{ $skill['name'] }}"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-8 border-t border-white/10 pt-6">
                            <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-sky-soft/65">Bahasa</span>
                            <div class="mt-4 grid gap-3 sm:grid-cols-2">
                                @foreach ($languages as $language)
                                    <div class="rounded-2xl border border-white/10 bg-white/[0.055] p-4">
                                        <div class="flex items-center justify-between gap-2">
                                            <span class="text-sm font-bold text-cream-50">{{ $language['name'] }}</span>
                                            <span class="text-[10px] font-bold text-pink-soft">{{ $language['score'] }}/10</span>
                                        </div>
                                        <p class="mt-1 text-[10px] font-medium text-cream-50/45">{{ $language['level'] }}</p>
                                        <div class="mt-3 flex gap-1" aria-hidden="true">
                                            @for ($dot = 1; $dot <= 10; $dot++)
                                                <span class="h-1.5 flex-1 rounded-full {{ $dot <= $language['score'] ? 'bg-gradient-to-r from-sky-soft to-pink-soft' : 'bg-white/10' }}"></span>
                                            @endfor
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        {{-- Sertifikasi & Prestasi --}}
        <section id="sertifikasi" class="relative py-24 sm:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="reveal mx-auto max-w-2xl text-center">
                    <span class="inline-flex items-center gap-2 rounded-full border border-gold/30 bg-gold/15 px-4 py-2 text-[10px] font-bold uppercase tracking-[0.2em] text-navy-700">
                        <span class="h-1.5 w-1.5 rounded-full bg-gold"></span>
                        Sertifikasi &amp; Prestasi
                    </span>
                    <h2 class="mt-5 font-display text-4xl font-semibold tracking-tight text-navy-900 sm:text-5xl">
                        Jejak <span class="text-gradient italic">pencapaian.</span>
                    </h2>
                    <p class="mt-4 text-sm leading-7 text-navy-700/70 sm:text-base">
                        Setiap pengalaman adalah kesempatan untuk belajar, berproses, dan memberi dampak.
                    </p>
                </div>

                <div class="mt-12 grid gap-5 md:grid-cols-3">
                    @foreach ($certifications as $certification)
                        <article class="reveal group relative overflow-hidden rounded-[1.75rem] border border-white/80 bg-white/55 p-6 shadow-[0_24px_70px_-52px_rgba(11,35,66,0.65)] backdrop-blur transition-all duration-300 hover:-translate-y-1.5 hover:border-pink-deep/20 hover:bg-white/85 sm:p-7 {{ $loop->iteration === 2 ? 'reveal-delay-1' : ($loop->iteration === 3 ? 'reveal-delay-2' : '') }}">
                            <div class="absolute -right-16 -top-16 h-40 w-40 rounded-full bg-pink-soft/35 blur-3xl transition-colors group-hover:bg-pink-soft/55"></div>

                            <div class="relative flex h-full flex-col">
                                <div class="flex items-start justify-between gap-4">
                                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-navy-900 text-cream-50 shadow-lg shadow-navy-900/10 transition-transform duration-300 group-hover:-rotate-6 group-hover:scale-105">
                                        <i class="{{ $certification['icon'] }} text-base" aria-hidden="true"></i>
                                    </span>
                                    <span class="rounded-full border border-navy-900/10 bg-cream-50/80 px-3 py-1.5 text-[9px] font-bold uppercase tracking-[0.14em] text-navy-600/65">
                                        {{ $certification['tag'] }}
                                    </span>
                                </div>

                                <h3 class="mt-7 font-display text-2xl font-semibold leading-snug text-navy-900">{{ $certification['title'] }}</h3>
                                <p class="mt-3 flex-1 text-sm leading-6 text-navy-700/65">{{ $certification['description'] }}</p>

                                <div class="mt-6 flex items-center gap-2 border-t border-navy-900/10 pt-5 text-[10px] font-bold uppercase tracking-[0.16em] text-navy-600/50">
                                    <span class="h-1.5 w-1.5 rounded-full bg-pink-deep"></span>
                                    Sry Langga Harahap
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Brand Partner --}}
        <section id="brand-partner" class="relative overflow-hidden bg-cream-200/60 py-24 sm:py-28">
            <div class="blob -left-24 top-10 h-80 w-80 bg-sky-soft/35"></div>
            <div class="blob -right-24 bottom-10 h-96 w-96 bg-pink-soft/40"></div>

            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="reveal mx-auto max-w-2xl text-center">
                    <span class="inline-flex items-center gap-2 rounded-full border border-navy-900/10 bg-white/55 px-4 py-2 text-[10px] font-bold uppercase tracking-[0.2em] text-navy-700">
                        <span class="h-1.5 w-1.5 rounded-full bg-sky-deep"></span>
                        Brand Partner
                    </span>
                    <h2 class="mt-5 font-display text-4xl font-semibold tracking-tight text-navy-900 sm:text-5xl">
                        Beauty brands, <span class="text-gradient italic">cerita visual.</span>
                    </h2>
                    <p class="mt-4 text-sm leading-7 text-navy-700/70 sm:text-base">
                        Brand kecantikan dan lifestyle yang pernah menjadi bagian dari perjalanan kolaborasi konten dan karya visual saya.
                    </p>

                    <div class="mt-5 inline-flex items-center gap-2 rounded-full border border-pink-deep/15 bg-pink-soft/35 px-4 py-2 text-[10px] font-bold uppercase tracking-[0.16em] text-pink-ink">
                        <i class="fa-solid fa-handshake-angle text-[11px]" aria-hidden="true"></i>
                        {{ count($brandPartners) }} Brand Collaborations
                    </div>
                </div>

                {{-- Logo brand tersimpan di public/images/brands/. --}}
                <div class="mt-12 grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-4 lg:grid-cols-4 xl:grid-cols-6">
                    @foreach ($brandPartners as $partner)
                        <article class="brand-card reveal group relative flex flex-col overflow-hidden rounded-[1.5rem] border border-white/80 bg-gradient-to-br from-white/80 via-cream-50/75 to-pink-soft/15 p-3 shadow-[0_20px_60px_-48px_rgba(11,35,66,0.7)] backdrop-blur transition-all duration-300 hover:-translate-y-1.5 hover:border-pink-deep/25 hover:from-white hover:to-sky-soft/20 hover:shadow-[0_28px_70px_-38px_rgba(11,35,66,0.55)] sm:p-4">
                            <div class="pointer-events-none absolute -right-12 -top-12 h-32 w-32 rounded-full bg-pink-soft/30 blur-3xl transition-colors duration-300 group-hover:bg-pink-soft/55"></div>

                            <div class="relative flex h-28 items-center justify-center overflow-hidden rounded-[1.1rem] border border-navy-900/5 bg-white p-4 shadow-inner shadow-navy-900/[0.03] sm:h-32">
                                <img
                                    src="{{ asset('images/brands/' . $partner['logo']) }}"
                                    alt="Logo {{ $partner['name'] }}"
                                    class="max-h-16 w-auto max-w-full object-contain transition-transform duration-500 ease-out group-hover:scale-110 sm:max-h-[4.5rem]"
                                    loading="lazy"
                                    decoding="async"
                                >
                            </div>

                            <div class="relative mt-3 flex flex-1 flex-col justify-between gap-3 px-1 pb-1">
                                <div>
                                    <h3 class="text-sm font-bold leading-snug text-navy-900">{{ $partner['name'] }}</h3>
                                    <p class="mt-1 text-[9px] font-semibold uppercase tracking-[0.12em] text-navy-600/55">{{ $partner['category'] }}</p>
                                </div>

                                <div class="flex items-center gap-2 border-t border-navy-900/8 pt-2.5 text-[8px] font-bold uppercase tracking-[0.14em] text-navy-600/45">
                                    <span class="h-1.5 w-1.5 rounded-full bg-pink-deep/70"></span>
                                    Brand Partner
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Kontak --}}
        <section id="kontak" class="relative pb-10 pt-24 sm:pt-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="reveal relative overflow-hidden rounded-[2.25rem] bg-navy-900 p-7 text-cream-50 shadow-[0_40px_120px_-48px_rgba(11,35,66,0.95)] sm:p-10 lg:p-14">
                    <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-pink-deep/20 blur-3xl"></div>
                    <div class="absolute -bottom-28 -left-20 h-80 w-80 rounded-full bg-sky-mid/20 blur-3xl"></div>
                    <div class="pointer-events-none absolute inset-0 opacity-[0.05]" style="background-image: radial-gradient(rgba(255,255,255,.9) 1px, transparent 1px); background-size: 22px 22px;"></div>

                    <div class="relative grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                        <div>
                            <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.06] px-4 py-2 text-[10px] font-bold uppercase tracking-[0.2em] text-sky-soft/85">
                                <span class="h-1.5 w-1.5 rounded-full bg-pink-soft"></span>
                                Kontak
                            </span>
                            <h2 class="mt-5 max-w-lg font-display text-4xl font-semibold leading-tight tracking-tight sm:text-5xl">
                                Mari terhubung dan <span class="text-pink-soft italic">berkarya bersama.</span>
                            </h2>
                            <p class="mt-4 max-w-md text-sm leading-7 text-cream-50/55 sm:text-base">
                                Saya terbuka untuk peluang PKL, kolaborasi kreatif, proyek desain, maupun kesempatan belajar baru. Kirim pesan dan mari mulai percakapan.
                            </p>

                            <div class="mt-8 flex flex-wrap gap-2">
                                @foreach ($socialLinks as $social)
                                    <a href="{{ $social['url'] }}" @if (str_starts_with($social['url'], 'http')) target="_blank" rel="noopener noreferrer" @endif class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.06] px-4 py-2.5 text-xs font-semibold text-cream-50/80 transition-all duration-300 hover:-translate-y-0.5 hover:border-pink-soft/30 hover:bg-pink-soft/10 hover:text-pink-soft" aria-label="{{ $social['label'] }}">
                                        <i class="{{ $social['icon'] }} text-sm" aria-hidden="true"></i>
                                        {{ $social['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="grid gap-3">
                            <a href="https://wa.me/6283870503305?text=Halo%20Sry%20Langga%2C%20saya%20ingin%20berkolaborasi." target="_blank" rel="noopener noreferrer" class="group flex items-center gap-4 rounded-[1.5rem] border border-white/10 bg-white/[0.07] p-5 transition-all duration-300 hover:-translate-y-1 hover:border-pink-soft/30 hover:bg-white/[0.1]">
                                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-pink-soft/15 text-pink-soft">
                                    <i class="fa-brands fa-whatsapp text-xl" aria-hidden="true"></i>
                                </span>
                                <span class="min-w-0 flex-1">
                                    <span class="block text-[9px] font-bold uppercase tracking-[0.16em] text-cream-50/40">Paling cepat</span>
                                    <span class="mt-1 block text-sm font-bold text-cream-50">WhatsApp</span>
                                    <span class="mt-0.5 block text-xs text-cream-50/45">+62 838-7050-3305</span>
                                </span>
                                <i class="fa-solid fa-arrow-right text-xs text-cream-50/30 transition-transform duration-300 group-hover:translate-x-1 group-hover:text-pink-soft" aria-hidden="true"></i>
                            </a>

                            <a href="mailto:srylangga@gmail.com?subject=Kolaborasi%20dengan%20Sry%20Langga" class="group flex items-center gap-4 rounded-[1.5rem] border border-white/10 bg-white/[0.07] p-5 transition-all duration-300 hover:-translate-y-1 hover:border-sky-soft/30 hover:bg-white/[0.1]">
                                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-sky-soft/15 text-sky-soft">
                                    <i class="fa-regular fa-envelope text-lg" aria-hidden="true"></i>
                                </span>
                                <span class="min-w-0 flex-1">
                                    <span class="block text-[9px] font-bold uppercase tracking-[0.16em] text-cream-50/40">Kirim detail</span>
                                    <span class="mt-1 block text-sm font-bold text-cream-50">Email</span>
                                    <span class="mt-0.5 block break-all text-xs text-cream-50/45">srylangga@gmail.com</span>
                                </span>
                                <i class="fa-solid fa-arrow-right text-xs text-cream-50/30 transition-transform duration-300 group-hover:translate-x-1 group-hover:text-sky-soft" aria-hidden="true"></i>
                            </a>

                            <div class="flex items-center gap-4 rounded-[1.5rem] border border-white/10 bg-white/[0.045] p-5">
                                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-cream-50/10 text-cream-50/75">
                                    <i class="fa-solid fa-location-dot text-lg" aria-hidden="true"></i>
                                </span>
                                <span class="min-w-0 flex-1">
                                    <span class="block text-[9px] font-bold uppercase tracking-[0.16em] text-cream-50/40">Berbasis di</span>
                                    <span class="mt-1 block text-sm font-bold text-cream-50">Karawang, Jawa Barat</span>
                                    <span class="mt-0.5 block text-xs text-cream-50/45">Indonesia</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="pt-8">
                    <div class="flex flex-col items-center justify-between gap-5 border-t border-navy-900/10 py-7 sm:flex-row">
                        <div class="flex items-center gap-3">
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-navy-900 font-display text-sm font-semibold text-cream-50">
                                SL
                            </span>
                            <div>
                                <span class="block text-sm font-bold text-navy-900">Sry Langga Harahap</span>
                                <span class="block text-[10px] font-medium text-navy-600/55">Desain Grafis &amp; Pengolahan Data</span>
                            </div>
                        </div>

                        <p class="order-3 text-center text-[11px] font-medium text-navy-600/55 sm:order-2 sm:text-right">
                            &copy; <span id="current-year">2026</span> Sry Langga Harahap. Dibuat dengan
                            <i class="fa-solid fa-heart mx-0.5 text-pink-deep" aria-hidden="true"></i>
                            menggunakan Laravel &amp; Tailwind CSS.
                        </p>

                        <a href="#beranda" class="order-2 inline-flex items-center gap-2 rounded-full border border-navy-900/10 bg-white/50 px-4 py-2 text-[10px] font-bold uppercase tracking-[0.14em] text-navy-700 transition-colors hover:bg-pink-soft/35 hover:text-navy-900 sm:order-3">
                            Ke atas
                            <i class="fa-solid fa-arrow-up text-[9px]" aria-hidden="true"></i>
                        </a>
                    </div>
                </footer>
            </div>
        </section>
    </main>

    <button id="back-to-top" type="button" class="pointer-events-none fixed bottom-5 right-5 z-40 flex h-11 w-11 translate-y-4 items-center justify-center rounded-full border border-white/70 bg-cream-50/90 text-navy-900 opacity-0 shadow-xl shadow-navy-900/15 backdrop-blur transition-all duration-300 hover:bg-pink-soft/70 sm:bottom-7 sm:right-7" aria-label="Kembali ke atas">
        <i class="fa-solid fa-arrow-up text-sm" aria-hidden="true"></i>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.getElementById('navbar');
            const menuToggle = document.getElementById('menu-toggle');
            const menuIcon = document.getElementById('menu-icon');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileLinks = document.querySelectorAll('.mobile-nav-link');
            const navLinks = document.querySelectorAll('[data-nav-link]');
            const backToTop = document.getElementById('back-to-top');

            const setMobileMenu = (isOpen) => {
                menuToggle.setAttribute('aria-expanded', String(isOpen));
                menuToggle.setAttribute('aria-label', isOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi');
                menuIcon.classList.toggle('fa-bars', !isOpen);
                menuIcon.classList.toggle('fa-xmark', isOpen);
                mobileMenu.classList.toggle('max-h-0', !isOpen);
                mobileMenu.classList.toggle('opacity-0', !isOpen);
                mobileMenu.classList.toggle('pointer-events-none', !isOpen);
                mobileMenu.classList.toggle('max-h-[38rem]', isOpen);
                mobileMenu.classList.toggle('opacity-100', isOpen);
                mobileMenu.classList.toggle('pointer-events-auto', isOpen);
            };

            menuToggle.addEventListener('click', () => {
                setMobileMenu(menuToggle.getAttribute('aria-expanded') !== 'true');
            });

            mobileLinks.forEach((link) => {
                link.addEventListener('click', () => setMobileMenu(false));
            });

            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1280) {
                    setMobileMenu(false);
                }
            });

            const handleScroll = () => {
                const isScrolled = window.scrollY > 24;
                navbar.classList.toggle('bg-cream-50/95', isScrolled);
                navbar.classList.toggle('shadow-[0_20px_60px_-32px_rgba(11,35,66,0.55)]', isScrolled);

                const showBackToTop = window.scrollY > 700;
                backToTop.classList.toggle('pointer-events-none', !showBackToTop);
                backToTop.classList.toggle('opacity-0', !showBackToTop);
                backToTop.classList.toggle('translate-y-4', !showBackToTop);
                backToTop.classList.toggle('pointer-events-auto', showBackToTop);
                backToTop.classList.toggle('opacity-100', showBackToTop);
                backToTop.classList.toggle('translate-y-0', showBackToTop);
            };

            window.addEventListener('scroll', handleScroll, { passive: true });
            handleScroll();

            backToTop.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            const revealElements = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

            revealElements.forEach((element) => revealObserver.observe(element));

            const progressBars = document.querySelectorAll('.progress-fill');
            const progressObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.style.width = `${entry.target.dataset.width}%`;
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.6 });

            progressBars.forEach((bar) => progressObserver.observe(bar));

            const counters = document.querySelectorAll('.counter-value');
            const counterObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    const target = Number(entry.target.dataset.count);
                    const suffix = entry.target.dataset.suffix ?? '';
                    const duration = 900;
                    const start = performance.now();

                    const updateCounter = (now) => {
                        const progress = Math.min((now - start) / duration, 1);
                        const eased = 1 - Math.pow(1 - progress, 3);
                        entry.target.textContent = `${Math.round(target * eased)}${suffix}`;

                        if (progress < 1) {
                            requestAnimationFrame(updateCounter);
                        }
                    };

                    requestAnimationFrame(updateCounter);
                    observer.unobserve(entry.target);
                });
            }, { threshold: 0.6 });

            counters.forEach((counter) => counterObserver.observe(counter));

            const sections = Array.from(document.querySelectorAll('main section[id]'));
            const setActiveLink = (id) => {
                navLinks.forEach((link) => {
                    link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
                });
            };

            const sectionObserver = new IntersectionObserver((entries) => {
                const visibleSections = entries
                    .filter((entry) => entry.isIntersecting)
                    .sort((a, b) => b.intersectionRatio - a.intersectionRatio);

                if (visibleSections.length > 0) {
                    setActiveLink(visibleSections[0].target.id);
                }
            }, { rootMargin: '-35% 0px -50% 0px', threshold: [0, 0.2, 0.5, 1] });

            sections.forEach((section) => sectionObserver.observe(section));

            document.getElementById('current-year').textContent = new Date().getFullYear();
        });
    </script>
</body>
</html>
