<!DOCTYPE html>
<html>

<body>

    <form method="get">
        <span>how many towers you want to add their heights? </span><br>
        <input type="number" name="numbers"><br>
        <input type="submit" name="submit-1" value="Submit">
    </form>

    <?php
    if (isset($_GET['submit-1'])) {
        $No_towers = $_GET['numbers']; ?>
        <form action="backend.php" method="POST">
            <span>Add your Tower heights: </span><br>
            <?php for ($i = 0; $i < $No_towers; $i++) {
            ?>
                <input type="number" name="height[]"><br>

            <?php } ?>
            <input type="submit" name="submit-2" value="Submit">
        <?php } ?>

        </form>





</body>

</html>