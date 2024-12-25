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
        <h1>เลขคู่เลขคี่</h1>

        <form method="POST">
            <div class="col mb-2">
                <label for="start">เริ่มต้น</label>
                <input class="form-control-sm" type="number" id="start" name="start"></input>
            </div>

            <div class="col mb-2">
                <label for="end">สิ้นสุด</label>
                <input class="form-control-sm" type="number" id="end" name="end"></input>
            </div>

            <input class="btn btn-primary" type="submit" ></input>
        </form>

        <div style="font-size: 16pt;">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $start = $_POST['start'];
                $end = $_POST['end'];

                if (empty($start) or empty($end)) {
                    echo "โปรดใส่จำนวนให้ครบ";
                    die;
                } else {
                    for ($i = $start; $i <= $end; $i++){
                        if ($i % 2 == 0) {
                            echo $i. " เป็นเลขคู่";
                        } else {
                            echo $i. " เป็นเลขคี่";
                        }
    
                        echo "<br>";
                    }
                }
            }
        ?>
        </div>
    </div>
</body>