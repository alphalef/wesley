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
                            <div class="col-xl-8">
                                <div class="slider_text text-center justify-content-center">
                                    <p>2022 동대문교회 청년부 여름 프로그램</p>
                                    <h3>웨슬리 목사님의 일기장</h3>
                                    <a class="boxed-btn3" href="/stages">시작하기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>