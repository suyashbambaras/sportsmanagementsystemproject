<?php
   session_start();
   session_unset();
   header('location:admin_f_login.php');
   ?>