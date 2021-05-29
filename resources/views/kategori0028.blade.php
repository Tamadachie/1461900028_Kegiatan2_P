<!DOCTYPE html>
<html>
<head>
<title>1461900028-Satria David Pratama</title>
</head>
<body>
<h2>Tamadachi</h2>
<h3>Data manga</h3>
<table border="1">
<tr>
<p>Cari manga :</p>
<form action="/manga/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari manga .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
Tampilkan Kategori Judul manga :
<form action="/manga/join" method="GET">
<input type="text" name="lihat" placeholder="Cari manga .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<p></p>
<form action="/manga/kategori" method="GET">
<input type="text" name="lihat" placeholder="Cari manga Berdasarkan Kategori" value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>

<th>judul_manga</th>
<th>kode_manga</th>
<th>jumlah_manga</th>
<th>nama_kategori</th>
</tr>
@foreach($ms_manga as $p)
<tr>
<td>{{ $p->judul_manga }}</td>
<td>{{ $p->kode_manga }}</td>
<td>{{ $p->jumlah_manga }}</td>
<td>{{ $p->nama_kategori }}</td>
</tr>
@endforeach
</table>
</body>
</html>
