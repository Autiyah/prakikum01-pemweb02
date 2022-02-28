<?php
    //Array buah
    $array_buah = [
        'p' => 'Pisang'
        'p' => 'Jeruk'
        'p' => 'Apel'
        'p' => 'Mangga'
    ];

    //Menampilkan array dengan foreach List
    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>'.$key.'-'.$value.'<li>';
    }
    echo '</ol>';

    ?>