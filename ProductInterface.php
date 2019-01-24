<?php

interface ProductInterface extends BaseInterface
{
    /**
     * получить остаточное кол-во данного товара
     * @param Product $product
     * @return int
     */
    public function getQuantity(Product $product): int;

    /**
     * установить значение кол-ва данного товара
     * @param Product $product
     * @param int $quantity
     */
    public function setQuantity(Product $product, int $quantity): void;

    /**
     * Проверить на причастность к промокоду
     * @param Product $product
     * @param PromoCode $promoCode
     */
    public function checkPromoCode(Product $product, PromoCode $promoCode): void;
}
