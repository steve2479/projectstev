 <?php
    include('./lib/dbcon.php');
    include("../app/DotEnv.php");
    (new DotEnv('../.env'))->load();
    $host = getenv('DB_HOST');
    $user = getenv('DB_USERNAME');
    $pass = getenv('DB_PASSWORD');
    $db  = getenv('DB_NAME');
    dbcon($host, $user, $pass, $db);

    include('session.php');


    if (isset($_POST['change'])) {


        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);

        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
        $adminthumbnails = "uploads/" . $_FILES["image"]["name"];

        mysqli_query($conn, "update admin set adminthumbnails = '$adminthumbnails' where admin_id  = '$session_id' ") or die(mysqli_error());

    ?>

     <script>
         window.location = "dashboard.php";
     </script>

 <?php     }  ?>