        <nav class="navbar navbar-expand-lg main-navbar" style="background:radial-gradient(circle, rgba(68,165,208,1) 7%, rgba(4,65,62,1) 100%)">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars" style="color:white"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
               
            </form>
           <ul>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="xbaylogo.jpeg" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block" style="color:white"><?php echo $_SESSION['username'];?> <?php 
					include('connection.php');
					$me = $_SESSION['username'];
					$view = "SELECT * FROM users WHERE username = '$me'";
					$result = $db_link->query($view);
					$row = $result->fetch_assoc();
					echo $row['memberID'];
					?></div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                 
                        <a href="features-profile.html" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>

                        <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="logout.php" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>