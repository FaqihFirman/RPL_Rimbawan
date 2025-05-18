<footer class="bg-[#07211A] text-white py-8 mt-2">
    <div class="max-w-5xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Navigation Links -->
        <div>
            <h4 class="text-lg font-semibold mb-2">AlasBase</h4>
            <ul class="space-y-1 text-sm">
                <li class="font-bold">Contact us</li>
                <li><a href="#" class="hover:underline">alasbase@gmail.com</a></li>
                <li><a href="#" class="hover:underline">Jl. Pegangsaan Timur no 56 Jakarta</a></li>
                <li><a href="#" class="hover:underline">+62-1234-5678</a></li>
            </ul>
        </div>
        <!-- Company Info -->
        {{-- <div>
            <h3 class="text-xl font-bold mb-2">AlasBase</h3>
            <p class="text-sm text-justify">
                AlasBase adalah platform perangkat lunak yang menyediakan informasi tentang keragaman flora dan fauna di hutan xxx. Masyarakat umum dapat mengakses dan memahami kekayaan hayati hutan dengan mudah.
            </p>
        </div>
         --}}
        <!-- Social Media or Contact -->
        <div class="flex flex-col justify-center items-center space-y-3">
            <div class="flex space-x-3"> 
                    <p class="text-sm">Home</p>
                    <p class="text-sm">Flora</p>
                    <p class="text-sm">Fauna</p>
            </div>
            <div class="flex space-x-8">
                <img class="h-5" src="{{ asset('images/Instagram.png') }}" alt="">
                <img class="h-5" src="{{ asset('images/Twitter.png') }}" alt="">
                <img class="h-5" src="{{ asset('images/Facebook.png') }}" alt="">
            </div>
        </div>
        <div class="flex flex-col justify-center item">
            <img src="{{ asset('images/Navbar-logo.png') }}" alt="">
        </div>
    </div>

    <div class="text-center text-xs text-gray-300 mt-8">
        <p>Supported by Kementrian Lingkungan Hidup dan Kehutanan</p>
        &copy; {{ date('Y') }} AlasBase. All rights reserved.
    </div>
</footer>
