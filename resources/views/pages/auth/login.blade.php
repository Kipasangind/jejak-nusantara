@extends('layouts.app')

@section('content')
<main class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
    <div class="max-w-md w-full bg-white p-8 rounded shadow">

        <h1 class="text-2xl font-bold text-center mb-4">
            Masuk Akun
        </h1>

        <p class="text-center text-gray-600 mb-6">
            Fitur login akan tersedia pada versi pengembangan selanjutnya.
        </p>

        <div class="space-y-4">
            <input type="email"
                   disabled
                   placeholder="Email"
                   class="w-full px-4 py-2 border rounded bg-gray-100 cursor-not-allowed">

            <input type="password"
                   disabled
                   placeholder="Password"
                   class="w-full px-4 py-2 border rounded bg-gray-100 cursor-not-allowed">
        </div>

        <button disabled
                class="mt-6 w-full py-2 bg-gray-400 text-white rounded cursor-not-allowed">
            Masuk
        </button>

        <p class="mt-6 text-center text-sm text-gray-500">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-amber-600 hover:underline">
                Daftar
            </a>
        </p>

    </div>
</main>
@endsection
