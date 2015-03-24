<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();

    ob_start();
    
    $_SESSION['name']="Aniket";
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="existinglabs.php">ResearchBros</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['name']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="forms.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <!--<li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>-->
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="account.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <img id="logo" src="http://static.dnaindia.com/sites/default/files/2015/01/14/301718-cristiano-ronaldo.jpg">
                    </li>
                    <li>
                        <a href="existinglabs.php"><i class="fa fa-fw fa-dashboard"></i>Existing Labs</a>
                    </li>
                    <li>
                        <a href="editLabs.php"><i class="fa fa-fw fa-dashboard"></i>Add New Lab</a>
                    </li>
                    <!--<li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>-->
                    <li >
                        <a href="account.php"><i class="fa fa-fw fa-edit"></i>User Profile</a>
                    </li>

                    <li >
                        <a href="forms.php"><i class="fa fa-fw fa-edit"></i>Company Profile</a>
                    </li>
                    <!--<li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="existinglabs.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Add New Lab
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                     <!--<div class="col-lg-6">

                       <form role="form">

                            <div class="form-group">
                                <label>Text Input</label>
                                <input class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>

                            <div class="form-group">
                                <label>Text Input with Placeholder</label>
                                <input id="test" class="form-control"  placeholder="Enter text">
                            </div>
                            
                            <div class="form-group">
                                <label>Static Control</label>
                                <p class="form-control-static">email@example.com</p>
                            </div>

                            <div class="form-group">
                                <label>File input</label>
                                <input type="file">
                            </div>

                            <div class="form-group">
                                <label>Text area</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Checkboxes</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 1
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 2
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 3
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Inline Checkboxes</label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">1
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">2
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">3
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Radio Buttons</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Inline Radio Buttons</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Selects</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Multiple Selects</label>
                                <select multiple class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        
                        </form>

                    </div>-->
                    <div class="col-lg-6">
                        <h1>Add New Lab</h1>


                            <fieldset>

                                <div class="form-group">
                                    <label for="disabledSelect">Service Name</label>
                                    <input class="form-control" name="sname" id="snameField" type="text" placeholder="Service Name">
                                </div>


								<div class="form-group">
                                    <label for="disabledSelect">Facility Name</label>
                                    <input class="form-control" name="fname" id="fnameField" type="text" placeholder="Facility Name">
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="disabledSelect">Department</label>
                                    <input class="form-control" name="department" id="departmentField" placeholder="Department">
                                </div>

                                <div class="form-group">
                                    <label for="disabledSelect">City</label>
                                    <input class="form-control" name="city" id="cityField" placeholder="City">
                                </div>

                               <div class="form-group">
                                    <label for="disabledSelect">Country</label>
                                    <input class="form-control" name="country" id="countryField" placeholder="Country">
                                </div>

                               <div class="form-group">
                                    <label for="disabledSelect">Pincode</label>
                                    <input class="form-control" name="pincode" id="pincodeField" placeholder="Pincode">
                                </div>


								<div class="form-group">
                                    <label for="disabledSelect">Description</label>
                                    <input class="form-control" name="description" id="descriptionField" placeholder="Description">
                                </div>
                                
                                
                               <div class="form-group">
                                    <label for="disabledSelect">Link</label>
                                    <input class="form-control" name="link" id="linkField" placeholder="Link">
                                </div>

								<!--<input type="text" name="city" id="cityField" placeholder="City"/><br>
								<input type="text" name="country" id="countryField" placeholder="Country"/><br>
								<input type="text" name="pincode" id="pincodeField" placeholder="Pincode"/><br>
  								<input type="text" name="description" id="descriptionField" placeholder="Description"/><br>
								<input type="text" name="link" id="linkField" placeholder="Link"/><br>-->



                                <button class="btn btn-primary" id="editname" onClick="addLab();">ADD</button>
                        

                                
                                <!--<div class="form-group">
                                    <label for="disabledSelect">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-control">
                                        <option>Disabled select</option>
                                    </select>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Disabled Checkbox
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary">Disabled Button</button>
                                -->
                            </fieldset>


                       
                        <!--<h1>Form Validation</h1>

                        <form role="form">

                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess">Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>

                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning">Input with warning</label>
                                <input type="text" class="form-control" id="inputWarning">
                            </div>

                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Input with error</label>
                                <input type="text" class="form-control" id="inputError">
                            </div>

                        </form>

                        <h1>Input Groups</h1>

                        <form role="form">

                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>

                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-eur"></i></span>
                                <input type="text" class="form-control" placeholder="Font Awesome Icon">
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                            </div>

                        </form>

                        <p>For complete documentation, please visit <a href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a>.</p>-->

                    </div>

                    
                     
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script language="javascript" src="js/ajaxLab.js"></script>
 
    <script type="text/javascript">
                                
                                function addLab()
                                {
                                    var sname = document.getElementById("snameField").value;
                                    var fname = document.getElementById("fnameField").value;
									var department = document.getElementById("departmentField").value;
									var city = document.getElementById("cityField").value;
									var country = document.getElementById("countryField").value;
									var pincode = document.getElementById("pincodeField").value;
                                    var description = document.getElementById("descriptionField").value;
									var siteLink = document.getElementById("linkField").value;
                                    console.log("inside add lab name:" + name + "description:" + description);
                                    var emailID = "<?php echo $_SESSION['email']; ?>";
                                    addLabArg(emailID,sname,fname,department,city,country,pincode,description,siteLink);
                                }
                                
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
