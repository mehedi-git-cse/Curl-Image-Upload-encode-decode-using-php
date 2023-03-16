<?php

$msg = "";

// check if the user has clicked the button "UPLOAD" 
$db = mysqli_connect("localhost", "root", "", "test");
if (isset($_POST['submit'])) {

    $filename = $_FILES["uploadfile"]["name"];

    $tempname = $_FILES["uploadfile"]["tmp_name"];

    $folder = "image/" . $filename;
    // Add the image to the "image" folder"

    if (move_uploaded_file($tempname, $folder)) {

        $img = file_get_contents($folder);

        // Encode the image string data into base64
        $data = base64_encode($img);
        $sql = "INSERT INTO img (img1,img2) VALUES ('$filename','$data')";

        // function to execute above query
        mysqli_query($db, $sql);
        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container mt-3">
        <h2>Choose File</h2>
        <?php echo $msg; ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input class="form-control" type="file" id="formFile" name="uploadfile">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <div class="container">
            <table id='myTable' class='table'>
                <thead>
                    <th>ID</th>
                    <th>Original Image</th>
                    <th>Decode Image</th>
                </thead>
                <tbody>
                    <?php
                    $sql2 = "select * from img";
                    $result = mysqli_query($db, $sql2) or die("failed");
                    $count=1;

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // $d_img = base64_decode($row['img2'], true);
                            echo "<tr><td>$count</td>
                            <td> <img src='image/{$row['img1']}' width='100' height='100'/></td>
                            <td> <img src='data:image/jpeg;base64,{$row['img2']}' width='100' height='100'/></td>";
                            $count++;
                        }
                    }
                    ?></tbody>
            </table>
        </div>
</body>

</html>