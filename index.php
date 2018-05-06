<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Expedia Task </title>
        <link rel="stylesheet" href="sheet.css">
    </head>
    <body>
    
        <?php
      
            $url="https://offersvc.expedia.com/offers/v2/getOffers?scenario=deal-finder&page=foo&uid=foo&productType=Hotel&destinationName=New%20Orleans";
            $c= curl_init($url);
            curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($c, CURLOPT_SSL_VERIFYPEER , 0);
            curl_setopt($c, CURLOPT_SSL_VERIFYHOST  , 0);
            $j= curl_exec($c);
            $arr= json_decode($j,true);
            
            for($x=0;$x<count($arr["offers"]["Hotel"]);$x++)
            {
                echo "<table>";
                echo '<tr class="tr1">';
               echo "<td class='td1'>" . "<p class='p1'>Hotel Name:</p>". $arr["offers"]["Hotel"][$x]["hotelInfo"]["hotelName"] . "</td>" . "<br/>";
               
                echo "<td class='td1'>" . "<p class='p1'>Destination:</p>". $arr["offers"]["Hotel"][$x]["destination"]["longName"] . "</td>" . "<br/>";
                echo "<td class='td1'>" . "<p class='p1'>Price: </p>". $arr["offers"]["Hotel"][$x]["hotelPricingInfo"]["averagePriceValue"] . "</td>" . "<br/>";
               echo '</tr>';
                 echo "</table>";
                
            }
           
        
        ?>
    </body>
</html>