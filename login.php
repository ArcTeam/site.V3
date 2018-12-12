<?php
session_start();
?>
<!doctype html>
<html lang="it">
  <head>
    <?php require('inc/meta.php'); ?>
    <?php require('inc/css.php'); ?>
  </head>
  <body>
    <?php require('inc/nav.php'); ?>
    <div id="main">
      <div class="container">
        <div class="row">
          <div class="col bg-white mx-2 p-2 border rounded">
            <form>
              <div class="form-row">
                <div class="form-group col">
                  <h4 class="border-bottom mb-3">Bentornato utente</h4>
                  <h6 class="">Inserisci le tue credenziali per accedere al sistema</h6>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="email" name="email" class="form-control" placeholder="email" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <button type="submit" class="btn btn-sm btn-primary form-control" name="submit">Entra</button>
                </div>
                <div class="form-group col-6">
                  <button type="submit" class="btn btn-sm btn-outline-primary form-control" name="submit">password dimenticata</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php require('inc/footer.php'); ?>
    <?php require('inc/lib.php'); ?>
  </body>
</html>
