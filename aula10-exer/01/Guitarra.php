<?php

require_once("InstrumentoMusical.php");

class Guitarra extends InstrumentoMusical{

    public function tocar():string{
        return "sampley de guitarra";
    }
}