<?php
require_once 'model/ShoppingList.php';
require_once 'model/Item.php';

class ShoppingListViewModel {
    private $shoppingList;
    private $item;

    public function __construct() {
        $this->shoppingList = new ShoppingList();
        $this->item = new Item();
    }

    public function getShoppingList() {
        return $this->shoppingList->getAll();
    }

    public function getItems() {
        return $this->item->getAll();
    }

    public function addToShoppingList($item_id, $quantity) {
        return $this->shoppingList->create($item_id, $quantity);
    }

    public function deleteFromShoppingList($id) {
        return $this->shoppingList->delete($id);
    }

    public function getShoppingListEntry($id) {
        return $this->shoppingList->getById($id);
    }

    public function updateShoppingList($id, $item_id, $quantity) {
        return $this->shoppingList->update($id, $item_id, $quantity);
    }
}
?>