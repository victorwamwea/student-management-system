<?php

session_start();
sessio_destroy();

header("location:login.php");