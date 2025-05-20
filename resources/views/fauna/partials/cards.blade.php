@forelse ($faunas as $fauna)
    <x-card 
        :namaUmum="$fauna->nama_fauna" 
        :namaLatin="$fauna->nama_latin" 
        :imageUrl="asset('storage/' . $fauna->gambar_fauna)" 
    />
@empty
    <p class="text-center col-span-full">Fauna tidak ditemukan.</p>
@endforelse

