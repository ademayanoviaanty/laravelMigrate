<html>
<head><title>data siswa</title></head>
<body>
    <table border="1">
        <tr>
            <td>nama</td>
            <td>kelas</td>
            <td>nis</td>
            <td>aksi</td>
</tr>


@foreach ($data as $data)
<tr>
    <td>{{$data->nama}}</td>
    <td>{{$data->kelas}}</td>
    <td>{{$data->nis}}</td>
    <td><a href="/hapus_data/{{$data->id}}">hapus</a>
<a href="/edit_data/{{$data->id}}">edit</a></td>
</tr>
@endforeach
</table>





</body>







</html>