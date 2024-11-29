<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="challange2.css">
    <title>Document</title>
</head>
<script>
    function fname(){
        const correct1 = 136;
        const correct2 = 137;
        const correct3 = 120;
        const correct4 = 121;
       const userinput1  = document.getElementbyid('user1').value;
       const userinput2  = document.getElementbyid('user2').value;
       const userinput3  = document.getElementbyid('user3').value;
       const userinput4  = document.getElementbyid('user4').value;

       if(userinput1 === correct1){
        window.alert('ok');

       }
       else{
        window.alert('wrong');
       }

       if(userinput2 === correct2){
        window.alert('ok');

       }
       else{
        window.alert('wrong');
       }

       if(userinput3 === correct3){
        window.alert('ok');

       }
       else{
        window.alert('wrong');
       }

       if(userinput4 === correct4){
        window.alert('ok');

       }
       else{
        window.alert('wrong');
       }
       

    

    }
</script>
<body>
    <table class='arr-table'>
        <?php
        

$array = array_fill(0, 16, array_fill(0, 16, "00"));


$array[7][7] = '<input  type="text" id="user1" style = width:15px />';
$array[8][7] = '<input type="text" id="user2"  style = width:15px />';
$array[7][8] = '<input type="text" id="user3"  style = width:15px />';
$array[8][8] = '<input type="text" id="user4"  style = width:15px />';


echo "<h2>16x16 Array with values set to '00' and input fields at specified positions:</h2><br>";


foreach ($array as $row) {
   echo "<tr>";
   foreach ($row as $cell) {
       echo "<td>$cell</td>";
   }
   echo "</tr>";
}

        ?>
    </table><br><br>
   <button onclick=fname() >Submit Values</button>
</body>
</html>
