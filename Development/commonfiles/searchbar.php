     <div class="search_bar_background">
     <div class="container">
     <div class="row search-controls">
	
      	  <form class="" action="searchresult.php" method="get">
			  <div class="col-md-4">
			  <div class="form-group"> 
			    <input type="text" name="srchkeyword" class="form-control auto" spellcheck="false" id="keyword" placeholder="Enter The Keyword">
			  </div>
			  <script type="text/javascript">
			  	$(function() {
				    $(".auto").autocomplete({
				        source: "search.php",
				        minLength: 1
				    });                
				});
			  </script>
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
			  <select class="form-control" name="srchexperience">
			  	<option value="null">Experience</option>	
  				  <option value="1">1 year</option>
				  <option value="2">2 year</option>
				  <option value="3">3 year</option>
				  <option value="4">4 year</option>
				  <option value="5">5 year</option>
				</select>
				</div>
			  </div>
			  
			  <div class="col-md-2">
			  <div class="form-group">
			  <select class="form-control" name = "srchsalary">
			  	<option value="null">Salary</option>	
  				  <option value="1"> < 1 Lac</option>
				  <option value="2"> 2 Lac </option>
				  <option value="3"> 3 Lac</option>
				  <option value="4"> 4 Lac</option>
				  <option value="5"> 5 Lac</option>
				  <option value="6"> 6 Lac</option>
				  <option value="7"> 7 Lac</option>
				  <option value="8"> 8 Lac</option>
				  <option value="9"> 9 Lac</option>
				  <option value="10">10 lac</option>
				  <option value="11">11 lac</option>
				  <option value="12">12 lac</option>
				  <option value="13">13 lac</option>
				  <option value="14">14 lac</option>
				  <option value="15">15 lac</option>
				</select>
				</div>
				</div>
				<div class="col-md-2">
			  <button type="submit" name="searchjobs" class="btn btn-warning search-job-button">Search Jobs</button>
			</div>
			</form>
			</div>
      </div>
         </div>

