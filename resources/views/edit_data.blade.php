<html>
<head><title>edit data</title></head>

<body>
<form action="" method="post">
@csrf
<input type="text" name="nama" value="{{$data->nama}}"><br></br>
<input type="text" name="kelas" value="{{$data->kelas}}"><br></br>
<input type="text" name="nis" value="{{$data->nis}}"><br></br>
<input type="submit" value="submit">

 </form>
</body>

</html>