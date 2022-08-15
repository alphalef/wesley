<style>

body {
    background-image: url('https://2d0fce5c26.clvaw-cdnwnd.com/99abe6748f56d12c3252904ca60a4973/200001252-46ffa46ffc/John_Wesley_preaching_to_native_American_Indians._Engraving._Wellcome_V0006867-2.jpg?ph=2d0fce5c26');
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
                            <h1 style="padding-bottom: 10px;">#1 변화의 계기</h1>
                            <h3 style="padding-bottom: 20px; font-family:gw; text-align:justify;">
                                웨슬리 목사님은 조지아 사바나에서 2년여 동안 선교 사역을 감당했지만 많은 어려움에 부딪힙니다. 웨슬리 목사님은 선교지에서도 엄격한 금욕주의와 영국 교회 중심의 원칙을 지키려 했기 때문에 그 곳에서 일반 성도들의 호감을 얻지 못하였고, 불미스러운 일로 1737년 12월 2일 어려운 마음으로 귀국길에 오르게 되었고, 1738년 2월 1일 고국에 도착하게 됩니다. 웨슬리 목사님 스스로 생각하기에 근본적으로 자신에게 결여되어 있었던 것은 무엇이었나요?
                            </h3>
                            <input type="text" id="answer" class="form-control" style="max-width:300px; margin:auto;">
                            <input type="button" name="submit" class="btn btn-secondary" style="max-width: 300px; font-size:16px; margin-top:10px;" onClick="answer()" id="button1" value="정답입력">
                        </div>

                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-secondary next" id="next" type="button" onClick="location.href='/twitter/index/2-1'">웨슬리 목사님의 회심</button>
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

        if(answer.trim() == "회심") {
            window.alert('정답입니다!');
            document.getElementById('next').style.display = 'block';
        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

</script>