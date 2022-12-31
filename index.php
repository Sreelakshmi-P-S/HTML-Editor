<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
         rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>HTML TEXT EDITOR</title>
    </head>
    <body>
        <div>
            <form>
                <input class="form-control me-2 w-75" type="search" placeholder="Filename" aria-label="Filename" id="save" name="save">
                <input type="button" class="btn btn-outline-success" id="saving" value="Save"></input>
            </form>
        </div>
        <div class="container">
            <h1 class="title text-center">HTML EDITOR</h1>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <button class="btn btn-outline-success mb-3"id="btn">Run</button>
                    <h3 class="text-center">code</h3>
                    <div id="code"></div>
                </div>
                <div class="col-lg-6 col-12 output">
                    <h3 class="text-center">output</h3>
                    <div id="output"></div>
                </div>

                

            </div>
           

        </div>
        <div id="filenames">
            <?php
            $username="root";
            $pass="";
            $servername="localhost";
            $dbname="micro";
            $conn=mysqli_connect($servername,$username,$pass,$dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
              echo "<h1>Tets</h1>";
            $var="SELECT file_name from files";
            $var1= $conn->query($var);
            if ($var1->num_rows > 0) {
                // output data of each row
                while($row = $var1->fetch_assoc()) {
                  echo "hi";
                }
              } else {
                echo "0 results";
              }
              $conn->close();
              ?>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.14.0/ace.js" ></script>
        <script src="script.js"></script>
        


    </body>
</html>