<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Shopping List</h2>
<a href="index.php?entity=shopping_list&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add to Shopping List</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Item Name</th>
        <th class="border p-2">Quantity</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($shoppingList as $entry): ?>
    <tr>
        <td class="border p-2"><?php echo $entry['item_name']; ?></td>
        <td class="border p-2"><?php echo $entry['quantity']; ?></td>
        <td class="border p-2">
            <a href="index.php?entity=shopping_list&action=edit&id=<?php echo $entry['id']; ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=shopping_list&action=delete&id=<?php echo $entry['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>