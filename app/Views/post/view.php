<?php

preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $content, $matches);
if(count($matches[1]) > 0) {
    $matches[1][0] = str_replace('/public', '', $matches[1][0]);
    $bannerimg = "'".base_url($matches[1][0])."'";
}
else {
    $bannerimg = "";
}

?>


<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center sub" style="background: #4F0A11; padding-bottom:0px;">
    <div style="background-image: url(<?=$bannerimg?>); background-size: cover; background-position: center; width:100%; height:100%;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1 style="color: #fff; padding-top: 30px;">Cover Story</h1>
            <p style="color: #fff;">다중지성의 광장은 우리 사회에 존속하는 예속과 편견, 고정관념을 찾아 고발하고 고민하는 것을 지향합니다. “왜” 라는 질문이 사상된 사회는 그만큼 경직됩니다. 우리는 항시 “왜”라는 질문을 던지며 우리의 삶과 사회 전반을 성찰해 볼 것입니다.</p>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section>
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <h1 style="text-align:center">
                    <?=stripslashes($title)?>
                </h1>

                <p style="text-align:center; padding-top:20px;">
                    <i class="fa fa-calendar"></i> 
                    <?= date("Y",$date) ?>년 <?= date("m",$date) ?>월 <?= date("d",$date) ?>일 
                </p>

                <div class="ck-content" style="min-height: 400px;">
                    <?=$content?>
                </div>

            </div>
        </div>
    </section>
  </main>


<div style="margin-bottom: 30px;"></div>