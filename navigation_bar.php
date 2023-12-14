<!-- Navigation Bar -->
<div class="header_left">
  <a href="/">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/dummy_img.svg" alt="">
  </a>
</div>
<div class="header_right">
  <ul class="header_links">
    <li>
      <p>
        <a href="<?php echo esc_url(home_url('/')); ?>" 5>
          <span>テストリンク</span>
        </a>
      </p>
    </li>
    <li>
      <p>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <span>テストリンク</span>
        </a>
      </p>
    </li>
    <li>
      <p>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <span>テストリンク</span>
        </a>
      </p>
    </li>
    <li>
      <p>
        <a href="<?php echo esc_url(home_url('/blog')); ?>">
          <span>BLOG</span>
        </a>
      </p>
    </li>
    <li>
      <p>
        <a href="<?php echo esc_url(home_url('/news')); ?>">
          <span>NEWS</span>
        </a>
      </p>
    </li>
    <!-- 別タブリンク -->
    <!-- <li>
          <p>
              <a href="" target="_blank" rel="noopener noreferrer">
                  <span>別タブ</span>
              </a>
          </p>
      </li> -->
  </ul>
  <div class="btn">
    <a href="<?php echo esc_url(home_url('/contact')); ?>">
      CONTACT
    </a>
  </div>
  <div class="ham_menu-wrap">
    <div class="ham_menu" data-state="inactive">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="window-fixed">
      <div class="window">
      </div>
    </div>
  </div>
</div>
