<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- googleapis ajax -->
    <script type="text/javascript" src="js/googleapis.jquery.min.js"></script>
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- dataTable min js -->
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<!-- dataTable bootstrap min js -->
	<script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
	<!-- dataTable bootstrap min css  -->
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
	<!-- bootstrap4.3 min.js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Start templete</title>
  </head>
  <body>

  	<div class="container">
  		<h1 class="text-center pt-5">Data Table Example </h1>	


      <div class="table-responsive">
         <table id="user_data" class="table table-striped table-bordered">
           <thead>
             <tr>
               <th width="10%">image</th>
               <th width="35%">First Name</th>
               <th width="35%">Last Name</th>
               <th width="10%">edit</th>
               <th width="10%">delete</th>
             </tr>
           </thead>

         </table>
      </div>
  	</div>

    








<script >
  
$(document).ready(function(){
    var dataTable =  $('#user_data').dataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
          url:"fatch.php",
          method:"POST"
        },
          "columnDefs":[
   {
    "targets":[0, 3, 4],
    "orderable":false,
   },
  ],


      });
});

</script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.slim.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	
  </body>
</html>
