@extends('layouts.app')

@section('content')
<main class="container mx-auto px-6 py-10">
    <div class="grid md:grid-cols-3 gap-6">

        {{-- KONTEN UTAMA --}}
        <div class="md:col-span-2 bg-white rounded shadow p-6">
            <div
                class="h-72 bg-cover bg-center rounded"
                style="background-image: url('{{ $culture->image
                    ? asset('storage/' . $culture->image)
                    : asset('assets/placeholder1.svg') }}')">
            </div>

            <h1 class="mt-4 text-2xl font-bold">
                {{ $culture->title }}
            </h1>

            <p class="text-sm text-gray-500">
                {{ $culture->province }} • {{ $culture->category->name }}
            </p>

            <div class="mt-6 text-gray-700">
                <p class="font-semibold mb-2">Deskripsi:</p>
                <div class="prose max-w-none">
                    {!! nl2br(e($culture->description)) !!}
                </div>
            </div>
        </div>

        {{-- SIDEBAR --}}
        <aside class="bg-white rounded shadow p-6">
            <p><strong>Kategori:</strong> {{ $culture->category->name }}</p>
            <p class="mt-2"><strong>Daerah:</strong> {{ $culture->province }}</p>
            <p class="mt-2"><strong>Kontributor:</strong> {{ $culture->creator->name ?? 'Admin' }}</p>

            {{-- BAGIKAN --}}
            <div class="mt-6 space-y-3">
                <button onclick="shareWA()"
                    class="w-full px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                    📱 Bagikan ke WhatsApp
                </button>

                <button onclick="copyLink()"
                    class="w-full px-4 py-2 border rounded hover:bg-gray-100">
                    🔗 Salin Link
                </button>

                <p id="copyAlert" class="text-sm text-green-600 hidden">
                    Link berhasil disalin!
                </p>
            </div>

            {{-- RELATED --}}
            <div class="mt-8">
                <h4 class="font-semibold">Budaya terkait</h4>
                <ul class="mt-3 space-y-2">
                    @foreach($related as $r)
                        <li>
                            <a href="{{ route('cultures.show', $r->slug) }}"
                               class="text-amber-600 hover:underline">
                                {{ $r->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>

    </div>
</main>

{{-- SCRIPT SHARE --}}
<script>
    function copyLink() {
        navigator.clipboard.writeText(window.location.href);
        const alert = document.getElementById('copyAlert');
        alert.classList.remove('hidden');

        setTimeout(() => {
            alert.classList.add('hidden');
        }, 2000);
    }

    function shareWA() {
        const url = encodeURIComponent(window.location.href);
        const text = encodeURIComponent("Yuk kenali budaya Indonesia:");
        window.open(`https://wa.me/?text=${text}%20${url}`, '_blank');
    }
</script>
@endsection
