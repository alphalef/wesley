<style>
.slider_area {
    background-image: url(<?=base_url('img/game/oldstreet.png')?>);
    background-size: cover;
    background-position: center;
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

@media (max-width: 767px) {
    .subtitleframe {
        font-size: 20px;
        margin-bottom: 20px;
    }

    img.sprites {
        height: 104px;
    }
    
}

@media (min-width: 767px) {
    .subtitleframe {
        font-size: 30px;
    }

    img.sprites {
        height: 166px;
    }
}

</style>

<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider" style="height: 100vh;">
            <div class="container">             
                <div class="row d-flex align-items-end justify-content-center" style="height: 100vh">

                    <audio id="audio" controls="controls" style="display:none;">
                        <source id="audioSource" src=""></source>
                        오디오를 재생하려면 크롬 브라우저를 사용해 주세요.
                    </audio>

                    <div class="col-6 scranton" style="z-index:1; text-align:center">
                        <img class="sprites" src="<?=base_url('/img/game/sprites/ms.png')?>">
                        <img class="sprites" src="<?=base_url('/img/game/sprites/ws.png')?>">
                    </div>
                    <div class="col-6 codingcard" style="z-index:1; text-align:center">
                        <img src="<?=base_url('/img/game/codingcard.png')?>" style="width:100%;">
                    </div>
                    <div class="col-6 usb" style="z-index:1; text-align:center">
                        <img src="<?=base_url('/img/game/usb.png')?>">
                    </div>
                    <div class="subtitleframe" style="z-index:99">
                        <div class="subtitle1 hidden">
                            스크랜톤 선교사님 가족은 아프고 병든 이들과 함께 하셨던 예수님의 마음으로 정동을 떠나 이 분들의 도움을 필요로 하는 곳으로 가신거야. 
                            <span class="pointer" onClick="transit(2)">[다음]</span>
                        </div>
                        <div class="subtitle2 hidden">
                            그럼 도대체 어디로 가야할까? 
                            [<span class="pointer" onClick="transit(1)">이전</span> | <span class="pointer" onClick="transit(3)">다음</span>]
                        </div>
                        <div class="subtitle3 hidden">
                            바닥에 USB가 떨어져 있는 것이 보인다. 왠 USB지? 프로그램을 입력하면 길을 찾을 수도 있을 것 같다. 
                            [<span class="pointer" onClick="transit(2)">이전</span> | <span class="pointer" onClick="transit(4)">다음</span>]
                        </div>
                        <div class="subtitle4 hidden">
                            길을 잘 따라갈 수 있도록 코딩카드를 순서대로 잘 맞춰 보자. 
                            [<span class="pointer" onClick="transit(3)">이전</span> | <span class="pointer" onClick="location.href='/stages/index/3-5'">다음</span>]
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function transit(num) {

    let div = document.querySelector('.subtitle' + num);
    div.classList.remove('hidden');
    div.classList.add('animation');
    
    if(num-1 > 0) {
        let prev_div = document.querySelector('.subtitle' + (num-1));
        prev_div.classList.add('hidden');
    }
    if(num+1 < 5) {
        let next_div = document.querySelector('.subtitle' + (num+1));
        next_div.classList.add('hidden');
    }

    let audiodata = ['', '<?=base_url('audio/3-4-1.mp3')?>', '<?=base_url('audio/3-4-2.mp3')?>', '<?=base_url('audio/3-4-3.mp3')?>', '<?=base_url('audio/3-4-4.mp3')?>'];
    let audio = document.getElementById('audio');
    let audiosource = document.getElementById('audioSource');

    audiosource.src = audiodata[num];
    audio.load();
    audio.play();

    if(num == 1) {
        document.querySelector('.scranton').classList.remove('hidden');
        document.querySelector('.usb').classList.add('hidden');
        document.querySelector('.codingcard').classList.add('hidden');
    } else if(num == 3) {
        document.querySelector('.scranton').classList.add('hidden');
        document.querySelector('.usb').classList.remove('hidden');
        document.querySelector('.usb').classList.add('animation');
        document.querySelector('.codingcard').classList.add('hidden');
    } else if(num == 4) {
        document.querySelector('.scranton').classList.add('hidden');
        document.querySelector('.usb').classList.add('hidden');
        document.querySelector('.codingcard').classList.remove('hidden');
        document.querySelector('.codingcard').classList.add('animation');
    }
    

}

transit(1);

</script>