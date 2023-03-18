<?php 

$connection = mysqli_connect("localhost","root","","test");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $country = $_POST['country'];
    $dis = $_POST['dis'];
    $zip = $_POST['zip'];
   
    
    $query="INSERT INTO `mul`( `name`, `country`, `dis`, `zip`) VALUES ('$name','$country','$dis','$zip')";
    $query_run = mysqli_query($connection , $query);
  
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="mul.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Muliple Fill</title>
</head>

<body>
    <nav class=" container navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BA-SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="mul_fil.php">Add New</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
    </nav>
    <div class="container bg-light">
        <h1 class="text-center bg-light">Information</h1>

        <form action="" method="POST">
            <div class="form-row " id="mySelect">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Country</label>
                    <select id="inputState" name="country" class="form-control">
                        <option selected>Choose...</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                        <option>E</option>
                        <option>F</option>
                    </select>
                </div>
                <div class="form-group col-md-6" id="blr1">
                    <label for="inputState">Division</label>
                    <select id="inputState1"  name="dis" class="form-control">
                        <option selected>Choose...</option>
                        <option>Dhaka</option>
                        <option>Rajshahi</option>
                        <option>Rongpur</option>
                        <option>Cummila</option>
                        <option>Rongpur</option>
                        <option>Dinajpur</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2" id="blr2">
                        <label for="inputZip">Zip</label>
                        <input type="text" name="zip" class="form-control" id="inputZip"><br>
                        <button type="submit" name="submit" class="btn btn-success">Sign in</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


</div>


    <script>
        $("#inputState").change(function() {
            console.log(this.value)
            $("#blr1").addClass("show1");

        });
        $("#blr1").change(function() {
            console.log(this.value)
            $("#blr2").addClass("show1");

        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</body>

</html>