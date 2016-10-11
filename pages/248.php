<?php
$page_array = array(
    123 => "Travel aboard.",
    258 => "Trail the barge in a canoe.",
    47 => "Travel alone by canoe",
);
changePage($page_array); ?>
<p>
You decide to have your evening meal early, and are at the waterside to meet the Sultan's Favourite as she arrives shortly before dusk. Several armed men are on deck and they regard you with some suspicion.
</p>

<p>
When a gang-plank is produced and you move to board, swords are swiftly drawn and a call brings others from the deck house, among them an elderly but fit looking Elf with a wand held ready ... obviously a magic user of some kind.
</p>

<p>
You produce your letter of introduction and the bargemaster comes forward to examine it and confirm your credentials. Most of those on the barge relax, though one or two still look doubtful, probably wondering what special talents you have to make your presence worthwhile.
</p>

<p>
	The present guards and crew intend to stay aboard tonight, and they plan to cast off for the first part of the downstream journey through the Dunmarsh soon after first light tomorrow.
</p>

<p>
	Whether you spend the night aboard or at an inn in the town is immaterial. However, you need to decide definitely:
</p>

<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>