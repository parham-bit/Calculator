<?php
$a = $_POST["a"] ?? 0;
$b = $_POST["b"] ?? 0;
$op = $_POST["op"] ?? "+";

if (isset($_POST["submit"])) {
    if ($op == "+") {
        $result = $a + $b;
    }
    elseif ($op == "-") {
        $result = $a - $b;
    }
    elseif ($op == "*") {
        $result = $a * $b;
    }
    elseif ($op == "/") {
        if ($b != 0) {
            $result = $a / $b;
        } else {
            $result = "تقسیم بر صفر ممکن نیست";
        }
    }
}
?>

<form method="post">
    عدد اول:
    <input type="number" name="a" required>

    <br><br>

    عدد دوم:
    <input type="number" name="b" required>

    <br><br>

    عملگر:
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <br><br>

    <input type="submit" name="submit" value="محاسبه">

</form>

<?php
if (isset($_POST["submit"])) {
    echo "نتیجه: " . $result;
}
?>