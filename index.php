<?php
include __DIR__ . "/partials/header.php";
if (empty($_SESSION['password'])) {
    header('Location: login.php');
    die();
}
?>


<main class="container py-5">

    <div class="alert alert-success w-50 m-auto fs-1 fw-bold text-primary">
        <?php echo $_SESSION['password'] ?>
    </div>
    <form action="logout.php">
        <button class="btn btn-danger mt-5" type="submit">Logout</button>
    </form>

</main>

<?php
include __DIR__ . "/partials/footer.php"
    ?>