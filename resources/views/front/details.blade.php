<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('output.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
</head>
<body class="text-black font-poppins">
    <section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px]">
        <nav class="flex items-center justify-between w-full px-4 mt-8">
          <a href="{{ route('front.index') }}">
            <img src="{{asset('assets/icons/back.png')}}" alt="back">
          </a>
          <p class="m-auto font-semibold text-center">Details</p>
          <a href="">
            <img src="{{asset('assets/icons/more-dots.svg')}}" alt="more">
          </a>
        </nav>
        <div id="image-details" class="flex flex-col gap-3 px-4">
          <div class="w-full h-[345px] flex shrink-0 rounded-xl overflow-hidden">
            <img id="image-thumbnail" src="{{asset(Storage::url($packageTour->thumbnail))}}" class="object-cover object-center w-full h-full" alt="thumbnail">
          </div>
          <div class="grid grid-cols-4 gap-4 mx-auto w-fit">
            <a href="{{asset(Storage::url($packageTour->thumbnail))}}" class="thumbnail-option w-[74px] h-[74px] flex shrink-0 rounded-xl border-2 overflow-hidden mx-auto border-blue">
              <img src="{{asset(Storage::url($packageTour->thumbnail))}}" class="object-cover object-center w-full h-full" alt="thumbnail">
            </a>

            @foreach ($latestPhotos as $photo)
            <a href="{{Storage::url($photo->photo)}}" class="thumbnail-option w-[74px] h-[74px] flex shrink-0 rounded-xl border-2 overflow-hidden mx-auto opacity-50">
              <img src="{{Storage::url($photo->photo)}}" class="object-cover object-center w-full h-full" alt="thumbnail">
            </a>
            @endforeach
            
          </div>
        </div>
        <div class="mx-4 flex flex-col gap-3 bg-white p-[16px_24px] rounded-[22px]">
          <h1 class="font-semibold">
            {{ $packageTour->name }}
          </h1>
          <div class="flex justify-between gap-2">
            <div class="flex items-center gap-2">
              <div class="flex items-center w-6 h-6 shrink-0">
                <img src="{{asset('assets/icons/location-map.svg')}}" class="object-contain w-full h-full" alt="icon">
              </div>
              <div class="flex flex-col gap-1">
                <p class="text-sm leading-[22px] tracking-[0.35px] text-darkGrey">Location</p>
                <p class="text-sm font-semibold tracking-035">
                    {{ $packageTour->location }}
                </p>
              </div>
            </div>
            <div class="flex flex-col gap-1">
              <p class="text-sm leading-[22px] tracking-[0.35px] text-darkGrey">Rating</p>
              <div class="flex items-center gap-2">
                <span class="font-semibold text-sm leading-[22px] tracking-[0.35px]">4.8</span>
                <div class="flex items-center gap-1">
                  <img src="{{asset('assets/icons/Star.svg')}}" alt="Star">
                  <img src="{{asset('assets/icons/Star.svg')}}" alt="Star">
                  <img src="{{asset('assets/icons/Star.svg')}}" alt="Star">
                  <img src="{{asset('assets/icons/Star.svg')}}" alt="Star">
                  <img src="{{asset('assets/icons/Star.svg')}}" alt="Star">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mx-4 flex flex-col gap-3 bg-white p-[16px_24px] rounded-[22px]">
          <h2 class="font-semibold">About Destination</h2>
          <p id="readMore" class="text-sm leading-[22px] tracking-035 text-darkGrey">
            {{ Str::substr($packageTour->about, 0, 30) }} 
            <button class="font-semibold text-blue" onclick="document.getElementById('readMore').classList.toggle('hidden'); document.getElementById('seeLess').classList.toggle('hidden');">Read More</button>
          </p>
          <p id="seeLess" class="hidden text-sm leading-[22px] tracking-035 text-darkGrey">
            {{ $packageTour->about }} 
            <button class="font-semibold text-blue" onclick="document.getElementById('readMore').classList.toggle('hidden'); document.getElementById('seeLess').classList.toggle('hidden');">See Less</button>
          </p>
        </div>
        <div class="mx-4 flex flex-col gap-3 bg-white p-[16px_24px] rounded-[22px]">
          <h2 class="font-semibold">Testimonial</h2>
          <div class="flex flex-col gap-1">
            <div class="flex items-center justify-between gap-2">
              <div class="flex items-center gap-1">
                <div class="w-12 h-12 border-4 border-white rounded-full overflow-hidden flex shrink-0 shadow-[6px_8px_20px_0_#00000008]">
                  <img src="{{asset('assets/photos/pfp2.png')}}" class="object-cover object-center w-full h-full" alt="photo">
                </div>
                <div class="flex flex-col gap-1">
                  <p class="font-bold text-sm leading-[22px] tracking-035">John Doe</p>
                  <p class="text-darkGrey text-xs leading-[20px] tracking-035">1 week ago</p>
                </div>
              </div>
              <div class="flex items-center gap-1">
                <img src="{{asset('assets/icons/Star.svg')}}" alt="icon">
                <img src="{{asset('assets/icons/Star.svg')}}" alt="icon">
                <img src="{{asset('assets/icons/Star.svg')}}" alt="icon">
                <img src="{{asset('assets/icons/Star.svg')}}" alt="icon">
                <img src="{{asset('assets/icons/Star.svg')}}" alt="icon">
              </div>
            </div>
            <p class="text-sm leading-[22px] tracking-035 text-darkGrey">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quasi repellat aut voluptates sint reprehenderit, dolore vel, laborum expedita veritatis nulla aperiam ullam numquam dolorem! Id asperiores optio rem hic.
            </p>
          </div>
          <hr>
          <a href="" class="flex items-center justify-between py-2 text-blue">
            <span class="font-semibold text-sm leading-[22px] tracking-035">Read 100 more review</span>
            <div>
              <img src="{{asset('assets/icons/arrow-circle-right.svg')}}" alt="icon">
            </div>
          </a>
        </div>
        <div class="navigation-bar fixed bottom-0 z-50 max-w-[640px] w-full h-[85px] bg-white rounded-t-[25px] flex items-center justify-between px-6">
          <div class="flex flex-col justify-center gap-1">
            <p class="text-darkGrey text-sm tracking-035 leading-[22px]">Total Price</p>
            <p class="text-blue font-semibold text-lg leading-[26px] tracking-[0.6px]">Rp {{ number_format($packageTour->price, 0, ',', '.') }}<span class="font-normal text-sx leading-[20px] tracking-035 text-darkGrey">/pack</span></p>
          </div>
          <a href="{{ route('front.book', $packageTour->slug) }}" class="p-[16px_24px] rounded-xl bg-blue w-fit text-white hover:bg-[#06C755] transition-all duration-300">Book Now</a>
        </div>
    </section>

    <script src="{{ asset('js/details.js') }}"></script>

</body>
</html>