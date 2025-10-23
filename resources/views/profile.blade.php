@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="text-center">
    <h2 class="fw-bold text-success mb-3">👤 Profil Pengguna</h2>
    <p class="text-muted">Kelola akun Anda di AppleSites.</p>

    <div class="card mx-auto mt-4 shadow-sm" style="max-width: 400px;">
        <div class="card-body">
            <p><strong>Nama:</strong> Admin Apel</p>
            <p><strong>Email:</strong> admin@applesites.com</p>

            <hr>
            {{-- Tombol Logout --}}
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger w-100">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
