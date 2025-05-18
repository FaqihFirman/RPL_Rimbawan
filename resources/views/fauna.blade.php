<x-layout>

    <section class="relative bg-cover bg-center py-20 text-white" style="background-image: url('{{ asset('images/Forest1.jpg') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent to-white z-10"></div>
        <div class="relative container mx-auto text-center  p-5 rounded">
            <form action="#" method="GET" class="flex justify-center items-center max-w-lg mx-auto">
                <input
                type="text"
                name="search"
                placeholder="Search for fauna..."
                class="w-full px-5 bg-gray-100 py-2 rounded-l-md text-black focus:outline-none"
            />
            <button
            type="submit"
            class="bg-white text-black px-5 py-5 rounded-r-md hover:bg-gray-200"
            >
        </div>
    </section>
    
    <section>
        <div class=" max-w-5xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition duration-200 hover:scale-102 hover:ease-in-out" style="width: 304px;">
              <div class="overflow-hidden h-[200px] w-[304px]">
                <img
                  src="{{ asset('images/deer.png') }}"
                  alt="Soka Merah"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="text-center p-4">
                <h3 class="text-xl font-semibold text-black">Soka merah</h3>
                <p class="text-sm italic text-gray-600">Ixora coccinea</p>
              </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition duration-200 hover:scale-102 hover:ease-in-out" style="width: 304px;">
              <div class="overflow-hidden h-[200px] w-[304px]">
                <img
                  src="{{ asset('images/deer.png') }}"
                  alt="Soka Merah"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="text-center p-4">
                <h3 class="text-xl font-semibold text-black">Soka merah</h3>
                <p class="text-sm italic text-gray-600">Ixora coccinea</p>
              </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition duration-200 hover:scale-102 hover:ease-in-out" style="width: 304px;">
              <div class="overflow-hidden h-[200px] w-[304px]">
                <img
                  src="{{ asset('images/deer.png') }}"
                  alt="Soka Merah"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="text-center p-4">
                <h3 class="text-xl font-semibold text-black">Soka merah</h3>
                <p class="text-sm italic text-gray-600">Ixora coccinea</p>
              </div>
            </div>
            
             
        </div>
    </section>

    {{-- <div class="bg-gray-800 min-h-screen flex items-center justify-center p-4"> --}}
      {{-- </div> --}}
      



    <div class="max-w-xs mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <img
          src="{{ asset('images/Forest1.jpg') }}"
          alt="Soka Merah"
          class="w-full h-48 object-cover"
        />
        <div class="p-4 text-center">
          <h3 class="text-lg font-bold text-black">Soka merah</h3>
          <p class="text-sm italic text-gray-600">Ixora coccinea</p>
        </div>
    </div>
      
      

</x-layout>