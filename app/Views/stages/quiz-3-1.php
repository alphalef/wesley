<style>

body {
    background-image: url('https://www.wesleysheritage.org.uk/os/wp-content/uploads/2020/04/LNE_WCMM_LDWMM_1993_1607-JWesley-preaching-from-Fathers-tomb.jpg');
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
                                강력한 회심을 경험했던 웨슬리 목사님은 경건 생활에 몰두하였고 한 교구를 맡아 안정적인 목회를 하기 보다는 교회마다 다니면서 순회설교를 하게 되었고, 그 때마다 하나님께서 복음의 메시지를 통해 사람들을 변화시키는 것을 보게 되었습니다. 그러던 중 휫필드 씨의 강력한 권고로 새로운 사역의 방식으로 말씀을 전하게 되는데 그것은 무엇입니까?
                            </h3>
                            <input type="text" id="answer" class="form-control" style="max-width:300px; margin:auto;">
                            <input type="button" name="submit" class="btn btn-secondary" style="max-width: 300px; font-size:16px; margin-top:10px;" onClick="answer()" id="button1" value="정답입력">
                        </div>

                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button class="btn btn-secondary next" id="next" type="button" onClick="location.href='/twitter/index/3-2'">사역의 변화</button>
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

        if(answer.trim() == "야외설교") {
            window.alert('정답입니다!');
            document.getElementById('next').style.display = 'block';
        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

</script>