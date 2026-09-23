<x-guest-layout>
    <article class="max-w-4xl mx-auto py-12 px-4">
        {{-- Judul Artikel --}}
        <h1 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">{{ $article->title }}</h1>

        {{-- Gambar Artikel --}}
        <div class="w-full h-80 md:h-96 rounded-2xl overflow-hidden mb-8 bg-gray-100">
            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
        </div>

        {{-- Isi Konten Lengkap --}}
        <div class="prose max-w-none text-gray-700 leading-relaxed text-base">
            {!! nl2br(e($article->content)) !!}
        </div>

        {{-- Tombol Kembali --}}
        <div class="mt-10">
            <a href="/article" class="inline-block bg-gray-200 text-gray-800 px-5 py-2.5 rounded-xl font-medium text-sm hover:bg-gray-300 transition">
                &larr; Kembali ke Daftar Artikel
            </a>
        </div>
    </article>
</x-guest-layout>
