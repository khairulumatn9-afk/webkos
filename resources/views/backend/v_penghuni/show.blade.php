@extends('backend.v_layout.app')

@section('title', 'Detail Penghuni')

@section('content')
<a href="{{ route('penghuni.index') }}" class="btn btn-secondary btn-sm mb-3">
    ← Kembali
</a>

<div class="card shadow border-0">
    <div class="card-body">
        <div class="row align-items-center">

            <div class="col-md-4 text-center">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($penghuni['nama']) }}&background=0D6EFD&color=fff"
                     class="rounded-circle mb-3"
                     width="130">

                <h5>{{ $penghuni['nama'] }}</h5>

                <span class="badge bg-success">{{ strtoupper($penghuni['status']) }}</span>
                <span class="badge bg-primary">{{ $penghuni['pembayaran'] }}</span>
            </div>

            <div class="col-md-8">
                <table class="table table-borderless">
                    <tr>
                        <th>Kamar</th>
                        <td>{{ $penghuni['kamar'] }}</td>
                    </tr>
                    <tr>
                        <th>Lantai</th>
                        <td>{{ $penghuni['lantai'] }}</td>
                    </tr>
                    <tr>
                        <th>No HP</th>
                        <td>{{ $penghuni['hp'] }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $penghuni['email'] }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $penghuni['alamat'] }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Masuk</th>
                        <td>
                            {{ !empty($penghuni['tgl_masuk']) 
                                ? date('d M Y', strtotime($penghuni['tgl_masuk'])) 
                                : '-' 
                            }}
                        </td>
                    </tr>
                </table>

                {{-- Tombol Booking Kamar --}}
                @if($penghuni['kamar_status'] ?? 'tersedia' == 'tersedia')
                    <a href="{{ route('booking.bookDirect', $penghuni['kamar']) }}" 
                       class="btn btn-primary mt-3">
                        Booking Kamar
                    </a>
                @endif

            </div>

        </div>
    </div>
</div>
@endsection
