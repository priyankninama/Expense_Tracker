<?php
require_once __DIR__ . "/Database.php";

class Expense extends Database
{
    private $table = 'expense';

    public function addexpense($data)
    {
        $sql         = "INSERT INTO {$this->table} (`date`, `item`, `amount`, `paymentmode`, `note`, `original_filename`, `new_filename`) VALUES";
        foreach ($data as $value) {
            $date        = $value['date'];
            $item        = $value['item'];
            $amount      = $value['amount'];
            $paymentmode = $value['paymentmode'];
            $note        = $value['note'];
            $oldfilename = $value['original_file_name'];
            $newfilename = $value['file_name'];
            $sql .= "('$date', '$item', '$amount', '$paymentmode', '$note','$oldfilename', '$newfilename'),";
        }
        $sql = trim($sql, ',');
        return $this->insert($sql);
    }
}
