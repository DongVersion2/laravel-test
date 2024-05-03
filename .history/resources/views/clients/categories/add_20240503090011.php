<h1>Thêm chuyên mục</h1>

<form method="POST" action="<?php echo route('categories.add') ?>">
    <input type="text" name="category_name" placeholder="Tên chuyên mục">
    <button type="submit">Thêm chuyên mục</button>
</form>