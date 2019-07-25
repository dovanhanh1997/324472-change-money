

<!DOCTYPE HTML>
<html>
<head>
    <title>Change Money</title>

</head>
<body>
<div id="content">
    <h2>Change Money</h2>

</div>
</body>


</html>

<?php


class Change_money
{
    public $money;
    public $fromValue;
    public $toValue;

    public function setMoney($money, $fromValue, $toValue)
    {
        $this->money = $money;
        $this->fromValue = $fromValue;
        $this->toValue = $toValue;
    }

    public function changeMoney()
    {
        return ($this->money * $this->toValue) / $this->fromValue;
    }
}

$change_money = new Change_money();

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$money = (int)$_POST['money'];
$fromValue = (int)$_POST['input'];
$toValue = (int)$_POST['toMoney'];

$change_money->setMoney($money, $fromValue, $toValue);
?><label>Result: </label><?php
echo round($change_money->changeMoney(), 2, PHP_ROUND_HALF_DOWN);
?>