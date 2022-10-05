<?php

class Libro {
    public $ISBN;
    public $Titulo;
    public $autor;
    public $FechaPublicacion;

    function get_ISBN() {
        return $this->ISBN;
    }

    function set_ISBN($nuevoISBN) {
        $this->ISBN = $nuevoISBN;
    }

    function get_Titulo() {
        return $this->Titulo;
    }

    function set_Titulo($nuevoTitulo) {
        $this->Titulo = $nuevoTitulo;
    }

    function get_Autor() {
        return $this->autor;
    }

    function set_Autor($nuevoAutor) {
        $this->autor = $nuevoAutor;
    }

    function get_FechaPublicacion() {
        return $this->FechaPublicacion;
    }

    function set_FechaPublicacion($nuevaFecha) {
        $this->FechaPublicacion = $nuevaFecha;
    }
}

?>