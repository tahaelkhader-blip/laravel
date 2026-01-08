<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/produits/{cat}', function ($cat) {

    $produits = [];

    if ($cat == 'hicking') {
        $produits = [
            ["nom" => "Sac à dos", "prix" => 200, "image" => "f4.jpg"],
            ["nom" => "Tente", "prix" => 300, "image" => "f6.jpg"],
            ["nom" => "Montre GPS", "prix" => 150, "image" => "f5.jpg"],
        ];
    } elseif ($cat == 'electromenager') {
        $produits = [
            ["nom" => "Machine à laver", "prix" => 3000, "image" => "f1.jpg"],
            ["nom" => "Four", "prix" => 1500, "image" => "f2.jpg"],
            ["nom" => "Micro-onde", "prix" => 1000, "image" => "f3.jpg"],
        ];
    }

    return view('Produits', [
        'products' => $produits,
        'categorie' => $cat
    ]);
});
