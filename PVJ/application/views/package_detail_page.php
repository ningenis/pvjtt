<div class="container panel">
	<div class="page-header">
		<h1>Package Name</h1>
	</div>
	
	<div id="gallery-thumbnail" class="md-col-12 panel panel-default">
		<div class="panel-body">
			<img src="img/pasupati.jpg"/>
		</div>
		
	</div>
	
	<div id="gallery" class="md-col-12 panel panel-default">
		<div class="panel-body">
			<a href="#"><img src="img/pasupati.jpg"/></a>
		</div>
		
		
	</div>
	
	
	
	<div class="panel panel-default">
		<div class="panel-body">
			
			<!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Package Description</a></li>
		    <li role="presentation"><a href="#itinerary" aria-controls="itinerary" role="tab" data-toggle="tab">Itinerary</a></li>
		    <li role="presentation"><a href="#reservation" aria-controls="reservation" role="tab" data-toggle="tab">Reservation</a></li>
		    <li role="presentation"><a href="#notes" aria-controls="notes" role="tab" data-toggle="tab">Notes</a></li>
		  </ul>
		
		  <!-- Tab panes -->
		  <div class="tab-content panel-body">
		    <div role="tabpanel" class="tab-pane active" id="description">
		
		    	Tour description here
		    	
		    </div>
		    <div role="tabpanel" class="tab-pane" id="itinerary">
		    	
		    	Itinerary list here
		    	
		    </div>
		    <div role="tabpanel" class="tab-pane" id="reservation">
		    	
		    	Reservation form
		    	
		    </div>
		    <div role="tabpanel" class="tab-pane" id="notes">
		    	
		    	Notes here
		    	
		    </div>
		  </div>
			
		</div>
		
		
		
		
	</div>
	
	<?php include 'application/views/templates/package_list.php';?>


  

</div>