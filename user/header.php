<?php
   include '../admins/connect.php';

 ?>
<html>

<head>
  <div class="header-top-w3layouts">
    <div class="container">
      <div class="col-md-6 logo-w3">
        <a href="index.php"><img src="images/logo2.png" alt=" " /><font size=6 color=black>FASHION</font><font size=2 color=grey>CLUB</font></a>
      </div>
      <div class="col-md-6 phone-w3l">
        <ul>
          <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
          <li>+959767072571</li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
<div style="position: sticky; top:0; z-index: 1">
  <div class="header-bottom-w3ls">
    <div class="container">
      <div class="col-md-7 navigation-agileits">
        <nav class="navbar navbar-default">
          <div class="navbar-header nav_2" style="float: left">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav ">
              <li><a href="index.php" class="hyper "><span>Home</span></a></li>
              <li class="dropdown ">
                <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Clothing<b class="caret"></b></span></a>
                  <ul class="dropdown-menu multi">
                    <div class="row">
                      <div class="col-sm-4">
                        <ul class="multi-column-dropdown">
                                            <?php
                                                    global $connection;
                                                    $query ="select * from category";
                                                    $go_query =mysqli_query($connection,$query);
                                                    while ($out=mysqli_fetch_assoc($go_query)) {
                                                      # code...

                                            ?>
                          <li><a href="product.php?id=<?php echo $out['cat_id'] ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $out['cat_name'] ?></a></li>
                        <?php } ?>
                        </ul>

                      </div>


                      <div class="clearfix"></div>
                    </div>
                  </ul>
              </li>

              <li><a href="about.php" class="hyper"><span>About</span></a></li>
              <li ><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
            </ul>
          </div>
        </nav>
      </div>
                  <script>
          $(document).ready(function(){
            $(".dropdown").hover(
              function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
              },
              function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
              }
            );
          });
          </script>
      <div class="col-md-4 search-agileinfo">
        <form action="search.php" method="post">
          <input type="search" name="data" placeholder="Search for a Product..." required="">
          <button type="submit" name="search" class="btn btn-default search" aria-label="Left Align">
            <i class="fa fa-search" aria-hidden="true"> </i>
          </button>
        </form>
      </div>
      <div class="col-md-1 cart-wthree">
        <div class="row text-center">
               <!-- <div class="col-md-6 pr-3" style="float: left">
            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
               </div> -->
               <div class="col-md-6" style=" padding-left: 3px">
             <a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i></a>
               </div>
        </div>
      </div>
    </div>
  </div>

</div>
</head>

</html>
