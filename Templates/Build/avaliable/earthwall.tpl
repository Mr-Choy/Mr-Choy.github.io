<h2><?php echo EARTHWALL ?></h2>

<table class="new_building" cellpadding="1" cellspacing="1">
	<tbody><tr>
		<td class="desc"><?php echo EARTHWALL_DESC ?></td>
		<td rowspan="3" class="bimg">
					</td>
	</tr>
	<tr>
		<?php
        $_GET['bid'] = 32;
        include("availupgrade.tpl");
        ?>
	</tr>
</table>