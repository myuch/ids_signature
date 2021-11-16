<!-- template-parts/home-tabs/tab-5.php -->
<?php
$tab_fields = get_field('tab_5');
?>
<div id="tab5" class="slide ">
  <div class="empty_height" style="height: 4600px !important;">
  </div>
  <div class="container">
    <div class="left_section">
      <div class="left_section_wrapper">
        <h2 class="noanim_it" data-animation="animate__fadeInUp" data-delay="0"><?= $tab_fields['title'] ?></h2>
        <div class="left_section_content">
          <?php
          $terms = get_terms( array(
            'taxonomy' => 'type',
            'hide_empty' => false,
          ) );
          ?>
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
          <div class="projects_list noanim_it" data-animation="animate__fadeInUp" data-delay="0.9" >
            <?php
            $i = 0;
            $style = '';
            foreach ($posts_array as $post_arr_item):
              if ($i >= 1 && i <= count($posts_array )) {
                ?>
                <div class="cats_limiter">
                </div>
                <?php
              }
              ?>
              <div class="project_term_item" data-term="<?= $terms[$i]->term_id ?>" style="<?= $style ?>">
                <div class="project_item_info">
                  <div class="category_title">
                    <?= $terms[$i]->name ?>
                  </div>
                  <div class="category_description">
                    <?= $terms[$i]->description ?>
                  </div>
                </div>
                <div class="project_items_wrapper">
                  <?php foreach ($post_arr_item as $post_it):
                    $images = get_field('images', $post_it->ID);
                    ?>
                    <div class="project_item" data-images="<?= count($images) ?>"  data-term-name="<?= $terms[$i]->name ?>" data-title="<?= $post_it->post_title ?>" data-description="<?= get_field('description', $post_it->ID) ?>">
                      <div class="figure_wrapper">
                        <figure style="--fxy: 1.414"><img class="main_img" src="<?= get_field('image', $post_it->ID)['sizes']['medium_large'] ?>"></figure>
                      </div>
                      <div class="img_subwrapper">

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
