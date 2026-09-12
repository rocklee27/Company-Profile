<x-guest-layout>
    <!-- CDN Tailwind CSS agar warna & styling langsung berfungsi tanpa npm -->
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="flex min-h-screen items-center justify-center bg-slate-100 p-6">
        <!-- Card Artikel Modern -->
        <div class="w-full max-w-md overflow-hidden rounded-3xl bg-white shadow-xl border border-slate-200/80">

            <!-- Banner Header Card -->
            <div class="relative bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 p-6 text-white">
                <!-- Badge Kategori -->
                <span class="inline-block rounded-full bg-white/20 px-3 py-1 text-xs font-bold uppercase tracking-wider text-purple-100 backdrop-blur-md border border-white/30">
                    {{ $dataarticle['category'] }}
                </span>

                <!-- Judul Artikel -->
                <h2 class="mt-3 text-2xl font-extrabold capitalize leading-tight tracking-snug text-white">
                    {{ $dataarticle['judul'] }}
                </h2>
            </div>

            <!-- Isi Card -->
            <div class="p-6">
                <p class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Deskripsi Artikel</p>
                <div class="rounded-2xl bg-slate-50 p-4 border border-slate-100">
                    <p class="text-sm font-medium leading-relaxed text-slate-700 first-letter:uppercase">
                        {{ $dataarticle['description'] }}
                    </p>
                </div>
            </div>

            <!-- Footer Card -->
            <div class="bg-slate-50 px-6 py-3 border-t border-slate-100 flex items-center justify-between text-xs font-medium text-slate-500">
                <span>Article Card</span>
                <span class="rounded-lg bg-indigo-50 px-2.5 py-1 text-indigo-600 font-bold border border-indigo-100">
                    #{{ $dataarticle['category'] }}
                </span>
            </div>

        </div>
    </div>
</x-guest-layout>
