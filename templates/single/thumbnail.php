<?php
/**
 * The Template for displaying single job thumbnail.
 *
 * This template can be overridden by copying it to yourtheme/jobboard/single/thumbnail.php.
 *
 * HOWEVER, on occasion JobBoard will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @author     FOX
 * @package    JobBoard/Templates
 * @version    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<div class="single-thumbnail">

    <?php echo apply_filters('jobboard_single_thumbnail_html', sprintf('<img src="%1$s" class="%2$s" alt="%3$s" itemprop="image">', jb_job_image_url(), 'attachment wp-post-image', get_the_title())); ?>

    <?php do_action( 'jobboard_single_thumbnail' );?>

</div>
