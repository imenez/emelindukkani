<div id="page-wrapper" >
            <div class="row">
                    <div class="col-md-12">
                     <h2>Kullanıcı Bilgileri</h2>   
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
                                                
                        </div>
                        
                       <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#id</th>
                                            <th>Name</th>
                                            <th>Name</th>
                                            <th>Username</th>
											<th>E-Mail</th>
											<th>Password</th>
											<th>Department</th>
											<th>Status</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><?=$info[0]->Id?></th>
                                            <th><?=$info[0]->fname?></th>
                                            <th><?=$info[0]->sname?></th>
                                            <th><?=$info[0]->username?></th>
											<th><?=$info[0]->email?></th>
											<th><?=$info[0]->password?></th>
											<th><?=$info[0]->department?></th>
											<th><?=$info[0]->status?></th>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->

                    </div>
                    <!--  end  Context Classes  -->

				
                
				
				
		     </div>
                    
			</div>
                