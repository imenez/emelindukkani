  </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center" >
                    <img src="<?=base_url()?>assets/admin/img/abc.png" class="user-image img-responsive">
					<a  href="<?=base_url()?>admin/users/edit/<?=$this->session->session_data['Id']?>"></i> <?=$this->session->session_data['fname']?> <?=$this->session->session_data['sname']?></a>
					</li>
					
                    <li>
                        <a  href="<?=base_url()?>admin/home"><i class="fa fa-home fa-3x"></i> Ana Sayfa</a>
                    </li>
                     <li>
                        <a  href="<?=base_url()?>admin/tsp"><i class="fa fa-envelope fa-3x"></i> Mesajlar</a>
                    </li>
                    <li>
                        <a  href="<?=base_url()?>admin/products"><i class="fa fa-file-word-o fa-3x"></i> Ürünler</a>
                    </li>
						   <li  >
                        <a   href="<?=base_url()?>admin/users"><i class="fa fa-users fa-3x"></i> Üyeler</a>
                    </li>	
                      <li  >
                        <a  href="<?=base_url()?>admin/settings"><i class="fa fa-cog fa-3x"></i> Ayarlar </a>
                    </li>
                    <li  >
                        <a  href="<?=base_url()?>admin/login/logout"><i class="fa fa-times fa-3x"></i> Çıkış</a>
                    </li>				
					 
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->