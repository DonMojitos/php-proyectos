<?php
    class Entrada{
        private $titulo;
        private $contenido;

        public function __construct($titulo, $contenido)
        {
            $this->titulo = $titulo;
            $this->contenido = $contenido;
        }

        public static function find($filename){
            $datos = json_decode(file_get_contents($filename), true);
            return new Entrada($datos['titulo'], $datos['contenido']);
        }

        public function save(){
            $datos = [
                'titulo' => $this->titulo,
                'contenido' => $this->contenido,
            ];
            file_put_contents(__DIR__ . "/../data/{$this->titulo}.json", json_encode($datos, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getContenido(){
            return $this->contenido;
        }
    }
?>