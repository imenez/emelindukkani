<div id="page-wrapper" >
            <div class="row">
                    <div class="col-md-12">
                     <h2>Ürünü Düzenle</h2>   
                    </div>
                </div>              
                 <div id="page-inner">
              
			   
			   <div class="panel-heading">
                        </div>
                        <form class="navbar-form navbar-left" action="<?=base_url()?>admin/products/updatesave/<?=$info[0]->Id?>" method="post" role="form">
  <div class="form-group" >
  
  
    <input type="text" name="name" class="form-control" placeholder="Name" value="<?=$info[0]->name?>"><br><br>
	<input type="text" name="weight" class="form-control" placeholder="Weight" value="<?=$info[0]->weight?>"><br><br>
	<input type="text" name="price" class="form-control" placeholder="Price" value="<?=$info[0]->price?>"><br><br>
	<input type="text" name="picture" class="form-control" placeholder="picture" value="<?=$info[0]->picture?>"><br><br>
	<label>Select Origin</label>
                                            <select class="form-control" name="origin" >
                                                <option><?=$info[0]->origin?></option>
												<option>Belgian</option>
                                                <option>German</option>                                               
                                            </select><br><br>
	<input type="text" name="comment" class="form-control" placeholder="Comment" value="<?=$info[0]->comment?>"><br><br>
	<input type="text" name="piece" class="form-control" placeholder="Price" value="<?=$info[0]->piece?>"><br><br>
	<label>Species</label>
                                            <select class="form-control" name="species" >
                                                <option><?=$info[0]->species?></option>
												<option>Bitter</option>
                                                <option>Milky</option>                                               
                                            </select><br><br>
	<label>Status</label>
                                            <select class="form-control" name="status" >
                                                <option><?=$info[0]->status?></option>
												<option>Out of stock</option>
                                                <option>In stock</option>                                               
                                            </select><br><br>										
											
	<button type="submit" name="add" class="btn btn-warning">UPDATE</button>

  </div>
  
</form>
                       
                    </div>
                    <!--  end  Context Classes  -->

				
                
				
				
		     </div>
                    
			</div>
                