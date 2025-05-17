<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Item List</h2>
<a href="index.php?entity=item&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Item</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Item Name</th>
        <th class="border p-2">Category</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($itemList as $item): ?>
    <tr>
        <td class="border p-2"><?php echo $item['name']; ?></td>
        <td class="border p-2"><?php echo $item['category_name']; ?></td>
        <td class="border p-2">
            <a href="index.php?entity=item&action=edit&id=<?php echo $item['id']; ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=item&action=delete&id=<?php echo $item['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>