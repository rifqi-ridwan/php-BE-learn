<?php

class Cart
{
    private $data;

    function __construct()
    {
        $this->data = array();
    }

    function tambahProduk(string $kodeProduk, int $kuantitas)
    {
        if (array_key_exists($kodeProduk, $this->data)) {
            $this->data[$kodeProduk] += $kuantitas;
        } else {
            $this->data[$kodeProduk] = $kuantitas;
        }
    }

    function hapusProduk(string $kodeProduk)
    {
        if (array_key_exists($kodeProduk, $this->data)) {
            unset($this->data[$kodeProduk]);
        }
    }

    function tampilkanCart()
    {
        if (!empty($this->data)) {
            foreach ($this->data as $key => $value) {
                echo $key . " (" . $value . ")\n";
            }
        }
    }
}
