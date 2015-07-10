<html>
<head>
	
	<title>Новини</title>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link type="text/css" rel="stylesheet" href="/football/styles/style_blocks.css">

	</head>
<body>
	
	<div class="header"> <!-- Початок "шапки" сайту -->
		<p>Шапка</p>
	</div> <!-- Кінець "шапки" сайту -->

	<div class="container"> <!-- Початок блоку контейнера для навігації і контенту -->
		
		<div class="navigation"> <!-- Початок меню -->
		<?php include($_SERVER["DOCUMENT_ROOT"]."/football/blocks/navigation.php") ?>				
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
						 $date = $row['adddate'];
						 $anotation = $row['anotation'];
						 $photo = $row['photo'];
						 $link = "<a href='readnews.php?id=".$row['id']."'>".$name . "</a>";
						 echo "<div class='news_container'>
						       <div class='news_image'>
                               <img src='".$photo."'/>
							   </div>
							   <span class='news_date'>".$date."
							   </span>
							   <span class='news_name'>".$name."
							   </span>
							   <span class='news_anotation'>".$anotation."
							   </span>
							   <span class='news_more'><a href='#'>More...</a>
							   </span>
							   </div>";
					}
				mysql_close();
			?>
		</div><!-- Кінець контенту -->
		
		<div class="leftcolumn"><!-- Початок лівого блоку -->
		<p>Лівий Блок</p> 
		</div><!-- Кінець лівого блоку -->
		
		
		
		
	</div> <!-- Кінець блоку контейнера для навігації і контенту -->
	
	<div class="footer"><!-- Початок "підвалу" сайту -->
		<p>Підвал</p>
	</div><!-- Кінець "підвалу" сайту -->

</body>
</html>