// Variables
var selectedWord = "";
var selectedHint = "";
var board = [];
var remainingGuesses = 6;
var words = [{ word: "snake", hint: "It's a reptile" },
             { word: "monkey", hint: "It's a mammal" },
             { word: "beetle", hint: "It's an insect"}];
var wordsGuessed = new Array(); // Told hold the words guessed.
// Creating an array of available letters
var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

// Listeners
window.onload = startGame();

// FUNCTIONS
function startGame() {
    pickWord();
    initBoard();
    updateBoard();
    createLetters();
}

// Called after replayBtn gets clicked. This resets the game back to default.
function resetGame() {
    // Clear the board
    board = [];
    // Reset remaining guesses
    remainingGuesses = 6;
    // Reset the letters
    $(".letters").empty();
    // Reset the letters
    $("#letters").empty()
    // Reset the word
    $("#word").empty();
    // Reset Hint text
    $("#hintText").empty();
    // Reset man
    $("#man").html('<img src="img/stick_0.png" id="hangImg">');
    // Hide win and lost
    $("#won").hide();
    $("#lost").hide();
    //Enable Hint button
    enableButton($("#hintBtn"));
    $("#hintBtn").attr("class", "btn btn-info btn-large");
    // Call startGame()
    startGame();
    // Show the letters because they get hidden
    $("#letters").show();
}

// Fill the board with underscores
function initBoard() {
    for (var letter in selectedWord) {
        board.push("_");
        remainingGuesses = 6;
    }
}

// Pick word
function pickWord() {
    var randomInt = Math.floor(Math.random() * words.length);
    selectedWord = words[randomInt].word.toUpperCase();
    selectedHint = words[randomInt].hint;
}

// Update the board
function updateBoard() {
    $("#word").empty();
    for(var letter of board) {
        document.getElementById("word").innerHTML += letter + " ";
    }
    
    $("#word").append("<br />");
}

// Creates the letters inside the letters div
function createLetters() {
    for (var letter of alphabet) {
        $("#letters").append("<button class='letter btn btn-success' id='" + letter + "'>" + letter + "</button>");
    }
}

// Checks to see if the selected letter exists in the selectedWord
function checkLetter(letter) {
    var positions = new Array();
    
    // Put all the positions the letter exists in the array
    for (var i = 0; i < selectedWord.length; i++) {
        // console.log(selectedWord);
        if (letter == selectedWord[i]) {
            positions.push(i);
        }
    }
    
    if (positions.length > 0) {
        updateWord(positions, letter);
        
        // Check to see if this is a winning guess
        if (!board.includes('_')) {
            // // Add the words guessed
            // wordsGuessed.push(selectedWord);
            // Display it
            $("#wordsGuessed").append(selectedWord + "<br>");
            endGame(true);
        }
    } else {
        remainingGuesses -= 1;
        updateMan();
    }
    
    if (remainingGuesses <= 0) {
        endGame(false);
    }
}

// Update the current word then call for a board update
function updateWord(positions, letter) {
    for (var pos of positions) {
        board[pos] = letter;
    }
    
    updateBoard();
}

// Calculates and updates the image for our stick man
function updateMan() {
    $("#hangImg").attr("src", "img/stick_" + (6 - remainingGuesses) + ".png");
}

// Ends the game by hiding game divs and displaying the win or loss divs
function endGame(win) {
    $("#letters").hide();
    
    if (win) {
       $('#won').show(); 
    } else {
        $('#lost').show();
    }
}

// Disables the button and changes the style to tell the user it's disabled
function disableButton(btn) {
    btn.prop("disabled", true);
    btn.attr("class", "btn btn-danger");
}

// Disables the button and changes the style to tell the user it's disabled
function enableButton(btn) {
    btn.prop("disabled", false);
}

// We use .on() instead of .click() because we need to delegate the listener to
// elements that might not exists yet.
// Reference: https://api.jquery.com/on/#on-events-selector-data-handler Under Delegated Event Handlers
// Reference: http://queirozf.com/entries/using-jquery-s-on-function-to-attach-handlers-to-elements-now-or-in-the-future
$("#letters").on('click', 'button', function() {
    checkLetter($(this).attr("id"));
    disableButton($(this));
});

$(".replayBtn").click(function() {
    resetGame();
})

$("#hintBtn").click(function() {
    $("#hintText").text("Hint: " + selectedHint);
    // Remove one from remaining guesses and call update man
    remainingGuesses -= 1;
    updateMan();
    disableButton($(this));
});
