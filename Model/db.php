<?php


function createCon()
{
    return mysqli_connect("localhost", "root", "", "cregistration");
}


function closeConn($conn)
{
    mysqli_close($conn);
}
?>
