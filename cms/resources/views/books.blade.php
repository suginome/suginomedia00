@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <section class="producer">
      <div class="inner">
        <h3 class="sub-heading">堀田農園<span>株式会社たのしい</span></h3>
        <dl class="producer-info">
         
          <div class="wrap">
            <dt>所在地</dt>
            <dd>北海道厚真町</dd>
          </div>
          <div class="wrap point">
            <dt>こだわりポイント</dt>
            <dd>私たちたのしいは、私たちが育て、私たちが収穫した、私たちの農作物をお届けしています。自然界のなか、さまざまな状況で成育する作物たちの声を聞き、困ったことはないか、つらい思いはしてないか、たのしく育っているか、いつも見守っています。<br>手が離れるそのときまで、作物に寄り添いながら皆さまのもとへと送り出したい。<br>自然の力を身につけたおいしさは、いつもの日常を豊かにしてくれるはず。そんなふうに食物の輝きを感じていただけたら幸せです。</dd>
          </div>
        </dl>
        <!--<p class="section-image"><img src="images/producer-image1.jpeg" alt="堀田農園（株式会社たのしいたけ）"></p>-->
        
        
        <p class="section-text">■産地直送動画をじっくりご覧ください。</p>
        <!--<div class="movie">-->
        <!--  <iframe width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="movie-item"></iframe>-->
        <!--</div>-->
        
        <iframe width="100%" src="https://www.youtube.com/embed/ul47TOLFc5Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        <div class="content">
          <!--<form action="#" method="post" class="movie-form">-->
          <form action="{{ url('books') }}" method="POST" class="form-horizontal">
            @csrf
              <div class="content-item">
                <p class="direction">■下記のキーワードから最低3つを用いてお書きください。</p>
                <p class="keywords">森、原木、文化的、天地返し、循環型</p>
                <input type="textarea" class="summary" name="user_sakubun" cols="50" rows="5" value="{{old('user_sakubun')}}">
              </div>
            <!--</form>-->
            <div class="hidden-content">
              <p class="section-text">ご希望があれば購入価格を上乗せすることもできます。</p>
              <!--<div class="item-syousai">-->
                <p class="section-image"><img src="images/producer-image2.jpeg" alt="しいたけ"></p>
                <!--<div>-->
                  <p class="product-title">肉厚プリプリ食感の生しいたけ【300g×3袋】</p>
                  <p class="product-price">最低小売価格2,200円（税込）〜</p>
              <!--  </div>-->
              <!--</div>-->
              <!--<form action="#" method="post" class="hidden-form">-->
                <ul class="form-item">
                  <li class="form-list">
                    <label for="name" class="direction">■購入希望金額を税込で入力してください</label>
                    <input type="number" name="user_price" min="2200" max="110000" placeholder="最低：2,200円" class="form-parts" value="{{old('user_price')}}">
                    
                    <p class="caution">生産者希望小売価格※※円を超える場合、差額は全額生産者へ</p>
                  </li>
                  <li class="form-list">
                    <div class="form-list__item">
                    
                      <label for="email">氏名</label>
                    </div>
                    <input type="textarea" name="user_name" id="user_name" class="form-parts" value="{{old('user_name')}}">
                    
                      <label for="email">メールアドレス</label>
                      <span class="required">必須</span>
                    </div>
                    <input type="email" name="user_email" id="email" class="form-parts" value="{{old('user_email')}}">
                    <p class="caution">追って購入URLを送付させていただきます。<br>正しいメールアドレスをご入力ください。</p>
                  </li>
                  <button type="submit"  class="form-btn">送信</button>
                </ul>
            </form>
          </div>
        </div>

      </div>
    </section>

  </main>
@endsection