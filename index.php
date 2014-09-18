<?
	session_start();
	if(!isset($_SESSION['login_user']))
	{
		header('Location: logon.html') ;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" href="img/logo.ico?3" />

<META content="text/html; charset=windows-1251" http-equiv="Content-Type">
<meta name="description" content="Achieve Board пусть все узнаю о твоих длостижениях !" />

<title>Achieve Board</title>

<noscript><meta http-equiv="refresh" content="0; URL=/badbrowser.php"></noscript>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.css" />

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js" ></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js" ></script>

<script>
	$(document).ready(function() {
		$('#achieveTable').dataTable();
	} );
</script>
</head>

<body >
	<div id="page">
		<div id = "page_header">
		</div>
		<div id = "page_body">
			<ul id="frendList" class = "fl_l">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>

			<div id="main" class = "fl_l">
				<div id = "clientInfo">
					<img id="bigAvatar" src="img/defaultUserImg.jpg">
					<div id="userName"><?
					echo $_SESSION['login_user']
					?></div>
				</div>
				<div id = "achieveList">
					<table id="achieveTable">
						<thead>
							<tr>
								<th>Рейтинг</th>
								<th>Имя</th>
								<th>Автор</th>
								<th>Статус</th>
								<th>Убрать</th>
								<th>Достиг!</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Сделать таблицу достижений</td>
								<td>Макс</td>
								<td>В работе</td>
								<td><button>Cancel</button></td>
								<td><button>Achieved!</button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
			
			<div id = "userMenu" class = "fl_r">
				<button class="grayButton">Обо мне</button>
				<button class="grayButton">Добавить достижения</button>
				<button class="grayButton">Выйти</button>
			</div>
			
			<div style="clear:both;"></div>
		</div>
		<div id = "page_footer">
		</div>
	</div>
</html>
