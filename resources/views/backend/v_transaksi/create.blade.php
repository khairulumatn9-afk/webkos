@extends('backend.v_layouts.app')

@section('content')
<div class="container">
    <h3>Pembayaran Booking</h3>

    <div class="card">
        <div class="card-body">
            <p>Kamar: <b>{{ $booking->nama_kamar }}</b></p>
            <p>Total: <b>Rp {{ number_format($booking->harga) }}</b></p>

            <form action="{{ route('pembayaran.store') }}" method="POST">
                @csrf
                <input type="hidden" name="booking_id" value="{{ $booking->id }}">

                <div class="mb-3">
                    <label>Metode Pembayaran</label>
                    <select name="metode" class="form-control">
                        <option>Transfer</option>
                        <option>Cash</option>
                    </select>
                </div>

                <button class="btn btn-success">
                    Bayar Sekarang
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
