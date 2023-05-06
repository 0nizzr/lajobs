<?php

namespace App\Models;

class Jobs
{
    private static $jobs = [
        [
            "id" => 1,
            "title" => "Title 1",
            "description" => "Description on job 1"
        ],
        [
            "id" => 2,
            "title" => "Title 2",
            "description" => "Description on job 2"
        ],
        [
            "id" => 3,
            "title" => "Title 3",
            "description" => "Description on job 3"
        ],
    ];

    // methods

    public static function all()
    {
        return self::$jobs;
    }

    public static function find($id)
    {
        foreach (self::$jobs as $job) {
            if ($job['id'] == $id) {
                return $job;
            }
        }
    }
}
;