<?php

namespace App;

class Cupom
{
    protected $total;
    protected $code;

    /**
     * @return mixed
     */
    public function getTotal($cartTotal)
    {
        return $cartTotal - $this->total;
    }

    /**
     * @param mixed $total
     * @return Cupom
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     * @return Cupom
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }


}