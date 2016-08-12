<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/BiblioPi">Bibliothèque</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="<?php if($i==1) active; ?>"><a href="downloads.php">Téléchargements</a></li>
            <li class="<?php if($i==2) active; ?>"><a href="database.php">Bases de données</a></li>
            <li class="<?php if($i==3) active; ?>"><a href="documentation.php">Documentation</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="<?php if($i==4) active; ?>"><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>
