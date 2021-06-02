<?php 
session_start();
if(session_destroy()) // Destroyong all session
{

    header("Location: index.php"); //redirecting to home page
}
?>