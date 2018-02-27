
<div class="col-sm-8">
  <table class="table my-table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Logo</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $numEntries = 3;
          $apiurl = "https://api.coinmarketcap.com/v1/ticker/?limit=" . (string)$numEntries;
          $response = json_decode(file_get_contents($apiurl), true);
  
          echo "<tr>";
          for($x = 0; $x < $numEntries; $x++) {
            for($i = 0; $i < 3; $i++) {
              if($i == 0) {
                echo "<td scope=\"row\">" . $response[$x]["id"] . "</td>";
              } elseif($i == 1) {
                $img = "../images/" . $response[$x]["id"] . ".png";
                echo "<td><img src=\"$img\" style=\"width: 100px; height=100px;\"></td>";
              } else {
                echo "<td>\$" . $response[$x]["price_usd"] . "</td>";
              }
            }
            echo "</tr>";
          }
        ?>
      </tr>
    </tbody>
  </table>
</div>