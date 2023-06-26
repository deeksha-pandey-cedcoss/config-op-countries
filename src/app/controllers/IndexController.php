<?php

use Phalcon\Mvc\Controller;

use MyApp\Config\config;

include APP_PATH . "/etc/app.php";
include APP_PATH . "/etc/countries.php";


// defalut controller view
class IndexController extends Controller
{
    public function indexAction()
    {
        // version name and host name of configuration

        $time = new MyApp\Config\countries();
        $datatime = $time::demo();
        $this->view->data = $datatime;
    }
    public function timedefAction()
    {
        // version name and host name of configuration
        $tz = $_POST['timez'];
        $timestamp = time();
        $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
        $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
        echo "<h3>For $tz time is" .$dt->format('d.m.Y, H:i:s')."</h3>";
        die;
    }
}
