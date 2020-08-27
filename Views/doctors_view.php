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
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url()?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Doctors</span></p>
            <h1 class="mb-3 bread">Doctors</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          
          <?php if($doctors != null){
              foreach($doctors as $row){?>
                  
		 <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="" class="block-20" style="background-image: url('images/image_4.jpg');">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31330.542532704658!2d76.97350662031408!3d11.014764248235076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8582884dbcc3b%3A0xd0975c182fe604b9!2sPSGR%20Krishnammal%20College%20for%20Women!5e0!3m2!1sen!2sin!4v1596205239648!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              
              </a>
              <div class="text d-flex py-4">
                <div class=" pl-3">
	                <h3 class="heading"><a href="#"><?php echo $row->doctorname?><br><?php echo $row->address?></a></h3>
	              </div>
              </div>
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