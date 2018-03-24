<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Not Paylaşım Admin Paneli</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?=base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?=base_url()?>assets/admin/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Not Paylaş Admin Girişi</h2>
               
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
							   
                        <strong>   Giriş için e-mail ve şifrenizi giriniz </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" action="<?=base_url()?>admin/login/trylogin" method="POST">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="email" name="email" class="form-control" placeholder="E-Mail " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Beni hatırla
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#" >Şifremi Unuttum? </a> 
                                            </span>
                                        </div>
                                     
                                     <input type="submit" class="btn btn-primary" value="Giriş Yap" />
                                    <hr />
                                    </form>
                            </div>
                           <?php if ($this->session->flashdata("login_error")) 
		  { ?> 
		  <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <?=$this->session->flashdata("login_error")?>
                            </div>
			<?php
		  }	?>
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?=base_url()?>assets/admin/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?=base_url()?>assets/admin/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?=base_url()?>assets/admin/js/custom.js"></script>
   
</body>
</html>
