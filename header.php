<nav class="navbar navbar-expand-lg navbar-dark bg-primary" role="navigation" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Digital Footprint</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link <?php if($activePage=='checklist'){echo 'active';} ?>" href="checklist.php">Checklist</a></li>
        <li class="nav-item"><a class="nav-link <?php if($activePage=='tips'){echo 'active';} ?>" href="tips.php">Privacy Tips</a></li>
        <li class="nav-item"><a class="nav-link <?php if($activePage=='cleanup'){echo 'active';} ?>" href="cleanup.php">Cleanup Guide</a></li>
      </ul>
    </div>
  </div>
</nav>
