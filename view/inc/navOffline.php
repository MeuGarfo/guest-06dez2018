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
                    <li><a href="/signup">Criar conta</a></li>
                </ul>
                <form class="navbar-form pull-right" action="/signin" method="post">
                    <input class="span2" type="text" placeholder="Email" name="email">
                    <input class="span2" type="password" placeholder="Password" name="password">
                    <button type="submit" class="btn">Entrar</button>
                </form>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
