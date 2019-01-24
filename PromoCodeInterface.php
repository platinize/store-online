<?php

interface PromoCodeInterface extends BaseInterface
{
    /**
     * Связать с продуктами по ид
     * @param array $attr
     * @param array $productsIds
     */
    public function setOnProducts(array $attr, array $productsIds): void;

    /**
     * Снять с продуктов по ид
     * @param array $attr
     * @param array $productsIds
     */
    public function removeFromProducts(array $attr, array $productsIds): void;

    /**
     * Использовать промокод
     * @param string $code
     */
    public function applyPromoCode(string $code): void;
}
