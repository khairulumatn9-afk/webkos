<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Kamar - Kosan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

    <h3 class="mb-4 text-center">Booking Kamar</h3>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('booking.store') }}" method="POST">
        @csrf

        {{-- Pilih Kamar --}}
        <div class="mb-3">
            <label for="kamar_id" class="form-label">Pilih Kamar</label>
            <select name="kamar_id" id="kamar_id" class="form-select" required>
                <option value="">-- Pilih Kamar --</option>
                @foreach ($kamars as $kamar)
                    <option value="{{ $kamar['id'] }}">
                        {{ $kamar['nomor_kamar'] }} - {{ $kamar['tipe_kamar'] ?? '-' }} - Status: {{ $kamar['status'] ?? '-' }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Pilih Penghuni --}}
        <div class="mb-3">
            <label for="penghuni_id" class="form-label">Pilih Penghuni</label>
            <select name="penghuni_id" id="penghuni_id" class="form-select" required>
                <option value="">-- Pilih Penghuni --</option>
                @foreach($penghunis as $penghuni)
                    <option value="{{ $penghuni['id'] }}">{{ $penghuni['nama'] }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100">Booking Sekarang</button>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
