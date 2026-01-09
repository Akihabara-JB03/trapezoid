  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {


$bottomBase = $_POST["bottomBase"];
$topBase = $_POST["topBase"];
$height = $_POST["height"];
$areaUnit = $_POST["areaUnit"];
$trapezoidArea = ($topBase + $bottomBase) * $height / 2;
echo "<h2 class='Hello'>trapezoid area:$trapezoidArea$areaUnit</h2>";
echo "<a href='../index.html'>Go Back</a>";
};