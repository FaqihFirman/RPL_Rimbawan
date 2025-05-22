@props(['url', 'imageUrl', 'namaUmum', 'namaLatin'])
@forelse ($floras as $flora)
    <x-card 
        :namaUmum="$flora->nama_flora" 
        :namaLatin="$flora->nama_latin" 
        :imageUrl="asset('storage/' . $flora->gambar_flora)" 
        :url="route('flora.detail', $flora->flora_id)"
    />
@empty
    <p class="text-center col-span-full">Flora tidak ditemukan.</p>
@endforelse

