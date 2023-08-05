<?php

//Student info from students.php
$voornaam = $_POST["voornaam"];
$tussenvoegsel = $_POST["tussenvoegsel"];
$achternaam = $_POST["achternaam"];
$klas = $_POST["klas"];

//Connects to database and checks if connection is fucntioning properly.
include_once 'includes/connection.php';
