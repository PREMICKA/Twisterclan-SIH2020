<!DOCTYPE html>
<html lang="en">
  <?php require("header_view.php")?>
  <body>
    
	<?php require("menu_view.php")?>
    <!-- END nav -->

    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/box.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url()?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Livestock</span></p>
            <h1 class="mb-3 bread">Livestock</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
        <?php if($livestock!=null){
            foreach($livestock as $row){?>
                   <div class="col-md-3 ftco-animate">
            <div class="blog-entry">
              <a href="<?php echo base_url("livestock/list/$row->id")?>" class="block-20" style="background-image: url('images/<?php echo $row->image?>");">
              </a>
            </div>
          </div>
            <?php }
        }?>
        </div>
       
      </div>
    </section>

    
  
<?php require("footer_view.php")?>
  </body>
</html>