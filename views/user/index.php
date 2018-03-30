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
	      <th scope="col"></th>
	    </tr>
	</thead>
	<tbody>
		<?php foreach($users as $user):?>
		    <tr id="user_<?=$user['id']?>">
		      <td><?=$user['id']?></th>
		      <td><a href="/user/view?id=<?=$user['id']?>"><?=$user['login']?></a></td>
		      <td><?=$user['password']?></td>
		      <td class="delete-user" id="delete_<?=$user['id']?>" style="cursor:pointer">del</td>
		    </tr>
		<?php endforeach;?>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
		$(".delete-user").click(function(){
			var ans = confirm("Delete?")
			if(ans){
				$.ajax({
				  url: '/user/delete',
				  type: 'post',
				  data: { id: $(this).attr("id").replace("delete_","") },
				  success: function(data){ location.href='' }
				});
			}
		});
	});
</script>