<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hpy
 */

get_header(); ?>



<h1 id="h1-jp"><b>WELCOME TO HAPPYKITE</b></h1>
<p id="p-cen" ><b>We're an agency, a good agency - soon to be an even better agency once we've hired our new web developer! </b></p>

<button>WORK WITH US</button>

<!--------HOW CAN WE HELP SECTION--------------->

<section id="howwecanhelp">
<h1>HOW CAN WE HELP?</h1>
    
    <div class="container-jp">

 <div class="column-jp">
    <div class="container-little">
     <img src="icons/ico-design.png" alt="Icon">
      <div class="details">
      <p id="p-white">DESIGN & UX</p>
      <p id="p-white" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a erat sit amet est varius vestibulum id sed odio. Aenean eget enim eu urna consectetur cursus.</p>
          <p id="p-white" >Learn More</p>
      </div>
    </div>
 </div>

 <div class="column-jp">
    <div class="container-little">
     <img src="icons/ico-dev.png" alt="Icon">
      <div class="details">
       <p id="p-white" >WORDPRESS DEVELOPMENT</p>
      <p id="p-white" >Nunc lacinia mi neque, in egestas turpis rutrum sed. Vivamus id nisl eget tellus rutrum scelerisque. Praesent a leo consequat, fermentum diam ac, aliquam magna vivamus.</p>
          <p id="p-white">Learn More</p>
      </div>
    </div>
 </div>

 <div class="column-jp">
    <div class="container-little">
     <img src="icons/ico-marketing.png" alt="Icon">
      <div class="details">
       <p id="p-white">DIGITAL MARKETING</p>
      <p id="p-white" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a erat sit amet est varius vestibulum id sed odio. Aenean eget enim eu urna consectetur cursus.</p>
          <p id="p-white" >Learn More</p>
      </div>
    </div>
 </div>

 <div class="column-jp">
    <div class="container-little">
     <img src="icons/ico-support.png" alt="Icon">
      <div class="details">
      <p id="p-white" >SUPPORT & MAINTENANCE</p>
      <p id="p-white">Nunc lacinia mi neque, in egestas turpis rutrum sed. Vivamus id nisl eget tellus rutrum scelerisque. Praesent a leo consequat, fermentum diam ac, aliquam magna vivamus.</p>
          <p id="p-white" >Learn More</p>
      </div>
    </div>
 </div>
   

</div>
</section>


<!--------SOME OF OUR WORK... SECTION--------------->

<section>  
 <h1>SOME OF OUR WORK...</h1>    

<div class="container-jp">

 <div class="column-jp">
    <div class="container-little-2">
     <img src="images/asset-1.jpg" alt="Exterior Solutions" class="image" style="width:100%">
      <div class="details">
      <p>EXTERIOR SOLUTIONS</p>
      <p>Nunc lacinia mi neque, in egestas turpis rutrum sed. Vivamus id nisl eget tellus rutrum scelerisque. Praesent a leo consequat, fermentum diam ac, aliquam magna vivamus.</p>
      </div>
    </div>
 </div>

 <div class="column-jp">
    <div class="container-little-2">
     <img src="images/asset-2.jpg" alt="Owatrol Direct" class="image" style="width:100%">
      <div class="details">
      <p>OWATROL DIRECT</p>
      <p>Nunc lacinia mi neque, in egestas turpis rutrum sed. Vivamus id nisl eget tellus rutrum scelerisque. Praesent a leo consequat, fermentum diam ac, aliquam magna vivamus.</p>
      </div>
    </div>
 </div>

 <div class="column-jp">
    <div class="container-little-2">
     <img src="images/asset-3.jpg" alt="In the book" class="image" style="width:100%">
      <div class="details">
      <p>IN THE BOOK</p>
      <p>Nunc lacinia mi neque, in egestas turpis rutrum sed. Vivamus id nisl eget tellus rutrum scelerisque. Praesent a leo consequat, fermentum diam ac, aliquam magna vivamus.</p>
      </div>
    </div>
 </div>
   
</div>
</section>

<!--------WHO ARE WE ANYWAY--------------->


<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="welcome-card">
				
				<div class="card-right entry-content">
					<h2 id="h2-jp" ><?php _e('WHO ARE WE ANYWAY?'); ?></h2>
                    <p><strong>If you're seeing this, then congratulations - you've managed to get the theme up and running correctly!</strong></p>
					<p>We'd be very grateful if you could complete this page so that is matches the design, which you can view here:Dropbox. There are some parts that require knowledge of WordPress so if you have no experience of WP then feel free to skip that and hard-code it instead.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
