<?php
$page_array = array(
    232 => 'Set out on a secret search of the Dunmarsh on your own, without informing anyone.',
    363 => 'You decide to see if the Guild of Bargemasters can provide any information or assistance.',
);
changePage($page_array); ?>
<p>Your senses sound an alarm as soon as you land at the docks in Starport. 
	Things have changed in the months of your absence from the city, and not for the better.
	The dock area has never been so quiet, 
	with knots of men standing around conversing quietly instead of working on the river barges which lie largely empty and deserted at the quays.</p>

<p>When you left for a winter's adventuring in the wanner lands of Skyfall to the South,
 the docks wore the same bustling, hectic air you had known all your life,
  for your father's business is shipping goods to and from the
interior of Delta on his small fleet of river barges. Now
you have returned to spend the late summer with him,
only to find this puzzling change.</p>

<p>Some of the idlers are well known to you, but when
you move towards them they turn away to engage
someone else in conversation, or pointedly avoid your
glance. Eventually you spot a close friend who looks
dismayed to see you, but reluctantly halts his hurried
departure at your hail. A few questions soon reveal a
sinister and tragic state of affairs.</p>

<p>Most of the missing barges were on the downstream
run. One carried valuable timbers - ebony and sandal-
wood; one was loaded with hides and casks of salted
meat; another carried almost the entire winter's out-
put of the snowfox trappers' trading posts, and three
more were loaded with ores of platinum, gold and gem-
stones. Only two barges on the inward route have been
affected so far, but these, too, were valuable; one, the
first barge to vanish, bore a consignment of new
weapons for the Royal Armoury, while the second,
manned with a dozen guards, bore in supposed secrecy
twenty chests of newly-minted gold pieces for the De-
ltan Treasury! It is obvious that there is some form of
intelligent organisation at the root of all this, but so far
no-one has discovered a single clue.</p>

<p>There have been occasional skirmishes with the Marsh
creatures in the past — small bands of Lizardmen or
Frogmen have tried to board barges from time to time,
but their lack of weapons and organisation has always
prevented success. On or two proficient armed guards
are considered sufficient protection, and the barge
crews themselves are tough and able fighters.</p>

<p>Throughout this narrative you sense that your friend is
in some way being evasive and holding back some
information, but you cannot pin him down. Eventually
he excuses himself and leaves you to stroll pensively
along the quay and into the residential area of Starport.</p>

<p>You recall that all river traffic is controlled by the
Guild of Bargemasters, of which your father Kandow is
a respected and senior member. Quite apart from the
sorrow caused by the loss of the crewmen and guards,
these recent developments will be causing serious bu-
siness problems for the Guild and local traders.</p>

<p>Anxious to learn how your father's business has fared,
you go directly towards your home without stopping to
pass further time of day with friends and acquaint-
ances. When you get there, the house is shut! On en-
quiring at your neighbour's house you are horrified to
learn that Kandow himself disappeared with one of his
ore-barges ten days ago. The neighbours locked the
house for safety and now give you the key.</p>

<p>Now you know what your friend was keeping from you
- he could not bring himself to tell you of your father's
disappearance. You thank your neighbours and return
to the empty house.</p>

<p>Sadness and anger intermingle in your thoughts as you
sit staring at the ashes in the hearth of your home. The
Guild's troubles have suddenly become your own per-
sonal problem. As you eat a lonely and apparently
tasteless meal, you resolve to do something about it.</p>

<p>Methodically you go through the motions of tidying up
after your meal, all the time thinking hard about your
future actions. You must go to the rescue of your
father, of that you have no doubt, and it seems likely
that the mystery of the barge disappearances can be
solved if you are successful.</p>

<p>Evening is drawing in, and you decide to start your
quest tomorrow, after what may well prove your last
chance of a good night's rest in a proper bed for some
time.</p>

<p>Your actions tomorrow will depend on a decision you
will have to make during the night.</p>
<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>