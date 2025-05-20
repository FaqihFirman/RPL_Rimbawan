<x-layout>

  <div class="relative w-full h-1/4 ">
      <img src="{{ asset('images/forest-strip.png') }}" alt="forest-strip" class="w-full h-full object-cover">
      
      <div class="absolute inset-0 flex items-center justify-center">
          <input type="text" id="search" name="search" value="{{ old('search', $search ?? '') }}"
              placeholder="Cari fauna (nama umum atau nama latin)..."
              class="w-11/12 max-w-md px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-slate-100"
              autocomplete="off">
      </div>
  </div>

  <div id="fauna-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 mx-15 my-10">
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
  </div>

  <x-pagination-buttons :paginator="$faunas" />

  <script>
      document.addEventListener('DOMContentLoaded', function() {
          const searchInput = document.getElementById('search');
          const faunaList = document.getElementById('fauna-list');

          function debounce(func, delay) {
              let timeout;
              return function(...args) {
                  clearTimeout(timeout);
                  timeout = setTimeout(() => func.apply(this, args), delay);
              };
          }

          const fetchFauna = debounce(function() {
              const query = searchInput.value;

              fetch(`/fauna?search=${encodeURIComponent(query)}`, {
                      headers: {
                          'X-Requested-With': 'XMLHttpRequest'
                      }
                  })
                  .then(response => response.text())
                  .then(html => {
                      faunaList.innerHTML = html;
                  })
                  .catch(error => console.error('Error:', error));
          }, 300);

          searchInput.addEventListener('input', fetchFauna);
      });
  </script>

</x-layout>
