<div class="bg-white rounded shadow overflow-hidden">
    <div class="h-44 bg-cover bg-center" style="background-image: url('{{ $image }}')"></div>
    <div class="p-4">
        <h3 class="font-semibold">{{ $title }}</h3>
        <p class="text-sm text-gray-500">{{ $region }} • {{ $category }}</p>
        <div class="mt-3">
            <a href="{{ $url }}" class="text-amber-600 hover:underline">Lihat detail →</a>
        </div>
    </div>
</div>
