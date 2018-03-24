<div id="page-wrapper" >
            <div class="row">
                    <div class="col-md-12">
                     <h2>Ürünler</h2>   
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
                                                
<a href="<?=base_url()?>admin/products/add" class="btn btn-primary btn-sm">ÜRÜN EKLE</a>
                        </div>
                        
                        <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#id</th>
											<th>Name</th>
											<th>Picture</th>
											<th>Weight</th>
                                            <th>Price</th>
											<th>Status</th>
											<th>Species</th>
											<th>Origin</th>
											<th>Comment</th>
											<th>Piece</th>
											<th>Gallery</th>
											<th>Actions</th>
                                        </tr>
                                    </thead>
                                        <?php
										foreach($data as $rs)
										{
											
										?>
										<tr class="success">
											<td><?=$rs->Id?></td>
											<td><?=$rs->name?></td>
											
											<td><a href="<?=base_url()?>admin/products/add_picture/<?=$rs->Id?>">
											<?php
											if($rs->picture==NULL)
											{?>
												 Add Picture
											<?php
											}
											else
											{?>
												<img height="50" src ="<?=base_url()?>uploads/<?=$rs->picture?>">
											<?php	
											}
											?>
											</a></td>
											
											<td><?=$rs->weight?></td>
											<td><?=$rs->price?></td>                                           
                                            <td><?=$rs->status?></td>
                                            <td><?=$rs->species?></td>
											<td><?=$rs->origin?></td>
											<td><?=$rs->comment?></td>
											<td><?=$rs->piece?></td>
											<td><a href="<?=base_url()?>admin/products/product_gallery/<?=$rs->Id?>">Gallery</a></td>
											
											<td> 
												<a href="<?=base_url()?>admin/products/delete/<?=$rs->Id?>" class="btn btn-danger btn-sm">Delete</a>
												<a href="<?=base_url()?>admin/products/edit/<?=$rs->Id?>" class="btn btn-warning btn-sm">Edit</a>
												<a href="<?=base_url()?>admin/products/view/<?=$rs->Id?>" class="btn btn-info btn-sm">View</a>

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
                