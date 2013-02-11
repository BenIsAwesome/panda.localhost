<form id="webinar-registration">
	<h3>Registration</h3>
	<label for="id_first_name">
        	<b>First name</b>
        	<input id="id_first_name" type="text" name="first_name" maxlength="64" />
        </label>
          
        <label for="id_last_name">
        	<b>Last name</b>
       		<input id="id_last_name" type="text" name="last_name" maxlength="64" />
        </label>
        
        <label for="id_email">
        	<b>Email</b>
       		<input id="id_email" type="text" name="email" maxlength="64" />
        </label>
        
        <label for="id_phone">
        	<b>Phone</b>
       		<input id="id_phone" type="text" name="phone" maxlength="64" />
        </label>
        
        <label for="id_job_title">
        	<b>Job Title</b>
       		<input id="id_job_title" type="text" name="job_title" maxlength="64" />
        </label>
          
        <label for="id_industry">
        	<b>Industy</b>
          <select name="industry" id="id_industry">
			<option value="" selected="selected">---------</option>
			<option value="M">Male</option>
			<option value="F">Female</option>
		</select>
	</label>
		
	<label for="id_street">
		<b>Street address</b>
          <input id="id_client_street" type="text" name="street" maxlength="64" />
      </label>
      
      <label for="id_city">
         	<b>City</b>
          <input type="text" name="city" id="id_city" />
      </label>
      
      <label for="id_state">
        	<b>State</b>
          <select name="state" id="id_state">
			<option value="" selected="selected">---------</option>
			<option value="Florida">Florida</option>
			<option value="Other">Other</option>
		</select>
	</label>
	
	<label for="id_country">
        	<b>Country</b>
          <select name="country" id="id_country">
			<option value="" selected="selected">---------</option>
			<option value="US">United States</option>
			<option value="Other">Other</option>
		</select>
	</label>
	
	<label for="id_zip">
         	<b>Zip</b>
          <input type="text" name="zip" id="id_zip" />
      </label>
      
      <a href="#" class="button" onClick="getElementById('webinar-registration').submit();return false">Register <i class="icon-arrow-right"></i></a>

</form>