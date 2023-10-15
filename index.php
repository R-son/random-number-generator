<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="number" name="number_of_dice" min="1">
            <select name="list_of_types" id="type">
                <option value="4">d4</option>
                <option value="6">d6</option>
                <option value="8">d8</option>
                <option value="10">d10</option>
                <option value="12">d12</option>
                <option value="20">d20</option>
            </select>
            <button type="submit" name="submit">ROLL</button>
        </form>
    <?php
        function roll()
        {
            $rolls = $_POST['number_of_dice'];
            $max = $_POST['list_of_types'];
            
            $intro .= $rolls . ' d' . $max . ' dice were rolled';
            echo $intro; 
            $html = '<table style="width:100%>';
            echo $html;
            $html .= '<tr><th>Number</th><th>Result</th></tr>';
            for ($i = 0; $i < $rolls; $i++) {
                $result = rand(1, $max);
                $dice_id = $i + 1;
                $html .= '<tr><td>' . $dice_id .'</td><td>' . $result . '</td></tr>';
            }
            $html .= '</table>';
            echo $html;
        }
        if(isset($_POST['submit']))
            roll();
        ?>
</html>
