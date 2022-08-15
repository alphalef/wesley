<style>

body {
    background-image: url('https://www.gannett-cdn.com/presto/2021/10/08/NRPT/aa1763b5-91ad-467f-9a21-71a3aca92d4d-faith_blocks.jpg');
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
                                웨슬리 목사님은 선교여행에서 돌아온 이후 몇개월동안 영적으로 깊은 침체 상태에 빠져들었습니다. 이에 웨슬리 목사님은 설교 자체를 하지 않으려고까지 생각했습니다. 그러나 웨슬리 목사님의 독일인 친구 피터 뵐레는 그런 웨슬리 목사님을 독려하며 계속해서 설교할 것을 권면하였습니다. 이에 웨슬리 목사님은 어떤 주제로 설교를 할 수 있겠는가 하고 반문하였을 때, 피터 뵐레는 OO에 대하여 설교하라고 권면합니다. 이 주제는 무엇이었을까요?
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



<script>

    function answer() {
        let answer = document.getElementById('answer').value.trim();

        if(answer.trim() == "믿음") {
            window.alert('정답입니다!');
            document.getElementById('next').style.display = 'block';
        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

</script>