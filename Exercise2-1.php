<?php
class PokerDice {
    public $dice = [
        1 => "Ace",
        2 => "King",
        3 => "Queen",
        4 => "Jack",
        5 => "7",
        6 => "8"
    ]
    ;
    public $lastRoll = [];
    public $totalRolls = 0;

    public function rollOne() {
        $dieValue = rand(1, 6);
        $result = $this->dice[$dieValue];
        $this->lastRoll = [$result];
        $this->totalRolls++;
        return $result;
    }
    public function roll($numberDice = 5) {
        $results = [];
        $this->lastRoll = [];
        for ($i = 0; $i < $numberDice; $i++) {
            $dieValue = rand(1, 6);
            $result = $this->dice[$dieValue];
            $results[] = $result;
            $this->lastRoll[] = $result;
            $this->totalRolls++;
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
echo "Rolling one die: " . $pokerDice->rollOne() . "\n";
echo "Rolling five dice: " . implode(", ", $pokerDice->roll()) . "\n";
echo "Last roll: " . implode(", ", $pokerDice->getLastRoll()) . "\n";
echo "Total rolls: " . $pokerDice->getTotalRolls() . "\n";
?>
