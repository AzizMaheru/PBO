<?php 
class Item
{
    public $item_id;
    public $item_name;
    public $item_desc;
    public $item_status;
    // public $item_price; // Tambahkan properti untuk harga
    // public $item_qty;   // Tambahkan properti untuk jumlah

    function __construct($item_id, $item_name, $item_desc, $item_status, $item_price, $item_qty)
    {
        $this->item_id = $item_id;
        $this->item_name = $item_name;
        $this->item_desc = $item_desc;
        $this->item_status = $item_status;
    //     $this->item_price = $item_price;
    //     $this->item_qty = $item_qty;
    // }
}
?>
