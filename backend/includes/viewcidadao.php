<?php
    class ViewCidadao extends Cidadao{
        public function showAllCidadaos() {
            $datas = $this->getAllCidadaos();
            foreach ($datas as $data){
                echo $data['nome']."<br>";
                echo $data['nis']."<br>";
            }
        }

        public function showUniqueCidadao($nis) {
            $data = $this->getUniqueCidadao($nis);
            return $data;
        }

        public function insertCidadao($nome) {
            $data = $this->setCidadao($nome);
            return $data;
        }
    }

    
?>