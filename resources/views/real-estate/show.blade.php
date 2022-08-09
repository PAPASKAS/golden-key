<x-main-layout>
    <div class="container mt-4">
        <div>
            <img src="/storage/images/real-estates/{{ $real_estate->image_uri }}" alt="" class="img-fluid w-50">
        </div>
        <div class="mt-3">
            <h2>{{ $real_estate->name }}</h2>
            <h2>{{ $real_estate->description }}</h2>
        </div>
    </div>
</x-main-layout>
