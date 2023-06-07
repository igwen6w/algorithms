<?php

class ShippableProduct implements Product
{
    /**
     * 产品价格
     *
     * @var float
     */
    private float $productPrice;

    /**
     * 运费
     *
     * @var float
     */
    private float $shippingCosts;

    public function __construct(float $productPrice, float $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }

    /**
     * @inheritDoc
     */
    public function calculatePrice(): float
    {
        return $this->productPrice + $this->shippingCosts;
    }
}