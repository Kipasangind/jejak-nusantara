@extends('layouts.app')

@section('content')

    <main class="container mx-auto px-6 py-10">
        <h1 class="text-2xl font-semibold">Tambahkan Budaya Daerahmu</h1>
        <p class="text-gray-600 mt-2">Isi form ini dengan lengkap. Setelah dikirim, admin akan meninjau sebelum dipublikasikan.</p>

        @if(session('success'))
            <div class="mt-4 p-4 bg-green-50 border border-green-200 text-green-800 rounded">{{ session('success') }}</div>
        @endif

        <form class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4 bg-white p-6 rounded shadow" method="POST" action="{{ route('contribute.store') }}" enctype="multipart/form-data">
            @csrf
            <label class="block">
                <span class="text-sm font-medium">Nama Budaya</span>
                <input type="text" name="title" required class="mt-1 block w-full rounded border px-3 py-2" placeholder="Contoh: Tari Saman" />
            </label>

            <label class="block">
                <span class="text-sm font-medium">Kategori</span>
                <select name="category_id" class="mt-1 block w-full rounded border px-3 py-2">
                    <option value="">-- Pilih --</option>
                    @foreach(\App\Models\Category::all() as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </label>

            <label class="block">
                <span class="text-sm font-medium">Provinsi</span>
                <input type="text" name="province" class="mt-1 block w-full rounded border px-3 py-2" placeholder="Contoh: Aceh" />
            </label>

            <label class="block">
                <span class="text-sm font-medium">Upload Foto (opsional)</span>
                <input type="file" name="image" class="mt-1 block w-full rounded border px-3 py-2" />
            </label>

            <label class="md:col-span-2 block">
                <span class="text-sm font-medium">Deskripsi Lengkap</span>
                <textarea name="description" class="mt-1 block w-full rounded border px-3 py-2" rows="6" required placeholder="Jelaskan sejarah, makna, tradisi..."></textarea>
            </label>

            <div class="md:col-span-2 text-right">
                <button type="submit" class="px-6 py-2 bg-amber-500 text-white rounded">Kirim untuk Ditinjau</button>
            </div>
        </form>
    </main>
@endsection

