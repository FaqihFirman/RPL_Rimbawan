<x-layout>
    <section class="relative bg-cover bg-center py-20 text-white h-[30vh]" style="background-image: url('{{ asset('images/forest-strip.png') }}');">
        <div class="relative container mx-auto text-center p-5 rounded">
            <h2 class="text-6xl font-bold mb-4">{{ $fauna->nama_fauna }}</h2>
            <p class="text-xl italic">{{ $fauna->nama_latin }}</p>
        </div>
    </section>

    <section class="py-20 bg-white space-y-10 max-w-5xl mx-auto px-6">
        <div class="flex flex-col md:flex-row space-x-10 items-start">
            <img class="h-130 w-2/5 rounded-2xl mb-6 md:mb-0 object-cover" src="{{ asset('storage/' . $fauna->gambar_fauna) }}" alt="{{ $fauna->nama_umum }}">
            <div class="flex flex-col space-y-5 w-full">
                <div class="flex justify-between items-center w-full">
                    <div>
                        <p class="text-3xl font-bold">{{ $fauna->nama_fauna }}</p>
                        <p class="text-gray-700 text-xl italic">{{ $fauna->nama_latin }}</p>
                    </div>
                    <div class="bg-red-900 text-white p-2 rounded">
                        <p>{{ $fauna->status_konservasi ?? 'Status tidak tersedia' }}</p>
                    </div>
                </div>
                <hr class="border-gray-400 w-full">
                <p class="text-align: justify">
                    {!! $fauna->deskripsi_fauna ?? 'Deskripsi belum tersedia.' !!}
                </p>
            </div>
        </div>
    </section>
</x-layout>
