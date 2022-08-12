<style>
.slider_area {
    background-image: url(<?=base_url('img/game/port.png')?>);
    background-size: cover;
    background-position: center;
}

input { 
    z-index: 99;
    height: 50px;
    text-align: center; 
    max-width: 290px;
}

.form-control {
    max-width: 320px;
}

#result {
    color:#fff; 
    text-align:center; 
    background:rgba(255,255,255,0.5); 
    position:relative; 
    z-index:99;
}

.hidden {
    display: none;
}

.animation {
    animation: fadeIn; 
    animation-duration: 2s;
}

</style>

<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider" style="height: 100vh; background-color: rgba(0,0,0,0.6);">
            <div class="container" id="container">             
                <div class="row align-items-center justify-content-center" style="height: 60vh; z-index:1; margin-top:50px; text-align:center;">
                    <h1 style="text-align:center; color:white;">스크랜톤 선교사님이 한국에 도착하신 해는?</h1>
                    <form name = "year" style="position:relative; z-index:99;">
                        <div class="input-group justify-content-center">
                            <input type="text" id="a" name="a" class="form-control" style="max-width:50px;" onkeyup='siche_next(this,1,document.year.b)'>
                            <input type="text" id="b" name="b" class="form-control" style="max-width:50px;" onkeyup='siche_next(this,1,document.year.c)'>
                            <input type="text" id="c" name="c" class="form-control" style="max-width:50px;" onkeyup='siche_next(this,1,document.year.d)'>
                            <input type="text" id="d" name="d" class="form-control" style="max-width:50px;" onkeyup='siche_next(this,1,document.year.submit)'>
                        </div>
                        <br><br>
                        <input type="button" name="submit" class="btn btn-secondary" style="max-width: 300px;" onClick="answer()" id="button1" value="정답입력">
                    </form>
                    <div id="result"></div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script>

    function answer() {
        let answer = (document.getElementById('a').value + document.getElementById('b').value + document.getElementById('c').value + document.getElementById('d').value).trim();

        if(answer.trim() == "1885") {
            window.alert('정답입니다!');
            location.href = '/stages/index/1-6';
        } else {
            window.alert('다시 시도해 보세요!');
            document.getElementById('a').value = '';
            document.getElementById('b').value = '';
            document.getElementById('c').value = '';
            document.getElementById('d').value = '';
        }
    }

    function siche_next(siche01,siche02,siche03) {
        if (siche01.value.length==siche02) {
            siche03 .focus();
            return;
        }
    }

</script>