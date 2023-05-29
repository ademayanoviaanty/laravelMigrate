<html>
<head><title>edit data murid</title></head>

<body>
<form action="" method="post">
@csrf
<input type="text" name="nama" value="{{$data->nama}}"><br></br>
<input type="text" name="kelas" value="{{$data->kelas}}"><br></br>
<input type="text" name="nisn" value="{{$data->nisn}}"><br></br>
<input type="submit" value="submit">

 </form>
</body>

</html>