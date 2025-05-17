<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($shoppingListEntry) ? 'Edit' : 'Add'; ?> Shopping List Entry</h2>
<form action="index.php?entity=shopping_list&action=<?php echo isset($shoppingListEntry) ? 'update' : 'save'; ?>" method="POST" class="space-y-4">
    <?php if (isset($shoppingListEntry)): ?>
        <input type="hidden" name="id" value="<?php echo $shoppingListEntry['id']; ?>">
    <?php endif; ?>
    <div>
        <label class="block">Item:</label>
        <select name="item_id" class="border p-2 w-full" required>
            <?php foreach ($items as $item): ?>
            <option value="<?php echo $item['id']; ?>" <?php echo (isset($shoppingListEntry) && $shoppingListEntry['item_id'] == $item['id']) ? 'selected' : ''; ?>>
                <?php echo $item['name']; ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block">Quantity:</label>
        <input type="number" name="quantity" value="<?php echo isset($shoppingListEntry) ? $shoppingListEntry['quantity'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>