<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
function getdetails(){
    var name = $('#name').val();
    var email = $('#email').val();
    var sait = $('#sait').val();
    var record = $('#record').val();
    $.ajax({
        type: "POST",
        url: "db.php",
        data: {type:'add', pname:name, pemail:email, psait:sait, precord:record},
        success: function(html){
        	$("#msg").html(html);
		}	
    
	});
}
</script>

<div class="page-header">
	<h1>Книга скарг і пропозицій</h1>
</div>
	<form action="db.php" class="form-horizontal">

	<div class = "form-group">
      <label for = "firstname" class = "col-sm-2 control-label">Ім'я</label>
		
      <div class = "col-sm-8">
         <input type = "text" class = "form-control" id = "name" required placeholder = "ВВедіть ваше ім'я">
      </div>
   </div>
   
   <div class = "form-group">
      <label for = "lastname" class = "col-sm-2 control-label">E-mail</label>
		
      <div class = "col-sm-8">
         <input type = "email" class = "form-control" id = "email" required placeholder = "Введіт ваш E-mail">
      </div>
   </div>

   <div class = "form-group">
      <label for = "firstname" class = "col-sm-2 control-label">Сайт</label>
		
      <div class = "col-sm-8">
         <input type = "text" class = "form-control" id = "sait" placeholder = "Введіть ваш сайт">
      </div>
   </div>
   
   <div class = "form-group">
      <label for = "lastname" class = "col-sm-2 control-label">Ваш відгук</label>
		
      <div class = "col-sm-8">
	      <textarea class = "form-control" rows = "3" required id="record"></textarea>
      </div>
   </div>

   <div class = "form-group">
      <div class = "col-sm-offset-2 col-sm-10">
         <button type = "button" class = "btn btn-default" onclick="getdetails()">Додати</button>
      </div>
   </div>
</form>

<center><div id="msg"></div></center>