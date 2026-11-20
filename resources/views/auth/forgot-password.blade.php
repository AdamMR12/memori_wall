@extends('layouts.app')

@section('title', 'Lupa Password - Web Kelas')

@section('content')
<div class="max-w-md mx-auto bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-bold mb-4 text-center">Lupa Password</h1>
    <p class="text-sm text-gray-600 mb-4 text-center">
        Masukkan email Anda, kami akan mengirim link untuk reset password.
    </p>

    @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded text-sm">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
        </div>
        <button class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
            Kirim Link Reset
        </button>
    </form>

    <p class="text-sm text-center mt-4">
        <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Kembali ke login</a>
    </p>
</div>
@endsection