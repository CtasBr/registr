<html>
<head>
<link rel="stylesheet" href="reg.css">
<title>Анкета страховой</title>
</head>
<body>
	<form  method="post">   
		<h1>Анкета для страховой компании</h1>
		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="Site Name">
		<input type="hidden" name="admin_email" value="st.dm.br.04@mail.ru">
		<input type="hidden" name="form_subject" value="Form Subject">
		<!-- END Hidden Required Fields -->
	
	<div class="group">
		<label>Фамилия Имя Отчество:</label><br>
		<input type="text" name="nm" placeholder="ФИО" required>
	</div>
	<div class="group">
		<label>Адрес электронной почты:</label><br>
		<input type="email" name="em" placeholder="Email" required>
	</div>
	<div class="group">
		<label>Номер машины:</label><br>
		<input type="text" name="nc" placeholder="Номер машины" required>
	</div>
	<div class="group">
		<label>Номер паспорта:</label><br>
		<input type="text" name="np" placeholder="Номер паспорта" required>
	</div>
	<div class="group">
		<label>номер водительского удоставерения:</label><br>
		<input type="text" name="ncp" placeholder="Номер водительского удостоверения" required>
	</div>
	<div>
		<button>Отправить заявку</button> 
	</div>
	</form>
	
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="script.js"></script>

<div id="save">SAVE</div>
<div id="save1">SAVE</div>
<div id="save2">SAVE</div>
<div id="save3">SAVE</div>
<div id="save4">SAVE</div>
<div id="save5">SAVE</div>
<div id="save6">SAVE</div>
<div id="save7">SAVE</div>



</body>
</html>
