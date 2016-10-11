<?php
$page_array = array(
    108 => "Continue",
);
changePage($page_array); ?>
<p>
The halfway point on the journey along the Doone between Howard's Crossing and Starport is fortunately marked by one of the few stretches of firm ground within the Dunmarsh. Even in peaceful times few Bargemasters care to travel at night in the marsh, if only for fear of running aground. This stretch, commonly referred to simply as 'Halfway House' has, therefore, become the customary overnight stopping point for craft on both their up and downstream journeys.
</p>

<p>
Tonight there are only four barges before your arrival. Two of those are coming down the river, and you find an opportunity to talk to their masters during the next hour. There have been no new developments of interest, and it is now nearly three weeks since the last barge was lost. One or two voices suggest hopefully that the danger may be past.
</p>

<p>
The night passes without incident and the next day the journey is resumed. Again the barge makes good time, soon leaving behind the other two heading upstream, and you reach Howard's Crossing in the late afternoon.
</p>


<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>