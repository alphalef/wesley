<style>

video {
    object-fit: cover;
    object-position: center center;
    width: 100%;
    height: 100%;
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
            <video autoplay muted loop playsinline webkit-playsinline id="myVideo">
                <source type='video/mp4' src='<?=base_url('videos/flyingback.webm')?>' />
            </video>
            <div style="position: absolute; width: 100%;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8" style="text-align:center">
                            <h1 style="padding-bottom: 10px;">서로를 알아가기</h1>
                            <h3 style="padding-bottom: 20px;">MBTI와 테이블톡을 통해 서로를 알아가요!</h3>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-primary" type="button" onClick="location.href='https://www.16personalities.com/ko/%EB%AC%B4%EB%A3%8C-%EC%84%B1%EA%B2%A9-%EC%9C%A0%ED%98%95-%EA%B2%80%EC%82%AC'">MBTI 검사하기</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>