<?php
$page_array = array(
    64 => 'Land to hunt or investigate',
    194 => 'Continue North West',
    401 => 'Continue South West'
);
changePage($page_array); ?>
<p>
	Heading upstream, the channel goes North East for two miles, North for one, North East for two more, then North for one mile again. After that it leads North East for two more, then bends East and, after four more miles, the source drains out of a vast shallow tarn, encrusted with yellow algae which gives off an offensive odour. There is no way through.
</p>
<p>
	The middle section of the twelve miles of this channel has cut through one of the rare stretches of firm ground in the Dunmarsh. This meadow extends for at least two miles on either side, and you can see some grazing animals in the distance to the North.
</p>
<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>