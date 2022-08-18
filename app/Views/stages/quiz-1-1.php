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
            <div id="quiz-box" style="position: absolute; width: 100%;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8" style="text-align:center; background-color:rgba(255,255,255,0.8); padding: 10px; border-radius:30px; margin-bottom:20px;">
                            <h1 style="padding-bottom: 10px;">Chapter 1. 의문의 방</h1>
                            <h3 style="padding-bottom: 20px; font-family:gw; text-align:justify;">
                                얼마나 잠들었던 것일까? 잠에서 문득 깨어보니 낯선 방의 모습이 보인다. 문은 나갈 수 없게 잠겨 있고, 책상 위에는 오래된 일기장 한 페이지가 놓여 있다. 그런데 이 일기장 아래 쪽에 무언가 숫자가 적혀 있다. 이 숫자는 무엇을 의미하는 것일까? 
                            </h3>
                            <!-- <p>(힌트: 8801094503505)</p> -->
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