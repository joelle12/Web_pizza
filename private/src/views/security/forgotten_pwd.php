<?php include_once "../private/src/views/layout/header.php"; ?>
<form method="post" class="container" novalidate>
        <div class="row">
            <div class="col-4 offset-4">
            
                <!-- Champ Email -->
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Votre adresse email">
                </div>

                <button class="btn btn-success btn-block">Recup le MDP</button>

                <a href="login.php">C'est bon, je me souvient de mon Mot de passe.....</a><br>

            </div>
        </div>
    </form>

<?php include_once "../private/src/views/layout/footer.php"; ?>



    
    