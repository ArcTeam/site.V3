<div id="nav" class="bg-dark">
  <ul>
    <?php if(isset($_SESSION['id'])){ ?>
    <li><a href="#" class="submenu animation"><i class="fas fa-bars"></i><span class="text-dark">menu</span></a></li>
    <?php } ?>
    <li><a href="index.php" class="index animation"><i class="fas fa-home fa-fw"></i> <span>home</span> </a></li>
    <li><a href="post.php" class="post animation"><i class="fas fa-comment-alt fa-fw"></i> <span>post</span> </a></li>
    <li><a href="work.php" class="work animation"><i class="fas fa-wrench fa-fw"></i> <span>work</span> </a></li>
    <li><a href="project.php" class="project animation"><i class="fas fa-cogs fa-fw"></i> <span>project</span> </a></li>
    <li><a href="open.php" class="open animation"><i class="fab fa-creative-commons fa-fw"></i> <span>open</span> </a></li>
    <li><a href="team.php" class="team animation"><i class="fas fa-users fa-fw"></i> <span>team</span> </a></li>
    <?php if(!isset($_SESSION['id'])){ ?>
    <li><a href="login.php" class="login animation"><i class="fas fa-sign-in-alt fa-fw"></i> <span>login</span> </a></li>
    <?php } ?>
  </ul>
</div>

<?php if(isset($_SESSION['id'])){ ?>
  <div id="usrMenu" class="border-bottom shadow-sm">
    <div class="btn-group" role="group" aria-label="usrMenu">
      <button id="menuAdd" type="button" class="btn btn-light btn-sm bg-white rounded-0 dropdown-toggle usrLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">aggiungi</button>
      <div class="dropdown-menu" aria-labelledby="menuAdd">
        <a class="dropdown-item" href="#">post</a>
        <a class="dropdown-item" href="#">lavoro</a>
        <a class="dropdown-item" href="#">progetto</a>
        <a class="dropdown-item" href="#">doc scaricabile</a>
        <a class="dropdown-item" href="#">utente</a>
      </div>
    </div>
    <div class="btn-group" role="group">
      <button id="menuMod" type="button" class="btn btn-light btn-sm bg-white dropdown-toggle usrLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">modifica</button>
      <div class="dropdown-menu" aria-labelledby="menuMod">
        <a class="dropdown-item" href="#">dati personali</a>
        <a class="dropdown-item" href="#">password</a>
      </div>
    </div>
    <a href="#" class="btn btn-light btn-sm bg-white usrLink">utenti</a>
    <a href="logout.php" class="btn btn-light btn-sm bg-white rounded-0 usrLink">logout</a>
  </div >
<?php } ?>
