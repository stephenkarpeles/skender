<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php	while ( have_posts() ) : the_post(); ?>
				<?php $fields = get_fields(); ?>

				<!-- Title -->
				<section class="page-title">
					<div class="container">
						<h1><?php the_title() ?></h1>
					</div>
				</section>

				<section class="single-project-slider-wrapper">

					<!-- Carousel -->
					<div class="col col-2-3">
						<?php if ( !empty( $fields['images'] ) ) : ?>
							<!-- Has gallery, load Slick -->
							<div class="single-project-slider">
								<?php foreach ( $fields['images'] as $image ) : ?>
									<div class="single-project-slide">
										<img src="<?= $image['image']['sizes']['large'] ?>" alt="<?= $image['image']['alt'] ?>">
									</div>
								<?php endforeach; ?>
							</div>

						<?php else : ?>
							<!-- No gallery, show featured image -->
							<?php the_post_thumbnail(); ?>

						<?php endif; ?>
					</div>

					<!-- Project Data -->
					<div class="col col-1-3">
						<div class="single-project-details">
	        		<div class="single-project-details__intro">
								<?php if ( !empty( get_the_content() ) ) : ?>
									<h2 class="single-project-details__intro">Project Intro</h2>
									<?php the_content(); ?>
								<?php endif; ?>
							</div>
							<div class="padded">
							<h2>Project Details</h2>

								<!-- Standard Project Meta -->
								<?php
								$meta_fields = array(
									'client/owner' => 'Client/Owner',
									'architect' => 'Architect',
									'location' => 'Location',
									'square_footage' => 'Square Footage',
									'project_type' => 'Project Type'
								);
								?>
								<?php foreach ( $meta_fields as $key => $label ) : ?>
									<?php if ( !empty( $fields[ $key ] ) ) : ?>
										<div class="single-project-details__item">
											<div class="single-project-details__heading"><?= $label ?></div>
											<div class="single-project-details__description">
												<?php if ( $key == 'square_footage' ) : ?>
													<?= number_format( str_replace( ',', '', $fields[ $key ] ) ) ?> SF
												<?php else : ?>
													<?= $fields[ $key ] ?>
												<?php endif; ?>
											</div>
										</div>
									<?php endif; ?>
								<?php endforeach; ?>

								<?php if ( !empty( $fields['awards'] ) ) : ?>

									<!-- Awards -->
									<div class="single-project-details__item">
										<div class="single-project-details__heading">Awards</div>
										<div class="single-project-details__description">
											<ul>
												<?php foreach ( $fields['awards'] as $award ) : ?>
													<li><?= $award['award'] ?></li>
												<?php endforeach; ?>
											</ul>
										</div>
									</div>
								<?php endif; ?>

								<?php if ( !empty( $fields['testimonial'] ) ) : ?>
									<!-- Testimonial -->
									<div class="single-project-details__item">
										<blockquote class="single-project-details__testimonial">
											<?= $fields['testimonial'] ?>
										</blockquote>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>

				<section>
					<?php
					/* TODO: Add query for related projects based on client preference */
					$args = array(
						'post_type' => 'project',
						'posts_per_page' => 3,
					);
					$more_projects = get_posts( $args );
					?>
					<?php if ( !empty( $more_projects ) ) : ?>
						<div class="container top-pad-7 bot-pad-3">
							<h2 class="float-left">More Projects</h2>
							<a class="link float-right" href="/projects/">View All Projects</a>
						</div>
						<?php foreach ( $more_projects as $project ) : ?>
							<div class="col col-1-3 single-project-more-block">
								<a href="<?= get_permalink( $project->ID ) ?>"><?= get_the_post_thumbnail( $project->ID ) ?></a>
								<a href="<?= get_permalink( $project->ID ) ?>" class="title"><?= $project->post_title ?></a>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</section>

			<?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php
get_footer();
