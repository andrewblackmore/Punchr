<?php 
	if(!empty($_POST))
	{
		
	}
	else 
	{
?>
<html>
<form name="storeregister" action="" method="post">
Store Name: <input id="storename" name="storename" type="text" /><br /><br />
Address: <input id="address" name="address" type="text" /><br /><br />
City: <input id="city" name="city" type="text" /><br /><br />
State: 	<select name="state" id="state">
			<option selected="selected" value="">Choose One</option>
			<option value="AK">Alaska</option>
			<option value="AL">Alabama</option>
			<option value="AR">Arkansas</option>
			<option value="AZ">Arizona</option>

			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DC">District of Columbia</option>
			<option value="DE">Delaware</option>
			<option value="FL">Florida</option>

			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="IA">Iowa</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>

			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="MA">Massachusetts</option>
			<option value="MD">Maryland</option>
			<option value="ME">Maine</option>

			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MO">Missouri</option>
			<option value="MS">Mississippi</option>
			<option value="MT">Montana</option>
			<option value="NC">North Carolina</option>

			<option value="ND">North Dakota</option>
			<option value="NE">Nebraska</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NV">Nevada</option>

			<option value="NY">New York</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="PR">Puerto Rico</option>

			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>

			<option value="VA">Virginia</option>
			<option value="VI">Virgin Islands</option>
			<option value="VT">Vermont</option>
			<option value="WA">Washington</option>
			<option value="WI">Wisconsin</option>
			<option value="WV">West Virginia</option>

			<option value="WY">Wyoming</option>
		</select><br /><br />
Zip: <input name="zip" id="zip" type="text" maxlength="5" /><br /><br />
Phone: <input name="phone" id="zip" type="text" maxlength="15" /><br /><br />
Punch Message<br /> <textarea rows="4" cols="30"></textarea><br /><br />
Prize Message<br /> <textarea rows="4" cols="30"></textarea><br /><br />

Lockout Time Frames:<br /><br />
<input name="numpunches" id="numpunches" type="text" maxlength="10" size="10" /> punches every <input name="timeperiod" id="timeperiod" type="text" maxlength="5" size="10" /> hours<br /><br />
One punch every <input name="hours" id="hours" type="text" maxlength="10" size="10" /> hours<br /><br />
Business Hours:<br /><br />
Sunday: <select name="sundayopen">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>
		</select>
		-
		<select name="sundayclose">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>		
		</select><br /><br />
Monday: <select name="mondayopen">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>
		</select>
		-
		<select name="mondayclose">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>		
		</select><br /><br />
Tuesday: <select name="tuesdayopen">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>
		</select>
		-
		<select name="tuesdayclose">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>		
		</select><br /><br />
Wednesday: <select name="wednesdayopen">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>
		</select>
		-
		<select name="wednesdayclose">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>		
		</select><br /><br />
Thursday: <select name="thursdayopen">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>
		</select>
		-
		<select name="thursdayclose">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>		
		</select><br /><br />
Friday: <select name="fridayopen">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>
		</select>
		-
		<select name="fridayclose">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>		
		</select><br /><br />
Saturday: <select name="saturdayopen">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>
		</select>
		-
		<select name="saturdayclose">
			<option value="12:00AM">12:00AM</option>
			<option value="1:00AM">1:00AM</option>
			<option value="2:00AM">2:00AM</option>
			<option value="3:00AM">3:00AM</option>
			<option value="4:00AM">4:00AM</option>
			<option value="5:00AM">5:00AM</option>
			<option value="6:00AM">6:00AM</option>
			<option value="7:00AM">7:00AM</option>
			<option value="8:00AM">8:00AM</option>
			<option value="9:00AM">9:00AM</option>
			<option value="10:00AM">10:00AM</option>
			<option value="11:00AM">11:00AM</option>
			<option value="12:00PM">12:00PM</option>
			<option value="1:00PM">1:00PM</option>
			<option value="2:00PM">2:00PM</option>
			<option value="3:00PM">3:00PM</option>
			<option value="4:00PM">4:00PM</option>
			<option value="5:00PM">5:00PM</option>
			<option value="6:00PM">6:00PM</option>
			<option value="7:00PM">7:00PM</option>
			<option value="8:00PM">8:00PM</option>
			<option value="9:00PM">9:00PM</option>
			<option value="10:00PM">10:00PM</option>
			<option value="11:00PM">11:00PM</option>		
		</select><br /><br />
</form>
</html>
<?php }?>