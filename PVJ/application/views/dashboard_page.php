<div class="container panel panel-default">
	<div class="panel-body">
		
		
		<!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#userInfo" aria-controls="home" role="tab" data-toggle="tab">User Information</a></li>
	    <li role="presentation"><a href="#tourInfo" aria-controls="profile" role="tab" data-toggle="tab">Tour Information</a></li>
	    <li role="presentation"><a href="#passwordChange" aria-controls="messages" role="tab" data-toggle="tab">Change Password</a></li>
	  </ul>
  

  

  	
  	 <!-- Tab panes -->
	  <div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="userInfo">
	    	
			<!-- User Information -->
                <div class="panel panel-default" ng-show="isSelected(1)">
                    <div class="panel-body">
                        <div class="page-header"><h1>User Information</h1></div>
                        
                        <form class="form-horizontal">
                                  <div class="form-group">
                                    <label for="inputFirstName" class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-10">
                                      <p class="form-control-static">First name here</p>
                                    </div>
                                  </div>
                                    
                                <div class="form-group">
                                    <label for="inputLastName" class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-10">
                                      <p class="form-control-static">Last name here</p>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="inputAddress" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                      <p class="form-control-static">Address here</p>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="inputPhone" class="col-sm-2 control-label">Phone Number</label>
                                    <div class="col-sm-10">
                                      <p class="form-control-static">Phone here</p>
                                    </div>
                                </div>   
                                    
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                      <p class="form-control-static">Email here</p>
                                    </div>
                                </div>   
                                    
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-default">Edit Profile</button>
                                    </div>
                                  </div>
                                </form>   
  
                    </div>                    
                </div>   
                
                 <!-- User Information end-->
	    	
	    </div>
	    <div role="tabpanel" class="tab-pane" id="tourInfo">
	    	
	    	<!-- Tour Package Information -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header"><h1>Tour Package Information</h1></div>
                        
                        <form class="form-horizontal">
                            <div class="form-group">
                                    <label for="inputFirstName" class="col-sm-2 control-label">Package Name</label>
                                    <div class="col-sm-10">
                                      <p class="form-control-static">Package name here</p>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                    <label for="inputFirstName" class="col-sm-2 control-label">Package Details</label>
                                    <div class="col-sm-10">
                                      <p class="form-control-static">Package details here <a href="">see more...</a></p>
                                    </div>
                            </div>
                                    
                            <div class="form-group">
                                <label for="inputLastName" class="col-sm-2 control-label">Start Date</label>
                                <div class="col-sm-10">
                                  <p class="form-control-static">DD-MM-YY</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress" class="col-sm-2 control-label">End Date</label>
                                <div class="col-sm-10">
                                  <p class="form-control-static">DD-MM-YY</p>
                                </div>
                            </div>
                            
                            <div class="page-header">
                                <h3>Payment Information</h3>
                            </div>   
                            
                            <div class="form-group">
                                    <label for="inputFirstName" class="col-sm-2 control-label">Payment Status</label>
                                    <div class="col-sm-10">
                                      <p class="form-control-static">Rp 3.500.000 (PAID 12-12-2015)</p>
                                    </div>
                            </div>
                            
                            <table class="table table-striped">
                                <tr>
                                    <th>Item</th>
                                    <th>Price</th>
                                </tr>
                                <tr>
                                    <td>Item 1</td>
                                    <td>Price 1</td>
                                </tr>
                                <tr>
                                    <td>Item 2</td>
                                    <td>Price 2</td>
                                </tr>
                                <tr>
                                    <td>Item 3</td>
                                    <td>Price 3</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>Price total</td>
                                </tr>
                                
  
                            </table>

                            <div class="page-header">
                                <h3>Tour Guide Information</h3>
                            </div>           
                            
                                
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="inputFirstName" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                      <p class="form-control-static">Tour guide/driver name</p>
                                    </div>
                                  </div>
                            
                                <div class="form-group">
                                    <label for="inputFirstName" class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10">
                                      <p class="form-control-static">Tour guide/driver phone</p>
                                    </div>
                                  </div>
                                
                                <div class="form-group">
                                    <label for="inputFirstName" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                      <p class="form-control-static">Tour guide/driver email</p>
                                    </div>
                                  </div> 
                                
                                
                            </div>
                            
                                
                            <div class="col-md-3">
                                <img src="img/noPhoto.png" class="img-responsive">                                
                            </div>
                                
                            
                            
                            
                                    <div class="page-header">
                                        <h3>Tour Schedule</h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul>
                                            <li>dd-mm-yy - Schedule 1</li>
                                            <li>dd-mm-yy - Schedule 2</li>
                                            <li>dd-mm-yy - Schedule 3</li>
                                            <li>dd-mm-yy - Schedule 4</li>
                                        </ul>
                                        
                                    </div>
                            
                        </form>
                                    
                                
                        
                        
                        
                    </div>                    
                </div>   
                
                 <!-- Package Detail end-->
	    	
	    </div>
	    
	    <div role="tabpanel" class="tab-pane" id="passwordChange">
	    	
	    	<!-- Change Password -->
                <div class="panel panel-default" ng-show="isSelected(3)">
                    <div class="panel-body">
                        <div class="page-header"><h1>Change Password</h1></div>
                        
                        <form class="form-horizontal">
                            <div class="form-group">
                                    <label for="oldPassword" class="col-sm-2 control-label">Old Password</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="oldPassword" placeholder="">
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                    <label for="newPassword" class="col-sm-2 control-label">New Password</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="newPassword" placeholder="">
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                    <label for="confirmNewPassword" class="col-sm-2 control-label">Confirm New Password</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="confirmNewPassword" placeholder="">
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-default">Apply</button>
                                    </div>
                                  </div>
                            
                            
                        </form>
                    </div>                    
                </div>   
                
                 <!-- Change Password end-->
	    	
	    </div>
	  </div>
		
		
	</div>
	


	  
  	
 

	
</div>
