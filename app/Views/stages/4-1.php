<style>
.slider_area {
    /* background-image: url(<?=base_url('img/game/park1.png')?>); */
    background-size: cover;
    background-position: center;
    
}

.slider_area::before {
    z-index: -2;
}

.btn {
    font-size: 30px;
}

.subtitleframe {
    margin-bottom: 40px;
    padding: 20px;
    border: 5px solid #fff;
    border-radius: 20px;
    background-color: rgba(0,0,0,0.4);
    font-size: 35px;
    color: #fff;
    text-shadow: 2px 2px 2px gray;
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

video {
	object-fit: cover;
	width: 100vw;
	height: 100vh;
	z-index: -1;
    position: fixed;
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
        <div class="single_slider" style="height: 100vh; display: flex; z-index:1;">
            
            <div class="container">             
                <div class="row d-flex align-items-end justify-content-center" style="height: 100vh">

                    <audio id="audio" controls="controls" style="display:none;">
                        <source id="audioSource" src=""></source>
                        오디오를 재생하려면 크롬 브라우저를 사용해 주세요.
                    </audio>

                    <div class="flight" style="z-index:2; text-align:center;">
                        <img src="<?=base_url('/img/game/sprites/flight.png')?>" style="width: 300px;">
                    </div>

                    <div class="sprites_faith_love" style="z-index:1; text-align:center">
                        <img src="<?=base_url('/img/game/sprites/faith.png')?>">
                        <img src="<?=base_url('/img/game/sprites/love.png')?>">
                    </div>
                    <div class="bible hidden" style="z-index:1; text-align:center;">
                        <img src="<?=base_url('/img/game/4-bible.png')?>" style="width: 100%; max-width: 600px; max-height: 800px; height: 80%;">
                    </div>
                    

                    <div class="subtitleframe">
                        <div class="subtitle1 hidden">
                            어! 다시 공원이네. 내가 잠시 꿈을 꾸었던 것일까?
                            <span class="pointer" onClick="transit(2)">[다음]</span>
                        </div>
                        <div class="subtitle2 hidden">
                            꿈이라고 하기에는 너무 생생했어. 어? 종이 비행기가 떨어져 있네? 꿈이 아니었나? 뭐라고 쓰여져 있는 것 같은데 ...
                            [<span class="pointer" onClick="transit(1)">이전</span> | <span class="pointer" onClick="transit(3)">다음</span>]
                        </div>
                        <div class="subtitle3 hidden" style="text-align:center;">
                            [<span class="pointer" onClick="transit(2)">이전</span> | <span class="pointer" onClick="transit(4)">다음</span>]
                        </div>
                        <div class="subtitle4 hidden" >
                            아! 하나님께서는 우리를 너무나도 사랑하셔서 스크랜톤 선교사님을 보내 주신 거야.
                            [<span class="pointer" onClick="transit(3)">이전</span> | <span class="pointer" onClick="transit(5)">다음</span>]
                        </div>
                        <div class="subtitle5 hidden" >
                            스크랜톤 선교사님은 그런 하나님의 마음을 알고 이 땅에 오셔서 누구보다도 한국 사람들을 돌봐 주시고 복음을 전해 주셨어.
                            [<span class="pointer" onClick="transit(4)">이전</span> | <span class="pointer" onClick="transit(6)">다음</span>]
                        </div>
                        <div class="subtitle6 hidden" >
                            내가 본 것은 단순히 꿈이 아니라 실제 이 땅과 동대문교회에 있었던 이야기였던 것이었구나!
                            [<span class="pointer" onClick="transit(5)">이전</span> | <span class="pointer" onClick="transit(7)">다음</span>]
                        </div>
                        <div class="subtitle7 hidden" >
                            그렇다면 이 편지를 보낸 미스터X는 바로! (여러분은 누구라고 생각하시나요? ^^ )
                            [<span class="pointer" onClick="transit(6)">이전</span> | <span class="pointer" onClick="transit(8)">다음</span>]
                        </div>
                        <div class="subtitle8 hidden" >
                            이제 스크랜톤 선교사님 가족의 뒤를 이어 동대문에서 빛과 소금의 역할을 감당하셨던 동대문교회 목사님들에 대한 이야기를 좀 더 알아가 보자. 내가 찾아가야 할 곳은 어디일까?
                            [<span class="pointer" onClick="transit(7)">이전</span> | <span class="pointer" onClick="location.href='/stages/index/4-3'">다음</span>]
                        </div>

                    </div>
                </div>
            </div>

            <video autoplay muted loop playsinline webkit-playsinline id="myVideo" class="hidden">
                <source src="<?=base_url("/img/game/docu.mp4")?>" type="video/mp4">
            </video>
            
        </div>
    </div>
</div>

<script>

function transit(num) {

    if(num < 4) {
        document.querySelector(".slider_area").style.backgroundImage = "url(<?=base_url('img/game')?>/park" + num + ".png)";
    } else {
        document.querySelector(".slider_area").style.backgroundImage = "";
    }

    let div = document.querySelector('.subtitle' + num);
    div.classList.remove('hidden');
    div.classList.add('animation');
    
    if(num-1 > 0) {
        let prev_div = document.querySelector('.subtitle' + (num-1));
        prev_div.classList.add('hidden');
    }
    if(num+1 < 8) {
        let next_div = document.querySelector('.subtitle' + (num+1));
        next_div.classList.add('hidden');
    }

    let audiodata = ['', '<?=base_url('audio/4-1-1.mp3')?>', '<?=base_url('audio/4-1-2.mp3')?>', '<?=base_url('audio/4-1-3.mp3')?>', '<?=base_url('audio/4-1-4.mp3')?>', '<?=base_url('audio/4-1-5.mp3')?>', '<?=base_url('audio/4-1-6.mp3')?>', '<?=base_url('audio/4-1-7.mp3')?>', '<?=base_url('audio/4-1-8.mp3')?>'];
    let audio = document.getElementById('audio');
    let audiosource = document.getElementById('audioSource');

    audiosource.src = audiodata[num];
    audio.load();
    audio.play();

    if(num == 1) {
        document.querySelector('.sprites_faith_love').classList.add('hidden');
    } else {
        document.querySelector('.sprites_faith_love').classList.remove('hidden');
    }

    if(num == 2) {
        document.querySelector('.flight').classList.remove('hidden');
        document.querySelector('.flight').classList.add('animation');
    } else {
        document.querySelector('.flight').classList.add('hidden');
    }

    if(num == 3) {
        document.querySelector('.sprites_faith_love').classList.add('hidden');
        document.querySelector('.bible').classList.remove('hidden');
        document.querySelector('.bible').classList.add('animation');
        document.querySelector('video').classList.add('hidden');
    } else {
        document.querySelector('.bible').classList.add('hidden');
        document.querySelector('.sprites_faith_love').classList.remove('animation');
    } 

    if(num > 3) {
        document.querySelector('.sprites_faith_love').classList.add('hidden');
        document.querySelector('.bible').classList.add('hidden');
        document.querySelector('video').classList.remove('hidden');
        document.querySelector('video').classList.add('animation');
    } else {
        
    } 

}

transit(1);

</script>