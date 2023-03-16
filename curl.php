<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curl</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" />

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="container">

            <div>
                <h2 class="col-md-11 bg-light text-left">Example</h2>
                <button type="button" id="btn" class="btn btn-success">Load</button>
            </div>
        </div>

        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">User_ID</th>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">body</th>
                </tr>
            </thead>
            <tbody id="tbl-body">


            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $.ajax({
            url: "loadtable.php",
            type: "POST",
            success: function(data) {

                $("#btn").click(function() {
                    console.log(data)
                    $("#tbl-body").html(data)
                })

            },
            error: function(jqXHR, textStatus, errorThrown) {}
        });
    </script>

</body>

</html>