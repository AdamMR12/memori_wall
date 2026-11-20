@extends('layouts.app')

@section('title', 'Dashboard Admin - Web Kelas')

@section('content')
<div class="bg-white rounded-lg shadow p-6 mb-6">
    <h1 class="text-2xl font-bold mb-2">Dashboard Admin</h1>
    <p class="text-gray-600 mb-6">
        Halo, {{ auth()->user()->name }}. Anda login sebagai <strong>Admin</strong>.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="p-4 bg-indigo-50 rounded-lg">
            <p class="text-sm text-gray-600">Total User</p>
            <p class="text-3xl font-bold text-indigo-700">{{ \App\Models\User::count() }}</p>
        </div>
        <div class="p-4 bg-green-50 rounded-lg">
            <p class="text-sm text-gray-600">User Aktif</p>
            <p class="text-3xl font-bold text-green-700">{{ \App\Models\User::active()->count() }}</p>
        </div>
        <div class="p-4 bg-amber-50 rounded-lg">
            <p class="text-sm text-gray-600">Belum Verifikasi Email</p>
            <p class="text-3xl font-bold text-amber-700">
                {{ \App\Models\User::whereNull('email_verified_at')->count() }}
            </p>
        </div>
    </div>
</div>
@endsection