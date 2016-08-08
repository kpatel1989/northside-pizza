<!-- Navigation -->
<?php if (!isset($activeTab)){$activeTab = -1; }?>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
      	<img src="/res/logo.png" alt="North Side Pizza">
      </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="<?php if ($activeTab == 0){ echo 'active';} ?>"><a href="/">Home</a></li>
        <li class="<?php if ($activeTab == 1){ echo 'active';} ?>"><a href="/menu.php">Menu</a></li>
        <li class="<?php if ($activeTab == 2){ echo 'active';} ?>"><a href="/offers.php">Offers</a></li>
        <li class="<?php if ($activeTab == 3){ echo 'active';} ?>"><a href="/order-online">Order online</a></li>
        <li class="<?php if ($activeTab == 4){ echo 'active';} ?>"><a href="/cart">Cart</a></li>
      </ul>
    </div>
  </div>
</nav>