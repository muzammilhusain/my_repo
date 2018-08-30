<?php 
	error_reporting (0);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Measurments</title>
<link href="../css/style_sheet.css" rel="stylesheet" type="text/css">
<link href="../includes/slider/image-slider.css" rel="stylesheet" type="text/css" />
<script src="../includes/slider/image-slider.js" type="text/javascript"></script>

</head>

<body>

<div id="measures_wrapper">
	<div id="banner">
		FASHION DOT
		<div id="nav_bar">
			<ul>
            	<li><a href="">Home</a></li>
                <li><a href="">Measurements</a></li>
                <li><a href="">New Customer</a></li>
                <li><a href="">Pending</a></li>
                <li><a href="">Completed</a></li>
                <li><a href="">Dilevered</a></li>
                <li><a href="">Statement</a></li>
            </ul>
		</div>
	</div>	
	<div id="form_input">
		<form name="Measures_form" method="post">
				
				<table>
					<tr>
						<td>Customer Name:</td>
						<td><input type="text" name="f_name" required placeholder="Name"></td>
					</tr>
					<tr>
						<td>Father's Name:</td>
						<td><input type="text" name="l_name" placeholder="Father's Name"></td>
					</tr>
					<tr>
						<td>Contact No.:</td>
						<td><input type="number" name="contact" required placeholder="Enter 11 digits"></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><textarea rows="10" cols="30" name="address" id="text_area" placeholder="Type address here..." required></textarea></td>
					</tr>
					<tr>
						<td>Qmeez Length:</td>
						<td><input type="number" name="contact" required placeholder="Qmeez Length"></td>
					</tr>
					<tr>
						<td>Teera:</td>
						<td><input type="number" name="contact" required placeholder="Teera"></td>
					</tr>
					<tr>
						<td>Sleeve Length:</td>
						<td><input type="number" name="contact" required placeholder="Sleeve Length"></td>
					</tr>
					<tr>
						<td>Chest:</td>
						<td><input type="number" name="contact" required placeholder="Chest"></td>
					</tr>
					<tr>
						<td>Ghera:</td>
						<td><input type="number" name="contact" required placeholder="Ghera"></td>
					</tr>
					<tr>
						<td>Coler:</td>
						<td><input type="number" name="contact" required placeholder="Coler"></td>
					</tr>
					<tr>
						<td>Shalwar Length:</td>
						<td><input type="number" name="contact" required placeholder="Shalwar Length"></td>
					</tr>
					<tr>
						<td>Pyncha:</td>
						<td><input type="number" name="contact" required placeholder="Pyncha"></td>
					</tr>
					<tr>
                            	<td>Ghera cutting:</td>
                                <td>
                                	<select name="brand">
                                        <option value="Samsung">Curved</option>
                                        <option value="Sony">Square</option>
                                	</select>
                                </td>
                     </tr>
                     <tr>
                            	<td>Coler Type:</td>
                                <td>
                                	<select name="brand">
                                        <option value="Samsung">Coler</option>
                                        <option value="Sony">Ban</option>
                                	</select>
                                </td>
                     </tr>
                     <tr>
                            	<td>Sleeves:</td>
                                <td>
                                	<select name="brand">
                                        <option value="Samsung">Single kaff</option>
                                        <option value="Sony">Double kuff</option>
										<option value="Toshiba">Open</option>
                                	</select>
                                </td>
                      </tr>
                      <tr>
                            	<td>Buttons:</td>
                                <td>
                                	<select name="brand">
                                        <option value="Samsung">Simple</option>
                                        <option value="Sony">Fency</option>
                                        <option value="Toshiba">Metal</option>
                                	</select>
                                </td>
                       </tr>
                      <tr>
                             	<td>
                                	Design Picture:
                                </td>
                                <td>
                                	<input type="file" name="file" value="Choose Picture"> <br/>
                               
                                </td>
                      </tr> 
                      <tr>
						<td>Extra info:</td>
						<td><textarea rows="10" cols="30" name="address" id="else_text_area" placeholder="Anything else..."></textarea></td>
					</tr>     
					
					
				</table>
				<input type="submit" name="measures_submit" id="measures_submit" value="DONE">
			</form>
	</div>
	<!--<div id="slide_show">
		<div id="sliderFrame">
        	<div id="slider">
                <img src="../images/slider/1.jpg">
                <img src="../../project/main project/images/banners  and backgrounds/5190276-background-hd-wallpaper.jpg">
			</div>

	</div>
</div>-->

</body>
</html>
