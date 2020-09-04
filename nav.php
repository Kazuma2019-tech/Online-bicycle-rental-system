<nav class="navbar float-right theme-main-menu">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       Menu
					       <i class="fa fa-bars" aria-hidden="true"></i>
					     </button>
					   </div>
					     <ul class="nav navbar-nav">
						 <?php if(isset($_SESSION['login']))
						 {
							 ?>
							 <li><a href="index.php">HOME</a></li>
							<li><a href="search.php">Search</a></li>
							<li><a href="bk.php">My Bookings</a></li>
							
							<li><a href="contact.php">CONTACT</a></li>
							<li><a href="logout.php">Logout</a></li>
							 <?php
						 }
						 else
						 {
						     ?>
							 <li><a href="register.php">Register</a></li>
							<li><a href="login.php">Login</a></li>
							 
							 <?php
							 
						 }	 
						 ?>
					       	
							
					     </ul>
					   </nav>