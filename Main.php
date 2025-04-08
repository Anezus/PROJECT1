<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terraria World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="plan.css">
    <style>
        body {
            background-image: url(https://i.pinimg.com/originals/24/18/c0/2418c07e8952fde53b4ec9ef73b56a8e.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .card {
            margin-top:20px;
            background-color: rgba(255, 255, 255, 0.62);
        }
        .navbar {
        opacity: 0.8;
        }
        .navbar {
        background-color: rgba(255, 255, 255, 0); 
        }
    </style>
</head>
<body>
        
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/13.jpg" style="width: 80px" ><b text-color: hsla(0, 0.00%, 0.80%, 0.00)>Terraria The Journy All Bosses</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://terraria.fandom.com/wiki/Bosses">Boss Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://localhost/Anezu/session4/lab5btvn2.php">How
                            To Summon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact To Game</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Item Of Bossed
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><img src="img/1.jpg" style="width: 50px">Action</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><img src="img/2.jpg" style="width: 50px">Another
                                    action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><img src="img/3.jpg" style="width: 50px">Something
                                    else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?php
    $productlist = [
        ['name' => 'The Twin', 'image' => 'img/1.jpg','more' => 'https://terraria.fandom.com/wiki/Plantera'],
        ['name' => 'Plantera', 'image' => 'img/2.jpg','more' => 'https://terraria.fandom.com/wiki/Plantera'],
        ['name' => 'Brain Of Cthulu', 'image' => 'img/BOC.jpg','more' => 'https://terraria.fandom.com/wiki/Brain_of_Cthulhu'],
        ['name' => 'Wall Of Flesh', 'image' => 'img/WOF.jpg','more' => 'https://terraria.fandom.com/wiki/Wall_of_Flesh'],
        ['name' => 'King Slime', 'image' => 'img/KS.jpg','more' => 'https://terraria.fandom.com/wiki/King_Slime'],
        ['name' => 'Eater of Worlds', 'image' => 'img/EOW.jpg','more' => 'https://terraria.fandom.com/wiki/Eater of Worlds'],
        ['name' => 'Queen Bee', 'image' => 'img/Qb.jpg','more' => 'https://terraria.fandom.com/wiki/Queen Bee'],
        ['name' => 'Skeletron', 'image' => 'img/SK.jpg','more' => 'https://terraria.fandom.com/wiki/Skeletron'],
        ['name' => 'Deerclops', 'image' => 'img/DEE.jpg','more' => 'https://terraria.fandom.com/wiki/Deerclops'],
        ['name' => 'Queen Slime', 'image' => 'img/QS.jpg','more' => 'https://terraria.fandom.com/wiki/Queen Slime'],
        ['name' => 'The Destroyer', 'image' => 'img/TD.jpg','more' => 'https://terraria.fandom.com/wiki/The Destroyer'],
        ['name' => 'Skeletron Prime', 'image' => 'img/SP.jpg','more' => 'https://terraria.fandom.com/wiki/Skeletron Prime'],
        ['name' => 'Golem', 'image' => 'img/G.jpg','more' => 'https://terraria.fandom.com/wiki/Golem'],
        ['name' => 'Empress of Light', 'image' => 'img/EOL.jpg','more' => 'https://terraria.fandom.com/wiki/Empress of Light'],
        ['name' => 'Lunatic Cultist', 'image' => 'img/LC.jpg','more' => 'https://terraria.fandom.com/wiki/Lunatic Cultist'],
        ['name' => 'Moon Lord', 'image' => 'img/ML.jpg','more' => 'https://terraria.fandom.com/wiki/Moon Lord'],
        

    ];
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($productlist as $item) {
                ?>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $item['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['name']; ?></h5>
                           
                            <a href="<?= $item['more']; ?>" class="btn btn-primary me-1">More</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>