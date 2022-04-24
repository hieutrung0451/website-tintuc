     <?php
         foreach ($data as $value) {
      ?>

            <article class="brick entry format-standard animate-this">


               <div class="entry-thumb">
                  <a href="index.php?controller=detailTintuc&id=<?php echo $value['token']?>" class="thumb-link">
                     <img src="<?php echo $value["avatar"]?>" alt="building">             
                  </a>
               </div>

               <div class="entry-text">
                  <div class="entry-header">

                     <div class="entry-meta">
                        <span class="cat-links">
                           <a href="#">
                              <?php
                                 $key = $this->Model->fetchOne("select * from menu_catalog where id=".$value["catalog"]);
                                 if(isset($key["name"]))
                                    echo $key["name"];
                              ?>
                           </a>                         
                        </span>        
                     </div>

                     <h1 class="entry-title"><a href="index.php?controller=detailTintuc&id=<?php echo $value['token']?>">
                        <?php echo $value["name"]?>
                     </a></h1>
                     
                  </div>
                  <div class="entry-excerpt">
                     <?php echo $value["description"]?>
                  </div>
               </div>

            </article> <!-- end article -->

            
   <?php }?>

         </div> <!-- end brick-wrapper --> 

      </div> <!-- end row -->

     <div class="row-md-12">
        <ul class="pagination"> 
       <?php for($i=1; $i<=$page_show; $i++){ ?>
               <a href="index.php?p=<?php echo $i ?>" class="page-numbers">
               <?php echo $i; ?></a>
         <?php } ?> 
         </ul>
      </div>