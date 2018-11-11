<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <title>Do You Need It?</title>
    <!-- Icon found at: https://openclipart.org/detail/279671/calculator -->
    <link rel="icon" href="./img/calc.png" type="image/png" sizes="16x16" />
    <!-- Custom Style Sheet -->
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Acme|Anton" rel="stylesheet">
</head>
<body>
    
    <div class="jumbotron">
        <div class="header">
            <h1 class="display-4">The Do You Need It Calculator</h1>
            <p class="lead">The "calculator" that helps you determine if you really need to buy something!</p>
        </div>
    </div>
    
    <div id='description'>
        Answer the following questions by clicking the submit button down at the bottom to dertermine if you <em>really need it</em>.<br/>
        It will help put the purchase into perspective! A technology we like to call, <strong>PTPIP</strong>.
    </div>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
        <!-- Your Name -->
        <div class="nameForm">
            <label for="userName">Your Name</label>
            <input id="userName" type="text" name="userName" value="<?php echo $_POST['userName'] ?>" required/><br>  
        </div>
        
        <!-- Name of the product -->
        <div class="productForm">
            <lable for="productName">Name of Product</lable>
            <input id="productName" type="text" name="productName" value="<?php echo $_POST['productName'] ?>" required/><br>
        </div>
        
        <!-- Why do you need it -->
        <fieldset>
            <div class="cBoxes">
                <legend>Why Do You Need It?</legend>
                <input id="toUse" type="checkbox" name="cBox[]" value="use" <?= (in_array('use', $_POST['cBox']) ? "checked" : "") ?>/>
                <label for="toUse">To Use</label><br>
                <input id="toSell" type="checkbox" name="cBox[]" value="sell" <?= (in_array('sell', $_POST['cBox']) ? "checked" : "") ?>/>
                <label for="toSell">To Sell</label><br>
                <input id="toTrade" type="checkbox" name="cBox[]" value="trade" <?= (in_array('trade', $_POST['cBox']) ? "checked" : "") ?>/>
                <label for="toTrade">To Trade</label><br>
            </div>
        </fieldset>
        <!-- How Often of Use -->
        <fieldset>
            <div class="frequencyForm">
                <legend for="frequency">How often will you use it?</legend>
                <select id="frequency" name="frequency">
                    <option value="1" <?= ($_POST['frequency'] == 1) ? "selected" : "" ?>>Everyday</option>
                    <option value="2" <?= ($_POST['frequency'] == 2) ? "selected" : "" ?>>Every other day</option>
                    <option value="3" <?= ($_POST['frequency'] == 3) ? "selected" : "" ?>>A Couple of times a week</option>
                    <option value="4" <?= ($_POST['frequency'] == 4) ? "selected" : "" ?>>Once a week</option>
                    <option value="5" <?= ($_POST['frequency'] == 5) ? "selected" : "" ?>>Once a month</option>
                    <option value="6" <?= ($_POST['frequency'] == 6) ? "selected" : "" ?>>Once every couple of months</option>
                    <option value="7" <?= ($_POST['frequency'] == 7) ? "selected" : "" ?>>Once a year</option>
                    <option value="8" <?= ($_POST['frequency'] == 8) ? "selected" : "" ?>>Rarely</option>
                    <option value="9" <?= ($_POST['frequency'] == 9) ? "selected" : "" ?>>Once</option>
                </select>
            </div>
        </fieldset>
        <!-- How much is it? -->
        <div class="costForm">
            <label class="stdLabels" for="cost">How much is it? (Rounded to the nearest dollar)</label>
            <input id="cost" type="number" name="cost" value="<?php echo $_POST['cost'] ?>" min="1" required/><br>  
        </div>
        <!-- Is it on sale? -->
        <fieldset>
            <div class="saleForm">
                <legend>Is it on sale?</legend>
                <input id="saleYes" type="radio" name="sale" value="on sale" <?= ($_POST['sale'] == 'on sale') ? "checked" : "" ?> required/>
                <label for="saleYes">Yes</label><br>
                <input id="saleNo" type="radio" name="sale" value="not on sale" <?= ($_POST['sale'] == 'not on sale') ? "checked" : "" ?>/>
                <label for="saleNo">No</label>
            </div>
        </fieldset>
        <!-- Have you waited for a holiday sale? -->
        <fieldset>
            <div class="holidayForm">
                <legend>Have you waited for a holiday sale?</legend>
                <input id="hSaleYes" type="radio" name="hSale" value="waited for holiday sale" <?= ($_POST['hSale'] == 'waited for holiday sale') ? "checked" : "" ?> required/>
                <label for="hSaleYes">Yes</label><br>
                <input id="hSaleNo" type="radio" name="hSale" value="not waited for holiday sale" <?= ($_POST['hSale'] == 'not waited for holiday sale') ? "checked" : "" ?>/>
                <label for="hSaleNo">No</label>
            </div>
        </fieldset>
        <!-- Can you buy it used? -->
        <fieldset>
            <div class="usedForm">
                <legend>Can you buy it used?</legend>
                <input id="usedYes" type="radio" name="used" value="can buy it used" <?= ($_POST['used'] == 'can buy it used') ? "checked" : "" ?> required/>
                <label for="usedYes">Yes</label><br>
                <input id="usedNo" type="radio" name="used" value="cannot buy it used" <?= ($_POST['used'] == 'cannot buy it used') ? "checked" : "" ?>/>
                <label for="usedNo">No</label>
            </div>
        </fieldset>
        <!-- Willing to sell it after purchase -->
        <fieldset>
            <div class="sellForm">
                <legend>Would you consider selling it in the future for extra cash?</legend>
                <input id="sellYes" type="radio" name="sell" value="do plan on selling it" <?= ($_POST['sell'] == 'do plan on selling it') ? "checked" : "" ?> required/>
                <label for="sellYes">Yes</label><br>
                <input id="sellNo" type="radio" name="sell" value="don't plan on selling it" <?= ($_POST['sell'] == 'don\'t plan on selling it') ? "checked" : "" ?>/>
                <label for="sellNo">No</label>
            </div>
        </fieldset>
        <!-- Justification of purchase -->
        <div class="justForm">
            <label class="stdLabels" for="justification">Justification for Purchase</label><br>
            <textarea id="justification" name="justification" placeholder="You want to buy it because..." rows="5" cols="50"><?= $_POST['justification'] ?></textarea><br>
        </div>
        
        <input type="hidden" name="hideMe"/>
        <input type="submit" name= "submit" value="Submit"/>
    </form>
    
    <!--Scripts -->
    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
    
