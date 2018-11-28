<?php
// Metodos comunes

function conectar()
{
    return new PDO('pgsql:host=localhost;dbname=fa', 'fa', 'fa');
}

function cabecera($title) { ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php }

function menu() { ?>
    <ul class="nav nav-pills">
      <li role="presentation" class="active"><a href="../index.php">Filmaffinity</a></li>
      <li role="presentation"><a href="../peliculas/index.php">Peliculas</a></li>
      <li role="presentation"><a href="../generos/index.php">Generos</a></li>
    </ul>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php }

// Metodos Peliculas
function mostrarFormulario() {

}
?>
