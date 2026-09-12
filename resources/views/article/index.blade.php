<x-app-layout>
    <div style="max-width: 900px; margin: 40px auto; padding: 0 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h1 style="font-size: 24px; font-weight: bold;">Daftar Artikel</h1>
            <a href="/articles/create" style="background: #111827; color: white; padding: 8px 16px; border-radius: 6px; text-decoration: none;">+ Buat Artikel</a>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
            @foreach ($data as $dt)
                <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
                    <img src="{{ Storage::url($dt->image) }}" alt="{{ $dt->title }}" style="width: 100%; height: 160px; object-fit: cover;">
                    <div style="padding: 15px;">
                        <h2 style="font-size: 18px; font-weight: bold; margin-bottom: 8px;">{{ $dt->title }}</h2>
                        <p style="color: #4b5563; font-size: 14px; margin-bottom: 15px;">{{ Str::limit($dt->content, 100) }}</p>

                        <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f3f4f6; pt: 10px;">
                            <a href="/articles/{{ $dt->id }}/edit" style="color: #2563eb; text-decoration: none; font-size: 14px;">Edit</a>

                            <form action="/articles/{{ $dt->id }}" method="POST" onsubmit="return confirm('Yakin hapus?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color: #dc2626; background: none; border: none; cursor: pointer; font-size: 14px;">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
