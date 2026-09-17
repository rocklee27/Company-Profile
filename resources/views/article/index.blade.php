<x-app-layout>
    {{-- Inisialisasi state Alpine.js --}}
    <div x-data="{ showSuccess: false, message: '' }" class="max-w-6xl mx-auto px-6 py-10 bg-slate-50 min-h-screen relative">

        <div class="flex justify-between items-center mb-8 pb-4 border-b border-gray-200">
            <div>
                <h1 class="text-2xl font-light tracking-wide text-gray-800">Daftar Artikel</h1>
                <p class="text-xs text-gray-400 mt-1">Kelola tulisan dan informasi terbaru</p>
            </div>

            <a href="/articles/create" class="bg-gray-900 hover:bg-gray-700 text-white text-xs tracking-wider uppercase px-4 py-2.5 rounded-full transition-all duration-200">
                + Buat Artikel
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($data as $dt)
                <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden flex flex-col justify-between hover:border-gray-300 transition-colors duration-200">
                    <div>
                        <div class="w-full h-48 bg-gray-100 overflow-hidden">
                            <img src="{{ Storage::url($dt->image) }}" alt="{{ $dt->title }}" class="w-full h-full object-cover">
                        </div>

                        <div class="p-5">
                            <h2 class="text-base font-medium text-gray-800 mb-2 leading-snug line-clamp-1">
                                {{ $dt->title }}
                            </h2>
                            <p class="text-gray-500 text-xs leading-relaxed line-clamp-3">
                                {{ Str::limit($dt->content, 100) }}
                            </p>
                        </div>
                    </div>

                    <div class="px-5 py-3 border-t border-gray-100 flex justify-between items-center text-xs">
                        <a href="/articles/{{ $dt->id }}/edit" class="text-gray-500 hover:text-gray-900 font-medium transition-colors">
                            Edit
                        </a>

                        <form action="/articles/{{ $dt->id }}" method="POST"
                              @submit.prevent="
                                if (confirm('Yakin ingin menghapus artikel ini?')) {
                                    $el.submit();
                                }
                              ">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-600 font-medium transition-colors cursor-pointer">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Hapus Njing --}}
        @if (session('success'))
            <div x-data="{ show: true }"
                 x-show="show"
                 x-init="setTimeout(() => show = false, 4000)"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform translate-y-2"
                 class="fixed bottom-0 left-0 right-0 z-50 bg-green-600 text-white px-6 py-2 shadow-lg flex justify-end items-center text-xs">
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                    <span class="font-bold uppercase tracking-wider bg-green-700 px-2 py-0.5 rounded text-[10px] ml-2">Sukses</span>
                </div>
            </div>
        @endif

    </div>
</x-app-layout>
