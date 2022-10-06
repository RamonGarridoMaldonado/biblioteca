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

class Socio {
    public $numeroSocio;
    public $Nombre;
    public $apellidos;
    public $telefono;
    public $direccion;

    function get_NumeroSocio() {
        return $this->numeroSocio;
    }

    function set_NumeroSocio($nuevoNumero) {
        $this->numeroSocio = $nuevoNumero;
    }

    function get_Nombre() {
        return $this->Nombre;
    }

    function set_Nombre($nuevoNombre) {
        $this->Nombre = $nuevoNombre;
    }


    function get_Apellidos() {
        return $this->apellidos;
    }

    function set_Apellidos($nuevoApellido) {
        $this->apellidos = $nuevoApellido;
    }

    function get_Telefono() {
        return $this->telefono;
    }

    function set_Telefono($nuevoTelefono) {
        $this->telefono = $nuevoTelefono;
    }

    function get_Direccion() {
        return $this->direccion;
    }

    function set_Direccion($nuevoDireccion) {
        $this->direccion = $nuevoDireccion;
    }
}

?>