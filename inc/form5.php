<?php
// Assuming you have established a valid database connection ($conn)

if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

    if (empty($user)) {
        echo 'الرجاء تعبئة الاسم|اللقب';
    } elseif (empty($comment)) {
        echo 'الرجاء كتابة تعليقك قبل الارسال';
    } else {
        $sql = "INSERT INTO وظائف (user, comment) VALUES ('$user', '$comment')";
        if (mysqli_query($conn, $sql)) {
            header('location: وظايف.php');
        } else {
            echo 'حدث خطأ أثناء إرسال التعليق';
        }
    }
}
?>