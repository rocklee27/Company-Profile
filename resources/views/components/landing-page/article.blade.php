<x-landing-page.layout>
    <h1 class="bg-green-400">bla bla bala bala bla bla</h1>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <!-- Grid Card 3 Kolom -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($data as $item)
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 flex flex-col justify-between p-2">
                    <div>
                        <!-- Gambar & Badge -->
                        <div class="relative h-52 w-full overflow-hidden rounded-2xl bg-gray-100 mb-4">
                            <img
                                src="{{ asset('storage/' . $item->image) }}"
                                alt="{{ $item->title }}"
                                class="w-full h-full object-cover"
                            >
                            <span class="absolute top-3 left-3 bg-indigo-600 text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">
                                TECHNOLOGY
                            </span>
                        </div>

                        <!-- Info Tanggal & Waktu Baca -->
                        <div class="px-3">
                            <!-- TANGGAL ASLI DARI DATABASE -->
                            <p class="text-xs text-gray-400 font-medium mb-2">
                                {{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y') }} • 5 min read
                            </p>

                            <!-- Judul Artikel -->
                            <h2 class="font-bold text-xl text-gray-900 mb-2 line-clamp-1">
                                {{ $item->title }}
                            </h2>

                            <!-- Isi / Konten Artikel -->
                            <p class="text-gray-500 text-sm mb-6 line-clamp-2 leading-relaxed">
                                {{ $item->content }}
                            </p>
                        </div>
                    </div>

                    <!-- Tombol Read More / Learn More -->
                    <div class="px-3 pb-3">
                        <a href="{{ url('/article/' . $item->id) }}" class="inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-all duration-200 shadow-md hover:shadow-indigo-200">
                            Read more
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-landing-page.layout>
