<html>
<head>
	
	<title>Новини</title>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link type="text/css" rel="stylesheet" href="/football_site/styles/style_blocks.css">

	</head>
<body>
	
	<div class="header"> <!-- Початок "шапки" сайту -->
		<p>Шапка</p>
	</div> <!-- Кінець "шапки" сайту -->
	
	<div class="container"> <!-- Початок блоку контейнера для навігації і контенту -->
		
		<div class="navigation"> <!-- Початок меню -->
		<?php include($_SERVER["DOCUMENT_ROOT"]."/football_site/blocks/navigation.php") ?>				
		</div> <!-- Кінець меню -->
		
		<div class="content"> <!-- Початок контенту -->
			<?php
				@mysql_connect("localhost", "Misha", "qwe1asd2zxc3") or die (mysql_error ());
				@mysql_select_db("publications") or die(mysql_error());
				mysql_query("SET NAMES utf8");
				$request = "SELECT * FROM nationalconf ORDER BY adddate DESC";
				$result = mysql_query($request);
				while($row = mysql_fetch_array($result))
					{
						 $name = $row['name'];
						 $link = "<a href='readnews.php?id=".$row['id']."'>".$name . "</a>";
						 echo $link . "<br>";
					}
				mysql_close();
			?>
		</div><!-- Кінець контенту -->
		
		<div class="leftcolumn"><!-- Початок лівого блоку -->
		<p>Лівий Блок</p> 
		<p>проба №1</p>
		</div><!-- Кінець лівого блоку -->
		
		
		
		
	</div> <!-- Кінець блоку контейнера для навігації і контенту -->
	
	<div class="footer"><!-- Початок "підвалу" сайту -->
		<p>Підвал</p>
	</div><!-- Кінець "підвалу" сайту -->

</body>
</html>