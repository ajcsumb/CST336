<?php
include './inc/rounds.php';

// current time
echo date('h:i:s') . "\n";

// sleep for 10 seconds
sleep(1);

// wake up !
echo date('h:i:s') . "\n";

function test() {
    echo "This is from test.php";
}
$round = new Round();
$round->displayRounds();
for ($i =0; $i < 4; $i++)
{
    $round->incrementRound();
    echo $round->rounds;
}

$round->displayRounds();
test();

?>