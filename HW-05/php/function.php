<?php

include $_SERVER["DOCUMENT_ROOT"] . "/php/variable.php";

function rand_str($n)
{
    $str = [...range('a', 'z'), ...range('A', 'Z'), ...range(0, 9)];
    $rand_text = "";
    for ($i = 0; $i < $n; $i++) {
        $rand_text .= $str[rand(0, count($str))];
    }
    return $rand_text;
}

function listFolderFiles($dir)
{
    $ffs = scandir($dir);
    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);

    // prevent empty ordered elements
    if (count($ffs) < 1)
        return;

    foreach ($ffs as $key => $ff) {
        if (is_dir($dir . '/' . $ff)) {
            $ffs[$ff] = listFolderFiles($dir . '/' . $ff);
        } else {
            $ffs[$ff] = [
                "name" => $ff,
                "path" => "$dir/$ff",
                "size" => filesize("$dir/$ff")
            ];
        }
        unset($ffs[$key]);
    }
    return $ffs;
}