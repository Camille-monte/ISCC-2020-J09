<?php
    $name = $_FILES['userfile']['name'];
    if (strlen(explode('.', $name)[0]) < 5)
        echo "Le fichier ne correspond pas aux attentes.";
    else {
        echo "<p><strong>Nom du fichier:</strong> ".$_FILES['userfile']['name']."</p>";
        echo "<p><strong>Type du fichier:</strong> ".$_FILES['userfile']['type']."</p>";
        echo "<p><strong>Size du fichier:</strong> ".$_FILES['userfile']['size']."</p>";
    }
?>