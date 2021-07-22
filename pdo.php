<?php
// $pdo = new PDO('mysql:host=localhost;port=8889;dbname=misc', 'fred', 'zap'); // MAC MAMP
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc', 'root', 'root'); // Windows MAMP
// $pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc', 'root', ''); // Windows XAMPP
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);