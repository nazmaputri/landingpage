<section id="price" class="price py-16 bg-white">
  <div class="container mx-auto px-6">
      <!-- Section Title -->
      <div class="text-center mb-12" data-aos="fade-up">
          <h2 class="text-4xl font-bold text-orange-400 relative inline-block">Harga</h2>
          <div class="flex justify-center mt-4">
              <div class="w-12 border-b-2 border-gray-300"></div>
              <div class="w-12 border-b-4 border-orange-400"></div>
              <div class="w-12 border-b-2 border-gray-300"></div>
          </div>
          <h3 class="text-xl font-semibold mt-6">Pilih paket yang sesuai dengan kebutuhan anda</h3>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Looping card package -->
          @if (isset($packages) && count($packages) > 0)
              @foreach ($packages as $package)
                  <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300 transform hover:scale-105 relative overflow-hidden group min-h-[500px]">
                      <div class="absolute top-0 left-0 w-full h-2 bg-orange-500 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                      <h3 class="text-xl font-semibold text-center mb-4 relative z-10">{{ $package['name'] }}</h3>
                        <h4 class="text-4xl font-bold text-center mb-2 relative z-10">
                            Rp{{ number_format($package['tariff'], 0, ',', '.') }}<span class="text-sm">/per 
                            @if ($package['year'] > 0)
                                {{ $package['year'] }} tahun
                            @elseif ($package['month'] > 0)
                                {{ $package['month'] }} bulan
                            @elseif ($package['day'] > 0)
                                {{ $package['day'] }} hari
                            @endif
                            </span>
                        </h4>
                        {{-- @if ($package['is_trial'])
                        <p class="text-green-500 text-center mt-2">Paket Trial</p>
                        @else
                            <p class="text-red-500 text-center mt-2">Paket Berbayar</p>
                        @endif --}}
                      <ul class="mb-6 text-gray-700 relative z-10 px-10 pt-5 m-2">
                        @if ($package['description'])
                            @php
                                $descriptionWithIcons = str_replace(
                                    '<li>', 
                                    '<li class="flex items-center mb-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2 text-green-500"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>', 
                                    $package['description']
                                );
                            @endphp
                            <li class="text-gray-600 mb-4">{!! $descriptionWithIcons !!}</li>
                        @endif
                    </ul>


                    
                      <div class="text-center relative z-10 mt-10 mb-5">
                        <a href="http://my.idneobilling.com/auth/login" class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition duration-300">Order Now</a>
                      </div>
                  </div>
              @endforeach
          @else
              <p class="text-center text-gray-500">Tidak ada paket yang tersedia saat ini.</p>
          @endif
      </div>
  </div>
</section>
