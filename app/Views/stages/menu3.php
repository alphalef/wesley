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
                            <h1 style="padding-bottom: 10px;">3과 메뉴</h1>
                            <h3 style="padding-bottom: 20px;">처음부터 연속해서 진행하거나 중간에서 다시 시작할 수 있습니다</h3>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-primary" type="button" onClick="location.href='/stages/index/3-1'">동대문</button>
                                <button class="btn btn-primary" type="button" onClick="location.href='/stages/index/3-2'">성경구절 퀴즈</button>
                                <button class="btn btn-primary" type="button" onClick="location.href='/stages/index/3-4'">과거의 어느 장소</button>
                                <button class="btn btn-primary" type="button" onClick="location.href='/stages/index/3-5'">선교사님 퀴즈</button>
                                <button class="btn btn-primary" type="button" onClick="location.href='/stages/index/3-7'">선교사님의 사역</button>
                                <button class="btn btn-primary" type="button" onClick="location.href='/donghu/index/3'">나는 동후다</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>