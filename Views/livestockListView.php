<!DOCTYPE html>
<html lang="en">
 <?php require("header_view.php")?>
  <body>
    
	  <?php require("menu_view.php")?>
    <!-- END nav -->
   <?php if($livestock!=null){
        foreach($livestock as $row){?>
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url()?>/images/<?php echo $row->image?>');" data-stellar-background-ratio="0.5">
     <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url()?>">Home</a></span> <span class="mr-2"><a href="<?php echo base_url("livestock")?>">Livestock</a></span> <span><?php echo $row->livestockname?></span></p>
            <h1 class="mb-3 bread"><?php echo $row->livestockname?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">About</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
             <h2 class="mb-3 mt-5">#2. Revenues</h2>
            
            <img src="<?php echo base_url("images/Slide04.jpg")?>" />
             <img src="<?php echo base_url("images/Slide13.jpg")?>" />
              
        <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Livestock</a>
                <a href="#" class="tag-cloud-link">SIH</a>
                <a href="#" class="tag-cloud-link">PSGRKCW</a>
                <a href="#" class="tag-cloud-link">AP</a>
              </div>
            </div>
            
          


           

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
         
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Medical Conditions</h3>
            <?php $diseases=explode(",",$row->medicalconditions);  
            foreach($diseases as $disease){?>
            
                <li><a href="<?php echo base_url("livestock/medicalCondition")?>"><?php echo $disease?></a></li>
                <?php }
        ?>
                  </div>
            </div>

          

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">Livestock</a>
                <a href="#" class="tag-cloud-link">SIH</a>
                <a href="#" class="tag-cloud-link">PSGRKCW</a>
                <a href="#" class="tag-cloud-link">AP</a>
              </div>
            </div>

         
          </div>

        </div>
      </div>
    </section> <!-- .section -->
<?php  }
    }?>
<?php require("footer_view.php")?>
  </body>
</html>