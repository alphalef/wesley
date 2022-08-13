<style>
video {
    object-fit: cover;
    object-position: center center;
    width: 100%;
    height: 100%;
}

p {
    font-size: 15px; 
}

.btn {
    font-size: 30px;
}

@media (max-width: 767px) {
    .btn {
        font-size: 20px;
    }
    
}

</style>

    <div class="carousel-item active">
        <div class="slider_area">
            <div class="single_slider  d-flex align-items-center" style="height: 100vh;">
                <video autoplay muted loop playsinline webkit-playsinline id="myVideo">
                    <source type='video/mp4' src='<?=base_url('videos/main.mp4')?>' />
                </video>
                <div style="position: absolute; width: 100%;">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-8">
                                <div class="slider_text text-center justify-content-center">
                                    <p>2022 동대문교회 청년부 여름 프로그램</a></p>
                                    <h3>웨슬리 목사님의 일기장</h3>
                                </div>
                                <div class="d-grid gap-2 col-lg-8 mx-auto">
                                    <button class="btn btn-secondary" type="button" onClick="location.href='/stages/index/mbti'">#0 서로를 알아가기</button>
                                    <button class="btn btn-secondary" type="button" onClick="location.href='/stages/index/quiz-1-1'">#1 미국 선교, 그리고 모라비안</button>
                                    <button class="btn btn-secondary" type="button" onClick="location.href='#">#2 회심</button>
                                    <button class="btn btn-secondary" type="button" onClick="location.href='#">#3 세계는 나의 교구다</button>
                                    <!-- <button class="btn btn-info" type="button" onClick="location.href='/stages/index/menu1'">#0 서로를 알아가기</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
