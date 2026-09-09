<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Panen Dusun Kucur</title>

    <!-- Tailwind CSS & JS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Lucu dari Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;700&display=swap" rel="stylesheet">

    <style>
        .font-lucu {
            font-family: 'Fredoka', sans-serif;
        }
    </style>
</head>
<body class="bg-emerald-50 text-slate-800 min-h-screen flex flex-col justify-between items-center p-4 sm:p-6">

    <!-- Header Navigasi -->
    <header class="w-full max-w-3xl flex justify-between items-center py-4 border-b border-emerald-200">
        <a href="{{ route('halaman.satu') }}" onclick="playAudio()" class="font-lucu text-emerald-700 hover:text-emerald-900 font-bold text-sm transition transform hover:-translate-x-1 inline-block">
            &larr; Kembali
        </a>
        <span class="font-lucu text-xs text-emerald-800 bg-emerald-100 px-3 py-1 rounded-full animate-pulse">
            Dusun Kucur
        </span>
    </header>

    <!-- Konten Utama -->
    <main class="w-full max-w-3xl my-auto py-6 space-y-6">
        
        <!-- Deskripsi Desa -->
        <section class="bg-white p-6 rounded-xl border border-emerald-100 shadow-sm space-y-2">
            <h2 class="font-lucu text-2xl font-bold text-emerald-900">
                Tentang Desa Sumberrejo Dusun Kucur 🌾
            </h2>
            <p class="text-slate-600 text-sm leading-relaxed">
                Dusun Kucur adalah wilayah di Desa Sumberrejo yang terkenal dengan suasana yang asri, tanah yang subur, serta masyarakat yang ramah. Hasil panen dari perkebunan warga menjadi kebanggaan utama dusun ini.
            </p>
        </section>

        <!-- Kartu Hasil Panen -->
        <section class="space-y-4">
            <h3 class="font-lucu text-xl font-bold text-emerald-900">
                Hasil Panen Khas 🧺
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                
                <!-- Panen Kopi Bergerak Terangkat saat Hover -->
                <div class="bg-white rounded-xl border border-emerald-100 overflow-hidden shadow-sm p-4 space-y-3 transition duration-300 transform hover:-translate-y-2 hover:shadow-lg group">
                    <div class="overflow-hidden rounded-lg">
                        <img src="{{ asset('images/proyek1.png') }}" alt="Kopi" class="w-full h-40 object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <h4 class="font-lucu text-lg font-bold text-slate-800">☕ Kopi Khas Kucur</h4>
                    <p class="text-slate-600 text-xs">
                        Biji kopi pilihan yang dipetik langsung dari kebun warga dengan aroma yang khas dan nikmat.
                    </p>
                </div>

                <!-- Panen Durian Bergerak Terangkat saat Hover -->
                <div class="bg-white rounded-xl border border-emerald-100 overflow-hidden shadow-sm p-4 space-y-3 transition duration-300 transform hover:-translate-y-2 hover:shadow-lg group">
                    <div class="overflow-hidden rounded-lg">
                        <img src="{{ asset('images/proyek2.png') }}" alt="Durian" class="w-full h-40 object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <h4 class="font-lucu text-lg font-bold text-slate-800">🍈 Durian Khas Kucur</h4>
                    <p class="text-slate-600 text-xs">
                        Durian asli Dusun Kucur dengan daging buah manis dan tebal yang selalu dinanti saat musim panen.
                    </p>
                </div>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="w-full max-w-3xl text-center py-4 text-slate-500 text-xs">
        &copy; {{ date('Y') }} Desa Sumberrejo Dusun Kucur.
    </footer>

    <!-- Audio Player & Script -->
    <audio id="clickSound" src="{{ asset('audio/click.mp3') }}" preload="auto"></audio>

    <script>
        function playAudio() {
            const sound = document.getElementById('clickSound');
            if (sound) {
                sound.currentTime = 0;
                sound.play().catch(e => console.log(e));
            }
        }
    </script>
</body>
</html>