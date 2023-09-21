<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile URL</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
<div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
  <div class="p-2 border shadow rounded bg-light" style="min-width: 400px">
    <h3 class="m-3 text-center">Ini Halaman Create User</h3>
    <form action="<?= base_url('user/store')?>" method="post">
    <div class="mb-3 mx-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control">
    </div>
    <div class="mb-3 mx-3">
      <label for="npm" class="form-label">NPM</label>
      <input type="text" name="npm" class="form-control">
    </div>
    <div class="mb-3 mx-3">
      <label for="kelas" class="form-label">Kelas</label>
      <input type="text" name="kelas" class="form-control">
    </div>
    <div class="d-grid mb-3 mx-3">
      <input type="submit" value="Submit" class="btn btn-primary">
    </div>
    </form>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>