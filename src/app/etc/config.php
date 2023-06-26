<?php
// configuration with app and database details
namespace MyApp\Config;

class config
{

    function demo()
    {
        return [
           [
                'name' => 'My App',
                'version' => '1.0',
           ],
           [
                'baseUri'        => preg_replace('/public([\/\\\\])index.php$/', '', $_SERVER["PHP_SELF"]),
           ],
           [
             'developer' => 'Deeksha Pandey'
           ],
           [
            'production' =>[]
           ],
            ];
    }
}
