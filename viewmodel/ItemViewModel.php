<?php
require_once 'model/Item.php';

class ItemViewModel {
    private $item;

    public function __construct() {
        $this->item = new Item();
    }

    public function getItemList() {
        return $this->item->getAll();
    }

    public function addItem($name, $category_id) {
        return $this->item->create($name, $category_id);
    }

    public function deleteItem($id) {
        return $this->item->delete($id);
    }

    public function getItem($id) {
        return $this->item->getById($id);
    }

    public function updateItem($id, $name, $category_id) {
        return $this->item->update($id, $name, $category_id);
    }
}
?>