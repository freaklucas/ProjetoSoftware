<?php
 
    namespace App\Models;

    use MF\Model\Model;

    class Professor extends Model {
        private $id;
        private $id_usuario;
        private $professor;
        private $data;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        // salvar professor
        public function salvar() {
            $query = "INSERT INTO professores (id_usuario, professor) VALUES( :id_usuario, :professor)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
            $stmt->bindValue(':professor', $this->__get('professor'));
            $stmt->execute();

            return $this;
        }

    }

?>