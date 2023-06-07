<?php

interface Product
{

    /**
     * 计算商品价格
     *
     * @return float
     */
    public function calculatePrice():float;
}