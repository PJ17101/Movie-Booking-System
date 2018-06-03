<html>
<head>
{literal}
  <script language=javascript>
	function validateForm()
	{
	  var f=document.log_in;
	  
      if(f.password.value=="")
      {
            alert("please Enter Password");
            f.password.focus();   
            return false;
      }  
      return true;
	}
  </script>
  {/literal}
  </head>
<body background="./images/bg.jpg"><br><br><br><br><br><br>
    <form name="log_in" action="index.php?service=LOGIN" method=POST onSubmit="return validateForm()" >
    <center>	
	<table border="4">
	
	<th colspan="4" align="center" >{$message}</th>
	</tr>
	<tr>
		<th>User Name</th><td> <input type=text name=username maxlength=15 size=15></td>
	</tr>	
	<tr>
		<th>Password 	</th><td><input type=password name=password value="" maxlength=15 size=15></td> 
	</tr>	
        <tr>
		<td colspan="4" align="center"><input type=submit name=ln_submit value="LOGIN"></td>
	</tr>
	       </table>			              
		   
  	</center>	
	  </form>

</body>
</html>
