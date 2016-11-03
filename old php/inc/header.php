<body>
	<?php //include 'inc/notes.php';?>
	
	<header class="sub">
		<a href="./" class="moth-logo"></a>
		<?php if ($title) { echo'<span class="title">' . $title . '</span>'; } ?>
		<span class="date">Aug. 23, 2016</date>
	</header>
	<main>
		<header>
			<?php if ($title) { echo'<h1>' . $title . '</h1>'; } ?>
			<?php if ($credit) { echo'<h5>' . $credit . '</h5>'; } ?>
			<?php if ($description) { echo'<small>' . $description . '</small>'; } ?>
		</header>