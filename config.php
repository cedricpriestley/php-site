<?php

/**
 * Configuration for database connection
 *
 */

$host       = "localhost";
$username   = "phpsiteuser";
$password   = "phpsiteuser";
$dbname     = "phpsite";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
