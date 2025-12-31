<footer class="bg-gray-900 text-white py-10 mt-16">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8">
        <div>
            <h3 class="font-bold text-lg mb-3">Jejak Nusantara</h3>
            <p class="text-gray-400">Platform edukasi budaya Indonesia untuk generasi muda.</p>
        </div>

        <div>
            <h3 class="font-bold text-lg mb-3">Navigasi</h3>
            <ul class="space-y-2 text-gray-300">
                <li><a href="/">Beranda</a></li>
                <li><a href="{{ route('cultures.index') }}">Budaya</a></li>
                <li><a href="{{ route('contribute') }}">Kontribusi</a></li>
            </ul>
        </div>

        <div>
            <h3 class="font-bold text-lg mb-3">Kontak</h3>
            <p class="text-gray-400">Email: JejakNusantara@gmail.com</p>
            <p class="text-gray-400">Instagram: @JejakNusantara</p>
        </div>
    </div>

    <p class="text-center text-gray-500 mt-10">© 2025 Jejak Nusantara. All rights reserved.</p>
</footer>
