<?php
require 'API.php';
$data = new Api("https://api.coindesk.com/v1/bpi/currentprice/eur.json");
$api_data = $data->getApiData();
$results = json_decode($api_data, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container mt-4">
  <h4>Basic Test Interview Ans</h4>    

 <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Currency Code  </th>
      <th class="th-sm">Rate</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(isset($_POST['btnSearch'])){
      $search = $_POST['search'];
      $query = 'SELECT * FROM ".$results."
      WHERE (`title` LIKE '%".$search."%')';
    }    

    foreach ($results['bpi'] as $key=>$bpi) {

      ?>
          <tr>
            <td><?php echo $bpi['code'] ?></td>
            <td><?php echo $bpi['rate'] ?></td>
          </tr>
        <?php  
        }
    ?>

  </tbody>
   
</table>
   
  
   
	<div class="box pagination"></div>
 
  
</div>

</body>



  


<script type="text/javascript">

     function show_data(data_id){
          $.ajax({
              type: "GET",
              url:  "ajax/show_detail.php",
              data: { data_id: data_id },
              success: function (result) {
                  $("#cat_product").html(result);
              }
          });
      }

</script>

</html>
 

 