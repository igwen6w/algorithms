<?php

/**
 * 产品工厂既能造实体商品也能造数字商品
 * 将来可能还要造更多的商品
 */
class ProductFactory
{

    /**
     * 固定运费
     */
    const SHIPPING_COSTS = 10;

    public function createShippableProduct(float $price): ShippableProduct
    {
        return new ShippableProduct($price, self::SHIPPING_COSTS);
    }

    public function createDigitalProduct(float $price): DigitalProduct
    {
        return new DigitalProduct($price);
    }

}
