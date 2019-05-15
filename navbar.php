<?php

  function header_start() {
    return "<h4 class='p1 1'>";
  }
  function header_ending() {
    return "</h4>";
  }

  function iterate($menu_arr, $flag) {
    foreach ($menu_arr as $menu) {
      if($menu['submenu'])
      {
        submenu($menu['submenu'],$flag, $menu['name']);
      }
      else {
        echo header_start().$menu['name'].header_ending();
      }
    }
    return;
  }

  function submenu($submenu_tree,$flag, $name='') {
    if($flag) {
      $nested = 'class="nested-accordion"';
    }
    $flag = true;

    // disable-session-states
    echo '<amp-accordion '.$nested.' expand-single-section animate>';
    echo "<section>";
    echo header_start();
    echo $name;

    echo '<span class="show-more fright"> + </span> <span class="show-less fright"> - </span>';
    echo header_ending();
    echo "<div class='accord'>";
    iterate($submenu_tree, $flag);
    echo "</div>";
    echo "</section>";
    echo "</amp-accordion>";
    return;
  }

  $menu = array(
    array(
      'name' => 'Home',
      'submenu' => array(
        array(
          'name' => 'MI 1 - Sub item 1',
        ),
        array(
          'name' => 'MI 1 - Sub item 2',
          'submenu' => array(
            array(
              'name' => 'MI 1 SI 2 - S-Sub 1',
            ),
            array(
              'name' => 'MI 1 SI 2 - S-Sub 2',
              'submenu' => array(
                array(
                  'name' => 'MI 1 - SI2 - SS 2 - SSSub 1',
                ),
                array(
                  'name' => 'MI 1 - SI2 - SS 2 - SSSub 2',
                ),
                array(
                  'name' => 'MI 1 - SI2 - SS 2 - SSSub 3',
                ),
                array(
                  'name' => 'MI 1 - SI2 - SS 2 - SSSub 4',
                ),
              )
            ),
            array(
              'name' => 'MI 1 SI 2 - S-Sub 3',
            )
          )
        ),
        array(
          'name' => 'MI 1 - Sub item 3',
        )
      )
    ),
    array(
      'name' => 'Menu Item 2',
      'submenu' => array(
        array(
          'name' => 'MI 2 - Sub item 1',
        ),
        array(
          'name' => 'MI 2 - Sub item 2',
          'submenu' => array(
            array(
              'name' => 'MI 2 SI 2 - S-Sub 1',
            ),
            array(
              'name' => 'MI 2 SI 2 - S-Sub 2',
            ),
            array(
              'name' => 'MI 2 SI 2 - S-Sub 3',
            )
          )
        ),
        array(
          'name' => 'MI 2 - Sub item 3',
        )
      )
    )
  );

  iterate($menu, false);
?>

<amp-sidebar id="sidebar-right"
  class=""
  layout="nodisplay"
  side="right">
  <button on="tap:sidebar-right.close"><i class="fa fa-close fs2"></i></button>
  <nav toolbar="(min-width: <?php echo $mbp; ?>px)"
    toolbar-target="target-element-right">
    <ul class="menu-items">
      <?php foreach ($menu_items as $item): ?>

        <li class="menu-item">
          <a class="menu-link" href="<?php echo $item['link'] ?>"><?php echo $item['name'] ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  </nav>
</amp-sidebar>
<div class="menubar-wrap wrapper">
  <div class="menubar dfx jcsb">
    <div class="logoc">
      <amp-img itemprop="logo" class="logo" src="<?php echo $logo_path; ?>" alt="logo" height="1" width="1" layout="responsive"></amp-img>
    </div>
    <button on="tap:sidebar-right.toggle" class="mobile-toggler"><i class="fa fa-bars fs2 cw"></i></button>
    <div id="target-element-right">
    </div>
  </div>
</div>
