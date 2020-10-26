<?php
    session_start();
    if(!empty($_POST['email1']) && !empty($_POST['pass1'])) {
        require_once './connect.php';
        $email1 = trim($_POST['email1']);
        $pass1 = trim($_POST['pass1']);
        $sql = "SELECT id FROM user WHERE email = '$email1' AND password = '$pass1'";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email1, $pass1);
        if($stmt->execute() && $stmt->num_rows() == 1) {
            echo 'Zalogowany';
        }
        else {
            echo 'Dany użytkownik nie istnieje';
        }
    } else {
        $_SESSION['error'] = "Wypełnij wszystkie pola!";
        ?>
        <script>
            history.back();
        </script>
        <?php
    }
    //echo 'Zalogowany';
?>