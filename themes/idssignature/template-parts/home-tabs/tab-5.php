<!-- template-parts/home-tabs/tab-5.php -->
<div id="tab5" class="slide">
    <div class="container">
      <div class="left_section">
        <div class="left_section_wrapper">
          <h2>Explore Our Imagination</h2>
          <div class="left_section_content">
            <?php
            $terms = get_terms( array(
              'taxonomy' => 'type',
              'hide_empty' => false,
            ) );
            ?>
            <div class="select_wrapper">
              <select class="" name="tab5_select">

                <?php foreach ($terms as $term): ?>
                    <option value="<?= $term->term_id ?>"><?= $term->name ?></option>
                <?php endforeach; ?>

              </select>
            </div>

            <p>
              Don’t settle for ‘just like all the rest’. Be distinct. Distinguish your space. Weave an integrated theme throughout.
            </p>
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
            <div class="projects_list">
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
