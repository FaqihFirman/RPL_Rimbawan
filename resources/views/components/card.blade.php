@props(['url', 'imageUrl', 'namaUmum', 'namaLatin'])

<a href="{{ $url }}" class="block group max-w-xs rounded overflow-hidden shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
    <img class="w-full h-60 object-cover" src="{{ $imageUrl }}" alt="{{ $namaUmum }}">
    <div class="px-4 py-3">
        <div class="font-bold text-lg mb-1 text-green-900 group-hover:underline">{{ $namaUmum }}</div>
        <p class="text-gray-600 italic text-sm group-hover:underline">{{ $namaLatin }}</p>
    </div>
</a>
