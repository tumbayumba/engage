<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="/test">Index</a>
      <a class="nav-item nav-link disabled" href="#">View</a>
    </div>
  </div>
</nav>

<h1><?=$title?></h1>
<hr>

<form method="post">
	<input type="text" name="fio" value="<?=$fio?>">
	<input type="number" name="age" value="<?=$age?>">
	<button type="submit">Send</button>
</form>
