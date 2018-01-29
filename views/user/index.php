<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link disabled" href="#">Users</a>
      <a class="nav-item nav-link" href="/user/create">Create</a>
    </div>
  </div>
</nav>

<h1><?=$title?></h1>
<hr>

<table class="table table-dark">
	<thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Login</th>
	      <th scope="col">Password</th>
	    </tr>
	</thead>
	<tbody>
		<?php foreach($users as $user):?>
		    <tr id="user_<?=$user['id']?>" class="view-record">
		      <th scope="row"><?=$user['id']?></th>
		      <td><?=$user['login']?></td>
		      <td><?=$user['password']?></td>
		    </tr>
		<?php endforeach;?>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
		$(".view-record").css({ "cursor":"pointer" });
		$(".view-record").click(function(){ location.href='/user/view?id='+$(this).attr('id').replace('user_','') });
	});
</script>