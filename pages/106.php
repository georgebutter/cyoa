<?php
$page_array = array(
    14 => "Withdraw funds from the bank to buy a canoe, and set out on a lone mission on the Doone.",
    248 => "Await the arrival of the Sultan's Favourite later today.",
);
changePage($page_array); ?>
<p>
Howard's Crossing seems to have grown every time you see it. As well as a regular night-time stopping point for the river barges, it is quite a riverport in its own right. There are stockyards up river where the herds driven overland from the Pola River Valley are held before being processed through the slaughter- house, and two timber yards where timber is delivered after a long haul around the Dunmarsh from Centaur Forest. The town boasts several inns and a particularly prosperous-looking (and stoutly built) bank.
</p>

<p>
There are several boat yards with a variety of craft for hire. If you wish to acquire and provision a canoe for a solitary investigation of the marsh you can do so, drawing the necessary funds from the bank which is a branch of the one you patronize in Starport.
</p>

<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>