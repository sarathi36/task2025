<?php


$matrix = [
    [1, 2, 3, 4, 5, 6],
    [7, 8, 9, 10, 11, 12],
    [13, 14, 15, 16, 17, 18],
    [19, 20, 21, 22, 23, 24],
    [25, 26, 27, 28, 29, 30],
    [31, 32, 33, 34, 35, 36]
];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="challange2.css">
    <title>Task</title>
</head>
<body>

<table class="array-table">
    <?php
    
         echo "<h2>Array in 6*6 in linear format: </h2> <br>";
         foreach ($matrix as $row) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>$cell</td>";
            }
            echo "</tr>";
        }

        
    ?>
</table>

<table class="array-table">
<?php
    $start = 1;

    
    for ($col = 0; $col < 6; $col++) {
      
        $num = $start + 5; 
        for ($row = 0; $row < 6; $row++) {
            $matrix[$row][$col] = $num--;
            $change = $matrix;
        }
        $start += 6; 
    }
      echo "<h2>Outside Array changed into coloumn: </h2><br>";
        
            echo "<tr>";
            foreach ($change as $row1) {
                echo "<tr>";
                foreach ($row1 as $cell1) {
                    echo "<td>$cell1</td>";
                }
                echo "</tr>";
            }
            echo "</tr>";
        
    ?>
</table>
    
<table class="array-table">
        <?php
        $temp_values_1 = [
            $change[4][1],  
            $change[3][1],  
            $change[2][1], 
            $change[1][1]  
        ];
        sort($temp_values_1);
        
       
        $temp_values_2 = [
            $change[4][2],  
            $change[3][2],  
            $change[2][2],  
            $change[1][2]  
        ];
        sort($temp_values_2); 
        
        
        $temp_values_3 = [
            $change[4][3], 
            $change[3][3], 
            $change[2][3], 
            $change[1][3]   
        ];
        sort($temp_values_3); 
        
       
        $temp_values_4 = [
            $change[4][4],  
            $change[3][4],  
            $change[2][4], 
            $change[1][4]  
        ];
        sort($temp_values_4); 
        
       
       
        $change[1][1] = $temp_values_1[0]; 
        $change[1][2] = $temp_values_1[1];  
        $change[1][3] = $temp_values_1[2]; 
        $change[1][4] = $temp_values_1[3];  
        
       
        $change[2][1] = $temp_values_2[0]; 
        $change[2][2] = $temp_values_2[1]; 
        $change[2][3] = $temp_values_2[2];  
        $change[2][4] = $temp_values_2[3]; 
        
       
        $change[3][1] = $temp_values_3[0]; 
        $change[3][2] = $temp_values_3[1]; 
        $change[3][3] = $temp_values_3[2];  
        $change[3][4] = $temp_values_3[3]; 
        
       
        $change[4][1] = $temp_values_4[0];  
        $change[4][2] = $temp_values_4[1]; 
        $change[4][3] = $temp_values_4[2]; 
        $change[4][4] = $temp_values_4[3]; 
        
        echo "<h2>Inside Array is Changed into Row:</h2><br>";
        
            echo "<tr>";
            foreach ($change as $row2) {
                echo "<tr>";
                foreach ($row2 as $cell2) {
                    echo "<td>$cell2</td>";
                }
                echo "</tr>";
            }
            echo "</tr>";
        ?>
    </table>

    <table class='array-table'>
        <?php
        $temp_15 = $change[2][2]; 
        $temp_16 = $change[2][3];  
        $temp_21 = $change[3][2];  
        $temp_22 = $change[3][3];  
        
       
        
      
        $change[3][3] = $temp_15; 
        
       
        $change[4][3] = $temp_16;  
       
        $change[2][2] = $temp_21; 
        
       
        $change[3][2] = $temp_22;  
         
        echo "<h2>21 and 22 changed in coloumn:</h2><br>";
        
        echo "<tr>";
        foreach ($change as $row4) {
            echo "<tr>";
            foreach ($row4 as $cell4) {
                echo "<td>$cell4</td>";
            }
            echo "</tr>";
        }
        echo "</tr>";
        ?>
    </table>

    <table class="array-table">
        <?php
       $temp = $change[3][3];  
       $change[3][3] = $change[2][3];  
       $change[2][3] = $temp; 
       
       echo "<h2>15 and 16 changed the place :</h2><br>";
        
       echo "<tr>";
       foreach ($change as $row5) {
           echo "<tr>";
           foreach ($row5 as $cell5) {
               echo "<td>$cell5</td>";
           }
           echo "</tr>";
       }
       echo "</tr>";

        ?>
</table>
</body>
</html>





















