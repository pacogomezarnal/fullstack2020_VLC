<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="navbar-nav">
                <li class="nav-item <?php if($_SERVER["PHP_SELF"]=="/index.php") echo "active"?>">
                    <a class="nav-link" href="index.php">Registro</a>
                </li>
                <li class="nav-item <?php if($_SERVER["PHP_SELF"]=="/lista.php") echo "active"?>">
                    <a class="nav-link" href="lista.php">Lista</a>
                </li>
            </ul>
        </div>
</nav>
