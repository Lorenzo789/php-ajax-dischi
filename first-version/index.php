<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MY CSS -->
    <link rel="stylesheet" href="./styles//style.css">

    <title>PHP Ajax Dischi</title>
</head>

<body>

    <header>
        <i class="fa-brands fa-spotify"></i>
    </header>

    <?php include __DIR__ .'/./db/db.php'; ?>


    <main>
        <div class="container">
            <?php foreach ($discs as $key => $disc) { ?>
                <div class="card">

                    <div class="image-container">
                        <img src="<?php echo $disc['poster'] ?>" alt="">
                    </div>

                    <h3><?php echo $disc['title'] ?></h3>
                    <p><?php echo $disc['author'] ?></p>
                    <p><?php echo $disc['genre'] ?></p>
                    <p><?php echo $disc['year'] ?></p>

                </div>
            <?php }?>
        </div>
    </main>

</body>
</html>