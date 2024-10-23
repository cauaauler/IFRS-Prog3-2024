<?php

require_once("InstrumentoMusical.php");

class Piano extends InstrumentoMusical{

    public function tocar():string{
        return "dum dum dum";
    }
}