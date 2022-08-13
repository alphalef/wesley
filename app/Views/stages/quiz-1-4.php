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
}

</style>


<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center" style="height: 100vh;">
            <div style="position: absolute; width: 100%;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8" style="text-align:center; background-color:rgba(255,255,255,0.8); padding: 10px; border-radius:30px; margin-bottom:20px;">
                            <h1 style="padding-bottom: 10px;">#1 미국선교</h1>
                            <h3 style="padding-bottom: 20px; font-family:gw; text-align:justify;">
                                웨슬리 목사님은 탁월한 신학자이고 헌신적인 목회자였지만 선교의 결실은 보이지 않았고 마음에 무언가 공허함이 있었습니다. 이런 웨슬리 목사님의 공허함은 일기장에도 잘 나타나 있었습니다. 웨슬리 목사님이 깊은 확신을 갖지 못했던 것은 무엇입니까? (<a href="/img/quiz/quiz-1-4.png" target=_blank>힌트보기</a>)
                            </h3>
                            <input type="text" id="answer" class="form-control" style="max-width:300px; margin:auto;">
                            <input type="button" name="submit" class="btn btn-secondary" style="max-width: 300px; font-size:16px; margin-top:10px;" onClick="answer()" id="button1" value="정답입력">
                        </div>

                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-secondary next" id="next" type="button" onClick="location.href='/twitter/index/1-4'">구원의 확신</button>
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

        if(answer.trim() == "구원") {
            window.alert('정답입니다!');
            document.getElementById('next').style.display = 'block';
        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

</script>