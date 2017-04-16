<?php
	class FiguraGeometrica{
		protected $_color;
		protected $_perimetro;
		protected $_superficie;

		function __construct(){

		}

		function ToString(){}

		function getColor(){
			return $this->_color;
		}

		function setColor($_color){
			$this->_color = $_color;
		}

		public function Dibujar(){

		}

		protected function CalcularDatos(){

		}

	}
?>