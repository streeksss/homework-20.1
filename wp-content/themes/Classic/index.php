<?php get_header(); ?>
    <main class="m-page">
        <div class="container clearfix">
            <div class="about-us">
                <h2 class="about-us-title">What We Are All About</h2>
                <p class="about-us-text">
                    It’s not always easy to filter out noise and purely focus on the content. Too many blogs and news sites are filled with colourful and distracting
                    advertisement left right and centre. This is where we do things differently! Rather than just focusing purely and generating revenue, we focus
                    on great user experience.<br/><br/>

                    You will notice that our news articles are content focused and free of any distractions. On top of that, we deliver content revolving design on a
                    daily basis. Offering you insightful tutorials, techniques, design inspirations, mobile app development, coding, unique advertisements, and
                    freebies.<br/><br/>

                    Our focus is and forever will be to bring high quality resources to lean from and to be inspired. Visit us daily for new design related articles!
                </p>
            </div>
            <div class="line"></div>


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="person-block">
                    <div class="person-photo">
                        <?php the_post_thumbnail('full', 'person-photo'); ?>
                    </div>
                    <h3 class="person-name"><?php the_title(); ?></h3>
                    <br/>
                    <span class="person-post">Founder & CEO</span>
                    <p class="person-info"><?php the_content(); ?></p>
                </article>

            <?php endwhile;
            else :
                echo '<p>No content found</p>';
            endif;
            ?>

                </div>
            </div>
            <div class="line"></div>
        </div>
    </main>
<?php get_footer(); ?>


