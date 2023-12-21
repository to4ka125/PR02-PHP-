
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret page</title>
    <link rel="stylesheet" href="../css/secret.css">
</head>
<body>
    
    <?php 
        if (!empty($_FILES['file']['tmp_name'])) {
            
            $path=$_FILES['file']['tmp_name'];
       
            echo <<<_OUT
            <div class="msg msg-ok">
                <div>Файл загружен</div>
                <div>$path</div>
                <div class="closed">&#10006;</div>
            </div>
        _OUT;
        } else {
            echo "";
        }
    ?>
      <div class="container_main">
    <form action="" method="post" enctype="multipart/form-data">
    <fieldset>

    <div class="container">
    <h2>Загрузить файл</h2>  
            <input type="file" name="file">
            <br>
            <input type="submit" value="Загрузить">
            <br>
            <button><a href="../index.html">Выйти</a></button>
            </div>
 </fieldset>
    </form>
      </div>
<script src="../js/secret.js"> </script>
</body>
</html>