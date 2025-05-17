<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($item) ? 'Edit' : 'Add'; ?> Item</h2>
<form action="index.php?entity=item&action=<?php echo isset($item) ? 'update' : 'save'; ?>" method="POST" class="space-y-4">
    <?php if (isset($item)): ?>
        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
    <?php endif; ?>
    <div>
        <label class="block">Item Name:</label>
        <input type="text" name="name" value="<?php echo isset($item) ? $item['name'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Category:</label>
        <select name="category_id" class="border p-2 w-full" required>
            <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category['id']; ?>" <?php echo (isset($item) && $item['category_id'] == $category['id']) ? 'selected' : ''; ?>>
                <?php echo $category['name']; ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>