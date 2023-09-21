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
        <div class="p-2 border shadow rounded bg-light" style="min-width: 345px">
            <div>
                <img class="border border-primary border-3 mx-auto d-block rounded-circle shadow" src="<?= base_url('assets/img/foto.jpg') ?>" width="200px">
            </div>
            <div class="text-center text-white" style="font-weight: 500;">
                <div class="p-2 m-3 bg-primary rounded">
                    <h5><?= $nama?></h5>
                </div>
                <div class="p-2 m-3 bg-primary rounded">
                    <h5><?= $npm?></h5>
                </div>
                <div class="p-2 m-3 bg-primary rounded">
                    <h5><?= $kelas?></h5>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</table>
</body>
</html>