<style>

.slider_area {
    background-image: url(<?=base_url('img/menu.png')?>);
    background-size: cover;
    background-position: center;
}

.btn {
    font-size: 30px;
}

@media (max-width: 767px) {
    .btn {
        font-size: 20px;   
    }

    h3 {
        font-size: 20px;
    }
}

</style>


<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center" style="height: 100vh;">
            <div style="position: absolute; width: 100%;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8" style="text-align:center">
                            <h1 style="padding-bottom: 10px;">4과 메뉴</h1>
                            <h3 style="padding-bottom: 20px;">처음부터 연속해서 진행하거나 중간에서 다시 시작할 수 있습니다</h3>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-primary" type="button" onClick="location.href='/stages/index/4-1'">공원</button>
                                <button class="btn btn-primary" type="button" onClick="location.href='/stages/index/4-3'">퍼즐</button>
                                <!-- <button class="btn btn-primary" type="button" onClick="location.href='/stages/index/4-4'">벙커와 헐버트</button> -->
                                <button class="btn btn-primary" type="button" onClick="location.href='/donghu/index/4'">나는 동후다</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>