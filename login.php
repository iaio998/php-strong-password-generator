<?php
include __DIR__ . "/partials/header.php";
$error = generatePass();

?>

<main class="container">
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="mb-3 w-50 m-auto">
            <label for="exampleInputEmail1" class="form-label">Input how many characters</label>
            <input type="number" min="6" max="20" name="pwLength" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
        </div>
        <button type="submit" class="btn btn-success">Generate</button>
    </form>
</main>
<?php
include __DIR__ . "/partials/footer.php"
    ?>