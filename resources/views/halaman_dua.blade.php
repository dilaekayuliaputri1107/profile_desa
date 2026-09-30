<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Panen Dusun Kucur</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .font-lucu {
            font-family: 'Fredoka', sans-serif;
        }
    </style>
</head>

<body class="bg-emerald-50 text-slate-800 min-h-screen flex flex-col justify-between">

    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md shadow-sm">
        <div class="max-w-3xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('halaman.satu') }}"
               class="font-lucu text-emerald-700 text-xl font-bold">
                🌿 Kucur
            </a>

            <div class="flex gap-6">
                <a href="{{ route('halaman.satu') }}"
                   class="font-lucu text-emerald-700 text-sm hover:text-emerald-900 transition">
                    Home
                </a>

                <a href="{{ route('halaman.dua') }}"
                   class="font-lucu text-emerald-700 text-sm font-semibold">
                    About
                </a>
            </div>
        </div>
    </nav>

    <main class="w-full max-w-3xl mx-auto px-4 sm:px-6 pt-28 pb-10">

        <section class="bg-white rounded-3xl shadow-md p-6 sm:p-8 mb-8">
            <h1 class="font-lucu text-3xl sm:text-4xl font-bold text-emerald-700 mb-4">
                Tentang Desa Sumberrejo Dusun Kucur 🌾
            </h1>

            <p class="leading-relaxed text-slate-600">
                Dusun Kucur merupakan salah satu dusun yang berada di Desa
                Sumberrejo. Dusun ini memiliki berbagai potensi alam dan hasil
                pertanian yang menjadi bagian dari kehidupan masyarakat.
                Beberapa hasil panen khas yang dapat ditemukan di Dusun Kucur
                adalah kopi dan durian yang memiliki ciri khas tersendiri.
            </p>
        </section>

        <section>
            <h2 class="font-lucu text-3xl font-bold text-emerald-700 text-center mb-6">
                Hasil Panen Khas 🧺
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                <div class="group bg-white rounded-3xl shadow-md overflow-hidden
                            hover:-translate-y-2 hover:shadow-lg transition duration-300">

                    <div class="overflow-hidden">
                        <img src="{{ asset('images/proyek1.png') }}"
                             class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                    </div>

                    <div class="p-5">
                        <h3 class="font-lucu text-2xl font-semibold text-emerald-700 mb-2">
                            ☕ Kopi Khas Kucur
                        </h3>

                        <p class="text-slate-600 leading-relaxed">
                            Kopi merupakan salah satu hasil panen yang menjadi
                            potensi khas Dusun Kucur. Kopi dari daerah ini
                            memiliki cita rasa dan aroma yang khas.
                        </p>
                    </div>
                </div>

                <div class="group bg-white rounded-3xl shadow-md overflow-hidden
                            hover:-translate-y-2 hover:shadow-lg transition duration-300">

                    <div class="overflow-hidden">
                        <img src="{{ asset('images/proyek2.png') }}"
                             class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                    </div>

                    <div class="p-5">
                        <h3 class="font-lucu text-2xl font-semibold text-emerald-700 mb-2">
                            🍈 Durian Khas Kucur
                        </h3>

                        <p class="text-slate-600 leading-relaxed">
                            Durian juga menjadi salah satu hasil panen khas
                            Dusun Kucur. Buah durian dikenal dengan rasa yang
                            manis, aroma khas, dan menjadi salah satu potensi
                            hasil pertanian masyarakat.
                        </p>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <footer class="text-center px-6 py-5 text-sm bg-emerald-100">
        <p class="font-lucu text-emerald-700">
            © {{ date('Y') }} Desa Sumberrejo Dusun Kucur
        </p>
    </footer>

    <audio id="clickSound">
        <source src="{{ asset('audio/click.mp3') }}" type="audio/mpeg">
    </audio>

    <script>
        function playAudio() {
            const audio = document.getElementById('clickSound');
            audio.currentTime = 0;
            audio.play();
        }
    </script>

</body>
</html>