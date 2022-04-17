<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package MyTheme
 */

get_header();
?>

	<div class="row">
    <div class="col-lg-12">
        <div class="error-template">
            <h1>Oops!</h1>
            <h2>Sorry Something Went Wrong!</h2>
            <div class="error-details">
                For some reason the page you requested could not be found on our server. Please pick an option from the below.
            </div>
            <div class="error-actions">
                <a href="<?php echo site_url(); ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>&nbsp;Take Me Home </a>
                <a href="<?php echo site_url(); ?>/contact" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contact Support </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

