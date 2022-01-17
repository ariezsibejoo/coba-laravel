<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class Contributor
{
    public static $contributors = [
        [
            "nama" => "Aris Setiawan",
            "tempat_lahir" => "Malang",
            "tanggal_lahir" => "27 - 04 - 95",
            "image" => "aris"
        ],
        [
            "nama" => "Bejo Sujojo",
            "tempat_lahir" => "Malang",
            "tanggal_lahir" => "21 - 02 - 95",
            "image" => "bejo"
        ]
    ];

    public static function all()
    {
        return collect(self::$contributors);
    }
}
