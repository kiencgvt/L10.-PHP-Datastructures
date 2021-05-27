<?php
include_once "Dancer.php";
$queueMale = new SplQueue();
$queueFemale = new SplQueue();
$male1 = new Dancer("male1", "male");
$male2 = new Dancer("male2", "male");
$male3 = new Dancer("male3", "male");
$male4 = new Dancer("male4", "male");
$female1 = new Dancer("female1", "female");
$female2 = new Dancer("female2", "female");
$female3 = new Dancer("female3", "female");
$female4 = new Dancer("female4", "female");
$female5 = new Dancer("female5", "female");
$female6 = new Dancer("female6", "female");
$queueMale->enqueue($male1);
$queueMale->enqueue($male2);
$queueMale->enqueue($male3);
$queueMale->enqueue($male4);
$queueFemale->enqueue($female1);
$queueFemale->enqueue($female2);
$queueFemale->enqueue($female3);
danceCouple($queueMale, $queueFemale);
danceCouple($queueMale, $queueFemale);
danceCouple($queueMale, $queueFemale);
danceCouple($queueMale, $queueFemale);
$queueFemale->enqueue($female4);
$queueFemale->enqueue($female5);
$queueFemale->enqueue($female6);
danceCouple($queueMale, $queueFemale);
danceCouple($queueMale, $queueFemale);
echo $queueFemale->count();
function danceCouple($queueMale, $queueFemale)
{
    if ($queueMale->isEmpty() || $queueFemale->isEmpty()) {
        echo "Có hàng rỗng!";
        echo "<br>";
    } else {
        $male = $queueMale->dequeue();
        $female = $queueFemale->dequeue();
        echo $male->getName() . " vs " . $female->getName();
        echo "<br>";
    }
}