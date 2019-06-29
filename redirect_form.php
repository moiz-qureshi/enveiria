<!DOCTYPE html>
<html>
<head>
<title>Redirect Form To a Particular Page On Submit - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href='css/redirect_form.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
</head>
<body>
<div class="contact-form">
             <form name="contact" action="success-page.html" id="#form" method="post" name="#form">  
  <input name="email" type="email" placeholder="Email" required>   
  <input name="firstName" type="text" placeholder="First Name">  
  <input name="lastName" type="text" placeholder="Last Name">  
   
<button name=submit type="submit" id="submit-form">Submit</button> 
<!---- Including PHP File Here ---->
<?php
include "include/redirect.php";
?>
               
               
             
 </form> 
          </div>
      </div>
  </div>
  
<script>  
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzL_uocyBMYC-RYpO3oxa9D_Qs6FAUSlop42IiWrnxsmSDg75mm/exec'  
  const form = document.forms['contact']
  
  form.addEventListener('submit', e => {  
   e.preventDefault()  
   fetch(scriptURL, { method: 'POST', body: new FormData(form)})  
    .then(response => console.log('Success!', response))  
    .catch(error => console.error('Error!', error.message))  
  }          
                       )  
  </script> 
</section>
  
</body>
</html>


