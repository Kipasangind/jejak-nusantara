@extends('layouts.app')

@section('content')
<main class="container mx-auto px-6 py-10 max-w-4xl">

    <h1 class="text-2xl font-bold mb-6">
        Review Kontribusi Budaya
    </h1>

    {{-- FLASH MESSAGE --}}
    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded shadow p-6">

        {{-- GAMBAR --}}
        @if($data->image)
            <img
                src="{{ asset('storage/' . $data->image) }}"
                alt="{{ $data->title }}"
                class="w-full h-64 object-cover rounded mb-6"
            >
        @else
            <div class="w-full h-64 bg-gray-100 flex items-center justify-center rounded mb-6 text-gray-500">
                Tidak ada gambar
            </div>
        @endif

        {{-- INFORMASI --}}
        <div class="space-y-3">
            <p><strong>Judul Budaya:</strong> {{ $data->title }}</p>
            <p><strong>Kategori:</strong> {{ $data->category->name ?? '-' }}</p>
            <p><strong>Provinsi:</strong> {{ $data->province ?? '-' }}</p>
            <p>
                <strong>Status:</strong>
                @if($data->status === 'pending')
                    <span class="px-2 py-1 text-sm rounded bg-amber-100 text-amber-700">
                        Pending
                    </span>
                @else
                    <span class="px-2 py-1 text-sm rounded bg-green-100 text-green-700">
                        Approved
                    </span>
                @endif
            </p>
        </div>

        {{-- DESKRIPSI --}}
        <div class="mt-6">
            <h3 class="font-semibold mb-2">Deskripsi Lengkap</h3>
            <div class="prose max-w-none text-gray-700">
                {!! nl2br(e($data->description)) !!}
            </div>
        </div>

        {{-- ACTION --}}
        <div class="mt-8 flex gap-4">

            {{-- TOMBOL APPROVE HANYA JIKA PENDING --}}
            @if($data->status === 'pending')
                <form method="POST"
                      action="{{ route('admin.contributions.approve', $data->id) }}">
                    @csrf
                    <button
                        class="px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                        ✔ Setujui & Publikasikan
                    </button>
                </form>
            @else
                <span class="px-6 py-2 bg-gray-200 text-gray-600 rounded">
                    Sudah Disetujui
                </span>
            @endif

            <a href="{{ route('admin.contributions.index') }}"
               class="px-6 py-2 border rounded hover:bg-gray-50">
                ← Kembali
            </a>
        </div>

    </div>
</main>
@endsection
