<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width:device-width,initial-scale:1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script type="text/javascript" src="app.js"></script>
    <title>File Uploader</title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
    	<table>
    		<tr>
    			<td>Name :</td>
    			<td><input type="text" name="nm"></td>
    		</tr>
    		<tr>
          <td>Phone No :</td>
          <td><input type="text" name="phno"></td>  
        </tr>
        <tr>
          <td>Email :</td>
          <td><input type="email" name="email"></td>
        </tr>
        <tr>
          <td>Upload Image :</td>
          <td><input type="file" name="file_upload"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    	</table>
    </form>
    <hr>  <!--Horizontal Line-->
    <form action="" method="get">
      <input type="text" name="search">
      <input type="submit" name="search" value="Search">
    </form>
  </body>
</html>