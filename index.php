<?php
// This would be your framework default bootstrap file

// During dev, this file would be hit when accessing your local host, like:
// http://vite-php-setup.test

require_once __DIR__ . '/helpers.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vite App</title>
    <script>
        let App = {}
    </script>
    <?= vite('js/base.js') ?>
</head>

<body>
    <?= '<p class="message">PHP output here, 14SSlarge1 HTML chSunks</p>' ?>

    <div class="vue-app">
        <hello-world msg="header"></hello-world>
    </div>

    <?= '<p class="message">PHP output here, potentially laasdrge HTML chunks</p>' ?>

    <div class="vue-app">
        <hello-world msg="component"></hello-world>
    </div>

    <?= '<p class="message">PHP output123 here, potentially large HTML chunks</p>' ?>
</body>
    <?= vite('js/global.js') ?>
</html>
