<?php 
$home_options = get_fields();

$cta_one = $home_options['cta_one'];
$cta_two = $home_options['cta_two'];
?>

<section class="hero-ss">
    <div class="container">
        <div class="wrap">

            <div class="left-hero">
                <?php

                if ( !empty($home_options['heading_hr'])) { ?>
                    <h1><?php echo $home_options['heading_hr'];?></h1>
                <?php }

                if ( !empty($home_options['subheading_hr'])) { ?>
                    <p><?php echo $home_options['subheading_hr'];?></p>
                <?php }

                if ( !empty($cta_one['url']) && !empty($cta_one['text']) ) { ?>
                    <a class="btn-cm" href="<?php echo $cta_one['url'] ?>"><?php echo $cta_one['text'];?></a>
                <?php }

                if ( !empty($cta_two['url']) && !empty($cta_two['text']) ) { ?>
                    <a class="btn-cm second" href="<?php echo $cta_two['url'] ?>"><?php echo $cta_two['text'];?></a>
                <?php }

                ?>
            </div>

            <div class="right-hero">

            </div>
        </div>
    </div>
</section>