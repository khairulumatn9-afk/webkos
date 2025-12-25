@extends('backend.v_layout.app')

@section('title', 'Data Booking')

@section('content')
<div class="card shadow border-0">
    <div class="card-body">

        <h5 class="mb-3">📋 Daftar Booking</h5>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Kamar</th>
                    <th>Tanggal Booking</th>
                    <th>Status</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($booking as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->kamar }}</td>
                        <td>{{ date('d M Y', strtotime($item->tgl_booking)) }}</td>
                        <td>
                            <span class="badge bg-{{ $item->status == 'disetujui' ? 'success' : ($item->status == 'pending' ? 'warning' : 'danger') }}">
                                {{ strtoupper($item->status) }}
                            </span>
                        </td>
                        <td>{{ $item->catatan ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">
                            Data booking belum ada
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection
