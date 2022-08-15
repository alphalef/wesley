<style>

body {
    background-image: url('https://d3d00swyhr67nd.cloudfront.net/w1200h1200/collection/LLR/EPWOR/LLR_EPWOR_2009_283-001.jpg');
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
                            <h1 style="padding-bottom: 10px;">#3 세계는 나의 교구다</h1>
                            <h3 style="padding-bottom: 20px; font-family:gw; text-align:justify;">
                                요한 웨슬레는 사람들이 모일 수 있는 곳이면 어디든지 가서 그리스도 안에서 용서하시는 하나님의 은혜에 대한 복음적인 메시지를 선포하기 시작하였습니다. 그는 말이나 마차를 타고 다니면서 교회, 가정, 장터, 탄광 입구, 그 외 사람들이 모이는 장소에 복음을 메시지를 들고 나갔습니다. 50년동안 웨슬리 목사님이 말을 타고 다닌 거리는 얼마였습니까? 
                            </h3>
                            <input type="text" id="answer" class="form-control" style="max-width:300px; margin:auto;">
                            <input type="button" name="submit" class="btn btn-secondary" style="max-width: 300px; font-size:16px; margin-top:10px;" onClick="answer()" id="button1" value="정답입력">
                        </div>

                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-secondary next" id="next" type="button" onClick="location.href='/twitter/index/3-2'">세계는 나의 교구다!</button>
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

        if(answer.trim() == "250000") {
            window.alert('정답입니다!');
            document.getElementById('next').style.display = 'block';
        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

</script>