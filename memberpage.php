<?php require('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); exit(); }

//define page title
$title = 'Members Page';

require('includes/player.php'); 
require('layout/header.php'); 
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
		<h2><?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES); ?></h2>
		</div>
		<div class="col-xs-12 col-sm-3">
		<h4>Expertise: <?php echo ($_SESSION['expertise']); ?></h4>
		<h4>Vitality: <?php echo ($_SESSION['vitality']); ?></h4>
		<h4>Fortune: <?php echo ($_SESSION['fortune']); ?></h4>
		<h3>Inventory</h3>
		<?php getInventory();?>
		<p><a href='logout.php'>Logout</a></p>
		</div>
	    <div class="col-xs-12 col-sm-7 col-sm-offset-1 page">
				<?php getPage(); ?>
				
				<hr>

		</div>
	</div>


</div>

<?php 
//include header template
require('layout/footer.php'); 
?>
