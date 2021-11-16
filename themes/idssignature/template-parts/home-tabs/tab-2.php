<!-- template-parts/home-tabs/tab-2.php -->
<?php
$tab_fields = get_field('tab_2');
?>
<div id="tab2" class="slide fp-noscroll">
	<div class="container">
		<div class="left_section">
			<h2 class="anim_it" data-animation="animate__fadeInUp" data-delay="0"><?= $tab_fields['title'] ?></h2>
			<p class="anim_it" data-animation="animate__fadeInUp" data-delay="0.3">
				<?= $tab_fields['description'] ?>
			</p>
		</div>
		<div class="right_section">
			<div class="tab2_img anim_it_img">
				<div class="tab2_img_first">
					<img class="tab2_imgFirst" src="<?= $tab_fields['image'] ?>" alt="">
				</div>
				<div class="tab2_img_block"></div>
				<div class="tab2_img_second">
					<img class="tab2_imgSecond" src="<?= $tab_fields['image_second'] ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
