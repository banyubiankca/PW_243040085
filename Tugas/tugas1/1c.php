<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>block</title>
    <style>
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 50px);
            grid-template-rows: repeat(3, 50px);
            gap: 50px;
            align-items: center;
            justify-items: center;
            margin: 70px;
        }
        .box {
            width: 100px;
            height: 100px;
            background-color: black;
            color: white;
            font-size: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid white;
            
        }
        .row-1 {
            grid-column: 1 / 2;
            grid-row: 1 / 2;
        }
        .row-2-1 {
            grid-column: 1 / 2;
            grid-row: 2 / 3;
        }
        .row-2-2 {
            grid-column: 2 / 3;
            grid-row: 2 / 3;
        }
        .row-3-1 {
            grid-column: 1 / 2;
            grid-row: 3 / 4;
        }
        .row-3-2 {
            grid-column: 2 / 3;
            grid-row: 3 / 4;
        }
        .row-3-3 {
            grid-column: 3 / 4;
            grid-row: 3 / 4;
        }
    </style>
</head>
<body>
    <div class="grid">
        <div class="box row-1">1</div>
        <div class="box row-2-1">2</div>
        <div class="box row-2-2">2</div>
        <div class="box row-3-1">3</div>
        <div class="box row-3-2">3</div>
        <div class="box row-3-3">3</div>
    </div>
</body>
</html>