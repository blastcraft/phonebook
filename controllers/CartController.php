<?php

class CartController
{
    public function actionAdd($id)
    {
        Cart::addProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        //header("Location: $referrer");
        PhoneBook::redirect($referrer);
        die();
    }

    public function actionList()
    {
        $productsInCart = false;
        $totalPrice = 0;

        $productsInCart = Cart::getProducts();

        if ($productsInCart)
        {
            $productsIds = array_keys($productsInCart);
            $products = PhoneBook::getRecordsByIds($productsIds);

            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT.'/views/cart/list.php');

        return true;
    }
}