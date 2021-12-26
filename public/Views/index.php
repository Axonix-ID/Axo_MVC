<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Izyanz MVC</title>

</head>

<body>
    <h2 class="text-center">
        Time (Jakarta) : <?php date_default_timezone_set("Asia/Jakarta");
                            echo date("H:i"); ?>
    </h2>

    <div class="container mt-5">
        <h2>Welcome to your application</h2>
        <hr>
        <a href="">Read the documentation</a>
        <hr>
        <p class="mb-3" id='txt'></p>

        <button class="btn btn-primary" id="click">Click!</button>
    </div>

    <div class="fixed-bottom w-100 bg-light d-flex justify-content-center align-items-center" style="height: 100px;">
        <?php if ($axo === "development") : ?>
            <h4>Development</h4>
        <?php elseif ($axo === "production") : ?>
            <h4>Production</h4>
        <?php elseif ($axo === "test") : ?>
            <h4>Testing</h4>
        <?php endif; ?>
    </div>

    <script>
        let i = 0
        document.getElementById('txt').innerHTML = "You clicked the button " + i + "x"

        document.getElementById('click').onclick = function() {
            i++;
            document.getElementById('txt').innerHTML = "You clicked the button " + i + "x"
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>