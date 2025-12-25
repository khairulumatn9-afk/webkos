@extends('backend.v_layout.app')

@section('title', 'Data Booking')

@section('content')
<div class="container">
    <h4 class="mb-3">Data Booking</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Penghuni</th>
                <th>Kamar</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booking as $b)
            <tr>
                <td>{{ $b->nama_penghuni }}</td>
                <td>{{ $b->kamar }}</td>
                <td>
                    <span class="badge bg-warning">{{ ucfirst($b->status) }}</span>
                </td>
                <td>
                    <a href="/pembayaran/{{ $b->id }}" class="btn btn-success btn-sm">
                        Bayar
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
