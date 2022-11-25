<?php 
include ("connect.php");

if(isset($_POST["inputText"])){
    $inputText = trim($_POST["inputText"]);

    $stmt = $bd -> prepare("SELECT * FROM ongs WHERE nome LIKE '%{$inputText}%'");
    $stmt -> execute();
    $query = $stmt -> rowCount();

    if($query > 0){?>
    <div id="search-content">
    <?php 
        while($row = $result = $stmt -> fetch(PDO::FETCH_ASSOC)){
            $nome = $row['nome'];
            $categoria = $row['categoria'];
            $redirect = $row['redirect'];
            $imgRef = $row['img-ref'];
        ?>
        <div class="items" onclick="window.location='ongs/<?php echo $redirect;?>.php'">
            <img src="../img/ongs/<?php echo $imgRef;?>" alt="">
            <div class="info">
                <h1><?php echo $nome;?></h1>
                <p><?php echo $categoria;?></p>
            </div>
        </div>
    </div>

    <?php
        }
    ?>
<?php
    } else { ?>
        <div class="error">
            <p>Nenhum resultado encontrado.</p>
        </div>
<?php    
    }

}