<!-- template-parts/home-tabs/tab-1.php -->
<?php
$tab_fields = get_field('tab_1');
?>
<div id="tab1" class="slide">
  <div class="tab1_lines_wrapper">
    <div class="tab1_lines">
      <svg style="" width="193" height="944" viewBox="0 0 193 944" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.211182 944C1.02091 942.678 2.07345 940.937 3.34218 938.789C6.75547 933.008 11.7294 924.288 17.7471 912.876C29.7885 890.04 45.972 856.496 62.1892 814.221C94.6671 729.556 127 610.607 127 472.896C127 335.11 95.1326 216.159 63.1328 131.528C47.1536 89.2668 31.2084 55.741 19.3451 32.9208C13.4164 21.5163 8.51607 12.8027 5.15338 7.02715C3.47234 4.13987 2.17656 1.98853 1.32985 0.604042C1.19473 0.383106 1.07106 0.181717 0.959095 0H76.6112C77.0375 0.813313 77.4688 1.63935 77.9048 2.47802C90.7916 27.2669 107.846 63.1693 124.867 108.185C158.867 198.107 193 325.105 193 472.896C193 620.763 158.333 747.866 123.811 837.859C106.528 882.912 89.2115 918.848 76.1279 943.66C76.068 943.774 76.0083 943.887 75.9487 944H0.211182Z" fill="black"/>
      </svg>
    </div>
    <!-- <div class="tab1_lines second">
      <svg style="" width="193" height="944" viewBox="0 0 193 944" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.211182 944C1.02091 942.678 2.07345 940.937 3.34218 938.789C6.75547 933.008 11.7294 924.288 17.7471 912.876C29.7885 890.04 45.972 856.496 62.1892 814.221C94.6671 729.556 127 610.607 127 472.896C127 335.11 95.1326 216.159 63.1328 131.528C47.1536 89.2668 31.2084 55.741 19.3451 32.9208C13.4164 21.5163 8.51607 12.8027 5.15338 7.02715C3.47234 4.13987 2.17656 1.98853 1.32985 0.604042C1.19473 0.383106 1.07106 0.181717 0.959095 0H76.6112C77.0375 0.813313 77.4688 1.63935 77.9048 2.47802C90.7916 27.2669 107.846 63.1693 124.867 108.185C158.867 198.107 193 325.105 193 472.896C193 620.763 158.333 747.866 123.811 837.859C106.528 882.912 89.2115 918.848 76.1279 943.66C76.068 943.774 76.0083 943.887 75.9487 944H0.211182Z" fill="black"/>
      </svg>
    </div> -->
  </div>
  <div class="slide_bg">
    <img src="/wp-content/themes/idssignature/assets/images/slide1_bg.jpg" alt="">
  </div>
  <div class="container">
    <div class="top_wrapper">
      <h1 class="anim_it" data-animation="animate__fadeInUp" data-delay="0"><?= $tab_fields['title'] ?></h1>
      <a class="anim_it" data-animation="animate__fadeInUp" data-delay="0.3"><?= $tab_fields['subtitle'] ?></a>
    </div>
    <p class="anim_it" data-animation="animate__fadeInUp" data-delay="0.6"><?= $tab_fields['subtitle_second'] ?></p>
  </div>
</div>
