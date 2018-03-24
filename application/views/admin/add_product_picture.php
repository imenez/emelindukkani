<div id="page-wrapper" >
            <div class="row">
                    <div class="col-md-12">
                     <h2>Resim ekleme formu</h2>   
                    </div>
                </div>              
                 <div id="page-inner">
             
			
			   <div class="panel-heading">
                           
                        </div>
                        <h3> <?=$info[0]->name?></h3>
						
						<?php
						if($info[0]->picture!=NULL)
						{?>
					<img height="250" width="175" src="<?=base_url()?>uploads/<?=$info[0]->picture?>"><br><br>
					
					<?php	
						}
						?>
				<?php echo form_open_multipart(base_url().'admin/products/upload_picture/'.$info[0]->Id);?>
                      <input type="file" name="userfile" size="20" />
					  <input type="submit" value="upload"/>
					  </form>
                 </div> 
                    <!--  end  Context Classes  -->

				
                
				
				
		     </div>
                    
			</div>
                