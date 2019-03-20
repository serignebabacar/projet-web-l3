
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-info" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex2-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Accueil</a></li>
        <li class="dropdown dropup">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Dropup <b class="caret"></b>
          </a>
          <ul class="dropdown-menu dropdown-menu-info">
            <li><a href="#">Action</a></li>
            <li><a href="#">Autre action</a></li>
            <li><a href="#">Exemple</a></li>
            <li class="dropdown-header">Titre exemple</li>
            <li><a href="#">Lien séparer</a></li>
            <li><a href="#">Autre lien séparer</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-info"><i class="icon icon-search"></i></button>
      </form>
      <p class="navbar-text">navbar-text</p>
      <ul class="nav navbar-nav navbar-right">
        <li class="disabled"><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu dropdown-menu-info">
            <li><a href="#">Action</a></li>
            <li class="active"><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li><a href="#" class="navbar-link">[navbar-link]</a></li>
      </ul>
    </div>
  </div>
</nav>
<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
</button>

<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Star
</button>
</body>
</html>
