<html>
<head><title>data murid</title></head>
<body>
    <table border="1">
        <tr>
            <td>nama</td>
            <td>kelas</td>
            <td>nisn</td>
            <td>aksi</td>
</tr>


@foreach ($data as $data)
<tr>
    <td>{{$data->nama}}</td>
    <td>{{$data->kelas}}</td>
    <td>{{$data->nisn}}</td>
    <td><a href="/hapus_data1/{{$data->id}}">hapus</a>
<a href="/edit_data1/{{$data->id}}">edit</a></td>
</tr>
@endforeach
</table>





</body>







</html>