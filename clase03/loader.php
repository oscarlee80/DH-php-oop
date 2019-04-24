<?php
require ("helpers.php");
require ("cliente.php");
require ("Persona.php");
require ("PYME.php");
require ("Multinacional.php");
require ("Cuenta.php");
require ("Classic.php");
require ("Platinum.php");
require ("Gold.php");
// require ("Black.php");

$persona1 = new Persona ("Oscar","Lee","28413165","14-09-1980","oscarlee80@gmail.com","123456");
$PYME1 = new PYME ("Pizzeria Zapi", "20-345678-9","zapi@pizza.com","lamejorpizza");
$multi1 = new Multinacional ("Amazon","27-4324234-0","USA","amazon@amazon.com","jeffbezosrulz");

$cuenta1 = new Platinum ("pepeguapo");
$cuenta1->acreditar(5000);

$classic1 = new Classic ("thisismycbu");
$classic1->acreditar(5000);

$gold1 = new Gold ("12345667");
$gold1->acreditar(10000);
dd($gold1);

