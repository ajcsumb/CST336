<form>
    <!--Question 1-->
    What year was CSUMB founded? 
    <input type="text" name="question1" size="5" required/><br />
    <div id="question1-feedback" class="answer"></div><br />

    <!--Question 2-->
    What is the name of CSUMB's mascot?<br />
    <input type="radio" name="question2" id="q2-1"  value="A" required/><label for='q2-1'>Otto <br />
    <input type="radio" name="question2" id="q2-2"  value="B"/><label for='q2-2'>Albus <br />
    <input type="radio" name="question2" id="q2-3"  Value="C"/><label for='q2-3'>Monte Rey <br />
    <div id="question2-feedback" class="answer"></div><br />
    
    <!-- Question 3 -->
    What is the cost per unit for the CSUMB Online Program?<br />
    <input type="number" name="question3" min=0 required>
    <div id="question3-feedback" class="answer"></div><br />
    
    <!-- Question 4 -->
    What was the name of the Army base that CSUMB grew out of?<br />
    <input type="radio" name="question4" id="q4-1"  value="A" required/><label for='q4-1'>Fort Ord <br />
    <input type="radio" name="question4" id="q4-2"  value="B"/><label for='q4-2'>Fort Orchard <br />
    <input type="radio" name="question4" id="q4-3"  Value="C"/><label for='q4-3'>Fort Orchid <br />
    <input type="radio" name="question4" id="q4-4"  Value="D"/><label for='q4-4'>Fort Otter <br />
    <div id="question4-feedback" class="answer"></div>
    <input type="submit" value="Submit" />
    
    <!--Will display the "loading" or "spinning" animated gif-->
    <div id="waiting"></div>
</form>


<!--Will display the quiz score-->
<div id="scores"></div>