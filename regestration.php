
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav { 
  overflow: hidden;
  background-color: DodgerBlue;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 5px;
  text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <h1>TG Work space</h1>
  <p></p>
</div>

<div class="topnav">
  <a href="regestration.php"> Regestration</a>
  <a href="login.php"> login</a>
  <a href="home.php"> Home</a>
</div>

<div class="row">
  <div class="middle side">
  <?php  
 $message = '';  
 $error = '';
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "<label>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label >Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $new_data = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $new_data;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           
      </head>  
      <body>  
           <br />  
           <div>  
                <h3>Registartion</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <fieldset>
                     <br />
                     <b>  
                     <label>Name:</label>  
                     <input type="text" name="name" /><br />  
                     <label>E-mail:</label>
                     <input type="text" name = "email"/><br />
                     <label>User Name:</label>
                     <input type="text" name = "un"/><br />
                     <label>Password:</label>
                     <input type="password" name = "pass"/><br />
                     <label>Confirm Password:</label>
                     <input type="password" name = "Cpass"/><br />

                    <fieldset>
                    <legend>Gender:</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>
                     </fieldset> 

                     <fieldset>

                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>
                    </fieldset> 
                    </br>
                    <fieldset>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                    </form>
                    </b>
                    </fieldset>
                    </br>
                     
                     <input type="submit" name="submit" value="submit">  
                     <input type="submit" name="Reset" value="Reset"/><br />  
                    </fieldset>
                    </br>
                               
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                                   </form>  
                              </div>  
                              
                         </body>  
                    </html>
                    <html>
                    <body>
                    
                    </filedset>
                    </body>
                    </html>  
                    
                    
                    </div>
                    
                    <br><br>

                    <div class="footer">
                    <p>trused by google</p>
                    </div>
                    
                    </body>
                    </html>
