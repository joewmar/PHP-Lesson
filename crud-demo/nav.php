<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link <?php echo ($_SESSION['CURR_PAGE'] == 'dashboard' ? 'active' : ''); ?>"  href="index.php">
            <i class="fa fa-dashboard"></i>
            Dashboard <span class="sr-only">(current)</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link  <?php echo ($_SESSION['CURR_PAGE'] == 'persons' ? 'active' : ''); ?>" href="persons.php">
            <i class="fa fa-users"></i>
            Person
        </a>
        </li>

        </ul>
    </div>
</nav>