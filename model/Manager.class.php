<?php
    class Manager extends Conexao{

        public function insert_client($data)
        {
            
            $pdo = parent::get_instance();
            
            $sql = "INSERT INTO client VALUES (NULL, :name, :email, :cpf, :birth, :phone, :address)";

            $statement = $pdo->prepare($sql);
            foreach ($data as $key => $value) {
                $statement->bindValue(": $key", $value);
            }

            $statement->execute();
        }
    }

?>