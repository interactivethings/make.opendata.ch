<?php

/* Browser language detection */
switch (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)){
    case "de":
        include("index.de.php");
        break;
    case "fr":
        include("index.fr.php");
        break;
    default:
        include("index.en.php");
        break;
}

?>
