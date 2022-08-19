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
                            <h1 style="padding-bottom: 10px;">Chapter 1. 방</h1>
                            <h3 style="padding-bottom: 20px; font-family:gw; text-align:justify;">
                                이제 하나만 더 찾으면 이 방을 빠져 나갈 수 있을 것 같다. 당시 웨슬리 목사님은 왜 두려워했을까? 무엇에 대한 확신이 없었던 것일까? 방문에 붙어 있는 이 수학 공식을 풀면될 것 같은데... 어째 공식이 이상한데?
                            </h3>
                            <!-- <p>
                                (<a href="/img/quiz/quiz-1-4.png" target=_blank>힌트보기</a>)
                            </p> -->
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