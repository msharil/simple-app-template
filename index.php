<?php

$method=$_REQUEST['method'];
$opt=$_REQUEST['opt'];


switch ($method)
{
    case "": 	header("Location: index.php?method=ShowLogin"); 	break;

    case "ShowHome": 	include("main.php");	break;	
    case "ShowLogin": 	include("login.php");	break;	
    case "SignOff": 	include("logout.php");	break;	
	
    case "xyz": 	include("verify.php");	break;
    case "exit": 	include("logout.php");	break;

	default:
		
        switch($method)
        {
            case "ShowStaff" : $nomMenu = 1;
                switch($opt)
                {
                    case "List"    	: include("#.php");
                    case ""		: header('Location: index.php?method=ShowHome'); break;
                }
                break;

            case "ShowProject" : $nomMenu = 2;
                switch($opt)
                {
                    case "Staff"    : include("#.php"); break;
                    case ""         : header('Location: index.php?method=ShowHome'); break;
                }
                break;               
		}
		
        break;
} 
?>