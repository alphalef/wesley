<style>

    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');


    body {
        background-image: url('https://www.churchofscotland.org.uk/__data/assets/image/0004/69115/Praying-image.png');
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
            John Wesley <span>@J_Wesley</span>
            <p>
              거듭남<br><br>
              "예수께서 대답하여 가라사대 진실로 진실로 네게 이르노니 사람이 거듭나지 아니하면 하나님 나라를 볼 수 없느니라" (요3:3)<br><br>
              엄마 뱃속에 있는 아기는 눈이 있어도 보지 못하고 귀가 있어도 듣지 못합니다. 그러나 이 세상에 태어나는 순간 아기는 빛을 보기 시작하고, 귀가 열려 듣게 되며, 또한 다른 모든 감각 기관들도 작동하기 시작합니다.<br>
              영적인 삶에서도 이 같은 일이 얼마나 자주 일어나고 있는지요! 하나님 안에서 거듭나지 않은, 즉 자연 상태에 있는 인간은 영적인 의미에서 눈이 있어도 보지 못하고 귀가 있어도 듣지 못합니다. 다른 모든 영적인 감각들도 폐쇄되어 있어서 마치 그것들이 없는 것과 다름이 없습니다.<br>
              그러나 하나님 안에서 거듭나는 순간, 완전한 변화가 일어납니다. 마음의 눈이 열리고 하나님의 영광의 빛을 보게 됩니다. 또한 귀가 열려 저 깊은 곳에서 울려오는 하나님의 말씀을 들을 수 있게 됩니다. <br><br>
              "안심하라, 네 죄 사함을 받았느니라"<br><br>

              오, 주님! 주님께서는 제가 원하고 바라는 모든 것을 넘치도록 풍요롭게 가지고 계십니다. 제가 그 모든 풍요로움을 누릴 수 있게 하소서. 은혜에 은혜를 더하셔서 저의 죄를 사해 주시고 저의 죄악을 소멸해 주옵소서. 그 은혜 가운데 의롭다 함을 얻고 심령이 성화되어 주님의 성도들의 기업을 물려받게 하옵소서. 아멘.
            </p>    
        </div>
    </div>
    
<div class="tweet-img-wrap">
    <img src="https://ichef.bbci.co.uk/images/ic/640x360/p08yqjk8.jpg" alt="" class="tweet-img">
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
            <button class="btn btn-secondary" style="margin:10px auto;" type="button" onClick="location.href='/twitter/index/3-3'">다음으로</button>
        </div>
    </div>


</body>
</html>