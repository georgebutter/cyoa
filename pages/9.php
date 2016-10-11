<?php
$page_array = array(
    102 => '...',

);
changePage($page_array); ?>
<p>A wondrous creature has risen from the treetop and is

gliding towards you on snowy wings. Its head, arms

and torso are those of a woman, exquisitely lovely,

while the wings and legs are those of a mighty swan.
</p>
<p>You sink to one knee as it lands before you and,

ashamed of your warlike nature, surrender your sword.

With a detached feeling of the justice of the situation,

you watch calmly as it uses your sword to cut your

throat and your life's blood gushes out over your chest.
</p>
<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>