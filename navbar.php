
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-light bg-light mr-auto">
        <img src="imagens/vincentcrow_0.jpg" alt="logo" class="navbar-brand" width="auto" height="70">
        <p class="p-2 bd-highlight  mr-3" href="#">
            Sistema de teste em PHP e SQL
        </p>
        
        <div class="d-flex flex-row bd-highlight">
        <p class="p-2 bd-highlight m-0 mr-3">
        <?php if (isset($_SESSION)){     
        echo "<strong>".$_SESSION['nome']."</strong>";};
        ?>    
    
        </p>
        <?php if (isset($_SESSION)){
        echo "<a href=\"logout_script.php\" class=\"btn btn-outline-dark\" role=\"button\">Logout</a>";}
        ?>
        </div>
    </nav>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>