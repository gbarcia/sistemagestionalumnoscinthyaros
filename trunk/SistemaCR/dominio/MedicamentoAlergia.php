<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MedicamentoAlergia
 *
 * @author gerardobarcia
 */
class MedicamentoAlergia {
    private $id;

    private $nombre;

    function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
}
?>
