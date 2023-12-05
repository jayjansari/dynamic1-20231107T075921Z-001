<?php
include 'admin1/greenstore.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>greenstore</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .zero {
      height: 20px;
      width: 20px;
      background-color: red;
      border-radius: 50%;
      float: left
    }

    .now {
      height: 50px;
      border: none;
      width: 120px;

    }

    .shop {
      background-color: green;
      color: white;
    }

    .shop:hover {
      background-color: black;
      color: white;
    }


    .cart1 .cart {
      display: none;
    }

    .cart1:hover .cart {
      display: block;
    }
  </style>
</head>

<body>





  <div class="col-md-12 p-0"
    style="background-image:url(image/hero-section-bg.jpg);height:600px;background-size:cover;background-position:center">

    <nav class="navbar navbar-expand-md  navbar-dark" style="background-color:#343a40ad">

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img src="image/logo.svg" alt="">
      </a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">plants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">about</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">$0.00</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>


            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-user" aria-hidden="true"></i>


            </a>
          </li>


        </ul>
      </div>
    </nav>

    <div class="col-md-12" style="height:600px;background-color:#343a4073">
      <div style="width:100%;height:200px"></div>
      <p class="text-center text-light">welcome to the greenstore</p>

      <h1 class="text-center">Let’s Bring the Spring to <br> Your Home</h1>

      <center> <button class="text-center now">
          shop now
        </button></center>
    </div>
  </div> <br> <br>


  <div class="col-md-12" style="height:50px"></div>

  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
          <center>
            <h1>new plants</h1>
          </center>
        </div>


        <div class="col-md-6">


          <center> <button class="now shop">
              shop now
            </button> </center>
        </div>




      </div>
    </div>
  </div>

  <br>
  <div class="container">
    <div class="col-md-12">

      <div class="row">
<?php
$select="SELECT * FROM `demo` WHERE 1";
$result=mysqli_query($con,$select);
while($row=mysqli_fetch_array($result))
{
 ?>


  
        <div class="col-md-4">
          <div class="col-md-12">
       <img src="admin1/image/<?php echo $row['image'];  ?>" alt="" style="height:400px;" alt="" class="col-md-12">

            
          </div>

          <div class="col-md-12">
            <center>
              <p><?php echo $row['product'];  ?></p>
              <p><?php echo $row['cat'];    ?></p>
              <p><?php echo $row['price'];?></p>
            </center>

          </div>


        </div>
<?php
}
?>

        


        

          


        


      </div>
    
  </div>

  </div>

  <div class="col-md-12 " style="height:50px"></div>



  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6">
        <img src="image/plants-store-story-section-img.jpg" alt="" class="col-md-12">

      </div>
      <div class="col-md-6">
        <p style="margin-left:20px;margin-top:70px">OUR STORY</p>
        <h3 style="margin-left:20px">For People Who Love Plants</h3>
        <p style="margin-left:20px">Vivamus quam sociis tristique diam at donec nisl, hendrerit <br> leo nunc at velit
          lacinia porttitor a nulla tellus ultrices varius <br> aliquet sed in placerat. <br> <br>

          Facilisis eu faucibus diam cursus pulvinar consectetur purus <br> sem felis, mauris consectetur nisl vitae
          gravida ultricies sem <br> condimentum aliquet ut sed gravida amet vitae euismod <br> pulvinar volutpat
          laoreet pharetra.</p>
        <button class="now shop" style="margin-left:20px">
          read more
        </button>
      </div>
    </div>
  </div>

  <div class="col-md-12" style="height:50px"></div>

  <div class="col-md-12">
    <center>
      <h3>What Our Customers Say</h3>
    </center>
  </div> <br>

  <div class="col-md-12">
    <center>
      <div style="height:2px;width:4%;background-color:black"></div>
    </center>
  </div>

  <div class="col-md-12" style="height:30px"></div>

  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-4">
          <div class="col-md-12">
            <center><i class="fa fa-quote-left" aria-hidden="true" style="font-size:50px"></i>
            </center>

          </div>
          <div class="col-md-12">
            <center>
              <h6>Sed odio donec curabitur auctor amet</h6>
              <h6>tincidunt non odio enim felis tincidunt</h6>
              <h6>amet morbi egestas hendrerit.</h6>
            </center>
          </div>

          <div class="col-md-12">
            <center> <img src="image/plants-store-testimonial-avatar-img.jpg" alt="" style="border-radius:100%">
            </center>
          </div>
          <div class="col-md-12">
            <center>
              <h6>JENNIFER LEWIS</h6>
            </center>
            </center>

          </div>
        </div>


        <div class="col-md-4">

          <div class="col-md-12">
            <center><i class="fa fa-quote-left" aria-hidden="true" style="font-size:50px"></i>
            </center>

          </div>
          <div class="col-md-12">
            <center>
              <h6>Sed odio donec curabitur auctor amet</h6>
              <h6>tincidunt non odio enim felis tincidunt</h6>
              <h6>amet morbi egestas hendrerit.</h6>
            </center>
          </div>

          <div class="col-md-12">
            <center> <img src="image/plants-store-testimonials-avatar-img-2.jpg" alt="" style="border-radius:100%">
            </center>
          </div>
          <div class="col-md-12">
            <center>
              <h6>ALICIA HEART</h6>
            </center>
            </center>

          </div>

        </div>




        <div class="col-md-4">

          <div class="col-md-12">
            <center><i class="fa fa-quote-left" aria-hidden="true" style="font-size:50px"></i>
            </center>

          </div>
          <div class="col-md-12">
            <center>
              <h6>Sed odio donec curabitur auctor amet</h6>
              <h6>tincidunt non odio enim felis tincidunt</h6>
              <h6>amet morbi egestas hendrerit.</h6>
            </center>
          </div>

          <div class="col-md-12">
            <center> <img src="image/plants-store-testimonials-avatar-img-1.jpg" alt="" style="border-radius:100%">
            </center>
          </div>
          <div class="col-md-12">
            <center>
              <h6>JUAN CARLOS</h6>
            </center>
            </center>

          </div>



        </div>

      </div>
    </div>
  </div>

  <div class="col-md-12" style="height:50px"></div>

  <div class="col-md-12 p-0"
    style="background-image:url(image/footer-background.jpg);height:600px;background-size:cover;">

    <div class="col-md-12 p-0" style="background-color:#00000066;height:600px;">
      <div class="col-md-12" style="height:200px"></div>
      <p class="text-center text-light">gift card</p>
      <center>
        <h1 class="text-light">Give the Gift of Greenery</h1>
      </center>
      <p class="text-center text-light">Pretium tortor risus enim neque quis pellentesque maecenas proin odio eget arcu
      </p>
      <center><button style="height:50px;border:none;width: 200px;">purchase a gift card</button></center>
    </div>
  </div>

  <div class="col-md-12" style="height:100px"></div>


  <div class="container">
