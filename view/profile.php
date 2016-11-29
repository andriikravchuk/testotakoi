<script type="text/javascript">
	
	function enter () {
		document.getElementById('signin').setAttribute('style','visibility:visible');
		var x = document.body.clientWidth / 2 - document.getElementById('signin').clientWidth/2;
		var y = document.body.clientHeight  / 2 - document.getElementById('signin').clientHeight/2;
		
		document.getElementById('signin').style.top = y + 'px';
		document.getElementById('signin').style.right = x + 'px';
	}
</script>

<? 

if (!isset($_COOKIE['visited'])) {
	echo '
<div class="enter" id="enter">
	<label class="userstatus">Ви зайшли як гість      </label>
	<button class="btn btn-lg btn-default" type="button" onclick="enter()">Увійти</button>
</div>';
} 
if (isset($_COOKIE['visited'])) {
	echo '
	<form method="post" action="./deletecookie.php">
<div class="exit" id="exit">
	<label class="userstatus">Ви зайшли як модератор      </label>
	<button name="exit" class="btn btn-lg btn-danger" type="submit">Вихід</button>
</div> </form>';
}

if (isset($_POST['exit'])) {
setcookies('visited', '', time() - 30);
}