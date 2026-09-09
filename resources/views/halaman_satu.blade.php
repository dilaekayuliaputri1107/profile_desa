<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Sumberrejo Dusun Kucur</title>
    
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

        /* 1. Animasi Background Zoom Bergerak Pelan */
        @keyframes slowZoom {
            0% { transform: scale(1); }
            50% { transform: scale(1.08); }
            100% { transform: scale(1); }
        }
        .animate-bg-zoom {
            animation: slowZoom 20s infinite ease-in-out;
        }

        /* 2. Animasi Tombol Mengapung (Floating) */
        @keyframes floatBtn {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }
        .animate-float {
            animation: floatBtn 2.5s infinite ease-in-out;
        }
    </style>
</head>
<body class="min-h-screen bg-slate-900 flex flex-col justify-between items-center relative p-6 overflow-hidden">

    <!-- Background Foto Desa Bergerak Zoom Pelan -->
    <div class="absolute inset-0 z-0 overflow-hidden">
        <img src="{{ asset('images/profile.png') }}" alt="Foto Desa" class="w-full h-full object-cover animate-bg-zoom">
        <!-- Lapisan Transparan -->
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <!-- Header Atas -->
    <header class="z-10 w-full max-w-3xl flex justify-between items-center py-2">
        <span class="font-lucu text-white text-lg animate-pulse">🌿 Dusun Kucur</span>
        <button onclick="playAudio()" class="px-3 py-1 bg-white/20 text-white text-xs rounded-full backdrop-blur hover:bg-white/40 transition">
            🔊 Tes Suara
        </button>
    </header>

    <!-- Konten Tengah -->
    <main class="z-10 text-center space-y-6 my-auto">
        <!-- Judul Bergerak Membal (Bounce) -->
        <h1 class="font-lucu text-4xl sm:text-6xl text-white drop-shadow-md animate-bounce">
            Desa Sumberrejo <br>
            <span class="text-yellow-300">Dusun Kucur 🍃</span>
        </h1>
        
        <p class="text-white/90 text-sm sm:text-base max-w-md mx-auto">
            Selamat datang di desa kami yang asri dan kaya akan hasil alam.
        </p>

        <!-- Tombol Mengapung & Membesar saat Didekati Kursor -->
        <div>
            <button onclick="pindahHalaman()" 
                    class="font-lucu animate-float px-8 py-3 bg-yellow-400 hover:bg-yellow-300 text-slate-900 font-bold rounded-full shadow-lg transition duration-300 transform hover:scale-110 active:scale-95 cursor-pointer border-2 border-white">
                Jelajahi Desa 🚀
            </button>
        </div>
    </main>

    <!-- Footer -->
    <footer class="z-10 text-white/70 text-xs">
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

        function pindahHalaman() {
            playAudio();
            setTimeout(function() {
                window.location.href = "{{ route('halaman.dua') }}";
            }, 300);
        }
    </script>
</body>
</html>