<div class="col-md-12">
<div class="row">
  <div class="col-md-4">
    <div class="row">
<div class="col-md-2">
  <button style="border: none;border-radius: 100%;background-color: green;color: white;"><i class="fa fa-lock" aria-hidden="true" style="font-size: 40px;width:50px;height: 45px;"></i>
  </button>
</div>
<div class="col-md-10">
  <h6 class="ml-2">SECURE PAYMENT</h6>
  <p class="ml-2">Curabitur interdum,nisl at tincidunt.</p>

</div>
    </div>
  </div>
  
  
  <div class="col-md-4">

    <div class="row">
      <div class="col-md-2">
        <button style="border: none;border-radius: 100%;background-color: green;color: white;"><i class="fa fa-archive" aria-hidden="true" style="font-size: 40px;width:50px;height: 45px;"></i></i>
        </button>
      </div>
      <div class="col-md-10">
        <h6 class="ml-2">DELIVERED WITH CARE</h6>
        <p class="ml-2">Donec sit amet neque id nisl.</p>
      
      </div>
          </div>

  </div>
  
  
  
  
  
  <div class="col-md-4">

    <div class="row">
      <div class="col-md-2">
        <button style="border: none;border-radius: 100%;background-color: green;color: white;"><i class="fa fa-thumbs-up" aria-hidden="true" style="font-size: 40px;width:50px;height: 45px;"></i>

        </button>
      </div>
      <div class="col-md-10">
        <h6 class="ml-2">EXCELLENT SERVICE</h6>
        <p class="ml-2">Amet neque id nisl ullamcorper.</p>
      
      </div>
          </div>

  </div>
</div>
</div></div>

<div class="col-md-12" style="height:50px"></div>

<div class="col-md-12" style="height:500px;background-color:#061406;">

<div class="col-md-12" style="height:150px"></div>

 <center><a href="" class="text-decoration-none text-light">home</a>
  <a href="" class="ml-3 text-decoration-none text-light">plant</a><a href="" class="ml-3 text-decoration-none text-light">about</a><a href="" class="ml-3 text-decoration-none text-light">contact</a></center>

<div class="col-md-12" style="height:50px"></div>

 <center><h4 class="text-light">Subscribe to our newsletter</h4></center> <br>

<center> <input type="text" placeholder="your email address..." style="height:50px;width: 500px;border-radius:5px 5px 5px 5px;border:none;">
<button style="height:45px;width:150px;border: none;background-color: green;color: beige;margin-left: 10px;" class="mt-4">subscribe</button></center>

<center><i class="fa fa-instagram mt-3 text-light" aria-hidden="true"></i>
  <i class="fa fa-facebook-official ml-3 text-light" aria-hidden="true"></i>
  <i class="fa fa-twitter text-light ml-3" aria-hidden="true"></i></center>

<hr class="bg-light" style="margin-top:50px">

<center><p class="text-light">© 2023 Plant Shop. Powered by Plant Shop.</p></center>

<button style="position:fixed;top: 400px;right: 0px;height:50px;width: 150px;border: none;"><i class="fa fa-th" aria-hidden="true"></i><span>customize</span></button>







</div>
</body>

</html>