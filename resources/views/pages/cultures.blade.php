@extends('layouts.app')

@section('content')
<main class="container mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold mb-6">
        Daftar Budaya Nusantara
    </h1>

    {{-- FILTER PROVINSI --}}
    @if(isset($provinces) && $provinces->count())
        <div class="mb-6 flex flex-wrap gap-2">
            <a href="{{ route('cultures.index') }}"
               class="px-4 py-2 rounded border text-sm
               {{ request('province') ? '' : 'bg-amber-500 text-white' }}">
                Semua Provinsi
            </a>

            @foreach($provinces as $prov)
                <a href="{{ route('cultures.index', ['province' => $prov]) }}"
                   class="px-4 py-2 rounded border text-sm
                   {{ request('province') === $prov ? 'bg-amber-500 text-white' : '' }}">
                    {{ $prov }}
                </a>
            @endforeach
        </div>
    @endif

    {{-- GRID BUDAYA --}}
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">

        @forelse ($cultures as $culture)
            <div class="bg-white rounded shadow overflow-hidden">

                {{-- GAMBAR --}}
                <div
                    class="h-48 bg-cover bg-center"
                    style="background-image: url('{{ $culture->image
                        ? asset('storage/' . $culture->image)
                        : asset('assets/placeholder1.svg') }}')">
                </div>

                {{-- KONTEN --}}
                <div class="p-4">
                    <h2 class="font-semibold text-lg">
                        {{ $culture->title }}
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        {{ $culture->province }} • {{ $culture->category->name }}
                    </p>

                    <a href="{{ route('cultures.show', $culture->slug) }}"
                       class="inline-block mt-4 text-amber-600 hover:underline">
                        Lihat Detail →
                    </a>
                </div>

            </div>
        @empty
            <p class="text-gray-500 col-span-3">
                Data budaya belum tersedia.
            </p>
        @endforelse

    </div>

    {{-- PAGINATION --}}
    <div class="mt-8">
        {{ $cultures->links() }}
    </div>

</main>
@endsection
