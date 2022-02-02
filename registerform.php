<?php
$con = new mysqli("localhost","root","","fitness hub");
// Check connection
if ($con->connect_error) {
  die("Failed to connect to MySQL: " .$con->connect_error);
  exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="registerform.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
    <title>Document</title>

    <style>
        table {
  font-family : Arial, Helvetica, sans-serif;
  font-size : 100%;
  font-weight: bold;
  }
   h1 {
     color: rgb(234, 80, 63);
     font-family: Arial;
     text-align: center
   }
  .registerbtn{
    margin-top: 30px;
    margin-bottom: 30px;
    margin-right: 250px;
    margin-left: 160px;
   
  }
  .box {
    position: absolute;
    top: 95%;
    left: 50%;
    transform: translate(-50%, -50%);
    /* width: 28rem; */
    padding: 2.5rem;
    box-sizing: border-box;
    background: rgba(3, 3, 3, 0.651); 
    border-radius: 0.625rem;
  }
  h2 {
    margin: 0 0 1.875rem;
    padding: 0;
    color: #fff;
    text-align: center;
  }
  
  .box .inputBox {
    position: relative;
  }
  #aligncentre{
    display: flex;
    padding-top: 25px;
  }

#wide{
    width: 80%;
  }
  #buton{
    border: none;
    display: block;
    margin-left: auto;
    margin-right: auto;
    outline: none;
    color:white;
    background-color: #9badb68c;
    padding: 0.625rem 1.25rem;
    font-weight: bold;
    cursor: pointer;
    border-radius: 0.312rem;
    font-size: 1rem;
  }
  input {
    /* width: 100%; */
    padding: 0.2rem 0;
    font-size: 1rem;
    color: rgb(255, 255, 255);
    letter-spacing: 0.02rem;
    margin-bottom: 1.875rem;
    border: none;
    border-bottom: 0.065rem solid #fff;
    outline: none;
    background: transparent;
  }
  
   label {
    /* position: absolute; */
    top: 0;
    left: 0;
    /* padding: 0.625rem 0; */
    padding-left: 3px;
    font-size: 1rem;
    color: #fff;
    pointer-events: none;
    display: inline;
    transition: 0.5s;
  }
  
  .sixe{
    top: 0rem;
  }
  .box .inputBox input:focus ~ label,
  .box .inputBox input:valid ~ label,
  .box .inputBox input:not([value=""]) ~ label {
    top: -1.125rem;
    left: 0;
    color: #03a9f4;
    font-size: 0.75rem;
  }
  
  .box input[type="submit"] {
    border: none;
    display: block;
    margin-left: auto;
    margin-right: auto;
    outline: none;
    color: #fff;
    background-color: #03a9f4;
    padding: 0.625rem 1.25rem;
    font-weight: bold;
    cursor: pointer;
    border-radius: 0.312rem;
    font-size: 1rem;
  }
  
  .box input[type="submit"]:hover {
    background-color: #1cb1f5;
  }
  .container{
    align-items: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: bold;
    color: white;
    text-align: center;
  }
#styil{
  text-decoration: none;
  color: white;
}

  #registerbck {
    height: 1400px;
    width: 100%;
  }


   
  /* .responsive {
    width: auto;
    height: auto;
    background-size: cover;
  } */

    </style>

