<?php

require_once("InstrumentoMusical.php");

class Violao extends InstrumentoMusical{

    public function tocar():string{
        return "plac tudum";
    }
}