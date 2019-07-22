<?php
namespace project\Model\Database;

class Connection
{
    const MYSQL_USER_NAME = '';

    public function add($tableName, $data, $columns)
    {
        $this->initConnection();
        $query = "INSERT INTO $tableName (" . implode(',', $columns) . ") VALUE (" . implode(',', $data) . ")";
        $result = $this->query($query);
        if ($result) {
            // Xu ly ket qua
        }
        $this->closeConnection();
    }

    /**
     * @param $id
     * @param $tableName
     *
     * @return array Mang cac thong tin cot cua bang
     */
    public function get($id, $tableName)
    {

    }

    public function delete()
    {

    }

    public function update()
    {

    }

    private function initConnection()
    {
        static::MYSQL_USER_NAME;
    }

    protected function query($query)
    {

    }

    private function closeConnection()
    {

    }
}