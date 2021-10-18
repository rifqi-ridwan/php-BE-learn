<?php

use PHPUnit\Framework\TestCase;

require_once "shoppingcart.php";

class shoppingcartTest extends TestCase 
{
    var $expectedEmpty, $expected1Item, $expected2Item;
    var $cart;

    public function setUp(): void
    {
        $this->cart = new Cart();
        $this->cart->tambahProduk("mangga", 1);

        $this->expectedEmpty = new Cart();

        $this->expected1Item = new Cart();
        $this->expected1Item->tambahProduk("mangga", 1);

        $this->expected2Item = new Cart();
        $this->expected2Item->tambahProduk("mangga", 1);
        $this->expected2Item->tambahProduk("apel", 2);
    }

    public function testTambahProduk()
    {
        $this->cart->tambahProduk("apel", 2);
        $this->assertEquals($this->expected2Item, $this->cart);
    }

    public function testHapusProduk()
    {
        $this->cart->hapusProduk("mangga");
        $this->assertEquals($this->expectedEmpty, $this->cart);
    }

    public function testHapusProdukyangTidakAda()
    {
        $this->cart->hapusProduk("jeruk");
        $this->assertEquals($this->expected1Item, $this->cart);
    }

    public function testTampilkanProduk()
    {
        $expected = "mangga (1)\n";
        $this->expectOutputString($expected);
        $this->cart->tampilkanCart();
    }
}
