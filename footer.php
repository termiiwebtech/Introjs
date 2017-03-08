<div class="pusher"></div>



	<!-- Bottom scripts (common) -->
 <script src="<?php echo base_url('assets/js/gsap/main-gsap.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/joinable.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/resizeable.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/neon-api.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/neon-login.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/neon-register.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/jquery.inputmask.bundle.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/intro.js'); ?>"></script>


	<!-- JavaScripts initializations and stuff -->
 <script src="<?php echo base_url('assets/js/neon-custom.js'); ?>"></script>


	<!-- Demo Settings -->
	 <script src="<?php echo base_url('assets/js/neon-demo.js'); ?>"></script>

<script>
//Based on the assumption that Jquery is available
	$(document).ready(function(){
	//Check that user hasn't accessed this app before
		if(localStorage.hasItem('user.visited') === null)
		{
		 //Means user has never visited
		 introJs.start(); //start intro.js	
		}
		//We need to bind an event to state that user has finished the tutorial if not if page was loaded and immediately refreshed it would never show
		introJs().oncomplete(function() {
		  //Save the state for completion
		  localStorage.setItem('user.visited','true');	
		});
		
	});
	
</script>


