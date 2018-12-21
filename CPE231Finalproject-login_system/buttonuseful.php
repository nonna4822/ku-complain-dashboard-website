<button type="button" onclick="location.href='homepage.php'"> กลับไปยังหน้าหลัก </button>

<?php
echo "เลขบัตรประชาชน หรือ เบอร์โทรศัพท์ ไม่ถูกต้อง !";
echo "<script>setTimeout(\"location.href = 'login.html';\",3000);</script>";
?>

<!-- check starter text -->
<?php  substr( $string_n, 0, 4 ) === "http"; ?>

<!-- session start-->
<?php
  session_start();
  if(isset($_SESSION['firstname'])){
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
  } else {
    header("location : login.php");
    exit;
  }
?>
