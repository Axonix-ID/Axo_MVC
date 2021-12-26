<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?= $code; ?></title>

    <style>
        .sans {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <div class="d-flex align-items-center" style="width: 100vw;height: 100vh;">
        <div class="col text-center">
            <strong>
                <h3 class='sans'>Error <?= $code; ?></h3>
                <h3 class='sans'>Cannot GET : '<?= $uri; ?>'</h3>
                <h3 class='sans'>With Method : '<?= $method; ?>'</h3>
            </strong>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>