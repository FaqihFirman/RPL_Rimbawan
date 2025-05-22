<x-layout>

    <div class="relative h-[30vh]">
        <img src="{{ asset('images/forest-strip.png') }}" alt="forest-strip" class="object-cover w-full h-full">
        <div class="absolute inset-0 flex items-center justify-center">
            <input type="text" id="search" name="search" value="{{ old('search', $search ?? '') }}"
                placeholder="Cari flora (nama umum atau nama latin)..."
                class="w-11/12 max-w-md px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-slate-100"
                autocomplete="off">
        </div>
    </div>


    <div id="fauna-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 mx-15 my-10">
        @forelse ($floras as $flora)
            <x-card :namaUmum="$flora->nama_flora" :namaLatin="$flora->nama_latin" :imageUrl="asset('storage/' . $flora->gambar_flora)" :url="route('flora.detail', $flora->flora_id)" />
        @empty
            <p class="text-center col-span-full">Flora tidak ditemukan.</p>
        @endforelse
    </div>

    <x-pagination-buttons :paginator="$floras" />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const floraList = document.getElementById('flora-list');

            function debounce(func, delay) {
                let timeout;
                return function(...args) {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, args), delay);
                };
            }

            const fetchFlora = debounce(function() {
                const query = searchInput.value;

                fetch(`/flora?search=${encodeURIComponent(query)}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.text())
                    .then(html => {
                        floraList.innerHTML = html;
                    })
                    .catch(error => console.error('Error:', error));
            }, 300);

            searchInput.addEventListener('input', fetchFlora);
        });
    </script>

</x-layout>
