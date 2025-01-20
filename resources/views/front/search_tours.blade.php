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
            <p class="m-auto font-semibold text-center">Search</p>
            <div class="w-12"></div>
        </nav>

        <form action="{{ route('front.search') }}" method="GET" class="flex items-center w-full px-4 mx-auto">
            <div class="relative w-full">
                <input type="text" name="keyword" value="{{ $keyword }}" placeholder="Where do you want to go..."
                    class="block w-full px-4 py-4 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-blue-400 focus:border-blue-400"/>
                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <button type="submit"
                        class="p-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Search
                    </button>
                </div>
            </div>
        </form>



        <div class="flex flex-col gap-3 px-4">

            @forelse ($searchResult as $tour)
                <a href="{{ route('front.details', $tour->slug) }}" class="card">
                    <div class="bg-white p-4 rounded-[26px] flex flex-col gap-3">
                        <div class="flex items-center gap-4">
                            <div class="w-[92px] h-[92px] flex shrink-0 rounded-xl overflow-hidden">
                                <img src="{{ Storage::url($tour->thumbnail) }}"
                                    class="object-cover object-center w-full h-full" alt="thumbnail">
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold two-lines">{{ $tour->name }}</p>
                                <div class="flex items-center gap-1">
                                    <div class="flex w-4 h-4 shrink-0">
                                        <img src="{{ asset('assets/icons/location-map.svg') }}" alt="icon">
                                    </div>
                                    <span class="text-sm text-darkGrey tracking-035">{{ $tour->location }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="font-semibold text-sm leading-[22px] tracking-[0.35px]">4.8</span>
                                <div class="flex items-center gap-1">
                                    <img src="{{ asset('assets/icons/Star.svg') }}" alt="Star">
                                    <img src="{{ asset('assets/icons/Star.svg') }}" alt="Star">
                                    <img src="{{ asset('assets/icons/Star.svg') }}" alt="Star">
                                    <img src="{{ asset('assets/icons/Star.svg') }}" alt="Star">
                                    <img src="{{ asset('assets/icons/Star.svg') }}" alt="Star">
                                </div>
                            </div>
                            <p class="text-sm leading-[22px] tracking-035">
                                <span class="font-semibold text-[#4D73FF] text-nowrap">Rp
                                    {{ number_format($tour->price, 0, ',', '.') }}</span><span
                                    class="text-darkGrey">/{{ $tour->days }}days</span>
                            </p>
                        </div>
                    </div>
                </a>

            @empty
                <p>Belum ada paket tour pada kategory ini</p>
            @endforelse

        </div>
    </section>

    <script src="asset('js/two-lines-text.js')"></script>
</body>

</html>
