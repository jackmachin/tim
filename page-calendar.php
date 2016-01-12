<?php
/**
 * Template Name: Calendar Page
 * Displays Hidden Page
 *
 * @package WordPress
 * @subpackage Tatton
 */

$sector = getSector();

get_header();

if (is_user_logged_in()): ?>

<section>
    <div class="hero">
        <div class="hero__overlay"></div>
        <div class="hero__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hero__text pt-lg pb-lg">
                        <h2 class="hero__title">Events</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
	<div class="row mt-lg">
		<div class="col-sm-5 mb-lg">
            <p>Calendar stuff
		</div>
        <div class="col-sm-5 col-sm-offset-2 mb-lg">
            <p>To find out more about gaining access to our IFA resources visit our <a href="/contact">contact</a> page.</p>
        </div>
	</div>
</div>

<?php else:
?>
<section>
    <div class="hero">
        <div class="hero__overlay"></div>
        <div class="hero__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hero__text pt-lg pb-lg">
                        <h2 class="hero__title">Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
	<div class="row mt-lg">
		<div class="col-sm-5 mb-lg">
            <p>To view this content you must be logged in.</p>
			<?php do_action('custom_login'); ?>
		</div>
        <div class="col-sm-5 col-sm-offset-2 mb-lg">
            <p>To find out more about gaining access to our IFA resources visit our <a href="/contact">contact</a> page.</p>
        </div>
	</div>
</div>

<?php
endif;

get_footer();
