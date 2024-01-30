<?php
/**
 * Función que realiza llamada a randomuser.me/api
 * devolviendo un json con un usuario creado de forma aleatoria
 * Saca por pantalla los datos más relevantes de este json
 * @return void
 */
function consulta()
        {
          $url = "https://randomuser.me/api/";
          $result = file_get_contents($url);
          $datos = json_decode($result, true);
          $results = $datos['results'];

          $contenidotabla = "<table><tr><th>Género</th><th>Título</th><th>Nombre</th>" .
            "<th>Apellido</th><th>Ciudad</th><th>Pais</th></tr>" .
            "<tr><td>" .
            $results[0]["gender"] . "</td><td>" .
            $results[0]["name"]["title"] . "</td><td>" .
            $results[0]["name"]["first"] . "</td><td>" .
            $results[0]["name"]["last"] . "</td><td>" .
            $results[0]["location"]["city"] . "</td><td>" .
            $results[0]["location"]["country"] . "</td><td></tr ></table >";

          $contenidotabla2 = "<table><tr><th>Estado</th><th>Código Postal</th><th>Zona Horaria</th>" .
            "<th>UserName</th><th>eMail</th></tr>" .
            "<tr><td>" .
            $results[0]["location"]["state"] . "</td><td>" .
            $results[0]["location"]["postcode"] . "</td><td>" .
            $results[0]["location"]["timezone"]["offset"] . "</td><td>" .
            $results[0]["login"]["username"] . "</td><td>" .
            $results[0]["email"] . "</td></tr ></table > ";

          echo "<div id='contenido'><br>" . $contenidotabla . "<br></div>";
          echo "<div id='contenido2'><br>" . $contenidotabla2 . "<br></div>";

          echo " <div id='imagen' class='clase'>
          <br><figure><img src='" . $results[0]["picture"]["large"] . "'/>" .
          "<figcaption>" . $results[0]["name"]["first"] . " " .
          $results[0]["name"]["last"] . "</figcaption></figure></div>";
        }
