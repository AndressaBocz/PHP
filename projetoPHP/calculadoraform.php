<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto RAZER</title>
</head>

<body>
    <fieldset>
        <legend>Calculadora RAZER</legend>
        <form action="calcular.php" method="get">
            <label for="numero1">Número 1: </label>
            <input type="number" name="numero1" id="numero1"><br /><br />
            <label for="numero2">Número 2: </label>
            <input type="number" name="numero2" id="numero2"><br /><br />
            <label for="operacao">Selecione a Operação: </label>
            <!-- <input type="text" name="operacao" id="operacao"><br /><br /> -->
            <select name="operacao" id="operacao">
                <option value="somar">SOMAR</option>
                <option value="subtrair">SUBTRAIR</option>
                <option value="multiplicar">MULTIPLICAR</option>
                <option value="dividir">DIVIDIR</option>
            </select><br /><br />
            <input type="submit" value="CALCULAR">
        </form>
    </fieldset>
</body>

</html>