<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
  <nav class="nav-inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
      Property<span>Hub</span>
    </a>
    <div class="nav-links">
      <a href="/listings/">Buy</a>
      <a href="/rent/">Rent</a>
      <a href="/sell/">Sell</a>
      <a href="/agents/">Agents</a>
      <a href="/about/">About</a>
    </div>
    <div class="nav-actions">
      <div class="lang-switcher">
        <a href="#" class="active">EN</a><span>|</span>
        <a href="#">KA</a><span>|</span>
        <a href="#">RU</a>
      </div>
      <a href="/list-property/" class="btn btn-green" style="padding:10px 20px;font-size:.875rem;">+ List Property</a>
    </div>
    <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </nav>
</header>

<div class="mobile-menu" id="mobile-menu">
  <a href="/listings/">Buy</a>
  <a href="/rent/">Rent</a>
  <a href="/sell/">Sell</a>
  <a href="/agents/">Agents</a>
  <a href="/about/">About</a>
  <a href="/list-property/" class="btn btn-green" style="justify-content:center;margin-top:.5rem;">+ List Property</a>
  <div class="lang-switcher" style="justify-content:center;margin-top:.5rem;">
    <a href="#" class="active">EN</a><span>|</span>
    <a href="#">KA</a><span>|</span>
    <a href="#">RU</a>
  </div>
</div>
