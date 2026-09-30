<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Sumberrejo Dusun Kucur</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .font-lucu {
            font-family: 'Fredoka', sans-serif;
        }

        @keyframes slowZoom {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.08);
            }
            100% {
                transform: scale(1);
            }
        }

        .animate-bg-zoom {
            animation: slowZoom 20s infinite ease-in-out;
        }

        @keyframes floatBtn {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-8px);
            }
        }

        .animate-float {
            animation: floatBtn 2.5s infinite ease-in-out;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col justify-between text-white">

    <div class="fixed inset-0 overflow-hidden -z-10">
        <img src="{{ asset('images/profile.png') }}"
             class="w-full h-full object-cover animate-bg-zoom">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <nav class="fixed top-0 left-0 right-0 z-50 bg-black/20 backdrop-blur-md">
        <div class="max-w-3xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('halaman.satu') }}"
               class="font-lucu text-white text-xl font-bold">
                🌿 Kucur
            </a>

            <div class="flex gap-6">
                <a href="{{ route('halaman.satu') }}"
                   class="font-lucu text-yellow-300 text-sm font-semibold">
                    Home
                </a>

                <a href="{{ route('halaman.dua') }}"
                   class="font-lucu text-white text-sm hover:text-yellow-300 transition">
                    About
                </a>
            </div>
        </div>
    </nav>

    <header class="pt-24 px-6 text-center">
        <h2 class="font-lucu text-xl font-semibold animate-pulse">
            🌿 Dusun Kucur
        </h2>
    </header>

    <main class="flex flex-col items-center justify-center text-center px-6 py-10">

        <h1 class="font-lucu text-5xl sm:text-6xl font-bold mb-3">
            Desa Sumberrejo
        </h1>

        <h2 class="font-lucu text-3xl sm:text-4xl font-semibold mb-5">
            Dusun Kucur 🍃
        </h2>

        <p class="max-w-xl text-base sm:text-lg leading-relaxed mb-8">
            Selamat datang di website Desa Sumberrejo Dusun Kucur.
            Temukan informasi tentang desa, hasil panen khas, dan berbagai
            potensi yang dimiliki Dusun Kucur.
        </p>

        <button onclick="pindahHalaman()"
                class="font-lucu animate-float px-8 py-3 bg-yellow-400 hover:bg-yellow-300 text-slate-900 font-bold rounded-full shadow-lg transition duration-300 transform hover:scale-110 active:scale-95 cursor-pointer border-2 border-white">
            Jelajahi Desa 
        </button>

    </main>

    <footer class="text-center px-6 py-5 text-sm bg-black/20">
        <p class="font-lucu">
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

        function pindahHalaman() {
            playAudio();

            setTimeout(() => {
                window.location.href = "{{ route('halaman.dua') }}";
            }, 300);
        }
    </script>

</body>
</html>