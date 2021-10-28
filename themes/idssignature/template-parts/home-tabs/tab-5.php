<!-- template-parts/home-tabs/tab-5.php -->
<div id="tab5" class="slide">
    <div class="container">
      <div class="left_section">
        <div class="left_section_wrapper">
          <h2 class="anim_it" data-animation="animate__fadeInUp" data-delay="0">Explore Our Imagination</h2>
          <div class="left_section_content">
            <?php
            $terms = get_terms( array(
              'taxonomy' => 'type',
              'hide_empty' => false,
            ) );
            ?>
            <div class="select_wrapper anim_it" data-animation="animate__fadeInUp" data-delay="0.3">
              <select class="" name="tab5_select">

                <?php foreach ($terms as $term): ?>
                    <option value="<?= $term->term_id ?>"><?= $term->name ?></option>
                <?php endforeach; ?>

              </select>
            </div>
            <div class="description_wrapper anim_it" data-animation="animate__fadeInUp" data-delay="0.6">
              <p descr-data-id="4" class="noanim_it">
                Don’t settle for ‘just like the all rest’. Be distinct. Be distinguishable. Weave an integrated theme throughout.
              </p>
              <p class="active" descr-data-id="2">
                Add an extra element of character and personality to your space. Custom designed and one-of-a-kind.
              </p>
              <p descr-data-id="3" class="noanim_it">
                Bring unmatched form to your function. Transform awkward pillars and bulkheads into interesting design features.
              </p>
              <p descr-data-id="5" class="noanim_it">
                Take it to the street! Turn heads and attract attention… to get visitors, clients, and customers through the front door.
              </p>
            </div>

            <!--
            Thematic Space Design
            Don’t settle for ‘just like the all rest’. Be distinct. Be distinguishable. Weave an integrated theme throughout.

            Sculptures, Characters, & Icons
            Add an extra element of character and personality to your space. Custom designed and one-of-a-kind.

            Spatial & Structural Elements
            Bring unmatched form to your function. Transform awkward pillars and bulkheads into interesting design features.

            Signage & Outdoor Landmarks
            Take it to the street! Turn heads and attract attention… to get visitors, clients, and customers through the front door.
            -->
            <?php
            $posts_array = array();
            foreach ($terms as $term) {
              $posts_array[] = get_posts(
                  array(
                      'posts_per_page' => -1,
                      'post_type' => 'project',
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'type',
                              'field' => 'term_id',
                              'terms' => $term->term_id,
                          )
                      )
                  )
              );
            }
            ?>
            <!-- <pre>
              <?php //var_dump($posts_array); ?>
            </pre> -->
            <div class="projects_list anim_it" data-animation="animate__fadeInUp" data-delay="0.9" >
              <?php
              $i = 0;
              $style = '';
              foreach ($posts_array as $post_arr_item):
                if ($i >= 1) {
                  $style = 'display: none';
                }
                ?>
                <div class="project_term_item" data-term="<?= $terms[$i]->term_id ?>" style="<?= $style ?>">
                  <?php foreach ($post_arr_item as $post):
                    $images = get_field('images', $post->ID);
                    ?>
                    <div class="project_item" data-images="<?= count($images) ?>"  data-term-name="<?= $terms[$i]->name ?>" data-title="<?= $post->post_title ?>" data-description="<?= get_field('description', $post->ID) ?>">
                      <img src="<?= get_field('image', $post->ID)['sizes']['medium_large'] ?>" alt="">
                      <div class="img_subwrapper">

                      </div>
                      <div class="project_title">
                        <?= $post->post_title ?>
                      </div>
                      <div class="slider_imgs" style="display:none;">
                        <?php foreach ($images as $img): ?>
                          <div class="galleryModal_slider_item">
                              <img src="<?= $img['sizes']['large'] ?>">
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
                <?php
                $i++;
              endforeach; ?>
            </div>
          </div>

        </div>

      </div>
    </div>
</div>
