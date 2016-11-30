<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
setInterval(function getlist(){
    $.ajax({
        type: "POST",
        url: "db.php",
        data: {type:'select'},
        success: function(html){
        	$("#list").html(html);
		}	
	});
}, 1000);

function deleterec(id) {
    $.ajax({
        type: "POST",
        url: "db.php",
        data: {type:'delete', pid:id},
	});
}
</script>

<div id="list">

</div>