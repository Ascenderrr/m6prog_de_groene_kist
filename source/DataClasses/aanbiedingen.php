<?php
require_once '/../database.php';

class aanbiedingen 
{
    public int $idaanbiedingen;
    public int $korting;
    public int $product_idproduct;

    public function __construct(int $idaanbiedingen, int $korting, int $product_idproduct) 
    {
        $this->idaanbiedingen = $idaanbiedingen;
        $this->korting = $korting;
        $this->product_idproduct = $product_idproduct;
    }
}
