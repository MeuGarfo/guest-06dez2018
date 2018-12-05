<div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/"><?php print $_ENV['SITE_NAME']; ?></a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="/">Mensagens</a></li>
                </ul>
                <ul class="pull-right nav">
                    <li class="dropdown">
                        <a class="hand dropdown-toggle" data-toggle="dropdown"><?php print $user['name']; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/logout">Sair</a></li>
                        </ul>
                    </li>
                </ul>


            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