</head>
<body>
  <div>
    <img  id="registerbck" src="regbec.jpg" alt="">

    <div class="box">
    <h2>Welcome to Fitness Hub</h2>
    <form>
          <table >
          <tr>
          <div class="inputBox">
          <td>
          <label>Name</label> 
          </td>
          <td>
          <input id="wide" type="text" required onkeyup="this.setAttribute('value', this.value);"  placeholder=FirstName name=””>
          </td>
          </div>
          </tr>
              
          <div class="inputBox">
          <tr>
          <td>
          <label >Last Name</label> 
          </td>
          <td>
          <input id="wide" type="text" required onkeyup="this.setAttribute('value', this.value);" placeholder=LastName name=””>
          </td>
          </tr>
         </div>

         <div class="inputBox">
          <tr>
          <td>
          <label >User Name</label> 
          </td>
          <td>
          <input id="wide" type="text" required onkeyup="this.setAttribute('value', this.value);"  placeholder=UserName name=””>
          </td>
          </tr>
          </div>

          <div class="inputBox">
          <tr>
          <td>
          <label >Email</label>
          </td>
          <td>
          <input id="wide" type="email" required onkeyup="this.setAttribute('value', this.value);"  placeholder=Email name=””>
          </td>
          </tr>
         </div>

         <div class="inputBox">
          <tr>
          <td>
          <label >Password</label> 
          </td>
          <td>
          <input id="wide" type="password" required onkeyup="this.setAttribute('value', this.value);" placeholder=Password name=””>
          </td>
          </tr>
        </div>
        
        <div class="inputBox">
          <tr>
          <td>
          <label >Address</label> 
          </td>
          <td>
          <input id="wide" type=""Address  placeholder=Address name=””>
          </td>
          </tr>
        </div>

        <div class="inputBox">
          <tr>
          <td>
            <label >Contact</label> 
          </td>
          <td>
          <input id="wide" type="conatct"  placeholder=contact name=””>
          </td>
          </tr>
        </div>

        <div class="inputBox">
          <tr>
          <td>
          <label>Height</label> 
          </td>
          <td>
          <input id="wide" type="height" placeholder=height name=””>
          </td>
          </tr>
        </div>

        <div class="inputBox">
          <tr>
          <td>
          <label >Weight</label> 
          </td>
          <td>
          <input id="wide" type="weight"  placeholder=weight name=””>
          </td>
          </tr>
        </div>
            
        <div class="inputBox">
          <tr >
          <td>
          <label >Register for</label> 
          </td>
          <td id="aligncentre">
          <br>
          <br>
          <div class="form-check form-check-inline d-flex flex-row">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
            <label class="form-check-label" for="exampleRadios1">
              Cardio
            </label>
          </div>
          
          <div class="form-check form-check-inline d-flex flex-row ms-4">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
              Body Building
            </label>
          </div>
          
          <div class="form-check form-check-inline d-flex flex-row ms-4">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
            <label class="form-check-label" for="exampleRadios3">
              Weight Loss
            </label>
          </div>
          </td>
        </tr>
      </div>
    

    
      <div class="inputBox"> 
          <tr>
          <td>  
          <label >Gender</label> 
          </td>
          <td id="aligncentre">
          <br>
          <br>
            <div class="form-check form-check-inline d-flex flex-row">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" >
              <label class="form-check-label" for="exampleRadios4">
                Male
              </label>
            </div>
            <div class="form-check form-check-inline d-flex flex-row ms-4">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
              <label class="form-check-label" for="exampleRadios5">
                Female
              </label>
            </div>
            </td>
            </tr>
            </div>
            
                
          <div class="inputBox">       
          <tr>
          <td>
          <label >Age Group</label> 
          </td>
          <td id="aligncentre">
          <br>
          <br>
          <div class="form-check form-check-inline d-flex flex-row">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" >
            <label class="form-check-label" for="exampleRadios4">
              15 - 30
            </label>
          </div>
          <div class="form-check form-check-inline d-flex flex-row ms-4">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
            <label class="form-check-label" for="exampleRadios5">
              30 Above
            </label>
          </div>
          </td>
          </tr>
        </div>
                
          <div class="inputBox">   
          <tr>
          <td>
          <label>Dedicated Days</label> 
          </td>
          <td id="aligncentre">
          <br><br>
          <div class="form-check form-check-inline d-flex flex-row">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" >
            <label class="form-check-label" for="exampleRadios4">
              1 - 2 DAYS / WEEK
            </label>
          </div>
          <div class="form-check form-check-inline d-flex flex-row ms-4">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
            <label class="form-check-label" for="exampleRadios5">
              3 - 4 DAYS / WEEK
            </label>
          </div>
          <div class="form-check form-check-inline d-flex flex-row ms-4">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
            <label class="form-check-label" for="exampleRadios5">
              5 - 6 DAYS / WEEK
            </label>
          </div>
          </td>
          </tr>
          </div>
          </table>

            <div>
            <button id="buton" type="submit" class="registerbtn">Register</button>
            </div>

            <div class="container signin">
              <p>Already have an account? 
                <a id="styil" href="http://localhost/project/login%20form/index.php" target="_self">Sign in</a>
                </p>
            </div>

          </form>
          </div>
          </div>
</body>
</html>



