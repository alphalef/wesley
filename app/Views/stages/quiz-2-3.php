<style>

body {
    background-image: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/claude-monets-house-and-gardens-in-giverny-france-news-photo-1042013294-1562610151.jpg?crop=1.00xw:0.753xh;0,0.0671xh&resize=640:*');
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
                                믿음! 이것으로 드디어 밖으로 나올 수 있게 되었어. 그런데 이제 어디로 가야하지? 여기 일기장 조각이 내가 나온 문 앞에 부착되어 있다. 아마 내가 가야할 곳과 관련되어 있는 듯하다. 그런데 이 알 수 없는 글귀는 무엇이지? 
                                <!-- 랜덤 글자로 이루어진 난글자 문서. 여기에 네모 구멍이 뚤린 종이를 찾아 넣으면 그 위치를 찾을 수 있는 힌트를 얻을 수 있다. 키는 밥솥에 숨겨 놓을 것  -->
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