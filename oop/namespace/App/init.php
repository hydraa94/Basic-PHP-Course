<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/game.php';
// require_once 'Produk/cetakInfoProduk.php';
// require_once 'Produk/user.php';
// require_once 'Services/user.php';

spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Services/' . $class . '.php';
});
