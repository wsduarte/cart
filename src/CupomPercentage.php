<?php

namespace App;

class CupomPercentage extends Cupom
{

    /**
     * @return mixed
     */
    public function getTotal($cartTotal)
    {
        return $cartTotal - ( $cartTotal*$this->total/100 );
    }

}