<?php
$page_array = array(
    3 => 'Continue',
);
changePage($page_array); ?>
<h1>SKYFALL</h1>
<p><em>The planet of Skyfall</em> is lush, beautiful - and untamed. 
The humans who have settled there only control small areas of this fabulous land. 
Vast tracts of forest, desert and mountain are inhabited by unknown tribes and fantastic creatures. 
Even within the borders of Delta, your own country on the shores of the Sea of Storms,
there lives a race of intelligent and dangerous animals that capture and kill travellers in armed raids.
Their home is in the huge swamps of the Deltan interior. You are a young adventurer of Skyfall.
Your father has vanished on a river trip through the dreaded marshes. You must set out on a journey to discover his fate,
and confront the monsters that await you in the grim swamps. </p>

<p><em>The Kingdom of Delta</em> lies in the northern
hemisphere of Skyfall - a planet far from our own where re-
fugees from an exhausted and ravaged Terra survived
the crash-landing of their colony ship thousands of
years ago. The survivors named the planet Skyfall, but although
some Terran names survive, no one now remembers
their origins.</p>
<p>The humans are not alone on Skyfall, although they
have multiplied until they now outnumber the other
intelligent races. Some of these live in peace and
harmony with men, while others are distinctly
antagonistic. Almost all science has been lost over the
centuries, but Magic has developed to take its place.
And Magic, in Delta, is of three types.</p>

<p><em>Arcane magic</em>, the most spectacular, is learned at great
personal cost by Magicians, Sorcerors, Warlocks and
Necromancers who undertake a life-long search for
knowledge. Although many settle for a living by en-
tertaining the public with simple illusions and
harmless spells, a few survive the perils of meddling
with the occult to master spells that make even Kings
tremble at their power.</p>

<p><em>Clerical magic</em>, mainly of the healing and supportive
type, is practised by priests and bishops of the various
religions flourishing amongst the human and
non-human inhabitants. The village priest combines
the duties of spiritual leader and doctor.</p>
<p><em>Druidical magic</em> is quite rare and its proponents tend
to live in the depths of the forests or similar lonely
areas. The Druids have amazing powers over animals
and all types of plants, including crops, and are fiercely
protective of them.</p>

<p>Although the human colonists brought the flora and
fauna of Terra with them, many species could not
survive on Skyfall and are now extinct. In some cases,
however, local plants and animals have been given
Terran names due to some real or imagined similarity
to the original. Of the forest trees, only the oak, ash
and holly flourish on Skyfall, and are accorded con-
siderable reverence by the Druids as a result.</p>

<p>One notable difference between Skyfall and Terra is
the absence of a moon. Nights, as a result, are dark and
fearsome times when wise folk stay indoors or close to
a camp-fire. There are no tides, and winds and weather
are stable and predictable.</p>

<p>In Delta, this has helped the development of the Doone
River as the major commerce route of the country.
Barges ply regularly between the main port of Starport
and the capital at Tan-Delta, using the current for the
downstream journey. Going upstream, the prevailing
south-west wind enables them to sail through the
Dunmarsh, and for the remainder of the journey they
are horse-drawn.</p>

<p>Delta is a rich and fertile country, bordered by
mountains to east and west, the Sea of Storms to the
south and, a few hundred miles to the north, by the
great icefields. Other settled regions lie mainly across
the sea, but there are civilized countries beyond the
lands of the Barbarians to the east and some hundreds
of miles to the west, across the Great Void Desert. The
area between Lake Fraki and the icefields is mainly tundra, roamed by animals and non-human tribes of
low intelligence.</p>
<p>Delta is self-sufficient in food, wool and timber, but
must export the gems and precious metals from its
mines to obtain the iron, copper and luxury items, like
silks and scents, wines and spirits which it does not
produce.</p>

<p>Life has been good for the Deltans, and Starport is a
prosperous town, with none doing better than the
barge-owners.</p>
<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>