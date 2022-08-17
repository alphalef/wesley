<style>

    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');


    body {
        background-image: url('https://georgianera.files.wordpress.com/2015/04/pool-of-london-painting-by-john-wilson-carmichael.jpg');
        background-position: center center;
        background-attachment: fixed;
        background-repeat: no-repeat; 
        background-size: cover;     
    }

    .journal-title {
        text-align: center;
        font-size: 4rem;
        margin-top: 40px;
        font-family: 'Dancing Script', cursive;
        font-weight: 700;
    }


</style>

<div class="journal-title">
    Wesley's Journal
</div>

<div class="tweet-wrap">
    <div class="tweet-header">
        <img src="<?=base_url('img/profile.png')?>" alt="" class="avator">
        <div class="tweet-header-info">
            John Wesley <span>@J_Wesley</span><span>· 1738.1.24.</span>
            <p>
                나는 인디언들을 개종시키기 위해 식민지(America)에 갔다. 그러나 아! 누가 나를 회심케 할 것인가? 누가, 무엇이 나를 불신의 죄악된 마음에서 건져줄 수 있을까?…… 나는 위험이 가까이 오지 않는 선에서 내 자신을 믿고 말도 잘 할 수 있다. 그러나 죽음이 내 얼굴을 바라보자 내 영혼은 괴로움에 떨었다. 더 이상 “죽는 것도 유익함이라”(빌 2:21)고 말할 수 없다 …… 오, 누가 나를 죽음의 공포에서 해방시켜 줄 수 있을까? 나는 무엇을 해야 하나? 어디로 날아가야 하나? 생각하거나 망각함으로 이 두려움과 맞서 싸워야 할까? 
            </p>    
        </div>
    </div>
    
<div class="tweet-img-wrap">
    <img src="https://2d0fce5c26.clvaw-cdnwnd.com/99abe6748f56d12c3252904ca60a4973/200001252-46ffa46ffc/John_Wesley_preaching_to_native_American_Indians._Engraving._Wellcome_V0006867-2.jpg?ph=2d0fce5c26" alt="" class="tweet-img">
</div>

<div class="tweet-info-counts">
      
      <div class="comments">
        
        <svg class="feather feather-message-circle sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        <div class="comment-count"><?=mt_rand(1,50)?></div>
      </div>
      
      <div class="retweets">
        <svg class="feather feather-repeat sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path></svg>
        <div class="retweet-count"><?=mt_rand(300,500)?></div>
      </div>
      
      <div class="likes">
        <svg class="feather feather-heart sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
        <div class="likes-count">
            <?=mt_rand(1,5)?>.<?=mt_rand(1,5)?>k
        </div>
      </div>
      
      <div class="message">
        <svg class="feather feather-send sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
      </div>
    </div>
  </div>

    <div class="col-lg-12">
        <div class="d-grid gap-2 col-lg-12 mx-auto">
            <button class="btn btn-secondary" style="margin:10px auto;" type="button" onClick="location.href='/stages/index/explain-2-1'">다음으로</button>
        </div>
    </div>


</body>
</html>