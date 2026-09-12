<x-app-layout>
    <div style="max-width: 600px; margin: 40px auto; padding: 20px; background: white; border: 1px solid #e5e7eb; border-radius: 8px;">
        <h1 style="font-size: 20px; font-weight: bold; margin-bottom: 20px;">Tambah Artikel</h1>

        <form action="/articles" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf

            <div>
                <label style="display: block; font-weight: 500; margin-bottom: 5px;">Gambar Sampul</label>
                <input type="file" name="image" required style="width: 100%; border: 1px solid #d1d5db; padding: 8px; border-radius: 6px;">
            </div>

            <div>
                <label style="display: block; font-weight: 500; margin-bottom: 5px;">Judul Artikel</label>
                <input type="text" name="title" required style="width: 100%; border: 1px solid #d1d5db; padding: 8px; border-radius: 6px;">
            </div>

            <div>
                <label style="display: block; font-weight: 500; margin-bottom: 5px;">Konten Artikel</label>
                <textarea name="content" rows="5" required style="width: 100%; border: 1px solid #d1d5db; padding: 8px; border-radius: 6px;"></textarea>
            </div>

            <div style="display: flex; gap: 10px; justify-content: flex-end;">
                <a href="/articles" style="padding: 8px 16px; border: 1px solid #d1d5db; border-radius: 6px; text-decoration: none; color: #374151;">Batal</a>
                <button type="submit" style="background: #111827; color: white; padding: 8px 16px; border: none; border-radius: 6px; cursor: pointer;">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
