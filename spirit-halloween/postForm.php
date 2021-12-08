<link rel="icon" href="/icon.png">

<?php
    $userName = $_GET["userName"];
    $userBlog = $_GET["userBlog"];
    echo("User Name : ".$userName);
    echo('<br>'."Post : ".$userBlog);
    
    $blog = json_decode(file_get_contents("info.json"));
    
    $newThing = new stdClass;
    $newThing->userName = $userName;
    $newThing->userBlog = $userBlog;
    $newThing->postTime = time();
    //$newThing->postDate = "2/11/18";
    //$newThing->postTime = "9:06 am";
    
    array_unshift($blog, $newThing);
    
    file_put_contents("info.json", json_encode($blog));
    
    header("Location: ".$_SERVER['HTTP_REFERER']);
    
    die();
?>