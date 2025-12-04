<?php
    require_once 'Entrada.php';

    class EntradaController {

        public function getAllEntradas(){
            $entradas = glob('*.json');
            $entradasObj = [];
            foreach ($entradas as $archivo) {
                $entradasObj[basename($archivo, '.json')] = Entrada::find($archivo);
            }
            return $entradasObj;
        }

        public function getEntrada($archivo){
            return Entrada::find($archivo . '.json');            
        }

        public function guardarEntrada($titulo, $contenido){
            $entrada = new Entrada($titulo, $contenido);
            $entrada->save();
        }

        public function showEntradas(){
            $entradas = $this->getAllEntradas();
            require 'listado.php';
        }

        public function showEntrada($id){
            $entrada = $this->getEntrada($id);
            require 'entrada_detalles.php';
        }

        public function crearEntrada(){
            require 'crear_entrada.php';
        }
    }
?>