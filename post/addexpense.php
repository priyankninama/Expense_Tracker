<?php
require_once __DIR__ . '/../controller/ExpenseController.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("location: index.php");
}
//var_dump($_POST);
$expensecontroller = new ExpenseController();

$expense           = $expensecontroller->addexpense();
