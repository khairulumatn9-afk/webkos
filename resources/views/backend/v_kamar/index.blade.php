@extends('backend.v_layout.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Daftar Kamar</h3>

    <div class="row">
        @foreach($kamars as $kamar)
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5>Kamar {{ $kamar['nomor_kamar'] }}</h5>
                    <p class="text-muted">{{ $kamar['tipe_kamar'] }}</p>

                    <h6 class="text-success">
                        Rp {{ number_format($kamar['harga']) }} / bulan
                    </h6>

                    <a href="{{ route('kamar.show', $kamar['id']) }}"
                       class="btn btn-primary btn-sm mt-2">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
