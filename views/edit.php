<h1>Editar Produto</h1>

<a href="<?php echo BASE_URL ?>">Voltar</a>
<form method="POST">

    Código de barras:<br>
    <input type="text" name="cod" value="<?php echo $info['cod']; ?>" required>
    <br>

    Nome do produto:<br>
    <input type="text" name="name" value="<?php echo $info['name']; ?>" required>
    <br>
    Preço do produto:<br>
    <input type="text" name="price" value="<?php echo $info['price']; ?>" required>
    <br>
    Quantidade:<br>
    <input type="text" name="quantity" value="<?php echo $info['quantity']; ?>" required>
    <br>
    Qtd. Minima:<br>
    <input type="text" name="min_quantity" value="<?php echo $info['min_quantity']; ?>" required>
    <br>
    <input type="submit" value="Salvar">
</form>