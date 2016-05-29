<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>



   <nav>
 <ul>
 <li class="nav<?php if ($page == 'f3.php') { print '-on'; } ?>"><a href="front.html><h5>home</h5></a></li>
 <li class="nav<?php if ($page == 'gal_pro.php') { print '-on'; } ?>"><a href="gal_pro.php"><h5>contact</h5></a></li>

  <li class="nav<?php if ($page == 'gal_lo.php') { print '-on'; } ?>"><a href="https://docs.google.com/document/d/1Tcx1xS_qFM4O1dVXsndeMbCrwNKTRvpg3bMcjrACc8s/edit?usp=sharing"><h5>Resume</h5></a></li>
 </ul>
 </nav>

        <!--  MOBILE NAVIGATION-->
           <div class = "phone"><img src="images/phone-icon.png" alt="homephone">
        </div>

         <div class = "home"><a href=""><img src="images/house.png" alt="home"></a>
        </div>
       <button class="nav-button">Toggle Navigation</button>


		<ul class="primary-nav">
			<li><a href="#">List of galleries</a>

             <li><a href="gal_pro.php">Misc. Professional</a></li>
                <li> <a href="gal_lotr.php">Lord of the Rings</a> </li>







			 <li> <a href="includes/resume.php">resume</a> </li>


		</ul>
        <!--  ENND MOBILE NAVIGATION-->
