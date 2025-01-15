<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Calculator</title>
    <style>
        * {
            font-family: 'Kanit';
        }

        h1 {
            display: flex;
            justify-content: center;
            font-size: 24pt;
            margin: 20px;
        }

        h2 {
            display: flex;
            justify-content: center;
            font-size: 20pt;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>สูตรคูณ</h1>
        @if (isset($myinput))
            <h2>My Input: {{ $myinput }}</h2>
        @else
            <h2>My Input: null</h2>
        @endif

        <form class="row g-3 justify-content-center mb-3" method="post" action="{{ url('/mycontroller') }}">
            @csrf
            <div class="col-auto">
                <input class="form-control" type="number" name="myinput">
            </div>

            <div class="col-auto">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>

        @if (isset($list) and count($list) > 0)
            <table class="table table-bordered table-light">
                <thead class="table-info">
                    <tr>
                        <th class="text-center">ตารางสูตรคูณ</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($list as $row)
                        <tr>
                            <td class="text-center">{{ $row }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif


    </div>
</body>
