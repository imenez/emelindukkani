<div id="page-wrapper" >
            <div class="row">
                    <div class="col-md-12">
                     <h2>Ürünler</h2>   
                    </div>
                </div>              
                 <div id="page-inner">
              //
			   
			   <div class="panel-heading">
                            Ürün ekle
                        </div>
                        <form class="navbar-form navbar-left" action="<?=base_url()?>admin/products/addsave" method="post" role="form">
  <div class="form-group" >
  
  
    <input type="text" name="name" class="form-control" placeholder="Name"><br><br>
	<input type="text" name="weight" class="form-control" placeholder="Weight"><br><br>
	<input type="text" name="price" class="form-control" placeholder="Price"><br><br>
	<input type="text" name="comment" class="form-control" placeholder="Comment"><br><br>
	<label>Origin</label>
                                            <select class="form-control" name="origin">
                                                <option>Belgian</option>
                                                <option>German</option>                                               
                                            </select><br><br>
	<input type="text" name="piece" class="form-control" placeholder="piece"><br><br>
	<label>Species</label>
                                            <select class="form-control" name="species">
                                                <option>Milky</option>
                                                <option>Bitter</option>                                               
                                            </select><br><br>
	<label>Status</label>
                                            <select class="form-control" name="status">
                                                <option>In stock</option>
                                                <option>Out of stock</option>                                               
                                            </select><br><br>
	<button type="submit" name="add" class="btn btn-warning">ADD</button>

  </div>
  
</form>
                       
                    </div>
                    <!--  end  Context Classes  -->

				
                
				
				
		     </div>
                    
			</div>
                