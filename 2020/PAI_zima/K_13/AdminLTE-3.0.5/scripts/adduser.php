<?php
    session_start();
    if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email1']) && !empty($_POST['email2']) && !empty($_POST['pass1']) && !empty($_POST['pass2'])
    && !empty($_POST['city']) && !empty($_POST['birthday']) && isset($_POST['terms'])) {
        require_once './connect.php';
        if($_POST['email1'] != $_POST['email2']) {
            $_SESSION['error'] = "Adresy email są różne!";
            ?>
            <script>
                history.back();
            </script>
            <?php
        }
        if($_POST['pass1'] != $_POST['pass2']) {
            $error = 1;
            $_SESSION['error'] = "Hasła są różne!";
        }
        if($error == 1) {
            ?>
            <script>
                history.back();
            </script>
            <?php
            exit();
        }

        // rejestracja użytkownika, dodanie do bazy danych, szyfrowanie danych
        echo '<pre>';
            print_r($_POST);
        echo '</pre>';

        $name = trim($_POST['name']);
        $surname = trim($_POST['surname']);
        $pass1 = trim($_POST['pass1']);
        $email1 = trim($_POST['email1']);
        $city = trim($_POST['city']);
        $birthday = trim($_POST['birthday']);
        //echo $name, $surname, $email1, $pass1, $birthday, $city;

        $sql = "INSERT INTO `user` (`name`, `surname`, `email`, `password`, `birthday`, `city_id`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $surname, $email1, $pass1, $birthday, $city);

        if($stmt->execute()) {
            $_SESSION['error'] = "Prawidłowo dodano użytkownika o nazwie $name";
            header('location: ../index.php?register=success');
        }else {
            header('location: ../pages/register.php');
            exit();
        }

        echo $conn->affected_rows;
        $stmt->close();
    }else {
        $_SESSION['error'] = "Wypełnij wszystkie pola!";
        //header('location: ../pages/register.php');
        ?>
        <script>
            history.back();
        </script>
        <?php
    }
?>