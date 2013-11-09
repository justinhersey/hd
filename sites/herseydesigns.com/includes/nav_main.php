<div id="navmain-container">
    
    <div id="date"><?php

// Displays in the format Sunday, November 27
echo date("l, F d");

?>
	</div>
    <div id="company-name"><a href="http://herseydesigns.com/">Hersey Designs, LLC.</a></div>
    
    <ul id="navmain-tab">
    
        <li class="work-title">Main Navigation</li>
        
        <li <?php if ($thisPage=="Central")
            echo " class=\"active\""; ?>
        ><a title="Home" href="http://www.herseydesigns.com/">Central</a></li>
       
        <li <?php if ($thisPage=="Work")
            echo " class=\"active\""; ?>
        ><a title="Work" href="http://www.herseydesigns.com/work/">Work</a></li>
        
       <!-- <li <?php if ($thisPage=="Clientland")
            echo " class=\"active\""; ?>
        ><a title="Clientland" href="http://www.herseydesigns.com/clientland/">Clientland</a></li> -->
        
        <li <?php if ($thisPage=="Contact")
            echo " class=\"active\""; ?>
        ><a title="Contact" href="http://www.herseydesigns.com/contact/">Contact</a></li>
        
    </ul>
		
</div>
		
