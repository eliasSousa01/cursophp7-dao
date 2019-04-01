<?php

	class Usuario {

		private $idusuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;


		public function getIdusuario(){
			return $this->idusuario;
		}
		public function setIdusuario($x){
			$this->idusuario = $x;
		}	

		

		public function getDeslogin(){
			return $this->deslogin;
		}
		public function setDeslogin($x){
			$this->deslogin = $x;
		}




		public function getDessenha(){
			return $this->dessenha;
		}
		public function setDessenha($x){
			$this->dessenha = $x;
		}



		public function getDtcadastro(){
			return $this->dtcadastro;
		}
		public function setDtcadastro($x){
			$this->dtcadastro = $x;
		}



		public function loadById($id){

			$sql = new Sql();

			$results = $sql->select("SELECT*FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));
			if(count($results) > 0){
				$row = $results[0];
				$this->setIdusuario($row['idusuario']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtcadastro(new DateTime($row['dtcadastro']));
			}
		}


		public function __toString(){
			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
		}

	}

?>