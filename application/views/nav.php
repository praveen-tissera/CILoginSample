 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Ozi Tea</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li> 
                    <?php 
                    if (isset($this->session->userdata['logged_in'])) {   
                    $username = ($this->session->userdata['logged_in']['username']);
     
                       echo "<div class=\"dropdown\">
  <button style=\"margin-top:7px;\" class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">";
    echo "Hi " . $username;
    echo "<span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
    <li><a href=\"logout\">Logout</a></li>
    <li><a href=\"#\">My Orders</a></li>  
  </ul>
                        </div>";
                    }
                        ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>