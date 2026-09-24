<x-guest-layout>
    <section class="w-full flex flex-col justify-center items-start border-4 border-generald-500 p-8">

        <script src="https://cdn.tailwindcss.com"></script>
        <h1>
            profile
        </h1>

        <p>
            {{ $dataProfile->profiles }}
        </p>
    </section>

    <section>
        <form action="/update/{{ $dataProfile->id }}" method="POST">
            @csrf
            @method('PUT')

            <textarea name="profiles" cols="60" rows="10" class="w-3/4">{{ $dataProfile->profiles }}</textarea>
            <button type="submit" class="p-4 bg-blue-500 rounded-lg text-red">
                simpan
            </button>
        </form>
    </section>
</x-guest-layout>
