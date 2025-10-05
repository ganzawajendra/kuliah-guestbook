<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook Success</title>
</head>
<body>

    {{-- Bagian ini merepresentasikan output di sebelah kanan gambar --}}
    <p>Nama yang ditambahkan: {{ $nama_yang_ditambahkan }}</p>

    <a href="{{ route('guestbook.index') }}">Kembali ke Guestbook</a>

</body>
</html>