<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>台形の面積</title>
</head>
<body>
  <form method="post" action="tekitou2.php">
    <label>上底の長さ：</label>
    <input type="number" name="topBase"><br>
    <label>下底の長さ：</label>
    <input type="number" name="bottomBase"><br>
    <label>高さ：</label>
    <input type="number" name="height"><br>
    <label>面積の単位:</label>
    <select name="areaUnit">
  <option value="㎡">㎡</option>
  <option value="cm²">cm²</option>
  <option value="mm²">mm²</option>
</select>
<button type="submit">送信</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
$bottomBase = $_POST["bottomBase"];
$topBase = $_POST["topBase"];
$height = $_POST["height"];
$areaUnit = $_POST["areaUnit"];
$trapezoidArea = ($topBase + $bottomBase) * $height / 2;
echo "<h2 class='Hello'>trapezoid area:$trapezoidArea$areaUnit</h2>";
};
?>
 </body>
</html>