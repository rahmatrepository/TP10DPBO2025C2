<?php
require_once 'viewmodel/CategoryViewModel.php';
require_once 'viewmodel/ItemViewModel.php';
require_once 'viewmodel/ShoppingListViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'category';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity == 'category') {
    $viewModel = new CategoryViewModel();
    if ($action == 'list') {
        $categoryList = $viewModel->getCategoryList();
        require_once 'views/category_list.php';
    } elseif ($action == 'add') {
        require_once 'views/category_form.php';
    } elseif ($action == 'edit') {
        $category = $viewModel->getCategory($_GET['id']);
        require_once 'views/category_form.php';
    } elseif ($action == 'save') {
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $viewModel->addCategory($_POST['name']);
        }
        header('Location: index.php?entity=category');
        exit;
    } elseif ($action == 'update') {
        if (isset($_POST['id'], $_POST['name']) && !empty($_POST['name'])) {
            $viewModel->updateCategory($_POST['id'], $_POST['name']);
        }
        header('Location: index.php?entity=category');
        exit;
    } elseif ($action == 'delete') {
        $viewModel->deleteCategory($_GET['id']);
        header('Location: index.php?entity=category');
        exit;
    }
} elseif ($entity == 'item') {
    $viewModel = new ItemViewModel();
    require_once 'model/Category.php';
    $categoryModel = new Category();
    $categories = $categoryModel->getAll();
    if ($action == 'list') {
        $itemList = $viewModel->getItemList();
        require_once 'views/item_list.php';
    } elseif ($action == 'add') {
        require_once 'views/item_form.php';
    } elseif ($action == 'edit') {
        $item = $viewModel->getItem($_GET['id']);
        require_once 'views/item_form.php';
    } elseif ($action == 'save') {
        if (isset($_POST['name'], $_POST['category_id']) && !empty($_POST['name']) && !empty($_POST['category_id'])) {
            $viewModel->addItem($_POST['name'], $_POST['category_id']);
        }
        header('Location: index.php?entity=item');
        exit;
    } elseif ($action == 'update') {
        if (isset($_POST['id'], $_POST['name'], $_POST['category_id']) && !empty($_POST['name']) && !empty($_POST['category_id'])) {
            $viewModel->updateItem($_POST['id'], $_POST['name'], $_POST['category_id']);
        }
        header('Location: index.php?entity=item');
        exit;
    } elseif ($action == 'delete') {
        $viewModel->deleteItem($_GET['id']);
        header('Location: index.php?entity=item');
        exit;
    }
} elseif ($entity == 'shopping_list') {
    $viewModel = new ShoppingListViewModel();
    if ($action == 'list') {
        $shoppingList = $viewModel->getShoppingList();
        require_once 'views/shopping_list_list.php';
    } elseif ($action == 'add') {
        $items = $viewModel->getItems();
        require_once 'views/shopping_list_form.php';
    } elseif ($action == 'edit') {
        $shoppingListEntry = $viewModel->getShoppingListEntry($_GET['id']);
        $items = $viewModel->getItems();
        require_once 'views/shopping_list_form.php';
    } elseif ($action == 'save') {
        $viewModel->addToShoppingList($_POST['item_id'], $_POST['quantity']);
        header('Location: index.php?entity=shopping_list');
        exit;
    } elseif ($action == 'update') {
        if (isset($_POST['id'], $_POST['item_id'], $_POST['quantity']) && !empty($_POST['item_id']) && !empty($_POST['quantity'])) {
            $viewModel->updateShoppingList($_POST['id'], $_POST['item_id'], $_POST['quantity']);
        }
        header('Location: index.php?entity=shopping_list');
        exit;
    } elseif ($action == 'delete') {
        $viewModel->deleteFromShoppingList($_GET['id']);
        header('Location: index.php?entity=shopping_list');
        exit;
    }
}
?>