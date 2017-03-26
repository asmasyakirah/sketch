<?php
 
/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/
$SUBDIR = "/project/Sketch";
$config = array
(
    "project" => "Sketch",
    "language" => "en",
    "timezone" => "Asia/Kuala_Lumpur",
    "db" => array
    (
        "dbname" => "database1",
        "username" => "dbUser",
        "password" => "pa$$",
        "host" => "localhost"
    ),
    "emails" => array
    (
        "noreplyName" => "ViMS", // default
        "noreplyEmail" => "noreply.vims@gmail.com", // default
        "noreplyPassword" => "*noreply.vims*", // default
        "noreplyPort" => 587, // default
        "adminEmail" => "codegeeks@blueoceanit.com.my" // default
        /*
        "codegeeks@blueoceanit.com.my" // default
        "b2capp@uemedgenta.uemnet.com" // UEM
        */
    )  
); 
/*
    I will usually place the following in a bootstrap file or some type of environment
    setup file (code that is run at the start of every page request), but they work 
    just as well in your config file if it's in php (some alternatives to php are xml or ini files).
*/
 
/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
 
 
?>
