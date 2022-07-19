<?php
 
    namespace App\Models;

    use MF\Model\Model;

    class Disciplina extends Model {

        private $id;
        private $id_usuario;
        private $nome;
        private $data;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }
        
        // public function __construct() {
        //     parent::__construct('disciplinas');
        // }

        //salvar disciplina
        public function salvar() {
            $query = "INSERT INTO disciplinas (id_usuario, disciplina) VALUES( :id_usuario, :disciplina)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
            $stmt->bindValue(':disciplina', $this->__get('disciplina'));
            $stmt->execute();
            
            return $this;
        }

        //recuperar disciplina por id
        // public function getDisciplinaPorId() {
        //     $query = "SELECT * FROM disciplinas WHERE id = :id";
        //     $stmt = $this->db->prepare($query);
        //     $stmt->bindValue(':id', $this->__get('id'));
        //     $stmt->execute();

        //     return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        // }
        
        // public function getDisciplinas() {
        //     $query = "SELECT * FROM disciplinas";
        //     $stmt = $this->db->prepare($query);
        //     $stmt->execute();
        //     return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        // }
        
        // public function getDisciplina($id) {
        //     $query = "SELECT * FROM disciplinas WHERE id = ?";
        //     $stmt = $this->db->prepare($query);
        //     $stmt->bindValue(1, $id);
        //     $stmt->execute();
        //     return $stmt->fetch(\PDO::FETCH_ASSOC);
        // }
        
        // public function getDisciplinaByName($nome) {
        //     $query = "SELECT * FROM disciplinas WHERE nome = ?";
        //     $stmt = $this->db->prepare($query);
        //     $stmt->bindValue(1, $nome);
        //     $stmt->execute();
        //     return $stmt->fetch(\PDO::FETCH_ASSOC);
        // }
    }

?>