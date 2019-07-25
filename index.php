<!DOCTYPE HTML>
<html>
<head>
    <title>Change Money</title>
</head>
<body>
<div id="content">
    <h2>Change Money</h2>
    <form method="post" action="display.php">
        <select name="input">
            <option value="23000">VND</option>
            <option value="1">USD</option>
        </select>
        <input type="number" name="money">


        <select name="toMoney">
            <option value="1">to USD</option>
            <option value="23000">to VND</option>
        </select>
        <button type="submit">Convert</button>
        <br>
    </form>
</div>
</body>
</html>