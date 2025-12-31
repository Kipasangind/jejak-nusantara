@extends('layouts.app')

@section('content')
<main class="container mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold mb-8 text-center">
        Jelajah Budaya Berdasarkan Provinsi
    </h1>

    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @foreach($provinces as $province)
            <a href="{{ route('regions.show', \Illuminate\Support\Str::slug($province)) }}"
               class="group bg-white rounded shadow hover:shadow-lg transition p-6 text-center">

                <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 text-2xl font-bold">
                    {{ strtoupper(substr($province, 0, 1)) }}
                </div>

                <h2 class="font-semibold text-lg group-hover:text-amber-600 transition">
                    {{ $province }}
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Lihat budaya →
                </p>
            </a>
        @endforeach

    </div>

</main>
@endsection
