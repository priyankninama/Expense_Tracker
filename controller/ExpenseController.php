<?php

require_once __DIR__ . "/../model/Expense.php";

class ExpenseController
{
    public function __construct()
    {
        $this->expense = new Expense();
    }

    public function addexpense()
    {
        $new = [];
        //var_dump($_POST);
        foreach ($_POST as $key =>$value) {
            foreach ($value as $k=>$v) {
                $new[$k][$key] = $v;
            }
        }
        $uploadDir      = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';

        foreach ($_FILES['upload']['name'] as $key=>$val) {
            
            $extension=end(explode(".", $val));

            $new_filename[] = uniqid().".".$extension;                       

            $tempLocation    = $_FILES['upload']['tmp_name'][$key];
            $targetFilePath  = $uploadDir . $new_filename[$key];
            move_uploaded_file($tempLocation, $targetFilePath);
        }
        
        foreach ($new as $key => $value) {
            $new[$key]['original_file_name'] = $_FILES['upload']['name'][$key];
            $new[$key]['file_name'] = $new_filename[$key];
        }

        $insertid   = $this->expense->addexpense($new);
    }
}
