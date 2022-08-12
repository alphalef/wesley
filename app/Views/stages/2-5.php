<style>
.slider_area {
    background-image: url(<?=base_url('img/game/hopscotch.png')?>);
    background-size: cover;
    background-position: center;
}

.btn {
    font-size: 30px;
}

.quiz {
    background-color: rgba(0,0,0,0.4);
    border-radius: 5%;
    max-height: 800px;
}

.quiz img {
    max-height: 800px;
    max-width: 800px;
    width: 100%;
    padding: 50px;
}

.subtitleframe {
    margin-bottom: 40px;
    padding: 20px;
    border: 5px solid #fff;
    border-radius: 20px;
    background-color: rgba(255,255,255);
    font-size: 35px;
    color: #fff;
    /* text-shadow: 2px 2px 2px gray; */
    margin: 10px;
    text-align: center;
}

.subtitleframe img {
    margin: 0px 10px 10px 0px;
    max-width: 45px;
}

.animation {
    animation: fadeIn; 
    animation-duration: 2s;
}

.hidden {
    display: none;
}

.pointer {
    cursor: pointer;
    color: #D5745D;
}

@media (max-width: 767px) {
    .subtitleframe {
        font-size: 20px;
        margin-bottom: 20px;
    }
    img {
        width: 60px;
    }
    
}

@media (min-width: 767px) {
    .subtitleframe {
        font-size: 30px;
    }
    img {
        width: 100px;
    }
}

</style>

<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider" style="height: 120vh;">
            <div class="container">             
                <div class="row d-flex align-items-center justify-content-center" style="height: 110vh">
                
                    <div class="quiz" style="z-index:3; text-align:center">
                        <img src="<?=base_url('/img/game/quiz/stage2_quiz2.png')?>">
                    </div>
                    <div class="quiz hint1 hidden" style="z-index:3; text-align:center">
                        <img src="<?=base_url('/img/game/quiz/stage2_quiz2_hint1.png')?>">
                    </div>
                    <div class="quiz hint2 hidden" style="z-index:3; text-align:center">
                        <img src="<?=base_url('/img/game/quiz/stage2_quiz2_hint2.png')?>">
                    </div>
                    <div class="quiz hint3 hidden" style="z-index:3; text-align:center">
                        <img src="<?=base_url('/img/game/quiz/stage2_quiz2_hint3.png')?>">
                    </div>

                    <div class="subtitleframe" style="z-index:99">
                        <img src="<?=base_url('/img/game/sprites/code/1.png')?>" onClick="showhint(1)">
                        <img src="<?=base_url('/img/game/sprites/code/2.png')?>" onClick="showhint(2)">
                        <img src="<?=base_url('/img/game/sprites/code/3-1.png')?>" onClick="showhint(3)">
                        <img src="<?=base_url('/img/game/sprites/code/3-1.png')?>">
                        <img src="<?=base_url('/img/game/sprites/code/4.png')?>">
                        <img src="<?=base_url('/img/game/sprites/code/5-1.png')?>">
                        <img src="<?=base_url('/img/game/sprites/code/6.png')?>">
                        <img src="<?=base_url('/img/game/sprites/code/2.png')?>">
                        <img src="<?=base_url('/img/game/sprites/code/7-1.png')?>">
                        <img src="<?=base_url('/img/game/sprites/code/4-1.png')?>">
                        <img src="<?=base_url('/img/game/sprites/code/5-1.png')?>">
                        <img src="<?=base_url('/img/game/sprites/code/5-1.png')?>">
                        <img src="<?=base_url('/img/game/sprites/code/6-1.png')?>">
                        <img src="<?=base_url('/img/game/sprites/code/2-1.png')?>">
                        <img src="<?=base_url('/img/game/sprites/code/7.png')?>">
                        <br><br>
                        <p style="font-size: 20px;">힌트: 앞 세글자를 클릭해 보세요. <br> (<a href="/stages/index/2-5-1">정답입력</a>)</p>
                        <br><br>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>

function showhint(num) {
    if(num == 1) {
        document.querySelector('.quiz').classList.add('hidden');
        document.querySelector('.hint2').classList.add('hidden');
        document.querySelector('.hint3').classList.add('hidden');
        document.querySelector('.hint1').classList.remove('hidden');
        document.querySelector('.hint1').classList.add('animation');
    }
    if(num == 2) {
        document.querySelector('.quiz').classList.add('hidden');
        document.querySelector('.hint1').classList.add('hidden');
        document.querySelector('.hint3').classList.add('hidden');
        document.querySelector('.hint2').classList.remove('hidden');
        document.querySelector('.hint2').classList.add('animation');
    }
    if(num == 3) {
        document.querySelector('.quiz').classList.add('hidden');
        document.querySelector('.hint1').classList.add('hidden');
        document.querySelector('.hint2').classList.add('hidden');
        document.querySelector('.hint3').classList.remove('hidden');
        document.querySelector('.hint3').classList.add('animation');
    }
}

</script>