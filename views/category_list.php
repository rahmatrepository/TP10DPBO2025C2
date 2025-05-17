<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Category List</h2>
<a href="index.php?entity=category&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Category</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Category Name</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($categoryList as $category): ?>
    <tr>
        <td class="border p-2"><?php echo $category['name']; ?></td>
        <td class="border p-2">
            <a href="index.php?entity=category&action=delete&id=<?php echo $category['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>