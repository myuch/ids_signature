<!-- template-parts/home-tabs/tab-4.php -->
<?php
$tab_fields = get_field('tab_4');
?>
<div id="tab4" class="slide fp-noscroll">
  <div class="container">
    <div class="left_section">
      <div class="left_section_wrapper">
        <h2 class="noanim_it" data-animation="animate__fadeInRightBig" data-delay="0"><?= $tab_fields['title'] ?></h2>
        <div class="left_section_content">
          <?= $tab_fields['description'] ?>
        </div>

      </div>

    </div>
    <div class="collapse_btn anim_it" data-animation="animate__fadeInUp" data-delay="0.6">
      <img src="/wp-content/themes/idssignature/assets/images/arrow_more.svg" alt="">
      <div class="title">
        Read More
      </div>
    </div>
    <div class="right_section anim_it" data-animation="animate__fadeIn" data-delay="0.6">
      <div class="right_section_bottom_line">
      </div>
      <div class="slider_tab_4">
        <?php foreach ($tab_fields['images'] as $image): ?>
          <div class="slide_item">
            <img src="<?= wp_get_attachment_image_url( $image, $size = 'full', $icon = false ) ?>" alt="">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
