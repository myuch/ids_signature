<!-- template-parts/home-tabs/tab-3.php -->
<?php
$tab_fields = get_field('tab_3');
?>
<div id="tab3" class="slide fp-noscroll">
  <div class="slider_bg">
    <img class="anim_it_img" src="/wp-content/themes/idssignature/assets/images/white_line2.svg" alt="">
  </div>
    <div class="container">
      <div class="text_wrap">
        <h2 class="anim_it" data-animation="animate__fadeInLeft" data-delay="0"><?= $tab_fields['title'] ?></h2>
        <p class="anim_it" data-animation="animate__fadeInUp" data-delay="0.3"><?= $tab_fields['description'] ?></p>
      </div>
      <div class="slick_arrows">
        <a class="slick_arrow_prev slick_arr" href="#">
          <img class="anim_it" data-animation="animate__fadeInUp" data-delay="0.6" src="/wp-content/themes/idssignature/assets/images/footArrow_Left.svg" alt="">
        </a>
        <a class="slick_arrow_next slick_arr" href="#">
          <img class="anim_it" data-animation="animate__fadeInUp" data-delay="0.6" src="/wp-content/themes/idssignature/assets/images/footArrow_Right.svg" alt="">
        </a>
      </div>
      <div class="move_items">
        <?php
        $i = 1;
        foreach ($tab_fields['items'] as $item): ?>
        <div class="move_item anim_it" data-animation="animate__fadeInUp" data-delay="0.6">
          <div class="move_item_title">
            <div class="number">
              1
            </div>
            <div class="title">
              <?= $item['title'] ?>
            </div>
          </div>
          <div class="move_item_content">
            <?= $item['description'] ?>
          </div>
        </div>
          <?php
          $i++;
        endforeach; ?>
      </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
