<!doctype html>
<html>
    <header>
        <meta charset="utf-8">
    </header>
    <body>
        <?php include 'Includes/menu.php' ?>
        <p><form action="crud.php" method="POST">
            <label for="incluir">CREATE</label>
            <input type="radio"  name="tipoCrud" value="c"></p>
            <label for="incluir">UPDATE</label>
            <input type="radio"  name="tipoCrud" value="u"></p>
            <label for="incluir">DELETE</label>
            <input type="radio"  name="tipoCrud" value="d"></p>
            <label for="incluir">PRINT</label>
            <input type="radio" name="tipoCrud" value="r"></p>
            <input type="submit" value="ESCOLHA">
            <a href="principal.php">Voltar á página principal</a>
            
        </form>
    </body>
</html>