<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP_03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Kanit';
        }

        h1 {
            margin-bottom: 15px;
            font-size: 24pt;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container mt-4 text-center">
        <h1>สูตรคูณ</h1>

        <form method="POST">
            <input class="form-control-sm" type="number" id="number" name="number"></input>
            <input class="btn btn-primary" type="submit" ></input>
        </form>

        <div style="font-size: 16pt;">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST['number'])) {
                    echo "โปรดใส่จำนวน";
                } else {
                    echo "สูตรคูณแม่ ". $_POST['number']. "<br>";
                    for ($i = 1; $i <= 12; $i++){
                        echo $_POST['number']. " x ". $i. " = ". $_POST['number'] * $i. "<br>";
                    }
                }
            }
        ?>
        </div>
    </div>
</body>