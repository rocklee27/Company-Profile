<section id="Article" class="w-full flex flex-col items-center justify-center py-12 bg-white">
    <h2 class="text-4xl font-bold text-center mb-10">Article</h2>

    <!-- Div Utama Pembungkus dengan Border Hitam Menyatu -->
    <div class="w-full max-w-5xl px-4">
        <div class="border border-black rounded-3xl p-6 md:p-8 bg-white shadow-sm">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                @forelse (\App\Models\Article::latest()->take(3)->get() as $dt)
                    <div class="flex flex-col items-center text-center">
                        <div class="w-full h-48 rounded-2xl overflow-hidden mb-6 bg-gray-100">
                            <img src="{{ Storage::url($dt->image) }}" alt="{{ $dt->title }}" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-black mb-3 line-clamp-1">{{ $dt->title }}</h3>
                        <p class="text-xs text-gray-600 leading-relaxed mb-6 flex-grow line-clamp-3">
                            {{ Str::limit(strip_tags($dt->content), 100) }}
                        </p>
                        <a href="/article/{{ $dt->id }}" class="w-full bg-black text-white py-2.5 rounded-xl font-medium text-xs hover:bg-gray-800 transition-colors text-center block">
    Pelajari Selengkapnya
</a>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500 py-6">
                        Belum ada artikel yang tersedia.
                    </div>
                @endforelse

            </div>

        </div>
    </div>
</section>
