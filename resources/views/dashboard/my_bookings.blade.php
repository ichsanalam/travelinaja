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
            <img src="{{ asset('assets/icons/back.png') }}" alt="back">
          </a>
          <p class="m-auto font-semibold text-center">Schedule</p>
          <div class="w-12"></div>
        </nav>
        <div class="flex flex-col gap-3 px-4">
          <p class="font-semibold">My Packages</p>

          @forelse (Auth::user()->bookings as $booking)
          <a href="trip-details.html" class="card">
            <div class="bg-white p-4 rounded-[26px] flex items-center gap-4">
              <p class="text-center text-sm leading-[22px] tracking-035"><span class="text-2xl font-semibold">{{ $booking->start_date->format('d') }}</span> <br> {{ $booking->start_date->format('M') }} <br> {{ $booking->start_date->format('Y') }}</p>
              <div class="flex items-center gap-4">
                <div class="w-[92px] h-[92px] flex shrink-0 rounded-xl overflow-hidden">
                  <img src="{{ Storage::url($booking->tour->thumbnail) }}" class="object-cover object-center w-full h-full" alt="thumbnail">
                </div>
                <div class="flex flex-col gap-1">
                  <p class="font-semibold text-sm tracking-035 leading-[22px]">
                    {{ $booking->tour->name }}
                  </p>
                  <p class="text-sm leading-[22px] tracking-035 text-darkGrey">{{ $booking->tour->days }} days | {{ $booking->quantity }} packs</p>

                  @if ($booking->is_paid)
                  <div class="success-badge w-fit border border-[#60A5FA] p-[4px_8px] rounded-lg bg-[#EFF6FF] flex items-center justify-center">
                    <span class="text-xs leading-[22px] tracking-035 text-[#2563EB]">Success Paid</span>
                  </div>
                      
                  @endif
                </div>
              </div>
            </div>
          </a>
              
          @empty
          <p>Anda belum pernah melakukan booking</p>
              
          @endforelse
        </div>
        </div>
    </section>
</body>
</html>