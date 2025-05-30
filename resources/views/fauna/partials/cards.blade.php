@props(['url', 'imageUrl', 'namaUmum', 'namaLatin'])
@forelse ($faunas as $fauna)
    <x-card 
        :namaUmum="$fauna->nama_fauna" 
        :namaLatin="$fauna->nama_latin" 
        :imageUrl="asset('storage/' . $fauna->gambar_fauna)" 
        :url="route('fauna.detail', $fauna->fauna_id)"
    />
@empty
    <p class="text-center col-span-full">Fauna tidak ditemukan.</p>
@endforelse

