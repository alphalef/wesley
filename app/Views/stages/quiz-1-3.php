<style>

body {
    background-image: url('https://64.media.tumblr.com/ab41613e2fd8f6b6368cd91cfdfd2e3e/e5f0dc08350968b3-9a/s500x750/5cdf8dfa008bfa56876cb6030cea83af4990fc55.png');
    background-position: center center;
    background-attachment: fixed;
    background-repeat: no-repeat; 
    background-size: cover;     
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

    #quiz-box {
        /* margin-top:100px; */
        padding: 20px;
    }
}

</style>


<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center" style="height: 100vh; min-height:800px;">
            <div style="position: absolute; width: 100%;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8" style="text-align:center; background-color:rgba(255,255,255,0.8); padding: 10px; border-radius:30px; margin-bottom:20px;">
                            <h1 style="padding-bottom: 10px;">#1 미국선교</h1>
                            <h3 style="padding-bottom: 20px; font-family:gw; text-align:justify;">
                                선교지로 가는 여정에서 웨슬리 형제는 바다에서 폭풍우를 만나게 됩니다. 당시 배를 타고 바다를 건너 다른 대륙으로 여행하는 것은 목숨을 건 일이었습니다. 그런데 웨슬리 목사님은 배 위에서 매우 놀라운 일을 목격하게 됩니다. 배가 뒤집혀질 정도의 폭풍우 가운데에서도 의연하게 찬양과 예배를 하는 일단의 사람들을 보았기 때문입니다. 이들은 누구입니까? (<a href="/img/quiz/quiz-1-3.png" target=_blank>힌트보기</a>)
                            </h3>
                            <input type="text" id="answer" class="form-control" style="max-width:300px; margin:auto;">
                            <input type="button" name="submit" class="btn btn-secondary" style="max-width: 300px; font-size:16px; margin-top:10px;" onClick="answer()" id="button1" value="정답입력">
                        </div>

                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-secondary next" id="next" type="button" onClick="location.href='/twitter/index/1-3'">모라비안과의 만남</button>
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
        let answer = document.getElementById('answer').value.toUpperCase();

        if(answer.trim() == "모라비안교도") {
            window.alert('정답입니다!');
            document.getElementById('next').style.display = 'block';
        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

</script>