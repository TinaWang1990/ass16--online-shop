
  	<?php 
require_once('db.php');
  	 ?>
    



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tina's Shop</title>

    

  </head>
  <body>

    <div class="container"> 
      <h1 class="text-center text-primary my-5">Welcome to Tina's Shop</h1>
      <h2 id="total" class="text-center text-danger my-1"></h2>
      
      <div class="row">
        <?php 
          $db=new DBConnection();
          $result=$db->getAllItemsReturnObj();

   
          foreach ($result as $val){
          
        ?>

        <div class="col-4">
          <div class="card" style="width:18rem;">
            <img class="card-img-top" src="<?php echo $val->getImgUrl(); ?>" alt="Card image cap"  data-description="<?php echo $val->getDescription(); ?>">
            <div class="card-body">
              <h5 class="card-title" style="min-height: 5rem">
                <?php 
                echo $val->getName();
                 ?>
              </h5>

              <p class="text-right text-primary">
                <b>
                  <span class="card-price">
                    <?php 
                    echo $val->getPrice();
                   ?>
                  </span>
                  
                </b>
              </p>
              <div class="text-right">
                
                <button class="btn btn-success purchase">
                  Purchase
                </button>
              </div>
            </div>
           </div>
        </div>
    <?php 
       }
    ?>
    <div style="background-color: #ddd; color: #222; position:fixed; right: 2rem; bottom: 2rem; padding: 1rem 2.5rem; border-radius: 1rem">
          Total: <span class="TotalPrice">0</span>
          <button id="Submit" class="btn-warning">Submit</button>
    </div>
    <div id="des"  style="position:fixed; left:0; top:20%; width: 15vw; background-color: white;  "></div>
 </div>
</div>


 	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript">
      $('.card-img-top').mouseover(function(){
        var des=$(this).data('description');
        $('#des').text(des);
      });
      $('.card-img-top').mouseleave(function(){
        $('#des').text('');
      });
      // $('.purchase').click(function(){
      //     var price =$(this).data('price');
      //     //this is button
      //     var current_price=$('.TotalPrice').text();
      //   $('.TotalPrice').text((parseFloat(current_price)+parseFloat(price)).toFixed(2));
      //   });

      // $('.purchase').each(function(){
      //   $(this).click(function(){
      //     console.log('123');
      //   })
      // });
      // function AddPrice(price){
      //   var current_price=$('.TotalPrice').text();
      //   $('.TotalPrice').text((parseFloat(current_price)+parseFloat(price)).toFixed(2));
      // }


       $('.purchase').click(function(){
          var price=$('.purchase').parents('.card-body').find('.card-price').text();
          
          current_price=$('.TotalPrice').text();
          var total=(parseFloat(current_price)+parseFloat(price)).toFixed(2);
        $('.TotalPrice').text(total);

        });

       $('#Submit').click(function(){
         
        current_price=$('.TotalPrice').text();
          
          $('#total').text("Your total purchase is $"+current_price+".");
       

       });

    </script>




  </body>
</html>