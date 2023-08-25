  <!--サイドメニュー-->
  <aside class="l-sidebar__area">
      <div class="l-sidebar__background"></div><!--background-color-->


      <?php
        if ( is_active_sidebar( 'category_widget' ) ) :
            dynamic_sidebar( 'category_widget' );
        else:
    ?>
    <div class="widget">
      <div class="l-sidebar__nav">
        <h2 class="l-sidebar__menu">Menu</h2>

        <!--sidebar　✖️　-->
        <span class="l-sidebar__close "></span>
        <div class="l-sidebar__top-title">
          <div class="l-sidebar__title">
            <a href="#">バーガー</a>
          </div>

          <ul>
            <li class="l-sidebar__item"><a href="#">ハンバーガー</a></li>
            <li class="l-sidebar__item"><a href="#">チーズバーガー</a></li>
            <li class="l-sidebar__item"><a href="#">テリヤキバーガー</a></li>
            <li class="l-sidebar__item"><a href="#">アボガドバーガー</a></li>
            <li class="l-sidebar__item"><a href="#">フィッシュバーガー</a></li>
            <li class="l-sidebar__item"><a href="#">ベーコンバーガー</a></li>
            <li class="l-sidebar__item"><a href="#">チキンバーガー</a></li>
          </ul>
        </div><!--l-sidebar__top-title-->

        <div class="l-sidebar__title">
          <a href="">サイド</a>
        </div>

        <ul>
          <li class="l-sidebar__item"><a href="#">ポテト</a></li>
          <li class="l-sidebar__item"><a href="#">サラダ</a></li>
          <li class="l-sidebar__item"><a href="#">ナゲット</a></li>
          <li class="l-sidebar__item"><a href="#">コーン</a></li>
        </ul>

        <div class="l-sidebar__title">
          <a href="">ドリンク</a>
        </div>

        <ul>
          <li class="l-sidebar__item"><a href="#">コーラ</a></li>
          <li class="l-sidebar__item"><a href="#">ファンタ</a></li>
          <li class="l-sidebar__item"><a href="#">オレンジ</a></li>
          <li class="l-sidebar__item"><a href="#">アップル</a></li>
          <li class="l-sidebar__item"><a href="#">紅茶(Ice/Hot)</a></li>
          <li class="l-sidebar__item"><a href="#">コーヒー(Ice/Hot)</a></li>
        </ul>

      </div><!--l-side__nav-->

      <?php endif; ?>
    </aside><!--l-sidebar__area-->
    <!---サイドメニュー-->

  </article><!--wrapper-->

  </div>
