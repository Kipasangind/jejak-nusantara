<nav class="bg-white border-b sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-2">
            <div class="w-10 h-10 bg-amber-500 rounded-full flex items-center justify-center font-bold text-white">
                JN
            </div>
            <span class="text-lg font-semibold">Jejak Nusantara</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-6">
            <a href="/" class="hover:text-amber-600">Beranda</a>
            <a href="{{ route('cultures.index') }}" class="hover:text-amber-600">Budaya</a>
            <a href="{{ route('contribute') }}" class="hover:text-amber-600">Kontribusi</a>
            <a href="/admin" class="hover:text-amber-600">Admin</a>
        </div>

        <!-- Auth -->
        <div class="hidden md:flex items-center gap-3">
            <a href="/login" class="px-4 py-2 border rounded hover:bg-gray-50">Masuk</a>
            <a href="/register" class="px-4 py-2 bg-amber-500 text-white rounded hover:bg-amber-600">Daftar</a>
        </div>

        <!-- Mobile Toggle -->
        <button id="navToggle" class="md:hidden text-3xl">
            ☰
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden px-6 pb-4 space-y-3">
        <a href="/" class="block">Beranda</a>
        <a href="{{ route('cultures.index') }}" class="block">Budaya</a>
        <a href="{{ route('contribute') }}" class="block">Kontribusi</a>
        <a href="/admin" class="block">Admin</a>

        <hr>

        <a href="/login" class="block">Masuk</a>
        <a href="/register" class="block text-amber-600 font-semibold">Daftar</a>
    </div>
</nav>

<script>
document.getElementById("navToggle").addEventListener("click", () => {
    document.getElementById("mobileMenu").classList.toggle("hidden");
});
</script>
