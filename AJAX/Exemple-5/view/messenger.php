<nav class="navbar bg-dark text-light fixed-top navbar-dark ml-auto">
    <div class="col">
        <span class="lead">Super Messenger</span>
        <div class="float-right">
            <span class="mr-4"><i class="fas fa-user"></i> <?=$user['username'] ?></span>
            <a name="" id="" class="btn btn-light" href="src/logout.php" role="button">Se déconnecter</a>
        </div>
    </div>
</nav>


<!-- MESSAGES -->
<ul class="messages list-unstyled" id="messages">
    <li class="message me media">
        <div class="avatar float-left">
            <img src="" class="avatar rounded-circle img-thumbnail"/>
        </div>
    </li>
    <li class="message me media">
    
    </li>
</ul>




<nav class="navbar bg-primary fixed-bottom navbar-dark">
    <form id="message-form" method="POST">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Entrez votre message" name="message"/>
            <div class="input-group-append">
                <button type="submit" class="btn btn-dark"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </form>
</nav>