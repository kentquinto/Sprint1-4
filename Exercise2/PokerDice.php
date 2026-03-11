<?php
class PokerDice {
    public $dice = [
        1 => "Ace",
        2 => "King",
        3 => "Queen",
        4 => "Jack",
        5 => "7",
        6 => "8"
    ];
    public $lastRoll = [];
    public $totalRolls = 0;

    public function rollOne() {
        $randomNumber = rand(1, 6);
        $result = $this->dice[$randomNumber];
        $this->lastRoll = [$result];
        $this->totalRolls = $this->totalRolls + 1;
        return $result;
    }

    public function roll($numberDice = 5) {
        $results = [];
        $this->lastRoll = [];
        for ($i = 0; $i < $numberDice; $i++) {
            $randomNumber = rand(1, 6);
            $result = $this->dice[$randomNumber];
            $results[] = $result;
            $this->lastRoll[] = $result;
            $this->totalRolls = $this->totalRolls + 1;
        }
        return $results;
    }

    public function getLastRoll() {
        return $this->lastRoll;
    }
    
    public function getTotalRolls() {
        return $this->totalRolls;
    }
}
$pokerDice = new PokerDice();
$oneRoll = $pokerDice->rollOne();
echo "One roll: " . $oneRoll . "\n";
$fiveRolls = $pokerDice->roll();
echo "Five rolls: " . implode(", ", $fiveRolls) . "\n";
$lastRoll = $pokerDice->getLastRoll();
echo "Last roll: " . implode(", ", $lastRoll) . "\n";
$totalRolls = $pokerDice->getTotalRolls();
echo "Total rolls: " . $totalRolls . "\n";
?>
