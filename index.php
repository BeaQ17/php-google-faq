<?php
$faqs = [
    [
        "question" => "Lorem ipsum dolor?",
        "answer" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p>"
    ],
    [
        "question" => "Sit amet?",
        "answer" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p>"
    ],
    [
        "question" => "Consectetur adipisicing elit?",
        "answer" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p>"
    ],
    [
        "question" => "Officiis lorem ipsum?",
        "answer" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Porro, officiis.</p>"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google FAQ</title>
    <link rel="stylesheet" href="./partials/header.css">
    <link rel="stylesheet" href="./partials/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://loghi-famosi.com/wp-content/uploads/2020/09/Google-Logo.png" alt="">
            <h1>Privacy & Termini</h1>
        </div>
        <div class="menu">
            <a href="#">Introduzione</a>
            <a href="#">Norme sulla privacy</a>
            <a href="#">Termini di servizio</a>
            <a href="#">Tecnologie</a>
            <a href="#">Domande frequenti</a>
        </div>
    </header>

    <hr>

    <main>
        <div class="faq">
            <?php
            foreach ($faqs as $faq) {
            ?>
                <h2 class="q"><?php echo $faq["question"];?></h2>
                <p class="a"><?php echo $faq["answer"];?></p>
            <?php
            }
            ?>
        </div>
    </main>

</body>
</html>