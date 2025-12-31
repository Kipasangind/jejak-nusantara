@extends('layouts.app')

@section('content')
<main class="container mx-auto px-6 py-10">

    <a href="{{ route('regions.index') }}"
       class="text-amber-600 hover:underline mb-4 inline-block">
        ← Kembali ke daftar provinsi
    </a>

    <h1 class="text-3xl font-bold mb-6">
        Budaya dari {{ $province }}
    </h1>

    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">

        @forelse($cultures as $culture)
            <div class="bg-white rounded shadow overflow-hidden">

                <div class="h-48 bg-cover bg-center"
                    style="background-image: url('{{ $culture->image
                        ? asset('storage/' . $culture->image)
                        : asset('assets/placeholder1.svg') }}')">
                </div>

                <div class="p-4">
                    <h2 class="font-semibold text-lg">
                        {{ $culture->title }}
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        {{ $culture->category->name }}
                    </p>

                    <a href="{{ route('cultures.show', $culture->slug) }}"
                       class="inline-block mt-4 text-amber-600 hover:underline">
                        Lihat Detail →
                    </a>
                </div>
            </div>
        @empty
            <p class="text-gray-500 col-span-3">
                Belum ada budaya dari provinsi ini.
            </p>
        @endforelse

    </div>

    <div class="mt-8">
        {{ $cultures->links() }}
    </div>

</main>
@endsection
