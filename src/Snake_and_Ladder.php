<?php
echo "Welcome to Snake and Ladder Computation Problem\n";
/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Line Comparission Computation Problem
 */
class SnakeAndLadder
{
    public $START_POSITION = 0;
    public $NO_PLAY = 0;
    public $LADDER = 1;
    public $SNAKE = 2;

    public $position = 0;

    /**
     * Function to get the option for next step
     * Passing diceRoll as a parameter 
     * Using Switch case to check option and print position
     */
    function option($diceRoll)
    {
        $optionCheck = rand(0, 2);
        echo "Option:: " . $optionCheck . "\n";
        switch ($optionCheck) {
            case $this->LADDER:
                $this->position += $diceRoll;
                echo "Position:: " . $this->position . "\n";
                break;
            case $this->SNAKE:
                $this->position -= $diceRoll;
                echo "Position:: " . $this->position . "\n";
                break;
            default:
                $this->position = $this->position;
                echo "Position:: " . $this->position . "\n";
                break;
        }
    }

    /**
     * Function to get the user to roll th dice
     * Printing the Number on the dice
     * callin option function, passing diceRoll as parameter
     */
    function rollDice()
    {
        $diceRoll = rand(1, 6);
        echo "Number on Dice:: " . $diceRoll . "\n";
        $this->option($diceRoll);
    }
}
$snakeAndLadder = new SnakeAndLadder();
$snakeAndLadder->rollDice();