</html>
<!-- PHP Code -->
<?php
    
    # Variables
    $names = array('Marie', 'Walter', 'Skylar', 'Hank', 'Jesse');
    $fictionalPerson = getRandomPerson();
    $words = array(); #Associative array
    
    # Functions
    function getRandomPerson() {
        # Get the global Variable
        global $names;
        # Get a random number between zero and the size of the array
        $randomNum = rand(0, sizeof($names));
        # Return a random name
        return $names[$randomNum];
    }
    
    function buildWords(&$wordsArray) {
        # Check to see if everything but userName is set. We check that later
        # Product Name
        (isset($_POST['productName'])) ? $wordsArray['productName'] = $_POST['productName'] : "";
        # cBox[]
        if (isset($_POST['cBox'])) {
            # Check to see what the count is and go from there
            if (sizeof($_POST['cBox']) > 1) {
                # If there was more than one check box checked, cycle through them
                foreach ($_POST['cBox'] as $value) {
                    # To account for the first one
                    if (!(array_key_exists('cBox', $wordsArray)))
                    {
                        $wordsArray['cBox'] = $value;
                    }
                    else {
                        $wordsArray['cBox'] = $wordsArray['cBox'] . " and " . $value;
                    }
                }
            }
            else {
                # If there is only one.
                $wordsArray['cBox'] = $_POST['cBox'][0];
            }
        }
        # Frequency
        if (isset($_POST['frequency'])) {
            # Determine which one it is
            switch ($_POST['frequency']) {
                case 1:
                    $wordsArray['frequency'] = "everyday";
                    break;
                case 2:
                    $wordsArray['frequency'] = "every other day";
                    break;
                case 3:
                    $wordsArray['frequency'] = "a couple of times a week";
                    break;
                case 4:
                    $wordsArray['frequency'] = "once a week";
                    break;
                case 5:
                    $wordsArray['frequency'] = "once a month";
                    break;
                case 6:
                    $wordsArray['frequency'] = "once every couple of months";
                    break;
                case 7:
                    $wordsArray['frequency'] = "once a year";
                    break;
                case 8:
                    $wordsArray['frequency'] = "rarely";
                    break;
                case 9:
                    $wordsArray['frequency'] = "once";
                    break;
            }
        }
        # Cost
        (isset($_POST['cost'])) ? $wordsArray['cost'] = $_POST['cost'] : "";
        # sale
        (isset($_POST['sale'])) ? $wordsArray['sale'] = $_POST['sale'] : "";
        # hSale
        (isset($_POST['hSale'])) ? $wordsArray['hSale'] = $_POST['hSale'] : "";
        # used
        (isset($_POST['used'])) ? $wordsArray['used'] = $_POST['used'] : "";
        # sell
        (isset($_POST['sell'])) ? $wordsArray['sell'] = $_POST['sell'] : "";
        # justification
        (isset($_POST['justification'])) ? $wordsArray['justification'] = $_POST['justification'] : "";
    }
    
    # Everything else 
    buildWords($words);
    
    # Build the madlibs styled response
    
    if(isset($_POST['userName'])) {
        $userName = $_POST['userName'];
        echo "<div class='responseHeader'>";
        echo "<h2>Hello $userName!</h2><br>";
        echo "</div>";
        echo "<div class='response'>";
        echo "My name is $fictionalPerson, and I wanted to get your opinon on something!";
        echo " I was thinking about buying a " . $words['productName'];
        echo " and I wanted to know if you think I should. I want to buy it because " . $words['justification'];
        echo " I need it because I want to " . $words['cBox'] . " it. I plan on using it " . $words['frequency'];
        echo ". It is going to cost, roughly, $" . $words['cost'] . " and it is " . $words['sale'] . ". I have ";
        echo $words['hSale'] . " to see the sale price. I " . $words['used'] . ". And lastly, I " . $words['sell'];
        echo " in the future. So what do you think? <span id='finalQuestion'>Should I buy it?</span></div>";
        echo "<!-- Reset Everything -->";
        echo "<form id='resetForm' action='" . $_SERVER['PHP_SELF'] . "' method='POST'>";
        echo "<input type=\"Submit\" value=\"Reset\"/>";
        echo "</form>";
    }
?>

