<?php
header('Content-Type: text/html; charset=UTF-8');
var_dump($_GET['how_to_work']);
if (!isset($_GET['how_to_work']) || $_GET['how_to_work'] != 'hard')
{
    header("Status: 400 Work hard!");
}