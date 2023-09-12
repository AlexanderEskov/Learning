<?php

namespace App;

class App
{
    private static string $settings;

    public function __construct()
    {
        $settingsFile = file_get_contents($_SERVER['DOCUMENT_ROOT']."/settings.json");
        App::$settings = json_decode($settingsFile);
    }

    public static function getRoutePath($route) : Array
    {
        if (isset(App::$settings[$route])) {
            return file_get_contents(App::$settings[$route]);
        }
    }

}