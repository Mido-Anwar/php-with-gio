<?php

define("APP",dirname(__dir__).DIRECTORY_SEPARATOR);
define("PAGES",dirname(__file__).DIRECTORY_SEPARATOR);  ;
define("CONFIG",realpath(__file__)) ;
define("STYLE","/media/mido/WORK/php/php-work/php-with-gio/sass/style.css");

chmod(APP, 0777);
chmod(PAGES, 0777);
chmod(APP . "exercise1_0", 0777);

