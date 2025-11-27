<?php
require_once '/../database.php';

class product 
{
    public int $idproduct;
    public string $naam;
    public float $prijs;

    public function __construct(int $idproduct, string $naam, float $prijs) 
    {
        $this->idproduct = $idproduct;
        $this->naam = $naam;
        $this->prijs = $prijs;
    }
}
