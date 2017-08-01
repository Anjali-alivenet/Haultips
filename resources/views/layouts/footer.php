<?php $this->load->helper('getdetails');

    $this->load->helper('footer');

  $sitedata = siteadmin();

    ?>

<footer class="footer">

  <div class="footer-content">

    <div class="container">

      <div class="row">

        <div class="footer-col links col-md-3 col-sm-4 col-xs-12">

          <div class="footer-col-inner">

            <h3 class="title"><?php columnname(1);  ?></h3>

            <ul class="list-unstyled">

				<?php columnsubmenuname(1);   ?>

              <!--<li><a href="#"><i class="fa fa-caret-right"></i>Who we are</a></li>

              <li><a href="#"><i class="fa fa-caret-right"></i>Press</a></li>

              <li><a href="#"><i class="fa fa-caret-right"></i>Blog</a></li>

              <li><a href="#"><i class="fa fa-caret-right"></i>Jobs</a></li>

              <li><a href="contact.html"><i class="fa fa-caret-right"></i>Contact us</a></li>-->

            </ul>
			
			<br />
			
			<h3 class="title"><?php columnname(3);  ?> </h3>

            <ul class="list-unstyled">

            <?php columnsubmenuname(3);   ?>

            </ul>

          </div>

          <!--//footer-col-inner--> 

        </div>

        <!--//foooter-col-->

        <div class="footer-col links col-md-3 col-sm-4 col-xs-12">

          <div class="footer-col-inner">

            <h3 class="title"><?php columnname(2);  ?> </h3>

            <ul class="list-unstyled">

            <?php columnsubmenuname(2);   ?>

            </ul>

          </div>

          <!--//footer-col-inner--> 

        </div>

        <!--//foooter-col-->

        <div class="footer-col links col-md-3 col-sm-4 col-xs-12 sm-break">

          <div class="footer-col-inner">

            <h3 class="title"><?php columnname(5);  ?> </h3>

            <ul class="list-unstyled">

            <?php transporterlinks(10);   ?>

            </ul>

          </div>

          <!--//footer-col-inner--> 

        </div>

        <!--//foooter-col-->

        <div class="footer-col connect col-md-3 col-sm-12 col-xs-12">

          <div class="footer-col-inner">

            <h3  class="title"><?php columnname(4);  ?></h3>

            <ul class="social list-inline">

              <?php columnsubmenuname(4);   ?>

            </ul>

            <div class="footer-col download">
            <div class="foot-box">
                    <h3 class="title"> Follow Us </h3>
                        <ul class="footer_social">
						
							<li><a href="<?php sociallink('fb'); ?>"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php sociallink('twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php sociallink('plus'); ?>"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="<?php sociallink('rs'); ?>"><i class="fa fa-rss"></i></a></li>
							<li><a href="<?php sociallink('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
						</ul>                   
                </div>

             <!-- <div class="footer-col-inner">

                <h3 class="title">Mobile apps</h3>

                <ul class="list-unstyled download-list">

                  <li><a href="#" class="btn btn-ghost"><i class="fa fa-apple"></i><span class="text">Download for iOS</span> </a></li>

                  <li><a href="#" class="btn btn-ghost"><i class="fa fa-android"></i><span class="text">Download for Android</span></a></li>
                   <li><a href="#" class="btn btn-ghost"><i class="fa fa-credit-card"></i><span class="text">Pay Now (INR)</span></a></li>

                </ul>

              </div>-->

              <!--//footer-col-inner--> 

            </div>

          </div>

          <!--//footer-col-inner--> 

        </div>

        <!--//foooter-col-->

        <div class="clearfix"></div>

      </div>

      <!--//row--> 

      

    </div>

    <!--//container--> 

    

  </div>

  <!--//footer-content-->

  <section style="background:#141414; padding:10px 0">

    <div class="container">

    <div class="row">

      <div class="footer-link">

        <ul>

           <?php if($this->session->userdata('driver_sess_id')=='') {?>

                  <?php footerlink();  ?>

                    <?php if($this->session->userdata('carr_cus_id')=='' && $this->session->userdata('cus_id')=='') {?>

                    <li><a href="<?php echo base_url('driver-login') ?>"><?php   echo 'Drivers Login' ;  ?></a></li>

                    <?php } else {} }?>

        </ul>

      </div>

      </div>

    </div>

  </section>

  <div class="bottom-bar">

    <div class="container"> <small class="copyright"><?php echo $sitedata[0]['copyright_text']; ?></small> </div>

    <!--//container--> 

  </div>

  <!--//bottom-bar--> 

</footer>



<!--  Javascript  

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->

<script  type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script> 

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-migrate-1.2.1.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		$("#qcfsubmit").click( function(){
			var name = $("input[name='uname']").val();
			var name2 = $.trim(name);
			$("input[name='uname']").val(name2);
			
			var message = $("textarea[name='message']").val();
			var message2 = $.trim(message);
			$("textarea[name='message']").val(message2);
		});
		$("#contactsubmit").click( function(){
			var name = $("input[name='name']").val();
			var name2 = $.trim(name);
			$("input[name='name']").val(name2);
			
			var message = $("textarea[name='message']").val();
			var message2 = $.trim(message);
			$("textarea[name='message']").val(message2);
		});

//        jQuery.validator.addMethod("noSpace", function(value, element) {
//            return value.indexOf(" ") < 0 && value != "";
//        }, "No space please");

        $(".checkemail").on("keydown", function (e) {
            return e.which !== 32;
        });

		$("#qcf").validate({
			rules: {
				emailid: {
					required: true,
//                    noSpace: true,
          maxlength:50,
					email: true
				}				
			}
		});
		
	});
	
	$.validator.addMethod("alpha", function(value, element) {
		return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/); //
	}, "Please enter only alpha character." );
	// email validation method rules            enter checkemail in class of field
	jQuery.validator.addMethod("checkemail", function(value, element) {
			  // allow any non-whitespace characters as the host part
			  var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
			  return this.optional( element ) || filter.test( value );
			}, 'Please enter a valid email addressx.');
	
			
	$(document).ready(function(){
		$("#contactFrmx").validate({
			rules: {
				email_id: {
					required: true,
          maxlength:50,
					email: true
				}
			}
		});
		
	});
	
	
	// email validation method rules            enter checkemail in class of field
	jQuery.validator.addMethod("checkemail", function(value, element) {
			  // allow any non-whitespace characters as the host part
			  var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
			  return this.optional( element ) || filter.test( value );
			}, 'Please enter a valid email address.');
	$.validator.addMethod("alpha", function(value, element) {
		return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/); //
	}, "Please enter only alpha character." );
			
</script>


<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script> 

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-hover-dropdown.min.js"></script> 

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.placeholder.js"></script>  

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/modernizr.js"></script>

<?php

$juri=basename($_SERVER['REQUEST_URI']);

if($juri=="obship" || $juri==""){

?>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.flexslider.js"></script> 

<?php } ?>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/main.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/default-sidebar.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.js"></script>



<!--for user defined javascript functions (16_10_2015 kishan)-->

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/obship.js"></script>

<?php echo stripslashes($sitedata[0]['footer_script']); ?>


<script type="text/javascript">

        

    $('.thumbnail').hover(

        function(){

            $(this).find('.caption').slideDown(250); //.fadeIn(250)

        },

        function(){

            $(this).find('.caption').slideUp(250); //.fadeOut(205)

        }

    ); 

</script>

