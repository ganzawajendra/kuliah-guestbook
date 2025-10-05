<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook Project</title>
    {{-- Sedikit styling sederhana agar lebih mirip gambar --}}
    <style>
        body { font-family: serif; margin: 50px; }
        h1 { font-size: 2.5em; font-weight: bold; }
        ul { list-style-type: disc; padding-left: 20px; }
        li { font-size: 1.2em; margin-bottom: 5px; }
        input[type="text"] { padding: 8px; width: 200px; }
        button { padding: 8px 15px; cursor: pointer; }
    </style>
</head>
<body>

    <h1>Guestbook</h1>

    {{-- Menampilkan list nama-nama dari data statis --}}
    <ul>
        @foreach ($guests as $guest)
            <li>{{ $guest }}</li>
        @endforeach
    </ul>

    {{-- Form sederhana untuk mengirimkan nama tamu --}}
    <form action="{{ route('guestbook.store') }}" method="POST">
        @csrf
        <input type="text" name="nama_tamu" placeholder="Masukkan nama" required>
        <button type="submit">Tambah</button>
    </form>

    {{-- Menampilkan error validasi jika ada --}}
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</body>
</html>