<?php

class DigitalProduct implements Product
{
    /**
     * 产品价格
     *
     * @var float
     */
    private float $productPrice;

    public function __construct(float $productPrice)
    {
        $this->productPrice = $productPrice;
    }

    /**
     * @inheritDoc
     */
    public function calculatePrice(): float
    {
        return $this->productPrice;
    }
}