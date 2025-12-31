@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section class="container mx-auto px-6 py-20 text-center">
    <div class="max-w-3xl mx-auto animate-fade">
        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight">
            Pelajari & Lestarikan Budaya Indonesia
        </h1>

        <p class="mt-5 text-gray-600 text-lg">
            Perpustakaan digital interaktif untuk mengenal suku, bahasa, tarian, pakaian adat,
            rumah adat, dan kuliner tradisional Indonesia.
        </p>

        <div class="mt-10 flex justify-center gap-4 flex-wrap">
            <a href="{{ route('cultures.index') }}"
                class="px-6 py-3 bg-amber-500 text-white rounded-lg shadow hover:bg-amber-600 transition">
                Jelajahi Budaya
            </a>

            <a href="{{ route('regions.index') }}"
                class="px-6 py-3 bg-emerald-500 text-white rounded-lg shadow hover:bg-emerald-600 transition">
                Jelajahi Wilayah
            </a>

            <a href="{{ route('contribute') }}"
                class="px-6 py-3 border rounded-lg hover:bg-amber-50 transition">
                Tambahkan Kontribusi
            </a>
        </div>
    </div>
</section>

{{-- FITUR UTAMA --}}
<section class="container mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold text-center mb-12">Kenapa Jejak Nusantara?</h2>

    <div class="grid md:grid-cols-3 gap-10 text-center">
        <div class="p-6 bg-white shadow rounded-lg">
            <h3 class="text-xl font-bold mb-2">🎭 Jelajah Budaya</h3>
            <p class="text-gray-600">Kenali ratusan budaya dari berbagai daerah di Indonesia.</p>
        </div>

        <div class="p-6 bg-white shadow rounded-lg">
            <h3 class="text-xl font-bold mb-2">📚 Belajar Mudah</h3>
            <p class="text-gray-600">Deskripsi singkat dan mudah dipahami pelajar.</p>
        </div>

        <div class="p-6 bg-white shadow rounded-lg">
            <h3 class="text-xl font-bold mb-2">🤝 Kontribusi Publik</h3>
            <p class="text-gray-600">Siapapun bisa berkontribusi menambah data budaya.</p>
        </div>
    </div>
</section>

{{-- JELAJAH WILAYAH --}}
<section class="container mx-auto px-6 py-16 text-center">
    <h2 class="text-3xl font-bold mb-6">Jelajahi Berdasarkan Wilayah</h2>

    <p class="text-gray-600 mb-6">
        Temukan budaya khas dari setiap provinsi di Indonesia
    </p>

    <a href="{{ route('regions.index') }}"
       class="inline-block px-8 py-4 bg-amber-500 text-white rounded-lg shadow
              hover:bg-amber-600 transition text-lg font-semibold">
        Masuk ke Halaman Wilayah →
    </a>
</section>

{{-- BUDAYA TERBARU --}}
<section class="container mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold text-center mb-12">Budaya Terbaru</h2>

    <div class="grid md:grid-cols-3 gap-8">

        @forelse ($latest as $culture)
            <div class="bg-white p-6 shadow rounded-lg hover:-translate-y-1 transition">
                <h3 class="font-bold text-xl mb-2">{{ $culture->title }}</h3>

                <p class="text-gray-600">
                    {{ Str::limit($culture->description, 100) }}
                </p>

                <a href="{{ route('cultures.show', $culture->slug) }}"
                    class="text-amber-600 font-semibold mt-3 block hover:underline">
                    Lihat Selengkapnya →
                </a>
            </div>
        @empty
            <p class="text-center text-gray-500 col-span-3">
                Belum ada budaya yang ditambahkan.
            </p>
        @endforelse

    </div>
</section>

{{-- ANIMASI --}}
<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fade {
    animation: fadeIn 1s ease-out;
}
</style>

@endsection
