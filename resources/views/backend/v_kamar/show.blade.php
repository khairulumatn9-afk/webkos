@extends('backend.v_layout.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Detail Kamar</h3>

    <div class="card shadow-sm">
        <div class="card-body">

            <h4 class="mb-3">
                Kamar {{ $kamar['nomor_kamar'] }}
            </h4>

            <table class="table table-bordered">
                <tr>
                    <th width="30%">Tipe Kamar</th>
                    <td>{{ $kamar['tipe_kamar'] }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if($kamar['status'] == 'tersedia')
                            <span class="badge bg-success">Tersedia</span>
                        @else
                            <span class="badge bg-danger">Terisi</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Harga</th>
                    <td>
                        Rp {{ number_format($kamar['harga']) }} / bulan
                    </td>
                </tr>

                <tr>
                    <th>Fasilitas</th>
                    <td>{{ $kamar['fasilitas'] }}</td>
                </tr>
            </table>

            <div class="mt-3">
                <a href="{{ route('kamar.index') }}" class="btn btn-secondary">
                    ← Kembali
                </a>

               @if($kamar['status'] == 'tersedia')
    <a href="{{ route('booking.bookDirect', $kamar['id']) }}" class="btn btn-primary">
        Booking Kamar
    </a>
@endif


            </div>

        </div>
    </div>
</div>
@endsection
