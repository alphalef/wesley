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

#next {
    display: none;
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
                <source type='video/mp4' src='<?=base_url('videos/18c_british.mp4')?>' />
            </video>
            <div style="position: absolute; width: 100%;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8" style="text-align:center; background-color:rgba(255,255,255,0.8); padding: 10px; border-radius:30px; margin-bottom:20px;">
                            <h1 style="padding-bottom: 10px;">#1 미국선교</h1>
                            <h3 style="padding-bottom: 20px; font-family:gw; text-align:justify;">
                                18세기의 영국은 산업혁명의 초기 단계로 경제적으로, 사회적으로 중요한 변화를 겪었습니다. 길거리에는 술취함, 도박, 도적질, 자살등이 마치 전염병처럼 퍼지는 상황이었습니다. 인구의 약 10%정도가 런던에 살았는데 대다수가 극심한 가난에 시달렸고 가난한 사람들이 사는 집에는 질병이 많았습니다. 불안정한 생활에 절망감과 좌절감에 빠진 사람들은 일종의 해소책으로 술, 폭력, 매춘, 도박에 빠져들었기 때문입니다. 웨슬리는 이러한 상황 가운데에서 목회자가 되었습니다. 그리고 그는 1735년 가을 동생 찰스 웨슬리와 함께 영국의 새식민지였던 미국 000주에 있던 원주민들을 향해 떠나게 됩니다. 웨슬리 형제가 향했던 선교지는 어디입니까? (힌트: 8801094503505)
                            </h3>
                            <input type="text" id="answer" class="form-control" style="max-width:300px; margin:auto;">
                            <input type="button" name="submit" class="btn btn-secondary" style="max-width: 300px; font-size:16px; margin-top:10px;" onClick="answer()" id="button1" value="정답입력">
                        </div>

                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-secondary next" id="next" type="button" onClick="location.href='/twitter/index/1-1'">웨슬리 형제의 선교여행</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>

    function answer() {
        let answer = document.getElementById('answer').value.trim();

        if(answer.trim() == "조지아") {
            window.alert('정답입니다!');
            document.getElementById('next').style.display = 'block';
        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

</script>