<!-- Llamamos al archivo que aporta la funcionalidad a la página -->

<?php
require_once 'DWES_T9func.php';
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>DWES TAREA 9</title>
  <meta charset='UTF-8' />
  <style>
    img {
      border-radius: 8px;
      background-color: #DFDFDF;
      width: 200px;
      padding: 20px;
      margin: 10px;
    }

    h1 {
      font-family: Arial, Helvetica, sans-serif;
      color: #40051e;
      font-size: 28px;
      padding: 18px;
      text-align: center;
      width: 800px;
      margin: 10px auto;
      border: 1px solid #DFDFDF;
      border-radius: 5px;
      box-shadow: 10px 10px 5px #DFDFDF;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
      font-size: 15px;
      color: #004a75;
    }

    fieldset {
      font-family: Arial, Helvetica, sans-serif;
      border: 1px solid #bbbbbb;
      border-radius: 5px;
      font-weight: bold;
      font-size: 20px;
      width: 800px;
      color: #004a75;
      display: block;
      box-shadow: 10px 10px 5px #DFDFDF;
    }

    #sub {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 23px;
      font-weight: bold;
      color: #40051e;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-color: transparent;
      border: none;
      padding: 10;
      margin: 10;
    }

    #res {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 15px;
      font-weight: bold;
      color: #004a75;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-color: transparent;
      border: none;
      padding: 10;
      margin: 10;
    }

    #sub:hover {
      font-size: 25px;
      color: darkblue;
    }

    #res:hover {
      font-size: 17px;
      color: darkblue;
    }

    footer {
      text-align: center;
      background-color: #DFDFDF;
      padding: 5px;
      text-align: center;
      color: #004a75;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    table {
      border: 1px solid #DFDFDF;
      border-collapse: separate;
      border-spacing: 5px;
      border-radius: 5px;
      width: 800px;
      font-size: 15px;
      border-radius: 10px;
      text-align: center;
      background-color: #DFDFDF;
    }

    th {
      font-size: 17px;
      color: #40051e;
    }

    td {
      padding: 4px;
      border: 1px solid #DFDFDF;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <center>
    <h1>Tarea 9. Paginas Interactivas</h1><br>

    <fieldset>
      <legend>Obtención de usuarios</legend><br>

      <!--  Creamos dos botones, el submit que llama a la función consulta() que 
    se encuentra en DWES_T9func.php y otro que limpia la página.  -->

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        <?php

        echo "
      <input type='submit' id='sub' name='consulta' value='Generar Usuario' onclick='consulta()'><br><br>
      <input type='button' value='Reset' id='res' onclick='vaciar()'>
      </fieldset>
      </form>
      <br><br>";

     /*  Llamada a la función consulta() */

        if (isset($_POST['consulta'])) {
          consulta();
        }
     ?>
     <script>

      /**
       * Función que limpia la página al pulsar en el botón reset -->
       * @author FMolina
       * @return void
       */
      function vaciar(){
          document.getElementById("contenido").innerHTML ="";
          document.getElementById("contenido2").innerHTML = "";
          document.getElementById("imagen").innerHTML = "";
          }
      </script>

        <footer>
          <br>
          Página creada por Francisco Molina Rubio. DNI 77588352z
        </footer>
  </center>
</body>

</html>