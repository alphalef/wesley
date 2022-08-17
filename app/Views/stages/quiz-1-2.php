<style>

body {
    background-image: url('https://static-prod.adweek.com/wp-content/uploads/2020/10/virtual-escape-room-PAGE-2020-1240x620.jpg.webp');
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
                        <h1 style="padding-bottom: 10px;">Chapter 1. 의문의 방</h1>
                            <h3 style="padding-bottom: 20px; font-family:gw; text-align:justify;">
                                아주 오래된 일기장인 것 같다. 이 일기장 조각들을 모두 모으면 이 방에서 나갈 수 있을 것 같다. 무언가 바코드 같이 생긴 것이 보인다. 이것이 두번째 열쇠일까?
                            </h3>
                            <!-- <p>(<a href="/img/quiz/quiz-1-2.png" target=_blank>힌트보기</a>)</p> -->
                            <input type="text" id="answer" class="form-control" style="max-width:300px; margin:auto;">
                            <input type="button" name="submit" class="btn btn-secondary" style="max-width: 300px; font-size:16px; margin-top:10px;" onClick="answer()" id="button1" value="정답입력">
                        </div>

                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-secondary next" id="next" type="button" onClick="location.href='/twitter/index/1-2'">어려웠던 선교 여정</button>
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

        if(answer.trim() == "STORM") {
            window.alert('정답입니다!');
            document.getElementById('next').style.display = 'block';
        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

</script>