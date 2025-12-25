<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Detail Kamar</h3>
    <table class="table table-bordered mt-3">
        <tr><th>Nomor Kamar</th><td>{{ $kamar['nomor_kamar'] }}</td></tr>
        <tr><th>Tipe Kamar</th><td>{{ $kamar['tipe_kamar'] }}</td></tr>
        <tr><th>Status</th><td>{{ $kamar['status'] }}</td></tr>
        <tr><th>Harga</th><td>Rp {{ number_format($kamar['harga']) }} / bulan</td></tr>
        <tr><th>Fasilitas</th><td>{{ implode(', ', $kamar['fasilitas'] ?? ['-']) }}</td></tr>
    </table>

    @if($kamar['status'] === 'tersedia')
       <a href="{{ route('booking.bookDirect', $kamar['id']) }}" class="btn btn-primary">
    Booking Kamar
</a>

    @else
        <button class="btn btn-secondary" disabled>Booking Kamar</button>
    @endif
</div>
</body>
</html>
