<style>

body {
    background-image: url('http://kmcedu.net/data/editor/1802/b8a8a6ed990a1f2358de151713dc41ad_1519365049.9948.jpg');
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
            <div id="quiz-box" style="position: absolute; width: 100%;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8" style="text-align:center; background-color:rgba(255,255,255,0.8); padding: 10px; border-radius:30px; margin-bottom:20px;">
                            <h1 style="padding-bottom: 10px;">#2 변화의 계기</h1>
                            <h3 style="padding-bottom: 20px; font-family:gw; text-align:justify;">
                                1738년 5월 24일 저녁 요한 웨슬리는 내적 고민을 거듭하던 끝에 드디어 그가 바라던 구원의 확신을 체험하게 되었습니다. 런던의 올더스케이트 거리에 위치한 어느 작은 기도 모임의 참석은 요한 웨슬레의 장래와 그의 사역 방향을 바꾸어 놓게 되었습니다. 웨슬리 목사님은 그 모임 가운데에서 온전한 회심의 경험을 하게 됩니다. 웨슬리 목사님은 성경에 대한 루터의 주석을 들으며 회심의 경험을 하게 됩니다. 웨슬리 목사님을 회심케 한 루터의 주석서는 무엇입니까?
                            </h3>
                            <input type="text" id="answer" class="form-control" style="max-width:300px; margin:auto;">
                            <input type="button" name="submit" class="btn btn-secondary" style="max-width: 300px; font-size:16px; margin-top:10px;" onClick="answer()" id="button1" value="정답입력">
                        </div>

                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-secondary next" id="next" type="button" onClick="location.href='/twitter/index/2-3'">웨슬리 목사님의 회심</button>
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

        if(answer.trim() == "로마서") {
            window.alert('정답입니다!');
            document.getElementById('next').style.display = 'block';
        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

</script>