@extends('layouts.app')

@section('content')

<main class="container mx-auto px-6 py-10">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold">Total Budaya</h3>
            <p class="text-2xl mt-2">{{ $totalCultures }}</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold">Kontribusi Pending</h3>
            <p class="text-2xl mt-2 text-amber-600">{{ $pending }}</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold">Pengguna Terdaftar</h3>
            <p class="text-2xl mt-2">{{ $users }}</p>
        </div>
    </div>

    <section class="mt-6">
        <h3 class="font-semibold mb-3">Kontribusi Terbaru</h3>

        <div class="bg-white rounded shadow overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left p-3">Nama Budaya</th>
                        <th class="text-left p-3">Kategori</th>
                        <th class="text-left p-3">Provinsi</th>
                        <th class="text-left p-3">Status</th>
                        <th class="p-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recent as $c)
                    <tr class="border-t">
                        <td class="p-3">{{ $c->title }}</td>
                        <td class="p-3">{{ $c->category->name ?? '-' }}</td>
                        <td class="p-3">{{ $c->province }}</td>
                        <td class="p-3 text-amber-600">{{ $c->status }}</td>
                        <td class="p-3 text-center">
                            <a href="{{ route('admin.contributions.index') }}"
                               class="px-3 py-1 bg-amber-500 text-white rounded">
                                Review
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

</main>
@endsection
