<?php

interface ShoppingCartInterface extends BaseInterface
{
    /**
     * Добавить товар
     * @param ShoppingCart $shoppingCart
     * @param Product $product
     */
    public function addProduct(ShoppingCart $shoppingCart, Product $product): void;

    /**
     * Убрать товар
     * @param ShoppingCart $shoppingCart
     * @param Product $product
     */
    public function removeProduct(ShoppingCart $shoppingCart, Product $product): void;

    /**
     * Очистить корзину
     * @param ShoppingCart $shoppingCart
     * @return bool
     */
    public function reset(ShoppingCart $shoppingCart): bool;

    /**
     * Отправить в обработку (но оформление)
     * @param ShoppingCart $shoppingCart
     */
    public function sendForProcessing(ShoppingCart $shoppingCart): void;

    /**
     * Получить корзину по ид
     * @param int $shoppingCartId
     */
    public function getById(int $shoppingCartId): void;

    /**
     * проверить товары по промокоду
     * @param array $productsIds
     * @param PromoCode $promoCode
     */
    public function checkPromoCode(array $productsIds, PromoCode $promoCode): void;
}
