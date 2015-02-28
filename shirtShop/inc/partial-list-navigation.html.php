<?php

/* This file displays a list of links to pages of shirts. It needs to
 * receive the total number of pages ($total_pages) and the current
 * page number ($current_page). It will display all the numbers between
 * 1 and $total_pages, and it will make all but $current_page a link.
 */

?>

<div class="pagination">
	<?php $i = 0;
	while($i < $total_pages) :
		$i += 1;
		if($i == $current_page):
			echo '<span>'.$i.'</span>';
		else:
			echo '<a href="./?pg='.$i.'"">'.$i.'</a>';
		endif;
	endwhile; ?>	
</div>