<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.8">
      <title> Notas Guardadas </title>

      <link rel="stylesheet" href="styles.css">
        <link rel="icon" type="image/x-icon" href="inter-title-logo.png" sizes="32x32">

</head>
    <body style="margin: 50px;">
    <header class="header">
            <div class="navigationMenu" id="navigationMenu" onclick="navOpenFunction()">
                <div class="hamburger-menu"></div>
                <div class="hamburger-menu"></div>
                <div class="hamburger-menu"></div>
            </div>
            
            <div class="logo">
                <a href="homepage.html">
                    <p>Secuencial Digital</p>
                </a>
            </div>
            <div class="header_right">
                <div class="user-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                  
                
                  <ul class="dropdown">
                    <li class="dropdown__item">$student-name</li>
                    <li class="dropdown__item">$student-id</li>
                    <li class="dropdown__item">Logout</li>
                  </ul>
                </div>
            </div>
            
        </header>

        <nav>
            <div class="navigatiList" id="navigatiList">
                <div class="inter-logo"><img src="inter-logo.png"></div>
                <div class="containerNavigation">
                    <a class="active" href="#">Home</a>
                    <a href="addcourse.html">Add Course</a>
                    <a href="addnota.html">Add Nota Aclaratoria</a>
                </div>
                <a class="closeBtn" id="closeBtn" onclick="navCloseFunction()" href="#">&times;</a>
            </div>
        </nav>

        <div class="homeContent">
            <p>SEMESTRE 1</p>
            
        </div>

        
        <div class="footer">
            Inter @ 2022
        </div>
        <script src="test.js"></script>


        <!-- visual de como se veria la nota puesta en la misma pagina del secuencial -->

    <h2> Notas Aclaratorias</h2>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Nota</th>
            </tr>
        </thead>

        <!--El query de ejemplo solo muestra la ultima nota guardada, hay que cambiarlo mas adelante -->
        <!-- La tabla que muestra la nota es un echo en php, el size depende del texto, hay que modificarlo -->
        <tbody>
            <?php
            $user = 'root';
            $pass = '';
            $db = 'secuencialnota';
            
            $db = new mysqli('localhost:3307', $user, $pass, $db) or die("Unable to connect");
            
            if (mysqli_connect_errno()) {
                die("Connection error: ". mysqli_connect_error());
            }

            $sql = "SELECT * FROM notaAclaratoria ORDER BY id DESC LIMIT 1";

            $result = $db->query($sql);

            if ($result-> num_rows > 0) {
                 while ($row = $result-> fetch_assoc()){
                    echo "<tr>
                        <td>". $row["notaAclaratoria"]."</td>
                        </tr>";
            }
                echo "</table>";
            }
            else {
                 echo "0 result";
                }

            $db-> close();

            ?>
        </tbody>
    </table>


</body>
</html>

