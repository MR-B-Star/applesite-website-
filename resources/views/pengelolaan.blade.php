@extends('layouts.app')

@section('title', 'Data Apel')

@section('content')
    <h2 class="fw-bold text-success mb-3">📋 Daftar Harga Apel</h2>
    <p class="text-muted">Informasi harga apel berdasarkan jenisnya.</p>

    <div class="table-responsive mt-4">
        <table class="table table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>Jenis Apel</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['jenis'] }}</td>
                    <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
