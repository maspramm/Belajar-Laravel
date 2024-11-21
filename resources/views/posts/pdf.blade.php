<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
            img {
            width: 80px;
            height: 85px;
            object-fit: cover;
            border-radius: 50%;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>FOTO</th>
                <th>NIM</th>
                <th>NAMA MAHASISWA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="text-center">
                        @if ($post->foto_mahasiswa)
                            <img src="{{ public_path('storage/posts/' . $post->foto_mahasiswa) }}" alt="Foto Mahasiswa">
                        @else
                            Tidak Ada Foto
                        @endif
                    </td>
                    <td>{{ $post->nim }}</td>
                    <td>{{ $post->nama_mahasiswa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>