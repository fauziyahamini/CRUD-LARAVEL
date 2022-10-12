<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIS</th>
                    <th>nama</th>
                    <th>alamat</th>
                    <th>nama sekolah</th>
                </tr>
            </thead>
            <tr>
                @foreach ($data3 as $item)
                <td>{{$item['id']}}</td>
                <td>{{$item['nis']}}</td>
                <td>{{$item['nama']}}</td>
                <td>{{$item['alamat']}}</td>
                <td>{{$item->sekolah->nama_sekolah}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>