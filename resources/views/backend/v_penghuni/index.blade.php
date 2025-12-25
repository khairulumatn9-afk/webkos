@extends('backend.v_layout.app')

@section('title', 'Data Penghuni')

@section('content')
<h4 class="mb-4 fw-bold">🏠 Data Penghuni Kos</h4>

<div class="row">
@forelse ($penghuni as $p)
    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="card shadow-sm border-0 h-100 penghuni-card">
            <div class="card-body text-center">

                {{-- Avatar --}}
                <img
                    src="https://ui-avatars.com/api/?name={{ urlencode($p->nama) }}&background=0D6EFD&color=fff"
                    class="rounded-circle mb-3"
                    width="80"
                >

                {{-- Nama --}}
                <h6 class="fw-bold mb-1">{{ $p->nama }}</h6>

                {{-- Info kamar --}}
                <small class="text-muted d-block mb-2">
                    Kamar {{ $p->kamar }} • Lantai {{ $p->lantai }}
                </small>

                {{-- Status --}}
                <div class="mb-3">
                    <span class="badge px-3 py-2
                        {{ $p->status == 'aktif' ? 'bg-success' : 'bg-secondary' }}">
                        {{ strtoupper($p->status) }}
                    </span>

                    <span class="badge px-3 py-2
                        {{ $p->pembayaran == 'lunas' ? 'bg-primary' : 'bg-warning text-dark' }}">
                        {{ strtoupper($p->pembayaran) }}
                    </span>
                </div>

                {{-- Aksi --}}
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-outline-primary btn-sm">
                        👤 Detail
                    </a>
                    <a href="#" class="btn btn-outline-success btn-sm">
                        💳 Transaksi
                    </a>
                </div>

            </div>
        </div>
    </div>
@empty
    <div class="col-12">
        <div class="alert alert-warning">
            Belum ada data penghuni.
        </div>
    </div>
@endforelse
</div>

{{-- Style tambahan --}}
<style>
    .penghuni-card {
        transition: all .3s ease;
        border-radius: 16px;
    }
    .penghuni-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0,0,0,.1);
    }
</style>
@endsection
