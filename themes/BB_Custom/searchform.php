<form class="top-search" role="search" action="<?php bloginfo(url); ?>" method="get">
	<div><label class="screen-reader-text" for="s">Search for:</label>
        <input type="text"
        <?php 
        	$mySearchTerm = get_search_query();
        	if ($mySearchTerm != null) {?>
        	value="<?php echo $mySearchTerm; ?>"
   		<?php } else { ?>
   			placeholder="Search..."
		<?php }?>
         name="s" id="s" />
        <input type="submit" id="searchsubmit" value="&#x25B6;" />
    </div>
</form>