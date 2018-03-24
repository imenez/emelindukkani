<div id="page-wrapper" >
            <div class="row">
                    <div class="col-md-12">
                     <h2>Ürün Bilgileri</h2>   
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
											<th>Weight</th>
                                            <th>Price</th>
											<th>Status</th>
											<th>Species</th>
											<th>Origin</th>
											<th>Comment</th>
											
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
										
                                            <th><?=$info[0]->Id?></th>
                                            <th><?=$info[0]->name?></th>
                                            <th><?=$info[0]->weight?></th>
                                            <th><?=$info[0]->price?></th>
											<th><?=$info[0]->status?></th>
											<th><?=$info[0]->species?></th>
											<th><?=$info[0]->origin?></th>
											<th><?=$info[0]->comment?></th>
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
                