<?php
    class QueryBuilder
    {
        protected $pdo;
        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
        public function findAll($table)
        {
            $sql = $this->pdo->prepare("SELECT * FROM `{$table}` ");
            $sql->execute();
            //$sql->execute([":table" => $table]);

            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
 ?>
