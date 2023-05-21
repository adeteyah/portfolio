<?php $title = "Dashboard Page";
include('../components/header.php'); ?>

<?php
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['status'])) {
    header('Location: ../');
}
?>

<?php
$email = $_SESSION['email'];
$queryGetUser = 'SELECT * FROM `users` WHERE `user_email` = ?';
$stmtGetUser = $conn->prepare($queryGetUser);
$stmtGetUser->bind_param('s', $email);
$stmtGetUser->execute();
$resultUser = $stmtGetUser->get_result();
$rowUser = $resultUser->fetch_assoc();
?>

<?php
$queryGetSkill = "SELECT * FROM `skills` WHERE `id_user` = 1 ORDER BY `skill_pin` DESC";
$resultGetSkill = $conn->query($queryGetSkill);
?>

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="logoutModalLabel">Are you sure want to log out?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Logging out will end your current session and require you to log in again to access your account.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a class="btn btn-sm btn-danger" href="../logics/logout.php">Yes, log me out</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="skillModal" tabindex="-1" aria-labelledby="skillModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form action="../logics/add_skill.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="user" value="<?= $rowUser['id_user'] ?>">
            <input id="targetEditID" type="hidden" name="skill" value="">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="skillModalLabel">Add skill</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Enhance your portfolio by showcasing your skills! Adding a skill to your portfolio allows others
                        to see your expertise and increases your professional visibility.
                    </p>
                    <div class="mb-3">
                        <label for="editSkillName" class="form-label fs-7">Skill</label>
                        <input id="targetEditSkill" class="form-control form-control-sm" type="text"
                            placeholder="e.g Javascript" id="editSkillName" name="skill" required>
                    </div>
                    <div class="mb-3">
                        <label for="editSkillExperience" class="form-label fs-7">Experience</label>
                        <select id="targetEditExperience" class="form-select form-select-sm" id="editSkillExperience"
                            name="experience" required>
                            <option selected disabled>Select your skill experience</option>
                            <option value="Beginner">
                                Beginner
                            </option>
                            <option value="Intermediate">
                                Intermediate
                            </option>
                            <option value="Advanced">
                                Advanced
                            </option>
                            <option value="Expert">
                                Expert
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editImage" class="form-label fs-7">Skill Image</label>
                        <input name="image" class="form-control form-control-sm" id="editImage" type="file" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" style="margin-right:8px;" id="editPin"
                            name="pin" value="1" checked>
                        <label class="form-check-label fs-7 text-muted" for="editPin">
                            I want to pin this skill, so it featured on my profile.
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="../logics/delete_skill.php?id=" class="btn btn-sm btn-danger">Delete</a>
                    <input name="submit" type="submit" class="btn btn-sm btn-primary" value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>

<div class="dt-header p-5">
    <div class="container">
        <div class="dt-header-content row">
            <div class="col col-12 col-xl-3 order-xl-2">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-sm btn-secondary mb-5 opacity-75" data-bs-toggle="modal"
                        data-bs-target="#logoutModal">
                        Log Out
                    </button>
                </div>
            </div>
            <div class="col col-12 col-xl-9 order-xl-1">
                <div class="row">
                    <div class="col col-12 col-xl-3 my-2">
                        <img src="<?= $rowUser['user_image'] ?>"
                            class="rounded-circle object-fit-cover ratio ratio-1x1 p-5"
                            alt="<?= $rowUser['user_image'] ?>" title="<?= $rowUser['user_name'] ?>'s Profile Picture">
                    </div>
                    <div class="col col-12 col-xl-9 d-flex flex-column justify-content-center">
                        <h4>
                            <?= $rowUser['user_name'] ?>
                        </h4>
                        <p class="mb-4">
                            <?= $rowUser['user_bio'] ?>
                        </p>
                        <button type="button" class="open-skill-modal btn btn-sm btn-primary d-flex align-self-start"
                            data-type="add" data-id="" data-skill="" data-experience="Select your skill experience"
                            data-image="" data-pin="" data-bs-toggle="modal" data-bs-target="#skillModal">
                            Add skill (+)
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container p-5">

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="row">
        <h2>Skills</h2>
        <?php
        if ($resultGetSkill->num_rows > 0) {
            while ($rowSkill = $resultGetSkill->fetch_assoc()) {
                ?>
                <div class="col-6 col-md-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col text-capitalize text-secondary fw-bold">
                                    <?= $rowSkill['skill_name'] ?>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <?php if ($rowSkill['skill_pin'] == 1) { ?>
                                        <span class="badge bg-primary">Featured</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class=" ratio ratio-1x1">
                            <img src="../public/images/<?= $rowSkill['skill_image'] ?>" class="card-img-top object-fit-cover"
                                alt="<?= $rowSkill['skill_image'] ?>">
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <?= $rowSkill['skill_experience'] ?>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="open-skill-modal btn btn-sm btn-secondary my-3" data-type="edit"
                        data-id="<?= $rowSkill['id_skill'] ?>" data-skill="<?= $rowSkill['skill_name'] ?>"
                        data-experience="<?= $rowSkill['skill_experience'] ?>" data-image="<?= $rowSkill['skill_image'] ?>"
                        data-pin="<?= $rowSkill['skill_pin'] ?>" data-bs-toggle="modal" data-bs-target="#skillModal">
                        Edit
                    </button>
                </div>
            <?php }
        } else {
            echo "0 results";
        }
        ?>
    </div>
</div>

<?php include('../components/js.php'); ?>
<script type="text/javascript">
    $(document).on("click", ".open-skill-modal", function () {
        var type = $(this).data('type');
        var id = $(this).data('id');
        var skill = $(this).data('skill');
        var experience = $(this).data('experience');
        var image = $(this).data('image');
        var pin = $(this).data('pin');
        if (type == "add") {
            $("#skillModalLabel").text("Add skill");
        } else if (type == "edit") {
            $("#skillModalLabel").text("Edit skill");
        }
        $("#targetEditID").val(id);
        $("#targetEditSkill").val(skill);
        $("#targetEditExperience").val(experience);
        $("#targetEditImage").val(image);
        $("#targetEditPin").val(pin);
    })
</script>
<?php include('../components/footer.php'); ?>