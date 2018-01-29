<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="/user">Users</a>
      <a class="nav-item nav-link disabled" href="#"><?=$user[0]['login']?></a>
    </div>
  </div>
</nav>

<h1><?=$title?></h1>
<hr>

<form action="/user/update" method="post">
	<input type="hidden" name="id" value="<?=$user[0]['id']?>">
	<input type="text" name="login" value="<?=$user[0]['login']?>">
	<input type="password" name="password" value="<?=$user[0]['password']?>">
	<button type="submit">Send</button>
</form>
