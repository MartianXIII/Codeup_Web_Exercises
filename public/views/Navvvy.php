<?php

//require_once "ad.show.php";
//require_once "users.create.php";
//require_once "create_form_test.php";

?>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-static-top">
              <a class="navbar-brand page-scroll" href="#page-top">
                  <i class="fa fa-play-circle"></i>  <span class="light">Holy Batschelet!</span>
              </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                  <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#browse">Browse</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="../bat_login.php">Log In</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#search">Search</a>
                  </li>
                  <li>
                                          <a href="#" data-toggle="modal" data-target="#registerModal">Sign Up</a>
                                      </li>
                    <!-- REGISTER MODAL -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="registerModalLabel">Please create a new alter ego</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="htmltest.php">
                  <div class="userCreate form-group">
                      <label for="first_name"></label>
                      <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                  </div>
                  <div class="userCreate form-group">
                      <label for="last_name"></label>
                      <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                  </div>
                  <div class="userCreate form-group">
                      <label for="user_name"></label>
                      <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Username">
                  </div>
                  <div class="userCreate form-group">
                      <label for="password"></label>
                      <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <div class="userCreate form-group">
                      <label for="email"></label>
                      <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Submit</button>
                  </div>

              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END REGISTER MODAL -->


                  <li>
                      <a class="page-scroll" href="#contact">List your Bat Ad</a>
                  </li>

              </ul>


          </div>
          <!-- /.navbar-collapse -->
          </nav>
