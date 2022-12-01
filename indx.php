<!DOCTYPE html>
<html lang="en">
<head>
  <title>MATA KULIAH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>ENTRI MATA KULIAH</h2>
  <form action="eksekusi.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="matakuliah">Mata Kuliah:</label>
      <input type="text" class="form-control" id="matakuliah" placeholder="Mata Kuliah" name="matakuliah">
    </div>
    <div class="mb-3">
      <label for="namadosen">Nama Dosen:</label>
      <input type="text" class="form-control" id="namadosen" placeholder="Nama Dosen" name="namadosen">
    </div>
    <button type="submit" class="btn btn-primary" name="next">SIMPAN</button><a href="dff.php" class="btn btn-dark"> Daftar mata kuliah</a>
  </form>
</div>

</body>
</html>