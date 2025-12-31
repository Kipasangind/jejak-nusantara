@extends('layouts.app')

@section('content')
<main class="container mx-auto px-6 py-10">

    <h1 class="text-2xl font-bold mb-6">
        Kontribusi Menunggu Persetujuan
    </h1>

    {{-- ALERT SUCCESS --}}
    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- JIKA KOSONG --}}
    @if($pending->isEmpty())
        <div class="p-6 bg-white rounded shadow text-gray-600">
            Tidak ada kontribusi yang menunggu persetujuan.
        </div>
    @else
        <div class="overflow-x-auto bg-white rounded shadow">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3 text-left">Judul</th>
                        <th class="px-4 py-3 text-left">Kategori</th>
                        <th class="px-4 py-3 text-left">Provinsi</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($pending as $item)
                        <tr class="border-t">

                            <td class="px-4 py-3 font-medium">
                                {{ $item->title }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $item->category->name ?? '-' }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $item->province ?? '-' }}
                            </td>

                            <td class="px-4 py-3">
                                @if($item->status === 'pending')
                                    <span class="px-2 py-1 text-xs bg-amber-100 text-amber-700 rounded">
                                        Pending
                                    </span>
                                @else
                                    <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
                                        Approved
                                    </span>
                                @endif
                            </td>

                            {{-- AKSI --}}
                            <td class="px-4 py-3 text-center">
                                <div class="flex gap-2 justify-center">

                                    {{-- REVIEW (GET LINK, BUKAN FORM) --}}
                                    <a href="{{ route('admin.contributions.review', $item->id) }}"
                                       class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">
                                        Review
                                    </a>

                                    {{-- DELETE --}}
                                    <form method="POST"
                                          action="{{ route('admin.contributions.delete', $item->id) }}"
                                          onsubmit="return confirm('Yakin hapus kontribusi ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                            Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

</main>
@endsection
 