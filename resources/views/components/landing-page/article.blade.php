<section id="Article" class="w-full flex flex-col items-center justify-center py-12 bg-white">
    <h2 class="text-4xl font-bold text-center mb-10">Article</h2>

    <!-- Div Utama Pembungkus dengan Border Hitam Menyatu -->
    <div class="w-full max-w-5xl px-4">
        <div class="border border-black rounded-3xl p-6 md:p-8 bg-white shadow-sm">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-full h-48 rounded-2xl overflow-hidden mb-6">
                        <img src="{{ asset('images/home.jpg') }}" alt="Router" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-lg font-bold text-black mb-3">Router</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-6 flex-grow">
                        perangkat keras jaringan yang berfungsi untuk menerima sinyal internet dari modem dan membagikannya secara nirkabel
                    </p>
                    <a href="#" class="w-full bg-black text-white py-2.5 rounded-xl font-medium text-xs hover:bg-gray-800 transition-colors">
                        Pelajari Selengkapnya
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-full h-48 rounded-2xl overflow-hidden mb-6">
                        <img src="{{ asset('images/home.jpg') }}" alt="Kabel Lan" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-lg font-bold text-black mb-3">Kabel Lan</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-6 flex-grow">
                        kabel khusus yang menghubungkan perangkat keras seperti komputer, laptop, atau router dalam area terbatas
                    </p>
                    <a href="#" class="w-full bg-black text-white py-2.5 rounded-xl font-medium text-xs hover:bg-gray-800 transition-colors">
                        Pelajari Selengkapnya
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-full h-48 rounded-2xl overflow-hidden mb-6">
                        <img src="{{ asset('images/home.jpg') }}" alt="Repeater" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-lg font-bold text-black mb-3">Repeater</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-6 flex-grow">
                        perangkat keras jaringan yang berfungsi untuk menerima sinyal internet dari modem dan membagikannya secara nirkabel
                    </p>
                    <a href="#" class="w-full bg-black text-white py-2.5 rounded-xl font-medium text-xs hover:bg-gray-800 transition-colors">
                        Pelajari Selengkapnya
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>
