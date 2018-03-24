<div id="page-wrapper" >
            <div class="row">
                    <div class="col-md-12">
                     <h2>Kullanıcılar</h2>   
                    </div>
                </div>              
                 <div id="page-inner">
              //
			   
			   <div class="panel-heading">
                            Kullanıcı Ekle
                        </div>
                        <form class="navbar-form navbar-left" action="<?=base_url()?>admin/users/addsave" method="post" role="form">
  <div class="form-group" >
  
  
    <input type="text" name="firstname" class="form-control" placeholder="First Name"><br><br>
	<input type="text" name="surname" class="form-control" placeholder="Surname"><br><br>
	<input type="text" name="username" class="form-control" placeholder="Username"><br><br>
	<input type="email" name="email" class="form-control" placeholder="E-Mail"><br><br>
	<label>Select Department</label>
                                            <select class="form-control" name="department">
                                                <option>Bilgisayar</option>
                                                <option>Makine</option>                                               
                                            </select><br><br>
	<input type="password" name="password" class="form-control" placeholder="Password"><br><br>
	<label>Status</label>
                                            <select class="form-control" name="status">
                                                <option>Admin</option>
                                                <option>User</option>                                               
                                            </select><br><br>
	<button type="submit" name="add" class="btn btn-warning">ADD</button>

  </div>
  
</form>
                       
                    </div>
                    <!--  end  Context Classes  -->

				
                
				
				
		     </div>
                    
			</div>
                