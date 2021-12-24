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
     * Non-Parameter Function 
     * Using Switch case to check option and print position
     */
    function option()
    {
        while ($this->position < 100) {
            $diceRoll = $this->rollDice();
            $optionCheck = rand(0, 2);
            echo "Option:: " . $optionCheck . "\n";
            switch ($optionCheck) {
                case $this->LADDER:
                    if ($this->position + $diceRoll > 100) {
                        $this->position = $this->position;
                    } else {
                        $this->position += $diceRoll;
                    }
                    break;
                case $this->SNAKE:
                    $this->position -= $diceRoll;
                    if ($this->position <= 0) {
                        $this->position = 0;
                    }
                    break;
                default:
                    $this->position = $this->position;
                    break;
            }
            echo "Position:: " . $this->position . "\n";
        }
    }

    /**
     * Function to get the user to roll th dice
     * Printing the Number on the dice
     * Returns diceRoll
     */
    function rollDice()
    {
        $diceRoll = rand(1, 6);
        echo "Number on Dice:: " . $diceRoll . "\n";
        return $diceRoll;
    }
}
$snakeAndLadder = new SnakeAndLadder();
$snakeAndLadder->option();
