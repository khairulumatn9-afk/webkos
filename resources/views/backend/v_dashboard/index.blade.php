@extends('backend.v_layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    <h3 class="mb-4">Dashboard Kos Digital</h3>

    <div class="row">
        <div class="col-md-3">
            <div class="card text-bg-primary shadow">
                <div class="card-body">
                    <h6>Total Kamar</h6>
                    <h3>12</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-bg-success shadow">
                <div class="card-body">
                    <h6>Kamar Terisi</h6>
                    <h3>8</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-bg-warning shadow">
                <div class="card-body">
                    <h6>Kamar Kosong</h6>
                    <h3>4</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-bg-danger shadow">
                <div class="card-body">
                    <h6>Booking Aktif</h6>
                    <h3>3</h3>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
