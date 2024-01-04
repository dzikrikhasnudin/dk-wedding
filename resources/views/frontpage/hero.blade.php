<section id="hero"
    class="before:contents[''] before:absolute top-0 left-0 w-full h-screen relative flex flex-col justify-center">
    <div class="flex flex-col items-center gap-4 mx-4 text-center ">
        <img src="{{ asset('img/separator.png') }}"
            class="w-1/3 lg:w-1/4 animate-fade animate-once animate-duration-1000 animate-delay-500" alt="">
        <h3 class="font-cursive text-slate-800 text-xl ">
            The Wedding Of</h3>
        <h1
            class="font-cursive text-6xl text-blue-950  animate-fade-down animate-once animate-duration-1000 animate-delay-800">
            Dzikri & Hasna</h1>

        <p class="font-semibold">Akan melangsungkan resepsi pernikahan dalam:</p>

        <div id="countdown" class="simply-countdown">
        </div>

        <div id="guest" class="text-center">
            <p class="italic">Kepada Bapak/Ibu/Saudara/I:</p>
            <h4 class="text-blue-950 font-cursive mt-2 text-xl">John Doe</h4>
            <p class="italic">di Tempat</p>
        </div>

        <a href="#profil" onclick="enableScroll()"
            class="bg-slate-800 text-white px-3 py-2 rounded hover:bg-slate-700 transition-all duration-300 animate-pulse animate-infinite animate-duration-[3000ms] animate-delay-1000">
            Buka Undangan
        </a>
    </div>
    <img src="{{ asset('img/top-left.png') }}"
        class="absolute top-0 left-0 w-1/3 lg:w-1/4 animate-fade-right animate-once animate-duration-[1500ms]" alt="">
    <img src="{{ asset('img/top-right.png') }}"
        class="absolute top-0 right-0 w-1/3 lg:w-1/4 animate-fade-left animate-once animate-duration-[1500ms]" alt="">
    <img src="{{ asset('img/bottom-left.png') }}"
        class="absolute bottom-0 left-0 w-1/3 lg:w-1/4 animate-fade-right animate-once animate-duration-[1500ms]"
        alt="">
    <img src="{{ asset('img/bottom-right.png') }}"
        class="absolute bottom-0 right-0 w-1/3 lg:w-1/4 animate-fade-left animate-once animate-duration-[1500ms]"
        alt="">
</section>

@push('style')
<link rel="stylesheet" href="{{ asset('vendor/countdown/simplyCountdown.theme.default.css') }}" />

<style>
    .simply-countdown>.simply-section {
        padding: 8px;
        box-shadow: none;
    }

    .simply-countdown {
        border-top: 1px solid #cbd5e1;
        border-bottom: 1px solid #cbd5e1;

    }

    .simply-countdown .simply-word,
    .simply-countdown .simply-amount {
        font-family: "Source Serif 4", cursive;
    }

    .simply-countdown .simply-amount {
        font-weight: 600;
    }
</style>
@endpush

@push('script')
<script src="{{ asset('vendor/countdown/simplyCountdown.min.js') }}"></script>

<script>
    simplyCountdown('.simply-countdown', {
    year: 2024, // required
    month: 2, // required
    day: 4, // required
    hours: 8, // Default is 0 [0-23] integer
    words: { //words displayed into the countdown
      days: { singular: 'Hari', plural: 'Hari' },
      hours: { singular: 'Jam', plural: 'Jam' },
      minutes: { singular: 'Menit', plural: 'Menit' },
      seconds: { singular: 'Detik', plural: 'Detik' }
    },
  });
</script>
@endpush