

<!DOCTYPE html>
<html>
<head>
    <title>SignUP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
<link rel="stylesheet" href="jquery.mobile-1.4.5.min.css">
<link href="css/bootstrap-2.3.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="jquery-2.1.4.js"></script>
<script src="jquery.mobile-1.4.5.min.js"></script>
    
</head>
<body>

<div data-role="page">
  <div data-role="header" style="height: 100px;">
  <h1 style="alignment-baseline: central; font-size: 30pt;">Kapuwa.com Signup</h1>
  </div>

  <div data-role="header" style="height: 50px;">
    <h1 style="font-size: 16pt; alignment-baseline: text-after-edge">About you..!!</h1>
  </div>
      
  <div data-role="main" class="ui-content">
    <form method="post" id="looks">
      <fieldset data-role="collapsible">
        <legend>Let's see how you look..!!</legend>
				<table>
					<tr>
						<td>
          				<label>Your Height:</label>
						</td>	
						<td style="width:3%;"></td>
						<td>
          				<input type="text" name="height" id="heightfeet"> feet
						</td>
						<td>
									<input type="text" name="height" id="heightinch"> inches
						</td>
						<td style="width:10%;"></td>
						<td>
									<label for="bodytype">Your body type: </label>
						</td>
						<td style="width:3%;"></td>
						<td>
									<select name="bodytype" id="bodytype">
										<option value="slim">Slim</option>
										<option value="average">Average</option>
										<option value="fat">fat</option>
									</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="haircolor">Your Hair Color: </label>
						</td>
						<td style="width:3%;"></td>
						<td>
							<select name="haircolor" id="haircolor">
										<option value="black">Black</option>
										<option value="blode">Blonde</option>
										<option value="red">red</option>
										<option value="colored">Coloured</option>
										<option value="tinted">Tinted</option>
							</select>
						</td>	
						<td></td>
						<td></td>
						<td>
							<label for="eyecolor">Your eye Color: </label>
						</td>
						<td style="width:3%;"></td>
						<td>						
							<select name="eyecolor" id="eyecolor">
										<option value="black">Black</option>
										<option value="blue">Blue</option>
										<option value="brown">Brown</option>
										<option value="grey">grey</option>
										<option value="hazel">Hezal</option>
							</select> 	
						</td>						
					</tr>				
        </table> 
      <input type="submit" data-inline="true" value="Submit">
      </fieldset>
    </form>
	<form method="post" id="life">
      <fieldset data-role="collapsible" >
        <legend>About your current life..</legend>
				<table>
					<tr>
						<td>
          				<label for="relationship">Your relationship status: </label>
						</td>	
						<td style="width:3%;"></td>
          	<td>
									<select name="relationship" id="relationship">
										<option value="nevermarried">Never Married</option>
										<option value="Divorced">Divorced</option>
										<option value="widow">Widow/Widower</option>
									</select>
						</td>
						
						<td style="width:10%;"></td>
						<td>
									<label for="kids: ">Kids </label>
						</td>
						<td style="width:3%;"></td>
						<td>
									<select name="kids" id="kids">
										<option value=NULL>None</option>
										<option value=1>1</option>
										<option value=2>2</option>
										<option value=3>3</option>
										<option value=4>4</option>
									</select>
						</td>	
					</tr>
					<tr>
						<td>
							<label for="religion">What is your religious beleifs? </label>
						</td>
						<td style="width:3%;"></td>
						<td>
							<select name="religion" id="religion">
										<option value="Buddhist">Buddhist</option>
										<option value="Christian">Christian</option>
										<option value="Catholic">Catholic</option>
										<option value="Hindu">Hindu</option>
										<option value="Islam">Islam</option>
							</select>
						</td>	
						<td style="width:10%;"></td>
						<td>
							<label for="politics">Political Views: </label>
						</td>
						<td style="width:3%;"></td>
						<td>						
							<select name="politics" id="politics">
										<option value="Democratic">Democratic</option>
										<option value="Liberal">Liberal</option>
										<option value="Communist">Communist</option>
										<option value="Middle of the road">Middle of the road</option>
										<option value="Some other viewpoint">Some other viewpoint</option>
							</select> 	
						</td>						
					</tr>				
        </table> 
      <input type="submit" data-inline="true" value="Submit">
      </fieldset>
    </form>

    </form>

	<form method="post" id="job">
      <fieldset data-role="collapsible" >
        <legend>About your Financial and Education level</legend>
				<table>
					<tr>
						<td>
          				<label for="Education">Your Education Level :</label>
						</td>	
						<td style="width:3%;"></td>
          	<td>
									<select name="Education" id="Education">
										<option value="O/L">O/L</option>
										<option value="A/L">A/L</option>
										<option value="Bachelors Degree">Bachelors Degree</option>
                                        <option value="Masters Degree">Masters Degree</option>
                                        <option value="PhD">PhD</option>
									</select>
						</td>
						
						<td style="width:10%;"></td>
						<td>
									<label for="live">Where do you live? </label>
						</td>
						<td style="width:3%;"></td>
						<td>
									<input type="text" name="live" id="live">
						</td>	
					</tr>
					<tr>
						<td>
							<label for="Occupation">What is your Occupation? </label>
						</td>
						<td style="width:3%;"></td>
						<td>
							<input type="text" name="Occupation" id="Occupation">
						</td>	
						<td style="width:10%;"></td>
						<td>
							<label for="Salery">Your Salery range: </label>
						</td>
						<td style="width:3%;"></td>
						<td>						
							<select name="Salery" id="Salery">
										<option value="0-25000">Less than 25000</option>
										<option value="25000-35000">25000-35000</option>
										<option value="35000-50000">35000-50000</option>
										<option value="50000-75000">50000-75000</option>
										<option value="75000-100000">75000-100000</option>
                                        <option value="100000-150000">100000-150000</option>
                                        <option value="150000+">150000+</option>
							</select> 	
						</td>						
					</tr>				
        </table> 
      <input type="submit" data-inline="true" value="Submit">
      </fieldset>
    </form>

    <form method="post" id="lifestyle">
      <fieldset data-role="collapsible" >
        <legend>About your lifestyle..</legend>
				<table>
					<tr>
						<td>
          				<label for="Smokingyou">Do you smoke?</label>
						</td>	
						<td style="width:3%;"></td>
          	            <td>
							<select name="Smokingyou" id="Smokingyou">
						    	<option value="No">No way</option>
								<option value="Occasionally">Occasionally</option>
								<option value="Daily">Daily</option>
                                <option value="Cigar aficianado">Cigar aficianado</option>
                                <option value="Tyring to quit">Yes, but trying to quit</option>
							</select>
						</td>
						<td style="width:10%;"></td>
						<td>
							<label for="drinkingyou">How often you drink? </label>
						</td>
						<td style="width:3%;"></td>
						<td>
									<select name="drinkingyou" id="drinkingyou">
										<option value="Never">Never</option>
										<option value="Occasionally">Occasionally</option>
										<option value="Social Drinker">Social Drinker</option>
                                        <option value="Regularly">Regularly</option>
                                        <option value="Moderately">Moderately</option>
									</select>
						</td>	
					</tr>
					<tr>
						<td>
							<label>Do you exersize? </label>
						</td>
						<td style="width:3%;"></td>
						<td>
							<fieldset data-role="controlgroup" data-type="horizontal">
			     	    <label for="Yes">Yes</label>
                        <input type="radio" name="Excersizeyou" id="Yes" value="true">
                        <label for="No">No</label>
                        <input type="radio" name="Excersizeyou" id="No" value="false">
                        <label for="None">No concern</label>
                        <input type="radio" name="Excersizeyou" id="None" value="None" checked>
                           </fieldset>
						</td>	
						<td style="width:10%;"></td>
						<td>
							<label for="Sports">What type of sports you like? </label>
						</td>
						<td style="width:3%;"></td>
						<td>
                            <fieldset data-role="controlgroup" data-type="horizontal">
                            <label for="Cricket">Cricket</label>						
							<input type="checkbox" name="Sports" id="Cricket" Value="Cricket">
                            <label for="Rugby">Rugby</label>
                            <input type="checkbox" name="Sports" id="Rugby" value="Rugby">
                            <label for="Carrom">Carrom</label>
                            <input type="checkbox" name="Sports" id="Carrom" value="Carrom">
                            </fieldset>
                            <fieldset data-role="controlgroup" data-type="horizontal">
                            <label for="Badminton">Badminton</label>
                            <input type="checkbox" name="Sports" id="Badminton" value="Badminton">
                            <label for="Vollyball">Vollyball</label>  
						    <input type="checkbox" name="Sports" id="Vollyball" value="Vollyball">
                            </fieldset>     	
						</td>						
					</tr>				
        </table> 
      <input type="submit" data-inline="true" value="Submit">
      </fieldset>
    </form>

	<form method="post" id="Background">
      <fieldset data-role="collapsible" >
        <legend>About your Backgroud..</legend>
				<table>
					<tr>
						<td>
          				<label for="language">What languages do you speak? </label>
						</td>	
						<td style="width:3%;"></td>
          	            <td>
							<fieldset data-role="controlgroup" data-type="horizontal">
                            <label for="Sinhala">Sinhala</label>						
							<input type="checkbox" name="language" id="Sinhala" Value="Sinhala">
                            <label for="Tamil">Tamil</label>
                            <input type="checkbox" name="language" id="Tamil" value="Tamil">
                            <label for="English">English</label>
                            <input type="checkbox" name="language" id="English" value="English">
                            </fieldset>
						</td>
						
						<td style="width:10%;"></td>
						<td>
									<label for="Ethinity">Ethinity</label>
						</td>
						<td style="width:3%;"></td>
						<td>
									<select name="Ethinity" id="Ethinity">
										<option value="Sinhala">Sinhala</option>
										<option value="Tamil">Tamil</option>
										<option value="Muslim">Muslim</option>
										<option value="Burger">Burger</option>
										<option value="Other">Other</option>
									</select>
						</td>	
					</tr>
					<tr>
						<td>
							<label for="Cast">Your Cast: </label>
						</td>
						<td style="width:3%;"></td>
						<td>
							<input type="text" name="Cast" id="Cast">
						</td>	
						<td style="width:10%;"></td>
						<td>
							<label for="Hobbies"> Your Hobbies: </label>
						</td>
						<td style="width:3%;"></td>
						<td>						
							<select name="Hobbies" id="Hobbies">
										<option value="Reading books">Reading books</option>
										<option value="Alumni collection">Alumni collection</option>
										<option value="Hiking">Hiking</option>
										<option value="Listening to music">Listening to Music</option>
										<option value="I don't have any">I don't have any</option>
							</select> 	
						</td>						
					</tr>				
        </table> 
      <input type="submit" data-inline="true" value="Submit">
      </fieldset>
    </form>
	
  </div>

      <div data-role="header" style="height: 50px;">
    <h1 style="font-size: 16pt; alignment-baseline: text-after-edge">About your life partner..!!</h1>
  </div>
      
  <div data-role="main" class="ui-content">
    <form method="post" id="lookshim">
      <fieldset data-role="collapsible">
        <legend>About the looks..!! (hint: don't be too picky ;))</legend>
				<table>
					<tr>
						<td>
          				<label>His/Her Height:</label>
						</td>	
						<td style="width:3%;"></td>
						<td>
                        Between  
          				<input type="text" name="heighthim" id="heightfeet1"> feet
						</td>
						<td>
                              And  
									<input type="text" name="heighthim" id="heightfeet2"> Feet
						</td>
						<td style="width:10%;"></td>
						<td>
									<label for="bodytypehim">His/Her Body type: </label>
						</td>
						<td style="width:3%;"></td>
						<td>
									<select name="bodytypehim" id="bodytypehim">
                                        <option value="none">No concern</option>
										<option value="slim">Slim</option>
										<option value="average">Average</option>
										<option value="fat">fat</option>
									</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="haircolorhim">His/Her Hair Color: </label>
						</td>
						<td style="width:3%;"></td>
						<td>
							<select name="haircolorhim" id="haircolorhim">
                                        <option value="none">No concern</option>
										<option value="black">Black</option>
										<option value="blode">Blonde</option>
										<option value="red">red</option>
										<option value="colored">Coloured</option>
										<option value="tinted">Tinted</option>
							</select>
						</td>	
						<td></td>
						<td></td>
						<td>
							<label for="eyecolorhim">His/Her eye Color: </label>
						</td>
						<td style="width:3%;"></td>
						<td>						
							<select name="eyecolorhim" id="eyecolorhim">
                                        <option value="none">No concern</option>
										<option value="black">Black</option>
										<option value="blue">Blue</option>
										<option value="brown">Brown</option>
										<option value="grey">grey</option>
										<option value="hazel">Hezal</option>
							</select> 	
						</td>						
					</tr>				
        </table> 
      <input type="submit" data-inline="true" value="Submit">
      </fieldset>
    </form>
	<form method="post" id="lifehim">
      <fieldset data-role="collapsible" >
        <legend>About his/her life..</legend>
				<table>
					<tr>
						<td>
          				<label for="relationshiphim">His/Her relationship status: </label>
						</td>	
						<td style="width:3%;"></td>
          	<td>
									<select name="relationshiphim" id="relationshiphim">
                                        <option value="none">No concern</option>
										<option value="nevermarried">Never Married</option>
										<option value="Divorced">Divorced</option>
										<option value="widow">Widow/Widower</option>
									</select>
						</td>
						
						<td style="width:10%;"></td>
						<td>
									<label for="kidshim">You wan't Kids? </label>
						</td>
						<td style="width:3%;"></td>
						<td>
									<select name="kidshim" id="kidshim">
										<option value=NULL>None</option>
										<option value=1>1</option>
										<option value=2>2</option>
										<option value=3>3</option>
										<option value=4>4</option>
									</select>
						</td>	
					</tr>
					<tr>
						<td>
							<label for="religionhim">What is his/her religious beleifs? </label>
						</td>
						<td style="width:3%;"></td>
						<td>
							<select name="religionhim" id="religionhim">
                                        <option value="none">No concern</option>
										<option value="Buddhist">Buddhist</option>
										<option value="Christian">Christian</option>
										<option value="Catholic">Catholic</option>
										<option value="Hindu">Hindu</option>
										<option value="Islam">Islam</option>
							</select>
						</td>	
						<td style="width:10%;"></td>
						<td>
							<label for="politicshim"> His/Her Political Views: </label>
						</td>
						<td style="width:3%;"></td>
						<td>						
							<select name="politicshim" id="politicshim">
                                        <option value="none">No concern</option>
										<option value="Democratic">Democratic</option>
										<option value="Liberal">Liberal</option>
										<option value="Communist">Communist</option>
										<option value="Middle of the road">Middle of the road</option>
										<option value="Some other viewpoint">Some other viewpoint</option>
							</select> 	
						</td>						
					</tr>				
        </table> 
      <input type="submit" data-inline="true" value="Submit">
      </fieldset>
    </form>

    </form>

	<form method="post" id="jobhim">
      <fieldset data-role="collapsible" >
        <legend>About his/her Financial and Education level</legend>
				<table>
					<tr>
						<td>
          				<label for="Educationhim">His/Her Education Level :</label>
						</td>	
						<td style="width:3%;"></td>
          	<td>
									<select name="Education" id="Education">
                                        <option value="none">No concern</option>
										<option value="O/L">O/L</option>
										<option value="A/L">A/L</option>
										<option value="Bachelors Degree">Bachelors Degree</option>
                                        <option value="Masters Degree">Masters Degree</option>
                                        <option value="PhD">PhD</option>
									</select>
						</td>
						
						<td style="width:10%;"></td>
						<td>
						</td>
						<td style="width:3%;"></td>
						<td>
						</td>	
					</tr>
					<tr>
						<td>
							<label for="Occupation">What is his/her Occupation? </label>
						</td>
						<td style="width:3%;"></td>
						<td>
							<input type="text" name="Occupation" id="Occupation">
						</td>	
						<td style="width:10%;"></td>
						<td>
							<label for="Salery">His/Her Salery range: </label>
						</td>
						<td style="width:3%;"></td>
						<td>						
							<select name="Salery" id="Salery">
                                        <option value="none">No concern</option>
										<option value="0-25000">Less than 25000</option>
										<option value="25000-35000">25000-35000</option>
										<option value="35000-50000">35000-50000</option>
										<option value="50000-75000">50000-75000</option>
										<option value="75000-100000">75000-100000</option>
                                        <option value="100000-150000">100000-150000</option>
                                        <option value="150000+">150000+</option>
							</select> 	
						</td>						
					</tr>				
        </table> 
      <input type="submit" data-inline="true" value="Submit">
      </fieldset>
    </form>

    <form method="post" id="lifestyle">
      <fieldset data-role="collapsible" >
        <legend style="font-size: 20pt; font-weight: 500">About his/her lifestyle..</legend>
				<table>
					<tr>
						<td>
          				<label for="Smoking">Does he/she smoke?</label>
						</td>	
						<td style="width:3%;"></td>
          	<td>
									<select name="Smoking" id="Smoking">
                                        <option value="none">No concern</option>
										<option value="No">No way</option>
										<option value="Occasionally">Occasionally</option>
										<option value="Daily">Daily</option>
                                        <option value="Cigar aficianado">Cigar aficianado</option>
                                        <option value="Tyring to quit">Yes, but trying to quit</option>
									</select>
						</td>
						
						<td style="width:10%;"></td>
						<td>
									<label for="drinking">How often he/she drink? </label>
						</td>
						<td style="width:3%;"></td>
						<td>
									<select name="drinking" id="drinking">
                                        <option value="none">No concern</option>
										<option value="Never">Never</option>
										<option value="Occasionally">Occasionally</option>
										<option value="Social Drinker">Social Drinker</option>
									</select>
						</td>	
					</tr>
					<tr>
						<td>
							<label>Does he/she exersize? </label>
						</td>
						<td style="width:3%;"></td>
						<td>
							<fieldset data-role="controlgroup" data-type="horizontal">
			     	    <label for="Yes">Yes</label>
                        <input type="radio" name="Excersize" id="Yes" value="true">
                        <label for="No">No</label>
                        <input type="radio" name="Excersize" id="No" value="false">
                        <label for="None">No concern</label>
                        <input type="radio" name="Excersize" id="None" value="None" checked>
                           </fieldset>
						</td>	
						<td style="width:10%;"></td>
						<td>
							
						</td>
						<td style="width:3%;"></td>
						<td>
                                 	
						</td>						
					</tr>				
        </table> 
      <input type="submit" data-inline="true" value="Submit">
      </fieldset>
    </form>

	<form method="post" id="Background">
      <fieldset data-role="collapsible" >
        <legend>About his/her Backgroud..</legend>
				<table>
					<tr>
						<td>
          				<label for="language">What languages does he/she speak? </label>
						</td>	
						<td style="width:3%;"></td>
          	            <td>
							<fieldset data-role="controlgroup" data-type="horizontal">
                            <label for="Sinhala">Sinhala</label>						
							<input type="checkbox" name="language" id="Sinhala" Value="Sinhala">
                            <label for="Tamil">Tamil</label>
                            <input type="checkbox" name="language" id="Tamil" value="Tamil">
                            <label for="English">English</label>
                            <input type="checkbox" name="language" id="English" value="English">
                            </fieldset>
						</td>
						
						<td style="width:10%;"></td>
						<td>
									<label for="Ethinity">His/Her Ethinity</label>
						</td>
						<td style="width:3%;"></td>
						<td>
									<select name="Ethinity" id="Ethinity">
                                        <option value="none">No concern</option>
										<option value="Sinhala">Sinhala</option>
										<option value="Tamil">Tamil</option>
										<option value="Muslim">Muslim</option>
										<option value="Burger">Burger</option>
										<option value="Other">Other</option>
									</select>
						</td>	
					</tr>
					<tr>
						<td>
							<label for="Cast">His/Her Cast: </label>
						</td>
						<td style="width:3%;"></td>
						<td>
							<input type="text" name="Cast" id="Cast">
						</td>	
						<td style="width:10%;"></td>
						<td>
							<label for="Hobbies"> His/Her Hobbies: </label>
						</td>
						<td style="width:3%;"></td>
						<td>						
							<select name="Hobbies" id="Hobbies">
                                        <option value="none">No concern</option>
										<option value="Reading books">Reading books</option>
										<option value="Alumni collection">Alumni collection</option>
										<option value="Hiking">Hiking</option>
										<option value="Listening to music">Listening to Music</option>
										<option value="I don't have any">I don't have any</option>
							</select> 	
						</td>						
					</tr>				
        </table> 
      <input type="submit" data-inline="true" value="Submit">
      </fieldset>
    </form>

    
	
  </div>
    <div>
        <fieldset data-role="controlgroup">
            <form>
            <label for="Pic">Select and upload your good picture.</label>
            <input type="file" accept="image/*" name="Pic" id="Pic">
            </form>                 
        </fieldset>
        <button type="submit" id="all" style="width: auto; height: auto; font-size: 20pt; alignment-adjust: middle; alignment-baseline: central;">Submit your data</button>    
        </div>
    </div>
    <?php
echo "<pre>";
print_r($_POST);
echo "<pre>";


?>

</body>
</html>

