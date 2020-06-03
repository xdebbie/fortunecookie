<?php
require 'quotes.php';
$quote = $quotes[array_rand($quotes)];
$quoteText = $quote['text'];
$quoteNumber = $quote['number'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>【Ｆｏｒｔｕｎｅ　Ｃｏｏｋｉｅ】</title>
    <meta name="fortune cookie generator" content="【Ｆｏｒｔｕｎｅ　Ｃｏｏｋｉｅ】">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen" href="css/main.css" />
</head>

<body class="grid-container">
    <div id="bg"></div>
    <header>
        <h1>Fortune <span>cookie</span></h1>
    </header>

    <main>
        <section class="quote">
            <div class="blur">
                <h2>&ldquo;<?php echo $quoteText; ?>&rdquo;</h2>
                <p><?php echo $quoteNumber; ?></p>
            </div>
            <div class="cookie">
                <img src="img/cookie.png" alt="fortune cookie" />
            </div>
        </section>
        <button class="open-it">Open it!</button>
        <script type="text/javascript" src="main.js"></script>
    </main>

    <footer>
        Deborah Caldeira <span> </span>
        <p>
            <a href="https://github.com/xdebbie" id="git"></a><a href="https://twitter.com/debishot" id="twitter"></a><a
                href="https://www.linkedin.com/in/deborah-caldeira/" id="linkedin"></a><a
                href="https://medium.com/@ithos" id="medium"></a><a href="https://dev.to/xdebbie" id="dev"></a>
        </p>
    </footer>
</body>

</html>