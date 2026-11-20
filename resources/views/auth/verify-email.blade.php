@extends('layouts.app')

@section('title', 'Verifikasi Email - Web Kelas')

@section('content')
<div class="max-w-md mx-auto bg-white rounded-lg shadow p-6 text-center">
    <h1 class="text-2xl font-bold mb-4">Verifikasi Email</h1>
    <p class="text-gray-700 mb-6">
        Kami telah mengirim link verifikasi ke <strong>{{ auth()->user()->email }}</strong>.
        Silakan cek inbox/spam Anda dan klik link tersebut.
    </p>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}" class="mb-3">
        @csrf
        <button class="text-indigo-600 hover:underline text-sm">Kirim ulang link verifikasi</button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="text-red-600 hover:underline text-sm">Logout</button>
    </form>
</div>
@endsection