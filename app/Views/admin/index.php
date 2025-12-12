<section>
    <h2>Add a product</h2>

    <form action="/admin/add-product" method="post">
        <label for="name">Name: </label>
        <input name="name" id="name" type="text">
        <br>
        <label for="price">Price: </label>
        <input name="price" id="price" type="number">
        <br>
        <label for="quantity">Quantity: </label>
        <input name="quantity" id="quantity" type="number">
        <br>
        <label for="image">Image (path): </label>
        <input name="image" id="image" type="text">
        <br>
        <label for="category">Categoy (id): </label>
        <input name="id_category" id="category" type="text">
        <br>
        <br>
        <input type="submit" value="send">
    </form>

    <?php var_dump($_POST); ?>

</section>