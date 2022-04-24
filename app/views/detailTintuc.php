<section id="content-wrap" class="blog-single">
<div class="row">
<div class="col-twelve">

   			<article class="format-standard">  

						<h3 class="page-title">
							<?php echo $value["name"]?>
						</h3>	

						<ul class="entry-meta">
										
							<li class="cat">
								<a href="">
									<?php
										 $key = $this->Model->fetchOne("select * from menu_catalog where id=".$value["catalog"]);
										if(isset($key["name"]))
											echo $key["name"];
									?>
								</a>			
						</ul>						

						<div class="entry-content">
							<span><?php echo $value["description"]?></span>
							<p>
								<?php echo $value["content"]?>	
							</p>
						</div>	  			   

				</article>

			</div> 
		</div>