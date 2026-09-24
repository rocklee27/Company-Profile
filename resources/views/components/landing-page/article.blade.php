<x-landing-page.layout>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
        @foreach($data as $item)
            <div>
                <img src="{{ asset('storage/' . $item->image) }}" alt="">
                <h2>{{ $item->title }}</h2>
                <p>{{ $item->content }}</p>
            </div>
        @endforeach
    </div>
</x-landing-page.layout>
