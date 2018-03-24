<div id="page-wrapper" >
            <div class="row">
                    <div class="col-md-12">
                     <h2>Kullanıcıyı Düzenle</h2>   
                    </div>
                </div>              
                 <div id="page-inner">
              
			   
			   <div class="panel-heading">
                        </div>
                        <form class="navbar-form navbar-left" action="<?=base_url()?>admin/users/updatesave/<?=$info[0]->Id?>" method="post" role="form">
  <div class="form-group" >
  
  
    <input type="text" name="firstname" class="form-control" placeholder="First Name" value="<?=$info[0]->fname?>"><br><br>
	<input type="text" name="surname" class="form-control" placeholder="Surname" value="<?=$info[0]->sname?>"><br><br>
	<input type="text" name="username" class="form-control" placeholder="Username" value="<?=$info[0]->username?>"><br><br>
	<input type="email" name="email" class="form-control" placeholder="E-Mail" value="<?=$info[0]->email?>"><br><br>
	<label>Select Department</label>
                                            <select class="form-control" name="department" >
                                                <option><?=$info[0]->department?></option>
												<option>Bilgisayar</option>
                                                <option>Makine</option>                                               
                                            </select><br><br>
	<input type="password" name="password" class="form-control" placeholder="Password" value="<?=$info[0]->password?>"><br><br>
	<label>Status</label>
                                            <select class="form-control" name="status" >
                                                <option><?=$info[0]->status?></option>
												<option>Admin</option>
                                                <option>User</option>                                               
                                            </select><br><br>
	<button type="submit" name="add" class="btn btn-warning">UPDATE</button>

  </div>
  
</form>
                       
                    </div>
                    <!--  end  Context Classes  -->

				
                
				
				
		     </div>
                    
			</div>
                