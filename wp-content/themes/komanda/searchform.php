<?php
/**
 * search form
 */
?>
<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="search-form" >
    <button type="submit" class="btn-search">
		<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="5.46 5.44 13.1 13.08" xml:space="preserve"><g fill="none"><circle stroke="#fff" cx="11.33" cy="11.33" r="5.33"/><path stroke="#fff" d="m18 18-2.9-2.9"/></g></svg>
	</button>
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="<?php _e('Search','komanda');?>" />
    <svg class="btn-close" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="21.66 21.66 32.66 32.68" xml:space="preserve"><path fill="none" stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M53.91 22.09 22.09 53.91M22.09 22.09l31.82 31.82"/></svg>
</form>
