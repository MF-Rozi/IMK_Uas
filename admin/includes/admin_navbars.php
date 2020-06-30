<div class="container-fluid"></div>
<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-md"
role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span>
&#x2630;</button> <a class="navbar-brand"
    href="index.php">Admin Page</a>
    <!-- Top Menu Items -->
    <ul class="nav ml-auto top-nav">
        <li class="nav-item"><a href="../index.php" class="nav-link">Home</a>
        </li>
        <li class="dropdown nav-item"> <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?> <b class="caret"></b></a>
            <ul
            class="dropdown-menu">
                <li class="dropdown-item"> <a href="./profile.php?section=<?php echo $_SESSION['username']?> "><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider dropdown-item"></li>
                <li class="dropdown-item"> <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
    </ul>
    </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation
    menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="nav-item"> <a href="index.php" class="active nav-link"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <?php if($_SESSION[ 'role']==3 ){
              echo '<li>
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-file-text"></i> News <i class="fa fa-fw fa-caret-down"></i></a>

                        <ul id="posts" class="collapse">

                            <li>

                                <a href="./posts.php">View All News</a>

                            </li>

                            <li>

                                <a href="posts.php?source=add_post">Add News</a>

                            </li>

                        </ul>





                    <li class="nav-item">

                        <a href="./categories.php" class="nav-link"><i class="fa fa-fw fa-book"></i> Categories</a>

                    </li>

                    <!-- <li >

                        <a href="comment.php"><i class="fa fa-fw fa-comments"></i> Comments</a>

                    </li> -->

                    <li class="nav-item">

                         <a href="javascript:;" data-toggle="collapse" data-target="#user" class="nav-link"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>

                        <ul id="user" class="collapse">

                            <li>

                                <a href="./users.php">View All Users</a>

                            </li>

                            <li>

                                <a href="users.php?source=add_user">Add Users</a>

                            </li>

                        </ul>

                    </li>

                    ';

               }else if($_SESSION['role']==2){

                echo ' <li class="nav-item">

                        <a href="javascript:;" class="dropdown-toggle nav-link" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-file-text"></i> News <i class="fa fa-fw fa-caret-down"></i></a>

                        <ul id="posts" class="collapse">

                            <li>

                                <a href="./posts.php">View All News</a>

                            </li>

                            <li>

                                <a href="posts.php?source=add_post">Add News</a>

                            </li>

                        </ul>

                    </li>



                    <li class="nav-item">

                        <a href="./categories.php" class="nav-link"><i class="fa fa-fw fa-book"></i> Categories</a>

                    </li>

                    <!-- <li >

                        <a href="comment.php"><i class="fa fa-fw fa-comments"></i> Comments</a>

                    </li> -->

                    <!--<li>

                         <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>

                        <ul id="user" class="collapse">

                            <li>

                                <a href="./users.php">View All Users</a>

                            </li>

                            <li>

                                <a href="users.php?source=add_user">Add Users</a>

                            </li>

                    </li>

                    -->

                    ';

               }



               ?>   <li class="nav-item">

                        <a href="./profile.php?section=<?php echo $_SESSION['$username']; ?>" class="nav-link"><i class="fa fa-fw fa-user"></i> Profile</a>

                    </li>

                </ul>

            </div>

            <!-- /.navbar-collapse -->

        </nav>