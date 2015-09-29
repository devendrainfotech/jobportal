   
     <div class="search_bar_background">
     <div class="container">
     <div class="row search-controls">

      	  <form class="" action="searchresult.php" method="get">
			  <div class="col-md-4">
			  <div class="form-group"> 
			    <input type="text" name="srchkeyword" class="form-control" spellcheck="false" id="searchid" placeholder="Enter The Keyword / Job / Company Name">
			  </div>
			  </div>
			  <div class="col-md-2">
			  <div class="form-group">
			    <input name="srchlocation" class="form-control" id="autocomplete_location" placeholder="Location">
			  </div>
			  </div>
			  <!-- jquery coding for the autofill location and etc..... -->
			  <script>
			  var tags = ["Mumbai","Bangalore","Hyderabad","Ahmedabad","Chennai","Kolkata","Surat","Pune","Jaipur","Lucknow","Kanpur","Nagpur","Indore","Visakhapatnam","Thane","Bhopal","Pimpri-Chinchwad","Patna","Vadodara","Ghaziabad","Ludhiana","Agra","Nashik","Faridabad","Meerut","Rajkot","Kalyan-Dombivali","Vasai-Virar","Varanasi","Srinagar","Aurangabad","Dhanbad","Amritsar","NaviMumbai","Allahabad","Anantnag","Ranchi","Jabalpur","Gwalior","Vijayawada","Jodhpur","MaduraiN","Raipur","Guwahati","Chandigarh","Solapur","Andaman Nicobar","Goa","Andhra Pradesh","Gujarat","Arunanchal Pradesh","Haryana","Assam","Himachal Pradesh","Bihar","Jammu & Kashmir","Chandigarh","Jharkhand","Chattisgarh","Karnataka","Dadar & Nagar Haveli","Kerala","Daman & Diu","Lakshwdeep","Madhya Pradesh","Punjab","Maharashtra","Rajasthan","Manipur","Sikkim","Meghalaya","Tamil Nadu","Mizoram","Tripura","Nagaland","Uttar Pradesh","New Delhi","Uttaranchal","Orissa","West Bengal","Pondicherry"];
			  $(document).ready(function(){
				  $( "#autocomplete_location" ).autocomplete({
					  source: function( request, response ) {
					          var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
					          response( $.grep( tags, function( item ){
					              return matcher.test( item );
					          }) );
					      }
					});
				  });
			  </script>
			  <!-- jquery coding for the autofill location and etc..... -->
			  <div class="col-md-2">
			  <div class="form-group">
			  <select class="form-control" name="srchsalary">
			  	<option>Experience</option>	
  				  <option>1 year</option>
				  <option>2 year</option>
				  <option>3 year</option>
				  <option>4 year</option>
				  <option>> 5 year</option>
				</select>
				</div>
			  </div>
			  
			  <div class="col-md-2">
			  <div class="form-group">
			  <select class="form-control" name = "srchexperience">
			  	<option>Salary</option>	
  				  <option> < 1 Lac</option>
				  <option> 2 Lac </option>
				  <option> 3 Lac</option>
				  <option> 4 Lac</option>
				  <option> 5 Lac</option>
				  <option> 6 Lac</option>
				  <option> 7 Lac</option>
				  <option> 8 Lac</option>
				  <option> 9 Lac</option>
				  <option> > 10 lac</option>
				</select>
				</div>
				</div>
				<div class="col-md-2">
			  <button type="submit" class="btn btn-warning search-job-button">Search Jobs</button>
			</div>
			</form>
			</div>
      </div>
         </div>

