<?php
$mess = "";
if (isset($_GET['validation'])) {

    $validation = $_GET['validation'];

    $stmt = $db->prepare("SELECT * FROM user WHERE access=:validation");
    $stmt->execute(['validation' => $validation]);
    $val = $stmt->fetchAll();

    if ($stmt->rowCount() > 0) {

        $query = "UPDATE  user SET access='',status=0 WHERE access='$validation' ";
        $resultats = $db->query($query);
        if ($resultats) {
            echo <<<LABEL
            <div class="container">
                <div class="alert alert-success"style="text-align=center;">votre compte maintenant est activé</div>
            </div>
            LABEL;
        } else {

            echo <<<LABEL
            <div class="container">
                <div class="alert alert-danger"style="text-align=center;">user non connu</div>
            </div>
            LABEL;
        }
    } else {
        echo <<<LABEL
        <div class="container">
                <div class="alert alert-danger">user non connu</div>
            </div>
        LABEL;
    }
}
