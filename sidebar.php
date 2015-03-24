<?php
/**
 * @package git-log_theme
 */
?>
    <aside class="sidebar">
      <div class="sidebar__contents">
        <form class="sidebar__search" method="get" action="<?php bloginfo('url'); ?>">
          <input type="text" name="s">
          <button><span class="glyphicon glyphicon-search"></span></button>
        </form>
      </div>
      <div class="sidebar__contents">
        <ul class="sidebar__linklist">
          <li><a href="<?php bloginfo('url') ?>">Home</a></li>
          <li><a href="http://givery.co.jp/" target="_brank">会社情報</a></li>
          <li><a href="https://www.wantedly.com/companies/givery_technology" target="_brank">GiTについて</a></li>
          <li><a href="https://www.wantedly.com/companies/givery_technology/projects" target="_brank">採用情報</a></li>
        </ul>
      </div>
    </aside>
