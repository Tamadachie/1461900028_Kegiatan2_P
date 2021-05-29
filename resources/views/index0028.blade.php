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
<p>Tampilkan Kategori Judul manga :</p>
<form action="/manga/join" method="GET">
<input type="text" name="lihat" placeholder="Cari manga .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
</form>
<p></p>
<form action="/manga/kategori" method="GET">
<input type="text" name="lihat" placeholder="Cari manga Berdasarkan Kategori" value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<th>kode_manga</th>
<th>kode_kategori</th>
<th>kode_penerbit</th>
<th>judul_manga</th>
<th>jumlah_manga</th>
<th>pengarang_manga</th>
<th>tahun_terbit_manga</th>
</tr>
@foreach($ms_manga as $p)
<tr>
<td>{{ $p->kode_manga }}</td>
<td>{{ $p->kode_kategori }}</td>
<td>{{ $p->kode_penerbit }}</td>
<td>{{ $p->judul_manga }}</td>
<td>{{ $p->jumlah_manga }}</td>
<td>{{ $p->pengarang_manga }}</td>
<td>{{ $p->tahun_terbit_manga }}</td>
</tr>
@endforeach
</table>
</body>
</html>
