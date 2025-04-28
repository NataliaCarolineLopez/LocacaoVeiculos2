<?php
namespace Interfaces;

// Interface que define os metódos necessários para um veículo ser locável

interface Locavel {
    public function alugar() : string;
    public function devolver() : string;
    public function isDisponivel() : bool;
}

