<style>

body {
    background-image: url('https://worldofescapes-com.s3.amazonaws.com/uploads/quests/11451/medium/escape-the-room-la-western-bank-heist.jpg');
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
                        <h1 style="padding-bottom: 10px;">Chapter 2. 외부</h1>
                            <h3 style="padding-bottom: 20px; font-family:gw; text-align:justify;">
                                웨슬리 목사님 역시 개인적인 실패를 경험하기도 했구나. 회심이라.. 그런데 여기서 어떻게 나가야 하지? 밖으로 나가는 문에 자물쇠가 달려 있다. 이 자물쇠를 열어야 밖으로 나갈 수 있을 것 같은데... 무엇으로 이 묶여 있는 자물쇠를 열 수 있을까?
                            </h3>
                            <input type="text" id="answer" class="form-control" style="max-width:300px; margin:auto;">
                            <input type="button" name="submit" class="btn btn-secondary" style="max-width: 300px; font-size:16px; margin-top:10px;" onClick="answer()" id="button1" value="정답입력">
                        </div>

                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-secondary next" id="next" type="button" onClick="location.href='/twitter/index/2-2'">믿음의 확신</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 문0, 문1, 문2를 적음. 문0 뒤에 성경 구절 => 00 소망 사랑 -->

<script>

    function answer() {
        let answer = document.getElementById('answer').value.trim();

        if(answer.trim() == "F41T6") {
            window.alert('정답입니다!');
            document.getElementById('next').style.display = 'block';
        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

</script>