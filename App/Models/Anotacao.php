<?php
 
    namespace App\Models;

    use MF\Model\Model;

    class Anotacao extends Model {
        private $id;
        private $id_usuario;
        private $anotacao;
        private $data;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        // salvar professor
        public function salvar() {
            $query = "INSERT INTO anotacoes (id_usuario, anotacao) VALUES( :id_usuario, :anotacao)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
            $stmt->bindValue(':anotacao', $this->__get('anotacao'));
            $stmt->execute();

            return $this;
        }

    }

?>