<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>

<body class="text-black font-poppins">
    <section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px]">
        <header class="px-4 mt-8">
            <h1 class="text-2xl font-semibold">Profile</h1>
        </header>
        <nav class="flex items-center justify-between w-full px-4 mt-4">
            <div class="flex items-center gap-3">
                <div
                    class="w-12 h-12 border-4 border-white rounded-full overflow-hidden flex shrink-0 shadow-[6px_8px_20px_0_#00000008]">
                    <img src="{{ Storage::url(Auth::user()->avatar) }}" class="object-cover object-center w-full h-full"
                        alt="photo">
                </div>
                <div class="flex flex-col gap-1">
                    <p class="font-semibold">
                        {{ Auth::user()->name }}
                    </p>
                </div>
            </div>
            <a href="">
                <div
                    class="w-8 h-8 rounded-full bg-white overflow-hidden flex shrink-0 items-center justify-center shadow-[6px_8px_20px_0_#00000008]">
                    <img src="assets/icons/icon-setting.svg" alt="icon">
                </div>
            </a>
        </nav>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
            <div class="flex justify-center">
                <button type="submit"
                    class="p-[16px_24px] rounded-xl bg-red-500 w-fit text-white hover:bg-[#06C755] transition-all duration-300">Logout</button>
            </div>
        </form>

        <div
            class="navigation-bar fixed bottom-0 z-50 max-w-[640px] w-full h-[85px] bg-white rounded-t-[25px] flex items-center justify-evenly py-[45px]">
            <a href="{{ route('front.index') }}" class="opacity-25 menu">
                <div class="flex flex-col justify-center gap-1 w-fit">
                    <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
                        <img src="assets/icons/home.svg" alt="icon">
                    </div>
                    <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Home</p>
                </div>
            </a>
            <a href="{{ route('dashboard.bookings') }}" class="opacity-25 menu">
                <div class="flex flex-col justify-center gap-1 w-fit">
                    <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
                        <img src="assets/icons/calendar-blue.svg" alt="icon">
                    </div>
                    <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Schedule</p>
                </div>
            </a>
            <a href="{{ route('profile.index') }}" class="menu">
                <div class="flex flex-col justify-center gap-1 w-fit">
                    <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
                        <img src="assets/icons/user-flat.svg" alt="icon">
                    </div>
                    <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Profile</p>
                </div>
            </a>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="js/flickity-slider.js"></script>
    <script src="js/two-lines-text.js"></script>

</body>

</html>
