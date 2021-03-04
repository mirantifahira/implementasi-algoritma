<!DOCTYPE html>
<html>
    <head>
    <title>Konversi Suhu</title>
    </head>
    <body>
        <form action="" method="post">
        <h2>  Konversi Suhu</h2>
        <table border="1px">
            <tr>
                <td>
                    Suhu <input type="text" size="14" name="suhu" placeholder="dalam satuan celcius"><br><br>
                    Konversi: <br>
                    <input type="radio" name="konversi" value="reamur" >Reamur<br>
                   <input type="radio" name="konversi" value="fahrenhait" >Fahrenhait<br>
                    <input type="submit" name="submit" value="Konversi" >
                </td>
            </tr>
        </table>
        </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $suhu=$_POST['suhu'];
             $konversi=$_POST['konversi'];
             if($konversi== "reamur"){
                 $hasil=(4/5)*$suhu;
                 echo " Hasil konversi ke Reamur: $hasil ";
             }else if($konversi=="fahrenhait"){
                 $hasil=(9/5)*$suhu+32;
                 echo "Hasil Konversi ke Fahrenhait : $hasil";
             }else{
                 echo "";
             }
         }
            ?> 
    </body>
</html>