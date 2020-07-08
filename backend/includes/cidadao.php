<?php
    class Cidadao extends Connection{
        protected function getAllCidadaos() {
            $sql = "SELECT * FROM cidadao";
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
            if($numRows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
                return $data;
            }else{
                return false;
            }
        }

        protected function getUniqueCidadao($nis) {
            $sql = "SELECT * FROM cidadao where nis=$nis";
            $result = $this->connect()->query($sql);
            $linhas=mysqli_num_rows($result); 
            if($linhas != 0){
                $data = $result->fetch_assoc();
                return $data;
            }else{
                return false;
            }
        }

        protected function setCidadao($nome) {
            $data = false;

            while(!$data){
                $nis = substr(str_shuffle(str_repeat("0123456789", 11)), 0, 11);
                $sql = "SELECT * FROM cidadao where nis=$nis";
                $result = $this->connect()->query($sql);
                $numRows = $result->num_rows;
                if($numRows > 0){
                }else{
                    $data = true;
                }
            }  
                        
            $sql = "INSERT INTO `cidadao` (nome, nis) VALUES ('$nome', '$nis')";
            $result = $this->connect()->query($sql);
            $data = [
                "nome" => $nome,
                "nis" => $nis,
            ];
            
            if($result === true){
                return $data;
            }else{
                return "Cidadão não cadastrado!";
            }
        }

    }

    
?>