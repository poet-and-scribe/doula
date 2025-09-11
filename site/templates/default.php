<?php snippet('global/head.php') ?>

  <body class="<?= $page->slug() ?> tmpl-<?= $page->template() ?> <?php if ($kirby->user()): ?>logged-in<?php endif ?>">
    <div hidden>
      <a href="#main-content">Skip to main content</a>
      <a href="#site-nav">Skip to navigation</a>
    </div>

    <header role="banner">
      <a href="/" aria-label="<?= $site->title()->esc() ?> | Home">
        <img src="logo.svg" alt="<?= $site->title()->esc() ?>" width="120" height="40">
      </a>
      <nav id="site-nav" role="Main navigation">
        <?php
        // main menu items
        $items = $pages->listed();

        // only show the menu if items are available
        if ($items->isNotEmpty()):

        ?>
        <nav>
          <ul>
            <?php foreach($items as $item): ?>
            <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
            <?php endforeach ?>
          </ul>
        </nav>
        <?php endif ?>
      </nav>
    </header>
    <main role="main">
      <h1><?= $page->title() ?></h1>
      <?= $page->text()->kirbytext() ?>
    </main>
    <footer>

    </footer>

  </body>
  <footer>
    <?= $site->copyright()->html() ?>
  </footer>
</html>
