<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                Kandidat
            </div>
            <div class="card-body">
            <div class="row">
                <?php foreach($kandidat as $k) : ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/')?><?= $k['image'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sulatan</h5>
                            <div class="float">
                                <a href="#" class="btn btn-primary">Pilih!</a>
                                <a href="<?= base_url('pemilih/detail/'); ?><?= $k['id_kandidat']; ?>" class="btn btn-success">Detail Kandidat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>