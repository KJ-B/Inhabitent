<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
get_terms();
?>

<section class="product-info container">
    <h2>Shop Stuff</h2>
    <div class="product-type-blocks">
        <?php $terms = get_terms(array("hide_empty" => false,"taxonomy" => "type")); 
        foreach ($terms as $term ) { 
        	//echo "<pre>"; print_r($term); echo "</pre>";
        	echo $term->name; ?>
	        <div class="product-type-block-wrapper">
	            <img src="../images/do.svg" alt="Do">
 				<p><? echo $term->description; ?> </p>
	            <p><a href="./product-type/do/" class="btn"><? echo "Do Stuff" ?></a></p>
	        </div>
    	<?php } ?>
    </div>
</section>

         