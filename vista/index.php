<?php 
session_start();
include 'vista/inc/header-common.php';
if (!isset($_SESSION['nombres'])) {
	include 'vista/inc/login.php';
}else{
include 'vista/inc/menu-common.php';
include 'vista/inc/loader-content.php'; 

}

include 'vista/inc/footer-common.php';

 ?>