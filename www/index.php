<html>
	<? include "students.php";
	  $s = new Students;
	  $s->NewStud(array("name"=>"Пасиченко Никита","age"=>"18","n_town"=>"Запорiжжя, Украiна","phone"=>"+380444444444"));
	  $s->PlusAge();?>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">

	</head>
	<body>
		<div class="container" style="border: 1px solid;padding-bottom:80px;">
			<header>
				<span class="logo">Facebook</span>
			</header>

			<div style="float:right; width:65%;height:300px; margin-top:30px;">
			<h1>Безединов Мирослав, 18</h1>
			<p>
			<h3>Запорiжжя, Украiна</h3>
			<p>
			<h3>+380999178569</h3>
			<p>
			<p>
			
				<table style="border:2px solid;">
					<tr>
						<th>Ім'я</th>
						<th>Вік</th>
						<th>Місто</th>
						<th>Телефон</th>

					</tr>
					<?foreach ($s->arr as $value){?>
					
					<tr>
						<td>
							<?echo $value['name'];?>
						</td>
						<td>
							<?echo $value['age'];?>
						</td>
						<td>
							<?echo $value['n_town'];?>
						</td>
						<td>
							<?echo $value['phone'];?>
						</td>
					</tr>
					<?}?>
					<tr>
						<td>Загальний вік студентів - <?$s->TotalAge();?></td>
						<td>Середній вік студентів - <?$s->MidAge();?></td>
					</tr>
				</table>
			</div>

			<div class="avatar">
				<table style="border: 2px solid;font-size:200px;width:200px;height:300px;text-align:center;margin:auto;margin-top:30px;">
					<td>?</td>
				</table>
			</div>
			<form method="POST" action="server.php">
				<label>Имя</label>
				<p><input name="input"></p>
				<label>Пол</label>
				<p><input type="radio" name="pol" id="man" value="Man">
					<label for="man">Man</label>
				<p><input type="radio" name="pol" id="woman" value="Woman">
					<label for="woman">Woman</label>
				<p><button type="submit">Send</button>
			</form>


		</div>
	</body>
</html>