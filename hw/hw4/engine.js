// Declaring the monkey_01 varaible outside to increase scope.
var monkey_01;
var gameTimer;
var output;

$('document').ready(function() {
    
    // Variable for monkey_01
    monkey_01 = $('#monkey_01');
    // Output div
    output = $('#output');
    // Get the numHits span tag
    numHitsTag = $("#numHits");
    // Get the numMisses span tag
    numMissesTag = $("#numMisses");
    // Keep track of the number of hits.
    var numHits = 0;
    // Keep track of missed monkeys
    var missedMonkeys = 0;
    
    placeMonkey();

    
    // Click events
    $('#monkey_01').mousedown(function() {
        hitMonkey();
    });
    
    $('#playBtn').click(function() {
        // Set the Game timer
        gameTimer = setInterval(gameloop, 20);
        
        // Check to see if the player hit play again after already playing
        if(numHits > 0 || missedMonkeys > 0) {
            // Reset everything back to zero
            numHits = 0;
            missedMonkeys = 0;
            numHitsTag.html('Monkeys Hit: ' + '<span id="hits">' + numHits + '</span>');
            numMissesTag.html('Monkeys Missed: ' + '<span id="misses">' + missedMonkeys + '</span>');
        }
    })
    
    // Functions
    
    function gameloop() {
        var y = parseInt(monkey_01.css('top')) - 10;
        // output.html(y);
        // condition ? exprT : exprF 
        (y <- 100) ? placeMonkey() : monkey_01.css('top', y + 'px');
        missedMonkey();
        
    }
    
    function placeMonkey() {
        var x = Math.floor(Math.random() * 901); // 0 to 420
        monkey_01.css('left', x + 'px');
        monkey_01.css('top', '350px');
    }
    
    function hitMonkey() {
        ++numHits;
        numHitsTag.html('Monkeys Hit: ' + '<span id="hits">' + numHits + '</span>');
        if(numHits == 10) {
            alert('You win!');
            clearInterval(gameTimer);
        }
        placeMonkey();
    }
    
    function missedMonkey() {
        var monkeyPosition = parseInt(monkey_01.css('top'));
        // Check to see if a monkey was missed
        if(monkeyPosition == -50)
        {
            ++missedMonkeys;
        }
        numMissesTag.html('Monkeys Missed: ' + '<span id="misses">' + missedMonkeys + '</span>');
        // Check to see how many monkeys are missed
        if(missedMonkeys >= 5) {
            // End the game
            alert('Oh no! You lost!');
            clearInterval(gameTimer);
        }
        
    }
    
});