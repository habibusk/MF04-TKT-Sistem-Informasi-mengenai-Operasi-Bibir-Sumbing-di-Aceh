<?php
if (isset($_POST["submit"])) {
    $name = $_POST['nama'];
    $email = $_POST['mail'];
    $subject = $_POST['sub'];
    $message = $_POST['pesan'];
    $noWa = $_POST['nowa'];
    header("location:https://web.whatsapp.com/send?phone=$noWa&text=Nama:%20$name%20%20Email:$email%20%20DSubject:$subject%20%20DPesan:$message");
} else {
    echo "
        <script>
            window.location=history.go(-1);
        </script>
    ";
}
