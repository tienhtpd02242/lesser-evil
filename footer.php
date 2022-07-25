<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Genesis Block Theme
 */

?>

	</div><!-- #content -->
</div><!-- #page .container -->

<?php 
$global_opts = get_fields('option');

$center_column = $global_opts['center_column'];
$logo_footer   = $global_opts['logo_footer'];
$copyright     = $global_opts['copyright'];
$list_social_glb = $global_opts['list_social_glb'];
?>

<footer class="main-footer">
    <div class="line-ft">
        <svg width="1920" height="38" viewBox="0 0 1920 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-48 5L421 33.5L620.5 5H745L1061 33.5L1701 5L1955 33.5" stroke="#ED1944" stroke-width="8"/>
        </svg>
    </div>

	<div class="container">
        <div class="wrap">
            <div class="logo-ft">
                <?php 
                if ( !empty($logo_footer) ) { ?>
                    <a href="<?php echo home_url();?>">
                        <img src="<?php echo $logo_footer['url'];?>" alt="<?php echo $logo_footer['alt'];?>">
                    </a>
                <?php }
                ?>
                
            </div>

            <div class="last-col">
                <?php 
                    if ( !empty($copyright) ) { ?>
                        <div class="copy-r"><?php echo $copyright;?></div>
                    <?php }

                    if ( !empty($list_social_glb)) {
                        echo "<ul>";
                        foreach ($list_social_glb as $value) { ?>
                            <li>
                                <a href="<?php echo $value['url'];?>" target="_blank" rel="nofollow"><?php echo $value['icon'];?></a>
                            </li>
                        <?php }
                        echo "</ul>";
                    }
                ?>
            </div>

        </div>
	</div><!-- .container -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
