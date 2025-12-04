<?php
    require_once __DIR__ . '/../model/Entrada.php';

    class EntradaController {

        public function getAllEntradas(){
            $entradas = glob(__DIR__ . '/../data/*.json');
            $entradasObj = [];
            foreach ($entradas as $archivo) {
                $entradasObj[basename($archivo, '.json')] = Entrada::find($archivo);
            }
            return $entradasObj;
        }

        public function getEntrada($archivo){
            return Entrada::find(__DIR__ . '/../data/' . $archivo . '.json');            
        }

        public function guardarEntrada($titulo, $contenido){
            $entrada = new Entrada($titulo, $contenido);
            $entrada->save();
        }

        public function showEntradas(){
            $entradas = $this->getAllEntradas();
            require __DIR__ . '/../view/listado.php';
        }

        public function showEntrada($id){
            $entrada = $this->getEntrada($id);
            require __DIR__ . '/../view/entrada_detalles.php';
        }

        public function crearEntrada(){
            require __DIR__ . '/../view/crear_entrada.php';
        }
    }
?>