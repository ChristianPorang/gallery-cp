<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Album Foto</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h2 {
      text-align: center;
    }

    .album {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .foto {
      margin: 10px;
    }
  </style>
</head>
<body>

  <h2>Album Foto</h2>

  <div class="album">
    <div class="foto">
      <img src="gambar1.jpg" alt="Foto 1">
      <p>Keterangan Foto 1</p>
    </div>

    <div class="foto">
      <img src="gambar2.jpg" alt="Foto 2">
      <p>Keterangan Foto 2</p>
    </div>

    <!-- Tambahkan lebih banyak div .foto sesuai kebutuhan -->
  </div>

</body>
</html>
