<?php
include("../include/head.php"); // "../" ===> supprimer un dossier
?>
  <body>
 
    <?php
        include("../include/menu.php");
    ?>


        <div class="container">
            <div class="row">
                <div class="col-2">
                    <?php
                        include("../include/sidebar.php")
                    ?>
                </div>
                <div class="col-10">
                    <div class="container content">
                    <form method="POST" action="traitement.php" id="frmRegister">
                        <div class="form-group">
                            <label for="">Prénom</label>
                            <input type="text" class="form-control" id="frmPrenom" aria-describedby="" placeholder="Indiquer Prénom (*)" name="frmPrenom" required>
                            <small id="prenomHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" id="frmNom" aria-describedby="" placeholder="Indiquer Nom (*)" name="frmNom" required>
                            <small id="nomHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Email address</label>
                            <input type="email" class="form-control" id="frmEmail" aria-describedby="" placeholder="Indiquer Email (*)" name="frmEmail" required>
                            <small id="emailHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="frmPass" placeholder="Indiquer mot de passe (*)" name="frmPass" required>
                            <small id="passwordHelp" class="form-text text-muted">Caractère de 6 à 12. Champs obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Confirmer mot de passe</label>
                            <input type="password" class="form-control" id="frmPassb" aria-describedby="" placeholder="Confirmer votre mot de passe. (*)" name="frmPassb" required>
                            <small id="passwordBHelp" class="form-text text-muted">Vous devez confirmer votre saisie.</small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                        
                    </div>
                </div>
                
                    
                </div>
            </div>
        </div>
        
        <?php
            include("../include/footer.php")
        ?>