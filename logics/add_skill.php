<?php include('conn.php');
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $skill = $_POST['skill'];
    $experience = $_POST['experience'];
    $pin = (empty($_POST['pin'])) ? 0 : 1;

    $target_dir = "../public/images/";
    $path_parts = pathinfo($_FILES["image"]["name"]);
    $ext = $path_parts['extension'];
    $image = "skill-" . $skill . "user-" . $user . "." . $ext;
    $target_file = $target_dir . $image;
    $uOk = 1;

    if (
        move_uploaded_file(
            $_FILES["image"]["tmp_name"],
            $target_file
        )
    ) {
        echo "The file " . basename($_FILES["image"]["name"])
            . " has been uploaded.<br>";

        if (
            rename($target_file, "New/" .
                basename($_FILES["image"]["name"]))
        ) {
            echo "File moving operation success<br>";
        } else {
            echo "File moving operation failed..<br>";
        }
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }


    $query = "INSERT INTO `skills` (`id_user`, `skill_name`, `skill_experience`, `skill_image`, `skill_pin`) VALUES ('$user', '$skill', '$experience', '$image', '$pin')";
    if ($conn->query($query) === TRUE) {
        header('Location: ../pages/dashboard.php?error=You added a skill!');
    } else {
        header('Location: ../pages/dashboard.php?error=Something wrong about your request!');
    }
} else {
    header('Location: ../');
}
?>