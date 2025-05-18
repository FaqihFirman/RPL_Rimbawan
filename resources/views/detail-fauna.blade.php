<x-layout>
    <section class="relative bg-cover bg-center py-20 text-white" style="background-image: url('{{ asset('images/Forest1.jpg') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent to-white z-10"></div>
        <div class="relative container mx-auto text-center  p-5 rounded">
            <h2 class="text-6xl font-bold mb-4">Fauna</h2>
            {{-- <p class="text-lg mb-6">Telusuri kekayaan flora dan fauna hutan xxx di sini</p> --}}
            {{-- <a href="#" class="bg-white text-black px-6 py-3 rounded hover:bg-gray-200">Get Started</a> --}}
        </div>
    </section>

    <section class="py-20 bg-white space-y-10  "> 
        <div class="max-w-5xl mx-auto px-6 flex justify-center items-start space-x-15">
            <img class="h-130 rounded-2xl" src="{{ asset('images/owl.jpg') }}" alt="logo">
            <div class="mt-10 flex flex-col space-y-5 items-start">
                <div class="flex justify-between items-center w-full">
                    <div>
                        <p class="text-3xl font-bold">Serak Jawa</p>
                        <p class="text-gray-700 text-xl italic text-justify">Tyto alba</p>
                        {{-- <p>Terancam Punah</p> --}}
                    </div>
                    <div class="bg-red-900 text-white p-2 rounded">
                        <p>Endangered</p>
                    </div>
                </div>
                <hr style="height:2px; background-color:gray; border:none; width:100%;">
                <p class="text-justify">Serak jawa (Tyto alba) atau burung hantu lumbung barat atau burung hantu gudang merupakan spesies Burung hantu berukuran besar (34 cm), mudah dikenali sebagai burung hantu putih. Wajah berbentuk jantung, warna putih dengan tepi cokelat. Mata menghadap ke depan, merupakan ciri yang mudah dikenali. Bulu lembut, berwarna tersamar, bagian atas berwarna kelabu terang dengan sejumlah garis gelap dan bercak pucat tersebar pada bulu. Ada tanda mengilat pada sayap dan punggung. Bagian bawah berwarna putih dengan sedikit bercak hitam, atau tidak ada</p>

            </div>
        </div>
        {{-- <div class="max-w-4xl mx-auto px-6 flex items-center justify-center space-x-15">
            <div class="flex flex-col space-y-1 items-end">
                <p class="text-3xl font-bold">Hutan Konawe</p>
                <p class="text-justify">Hutan dalam pengamatan ini adalah hutan Konawe yang merupakan bagian dari Kabupaten Konawe, Sulawesi Tenggara. Hutan ini memiliki luas sekitar 391.748 ha serta berada pada latitude -3.91717000 dan   Longitude  122.08823000  </p>
            </div>
            <img class="h-50 rounded" src="{{ asset('images/hutan-konawe.png') }}" alt="">
        </div> --}}
    </section>
</x-layout>