<?php dynamic_sidebar('sidebar-primary'); ?>
<div class="sidebar-recommended">
  <h4 class="sidebar-recommended__title">
    The Best Shit:
  </h4>
  <ul class="sidebar-recommended__list-items">
    <li class="sidebar-recommended__list-item">
      <a href="#">
        <span class="sidebar-recommended__number">1</span>
        <img src="http://filldunphy.com/80/80"></img>
        <span class="sidebate-recommended__headline">
          Political economy at risk from restructure.
        </span>
      </a>
    </li>
    <li class="sidebar-recommended__list-item">
      <a href="#">
        <span class="sidebar-recommended__number">2</span>
        <img src="http://filldunphy.com/80/80"></img>
        <span class="sidebate-recommended__headline">
          USyd's hotline bling.
        </span>
      </a>
    </li>
    <li class="sidebar-recommended__list-item">
      <a href="#">
        <span class="sidebar-recommended__number">3</span>
        <img src="http://filldunphy.com/80/80"></img>
        <span class="sidebate-recommended__headline">
          Where are the baby Ibis'?
        </span>
      </a>
    </li>
    <li class="sidebar-recommended__list-item">
      <a href="#">
        <span class="sidebar-recommended__number">4</span>
        <img src="http://filldunphy.com/80/80"></img>
        <span class="sidebate-recommended__headline">
          World reaches peak meme.
        </span>
      </a>
    </li>
    <li class="sidebar-recommended__list-item">
      <a href="#">
        <span class="sidebar-recommended__number">5</span>
        <img src="http://filldunphy.com/80/80"></img>
        <span class="sidebate-recommended__headline">
          Twitter is weird.
        </span>
      </a>
    </li>
  </ul>
</div>

<div>
  <?php
    if ( get_post_meta( get_the_id(), 'cc_license', true ) === "1" ) {
      get_template_part('templates/commons-license');
    } ;
  ?>
</div>
