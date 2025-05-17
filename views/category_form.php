<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($category) ? 'Edit' : 'Add'; ?> Category</h2>
<form action="index.php?entity=category&action=<?php echo isset($category) ? 'update' : 'save'; ?>" method="POST" class="space-y-4">
    <?php if (isset($category)): ?>
        <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
    <?php endif; ?>
    <div>
        <label class="block">Category Name:</label>
        <input type="text" name="name" value="<?php echo isset($category) ? $category['name'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>