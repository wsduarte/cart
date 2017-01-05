<?php

namespace App;

class Cart
{

    private $total;
    private $itens = [];

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     * @return Cart
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItens()
    {
        return $this->itens;
    }

    /**
     * @param mixed $itens
     * @return Cart
     */
    public function setItens($itens)
    {
        $this->itens = $itens;
        return $this;
    }

    public function applyCupom(Cupom $cupom)
    {
        $this->total = $cupom->getTotal($this->total);
    }


    public function addProduct(ProductX $productX)
    {

        $newItens = [

            'name' => $productX->getName(),
            'price' => $productX->getPrice()

        ];

        array_push($this->itens, $newItens);

        $this->total +=  $productX->getPrice();

    }

}