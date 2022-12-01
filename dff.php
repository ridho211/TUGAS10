 <title>Daftar Mata kuliah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php

$con= mysqli_connect("localhost", "root", "", "siakad");
$key="RIDHOIKHRAM";
  $query="SELECT AES_DECRYPT(mk,'$key') as mk,AES_DECRYPT(ds,'$key') as ds from entrimatakuliah";
  $ex= mysqli_query($con,$query);
  

?>
<div class="container mt-3">
  <h2>Daftar Mata Kuliah</h2>
  
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>NO</th>
          <th>Mata Kuliah</th>
          <th>Nama Dosen</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php $i=1; ?>
          <?php while ($row=mysqli_fetch_assoc($ex)): ?>
          <td><?= $i; ?></td>
          
          <td><?= $row["mk"]; ?></td>
          <td><?= $row["ds"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
