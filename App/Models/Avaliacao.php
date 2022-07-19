<?php
 
    namespace App\Models;

    use MF\Model\Model;

    class Avaliacao extends Model {
        private $id;
        private $id_usuario;
        private $avaliacao;
        private $data;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        // salvar professor
        public function salvar() {
            $query = "INSERT INTO avaliacoes (id_usuario, avaliacao) VALUES( :id_usuario, :avaliacao)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
            $stmt->bindValue(':avaliacao', $this->__get('avaliacao'));
            $stmt->execute();

            return $this;
        }

    }

?>