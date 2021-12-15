<?php
class DataBase
{
    protected $con;
    protected $host     = 'localhost';
    protected $username = 'root';
    protected $password = 'root';
    protected $db       = 'expense';

    public function __construct()
    {
        $this->con = new mysqli($this->host, $this->username, $this->password, $this->db);
        if (!$this->con) {
            die('Database Connection Error ' . mysqli_connect_error($this->con));
        }
    }

    public function insert($sql)
    {
        $inserted = $this->con->query($sql);

        if ($inserted) {
            return $this->con->insert_id;
        } else {
            echo 'error';
        }
    }

    public function execute($sql)
    {
        return $this->con->query($sql);
    }
}
