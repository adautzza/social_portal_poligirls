<?php
session_start();
// destroy all sessions
if(session_destroy())
{
// redir to homepage
header("Location: login.php");
}
?>
