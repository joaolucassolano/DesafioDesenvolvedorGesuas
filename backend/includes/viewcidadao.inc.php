<?php
    class ViewCidadao extends Cidadao{
        public function showAllCidadaos() {
            $datas = $this->getAllCidadaos();
            foreach ($datas as $data){
                echo $data['nome']."<br>";
                echo $data['nis']."<br>";
            }
        }

        public function showUnicCidadao($nis) {
            $data = $this->getUniqueCidadao($nis);
            echo $data['nome']."<br>";
            echo $data['nis']."<br>";
            
        }

        public function showMessageInsertCidadao($nome) {
            $data = $this->setCidadao($nome);
            echo "Nome: ".$data['nome']."<br>";
            echo "NIS: ".$data['nis'];
            
        }
    }

    
?>