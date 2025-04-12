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
            <a class="navbar-brand" href="#"><img src="img/13.jpg" style="width: 80px" ><b text-color: hsla(0, 0.00%, 0.80%, 0.00)>Terraria The Stores</b></a>
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
                        <a class="nav-link" href="https://terraria.fandom.com/wiki/Bosses">Figure Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://localhost/Anezu/session4/lab5btvn2.php">How
                            To Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact To UsWebsite</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Figure Idle
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
        ['name' => 'The Twin', 'price' => '1700000', 'sale_price' => '1500000', 'image' => 'img/tws.jpg','more' => 'https://terraria.fandom.com/wiki/Plantera'],
        ['name' => 'Plantera', 'price' => '19500000', 'sale_price' => '2100000', 'image' => 'img/pt7.jpg','more' => 'https://terraria.fandom.com/wiki/Plantera'],
        ['name' => 'Brain Of Cthulu', 'price' => '2500000', 'sale_price' => '2200000', 'image' => 'img/boc1.jpg','more' => 'https://terraria.fandom.com/wiki/Brain_of_Cthulhu'],
        ['name' => 'Wall Of Flesh', 'price' => '2600000', 'sale_price' => '1800000', 'image' => 'img/wof1.jpg','more' => 'https://terraria.fandom.com/wiki/Wall_of_Flesh'],
        ['name' => 'King Slime', 'price' => '2780000', 'sale_price' => '3400000', 'image' => 'img/ks.jpg','more' => 'https://terraria.fandom.com/wiki/King_Slime'],
        ['name' => 'Eater of Worlds', 'price' => '2650000', 'sale_price' => '1200000', 'image' => 'img/eow.jpg','more' => 'https://terraria.fandom.com/wiki/Eater of Worlds'],
        ['name' => 'Queen Bee', 'price' => '2780000', 'sale_price' => '3600000', 'image' => 'img/qb.jpg','more' => 'https://terraria.fandom.com/wiki/Queen Bee'],
        ['name' => 'Skeletron', 'price' => '1650000', 'sale_price' => '2700000', 'image' => 'img/sk1.jpg','more' => 'https://terraria.fandom.com/wiki/Skeletron'],
        ['name' => 'Deerclops', 'price' => '1950000', 'sale_price' => '2300000', 'image' => 'img/dee1.jpg','more' => 'https://terraria.fandom.com/wiki/Deerclops'],
        ['name' => 'Queen Slime', 'price' => '1400000', 'sale_price' => '2500000', 'image' => 'img/qs.jpg','more' => 'https://terraria.fandom.com/wiki/Queen Slime'],
        ['name' => 'The Destroyer', 'price' => '1800000', 'sale_price' => '2900000', 'image' => 'img/td.jpg','more' => 'https://terraria.fandom.com/wiki/The Destroyer'],
        ['name' => 'Skeletron Prime', 'price' => '1900000', 'sale_price' => '2600000', 'image' => 'img/sp.jpg','more' => 'https://terraria.fandom.com/wiki/Skeletron Prime'],
        ['name' => 'Golem', 'price' => '7800000', 'sale_price' => '1900000', 'image' => 'img/g1.jpg','more' => 'https://terraria.fandom.com/wiki/Golem'],
        ['name' => 'Empress of Light', 'price' => '9400000', 'sale_price' => '1300000', 'image' => 'img/eol3.jpg','more' => 'https://terraria.fandom.com/wiki/Empress of Light'],
        ['name' => 'Lunatic Cultist', 'price' => '3100000', 'sale_price' => '1600000', 'image' => 'img/lc4.jpg','more' => 'https://terraria.fandom.com/wiki/Lunatic Cultist'],
        ['name' => 'Moon Lord', 'price' => '4200000', 'sale_price' => '1700000', 'image' => 'img/ml1.jpg','more' => 'https://terraria.fandom.com/wiki/Moon Lord'],
        

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
                            <?php if ($item['sale_price'] == '0') { ?>
                                <p class="card-text">Price:<?= $item['price']; ?></p>
                                <?php
                            } else { ?>
                                <p class="card-text">Old:<s><?= $item['sale_price']; ?></s> Price:<?= $item['price']; ?></p>
                                <?php
                            }
                            ?>
                              <a href="#" class="btn btn-danger me-1">Add to Cart</a>
                                
                           
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