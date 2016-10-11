<?php
	function getPage(){
		try {
			//create PDO connection
			$db = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);
		    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//Suggested to uncomment on production websites
		    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites
		    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		} catch(PDOException $e) {
			//show error
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		    exit;
		}
		$stmt = $db->prepare('SELECT page FROM  members WHERE memberid = :memberid');
		$stmt->execute(array(':memberid' => $_SESSION['memberID']));
		$dbpage = $stmt->fetchColumn();
		$page = htmlspecialchars($_SESSION['page'], ENT_QUOTES);
		if(!empty($_GET['page']))  
		{  
			if (($_GET['page']) == $page && ($_GET['page']) == $dbpage)
			{
				if (file_exists("pages/" .$_GET['page'].".php") ) 
				{  
					include("pages/" . $_GET['page'] .".php");  
				}
				else
				{
					echo "Page not found! Looks like a bug! We're working to fix this, check back soon!";
				}
			}
			else
			{
				echo "You're at the wrong page<br><a href='memberpage.php?page=$page'><button>Resume</button>";
			}	 
		}
		elseif ($dbpage == 1) {
			echo "<h4>Welcome to the world of Skyfall " . htmlspecialchars($_SESSION['username'], ENT_QUOTES) . ". Are you ready to begin your journey?</h4><a href='memberpage.php?page=$page'><button>Yes</button></a>";
		} 
		else  
		{  
			echo "<h4>Welcome back adventurer, are you ready to continue you journey?</h4><a href='memberpage.php?page=$dbpage'><button>Resume</button></a>";
		}
	}

	function changePage($page_array){
		if(($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['button']) && array_key_exists($_POST['button'], $page_array)){
			try {
					//create PDO connection
					$db = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);
				    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//Suggested to uncomment on production websites
				    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites
				    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				} catch(PDOException $e) {
					//show error
				    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
				    exit;
				}
		     $stmt = $db->prepare('UPDATE members SET page = :page WHERE memberid = :memberid');
		     $stmt->execute(array(':memberid' => $_SESSION['memberID'], ':page' => $_POST['button']));
		     $_SESSION["page"] = $_POST['button'];
		     header ('Location: memberpage.php?page=' . $_POST['button']);
		}
	}

	function pageForm(){

	}

	function getInventory(){
		try {

			//create PDO connection
			$db = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);
		    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//Suggested to uncomment on production websites
		    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites
		    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

		} catch(PDOException $e) {
			//show error
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		    exit;
		}
		$stmt = $db->prepare('SELECT i.* 
	  	FROM items i
	      JOIN membersitems m ON m.itemid = i.itemid
	  	WHERE m.memberid = :memberid');
		$stmt->execute(array(':memberid' => $_SESSION['memberID']));
	    $array = $stmt -> fetchAll(PDO::FETCH_ASSOC);

	    $standard = '';
		$provisions = '';
		$magical = '';

		foreach($array as $value) {
		    switch($value['itemtype']) {
		        case 'Provisions':
		            $provisions .= "<div class='inventory-icon' id='icon-id-" . $value['itemid'] . "'></div>";
		            break;
		        case 'Standard':
		            $standard .= "<div class='inventory-icon' id='icon-id-" . $value['itemid'] . "'></div>";
		            break;
		        case 'Magical':
		            $magical .= "<div class='inventory-icon' id='icon-id-" . $value['itemid'] . "'></div>";
		            break;
		    }
		}
		?>
		<h4>Standard</h4>
		<?php echo $standard ?>
		<hr>
		<h4>Provisions</h4>
		<?php echo $provisions ?>
		<hr>
		<h4>Magical</h4>
		<?php echo $magical ?>
		<hr>
		<?php
	}
?>