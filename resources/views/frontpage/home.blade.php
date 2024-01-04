<x-guest-layout>
    @include('frontpage.navigation')
    @include('frontpage.hero')
    @include('frontpage.profil')
    @include('frontpage.acara')
    @include('frontpage.hadiah')
    @include('frontpage.ucapan')

    <div id="audio-container">
        <audio id="song" autoplay loop>
            <source src="{{ asset('vendor/bg-music.mp3') }}" type="audio/mp3">
        </audio>

        <div class="audio-icon-wrapper" style="display: none;">
            <i class="bi bi-disc"></i>
        </div>
    </div>

    <footer class="relative min-h-48 mt-8">
        <div class="text-center">
            <h1
                class="font-cursive text-4xl text-blue-950  animate-fade-down animate-once animate-duration-1000 animate-delay-800">
                Dzikri & Hasna</h1>
            <small>4 Februari 2024</small>
        </div>
        <img src="{{ asset('img/bottom-left.png') }}"
            class="absolute bottom-0 left-0 w-1/3 lg:w-1/4 animate-fade-right animate-once animate-duration-[1500ms]"
            alt="">
        <img src="{{ asset('img/bottom-right.png') }}"
            class="absolute bottom-0 right-0 w-1/3 lg:w-1/4 animate-fade-left animate-once animate-duration-[1500ms]"
            alt="">
    </footer>

    @push('style')
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .audio-icon-wrapper {
            width: 2rem;
            height: 2rem;
            font-size: 3rem;
            position: fixed;
            bottom: 6.3rem;
            right: 2rem;
            cursor: pointer;
            color: white;
            opacity: 0.5;
            mix-blend-mode: difference;
            animation: rotating 4s linear infinite;
            transform-origin: center;
            display: flex;
            justify-content: center;
            align-items: center;
            line-height: 0;
        }

        @keyframes rotating {
            from {
                transform: rotate(0);
            }

            to {
                transform: rotate(360deg);
            }
        }
    </style>
    @endpush

    @push('script')
    <script>
        const rootElement = document.querySelector(":root");
        const navigation = document.getElementById('navigation');
        function disableScroll() {
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

        window.onscroll = function () {
            window.scrollTo(scrollTop, scrollLeft);
        }

            rootElement.style.scrollBehavior = 'auto';
        }

        function enableScroll() {
        window.onscroll = function () { }
        rootElement.style.scrollBehavior = 'smooth';
        navigation.classList = 'block';
        // localStorage.setItem('opened', 'true');
        playAudio();
    }

    disableScroll();
    </script>
    <script>
        const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
        const audioIcon = document.querySelector('.audio-icon-wrapper i');
        const song = document.querySelector('#song');
        let isPlaying = false;

        function playAudio() {
            song.volume = 0.1;
            audioIconWrapper.style.display = 'flex';
            song.play();
            isPlaying = true;
        }

        audioIconWrapper.onclick = function () {
            if (isPlaying) {
                song.pause();
                audioIcon.classList.remove('bi-disc');
                audioIcon.classList.add('bi-pause-circle');
            } else {
                song.play();
                audioIcon.classList.add('bi-disc');
                audioIcon.classList.remove('bi-pause-circle');
            }

            isPlaying = !isPlaying;
        }
    </script>
    @endpush

</x-guest-layout>