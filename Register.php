<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // تخزين البيانات في قاعدة بيانات أو أي مكان آخر حسب متطلباتك
    // يمكنك استخدام كود مثل هذا لتخزين البيانات في ملف نصي:
    $data = "$name,$email,$password\n";
    file_put_contents("users.txt", $data, FILE_APPEND);

    echo "تم التسجيل بنجاح!";
}
?>
