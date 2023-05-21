<?php include('conn.php');
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $skill = $_POST['skill'];
    $experience = $_POST['experience'];
    $image = $_POST['image'];
    $pin = $_POST['pin'];
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