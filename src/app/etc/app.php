<?php

define("version","1.0");
define("time",time());
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
define("timezone",date('d-m-Y H:i:s'));
define("language",$_SERVER['HTTP_ACCEPT_LANGUAGE']);
