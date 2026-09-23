<x-app-layout>
    <div x-data="{ showSuccess: false, message: '' }" class="max-w-6xl mx-auto p-6">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-xl font-bold">Daftar Artikel</h1>
                <p class="text-sm text-gray-500">Kelola tulisan dan informasi terbaru</p>
            </div>

            <a href="/articles/create" class="bg-black text-white text-sm px-4 py-2 rounded">
                + Buat Artikel
            </a>
        </div>

        <!-- Grid Artikel -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($data as $dt)
                <div class="border p-4 rounded">
                    <!-- Gambar & Konten -->
                    <div>
                        <div class="w-full h-48 bg-gray-200 mb-4">
                            <img src="{{ Storage::url($dt->image) }}" alt="{{ $dt->title }}" class="w-full h-full object-cover">
                        </div>

                        <h2 class="font-bold text-lg mb-2">
                            {{ $dt->title }}
                        </h2>
                        <p class="text-sm text-gray-600 mb-4">
                            {{ Str::limit($dt->content, 100) }}
                        </p>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="flex justify-between items-center text-sm border-t pt-2">
                        <a href="/articles/{{ $dt->id }}/edit" class="text-blue-600">
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
                            <button type="submit" class="text-red-600 cursor-pointer">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Notifikasi Sukses -->
        @if (session('success'))
            <div x-data="{ show: true }"
                 x-show="show"
                 x-init="setTimeout(() => show = false, 4000)"
                 class="fixed top-4 right-4 bg-green-600 text-white p-4 rounded shadow">
                <span>{{ session('success') }}</span>
            </div>
        @endif

    </div>
</x-app-layout>
