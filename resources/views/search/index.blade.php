<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body class="text-black font-poppins">
    <section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px]">
        <nav class="flex items-center justify-between w-full px-4 mt-8">
            <a href="{{ route('front.index') }}">
                <img src="{{ asset('assets/icons/back.png') }}" alt="back">
            </a>
            <p class="m-auto text-2xl font-semibold text-center">Search</p>
            <div class="w-12"></div>
        </nav>

        <main>
            <form action="{{ route('front.index') }}" method="GET" class="flex items-center w-4/5 mx-auto">
                <div class="relative w-full">
                    <input type="text" name="keyword" placeholder="Search here..."
                        class="block w-full px-4 py-4 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-blue-400 focus:border-blue-400"
                        required />
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <button type="submit"
                            class="p-2 text-sm font-medium text-white bg-blue-400 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            Search
                        </button>
                    </div>
                </div>
            </form>


            @forelse ($searchResult as $tour)
            <a href="{{ route('front.details', $tour->slug) }}" class="card">
                <div class="bg-white p-4 flex flex-col gap-3 rounded-[26px] shadow-[6px_8px_20px_0_#00000008]">
                    <div class="w-full h-full aspect-[311/150] rounded-xl overflow-hidden">
                        <img src="{{ Storage::url($tour->thumbnail) }}"
                            class="object-cover object-center w-full h-full" alt="thumbnail">
                    </div>
                    <div class="flex justify-between gap-2">
                        <div class="flex flex-col gap-1">
                            <p class="font-semibold">
                                {{ $tour->name }}
                            </p>
                            <div class="flex items-center gap-1">
                                <div class="flex w-4 h-4 shrink-0">
                                    <img src="assets/icons/location-map.svg" alt="icon">
                                </div>
                                <span class="text-sm text-darkGrey tracking-035">
                                    {{ $tour->location }}
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1 text-right">
                            <p class="text-sm leading-[21px]">
                                <span
                                    class="font-semibold text-[#4D73FF] text-nowrap">{{ $tour->price }}</span><br>
                                <span class="text-darkGrey">/{{ $tour->days }}days</span>
                            </p>
                            <div class="flex items-center justify-end gap-1">
                                <div class="flex w-4 h-4 shrink-0">
                                    <img src="assets/icons/Star.svg" alt="icon">
                                </div>
                                <span class="font-semibold text-sm leading-[21px]">4.8</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
                
            @empty
                
            @endforelse
            {{-- Start Search Result --}}

        </main>

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
            <a href="" class="menu">
                <div class="flex flex-col justify-center gap-1 w-fit">
                    <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
                        <img src="assets/icons/search.svg" alt="icon">
                    </div>
                    <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Search</p>
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
            <a href="{{ route('profile.index') }}" class="opacity-25 menu">
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

</body>

</html>
