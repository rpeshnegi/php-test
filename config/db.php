<?php

// global connection object
global $mysqli_db;
$mysqli_db = new mysqli('localhost', 'root', '', $database ?: 'employees');
