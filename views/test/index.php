<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link disabled" href="#">Index</a>
      <a class="nav-item nav-link" href="/test/view">View</a>
    </div>
  </div>
</nav>

<h1><?=$title?></h1>
<hr>

<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			url: 'test/jax',
			type: 'post',
			data: { p1: '1', p2: '2' },
			success: function(data){
				console.log(data)
			}
		});
	});
</script>