<?php

error_reporting(0);

$method=$_REQUEST['method'];
$opt=$_REQUEST['opt'];


switch ($method)
{
    case "": 	header("Location: index.php?method=ShowHome"); 	break;

    case "ShowHome": 	include("main.php");	break;	
    case "ShowLogin": 	include("login.php");	break;	
    case "SignOff": 	include("logout.php");	break;	
	
    case "token": 	include("verify.php");	break;
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

            case "ShowPayment" : $nomMenu = 3;
                switch($opt)
                {
                    case "Sample"    : include("payment.php"); break;
                    case ""         : header('Location: index.php?method=ShowHome'); break;
                }
                break;               

		}
		
        break;
} 
?>