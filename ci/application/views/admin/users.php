<div id="page-wrapper" >
            <div class="row">
                    <div class="col-md-12">
                     <h2>Kullanıcılar</h2>   
                    </div>
                </div>              
                 <div id="page-inner">
          <?php if ($this->session->flashdata("result")) 
		  { ?> 
		  <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <?=$this->session->flashdata("result")?>
                            </div>
			<?php
		  }	?>
			   
			   <div class="panel-heading">
                                                
<a href="<?=base_url()?>admin/users/add" class="btn btn-primary btn-sm">KULLANICI EKLE</a>
                        </div>
                        
                        <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#id</th>
											<th>Name</th>
											<th>Surname</th>
                                            <th>Username</th>
											<th>Password</th>
											<th>E-Mail</th>
											<th>Department</th>
											<th>Status</th>
											<th>Actions</th>
                                        </tr>
                                    </thead>
                                        <?php
										foreach($veri as $rs)
										{
											
										?>
										<tr class="success">
											<td><?=$rs->Id?></td>
											<td><?=$rs->fname?></td>
											<td><?=$rs->sname?></td>                                           
                                            <td><?=$rs->username?></td>
                                            <td><?=$rs->password?></td>
											<td><?=$rs->email?></td>
											<td><?=$rs->department?></td>
											<td><?=$rs->status?></td>
											<td> 
												<a href="<?=base_url()?>admin/users/delete/<?=$rs->Id?>" class="btn btn-danger btn-sm">Delete</a>
												<a href="<?=base_url()?>admin/users/edit/<?=$rs->Id?>" class="btn btn-warning btn-sm">Edit</a>
												<a href="<?=base_url()?>admin/users/view/<?=$rs->Id?>" class="btn btn-info btn-sm">View</a>

												 </td>
                                        </tr>
										<?php
										}
										?>
                                        

                                </table>
                    </div>
                    <!--  end  Context Classes  -->

				
                
				
				
		     </div>
                    
			</div>
                