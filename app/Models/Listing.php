<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'this is the description'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'this is the description'
            ]
            ];

    }
}