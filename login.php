<?php require_once __DIR__ . "/templates/header.php"; ?>

<div class="container col-xxl-8 px-4 py-2">

    <h1>Se connecter</h1>

    <form action="" method="post">

        <div class="mb-3">
            <label for="email" class="form_label">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form_label">mot de passe</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <input type="submit" name="loginUser" value="connexion" class="btn btn-primary">
    </form>

</div>

<?php require_once __DIR__ . "/templates/footer.php"; ?>