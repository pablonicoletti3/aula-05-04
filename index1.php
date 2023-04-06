<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>cadastros de clientes</h1>

    <form method="post" action="salvar.php">
nome: <input name="nome" required maxlength="50"><br>
telefone: <input type="tel" required maxlength="15" name="telefone"><br>
cidade: <input name="cidade" maxlength="40"><br>

Estado:<select name="estado">

<option value="ac">AC</option>

<option value="al">AL</option>

<option value="ap">AP</option>

<option value="am">AM</option>

<option value="ba">BA</option>

<option value="ce">CE</option>

<option value="es">ES</option>

<option value="go">GO</option>

<option value="ma">MA</option>

<option value="mt">MT</option>

<option value="ms">MS</option>

<option value="mg">MG</option>

<option value="pa">PA</option>

<option value="pb">PB</option>

<option value="pr">PR</option>

<option value="pe">PE</option>

<option value="pi">PI</option>

<option value="rj">RJ</option>

<option value="rn">RN</option>

<option value="rs">RS</option>

<option value="ro">RO</option>

<option value="rr">RR</option>

<option value="sc">SC</option>

<option value="sp">SP</option>

<option value="se">SE</option>

<option value="to">TO</option>

<option value="df">DF</option>




</select><br>
email: <input name="email" maxlength="60">
<br>

<button type="submit">Salvar cliente </button>

<script>
<?php
$msg = $_GET["mensagem"]??"";
if($_GET["mensagem"] == "salvo"){
  echo "alert('cliente salvo com sucesso!')";
}
?>
    </form>
</body>
</html>