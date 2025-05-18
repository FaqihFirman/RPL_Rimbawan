<x-layout>

    <section class="relative bg-cover bg-center py-56 text-white" style="background-image: url('{{ asset('images/Forest1.jpg') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent to-white z-10"></div>
        <div class="relative container mx-auto text-center  p-5 rounded">
            <h2 class="text-6xl font-bold mb-4">Selamat Datang <br> Rimbawan!</h2>
            <p class="text-lg mb-6">Telusuri kekayaan flora dan fauna hutan xxx di sini</p>
            <a href="#" class="bg-white text-black px-6 py-3 rounded hover:bg-gray-200">Get Started</a>
        </div>
    </section>
    
    <section class="py-20 bg-white space-y-10  "> 
        <div class="max-w-4xl mx-auto px-6 flex justify-center items-center space-x-15">
            <img class="h-50" src="{{ asset('images/logo-universal.png') }}" alt="logo">
            <div class="flex flex-col space-y-1 items-start">
                <p class="text-3xl font-bold">AlasBase</p>
                <p class="text-justify"> AlasBase adalah platform perangkat lunak yang menyediakan informasi  terkait  keragaman flora dan fauna yang ada di hutan xxx. AlasBase memiliki tujuan supaya masyarakat umum dapat mengakses dan mengetahui keragaman flora serta fauna yang tedapat pada hutan xxxx</p>
            </div>
        </div>
        <div class="max-w-4xl mx-auto px-6 flex items-center justify-center space-x-15">
            <div class="flex flex-col space-y-1 items-end">
                <p class="text-3xl font-bold">Hutan Konawe</p>
                <p class="text-justify">Hutan dalam pengamatan ini adalah hutan Konawe yang merupakan bagian dari Kabupaten Konawe, Sulawesi Tenggara. Hutan ini memiliki luas sekitar 391.748 ha serta berada pada latitude -3.91717000 dan   Longitude  122.08823000  </p>
            </div>
            <img class="h-50 rounded" src="{{ asset('images/hutan-konawe.png') }}" alt="">
        </div>
    </section>

    <div class="mt-10 max-w-4xl mx-auto px-6 items-center flex justify-center"></div>
    
</x-layout>