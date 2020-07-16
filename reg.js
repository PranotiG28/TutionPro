function check()
{
	dom = document.regform
	
	if(dom.r.value=="")
        {
                alert("Plese Enter Reg No .");
                dom.r.focus();
                return false;
                                                                                
        }
if(dom.n.value=="")
	{
		alert("Plese Enter Name.");
		dom.n.focus();
		return false;
	
	}
	if(dom.add.value=="")
	{
		alert("Plese Enter Address");
		dom.add.focus();
		return false;
	
	}
	if(dom.dob.value=="")
	{
		alert("Plese Enter DOB.");
		dom.dob.focus();
		return false;
	
	}	
	
	if (IsNumeric(dom.dob.value) == false) 
    {
      alert("Date should be non Alphebetic");
	  dom.dob.focus();
	  return false;
     }
	 if(dom.cn.value=="")
	{
		alert("Plese Enter Contact Number.");
		dom.contact.focus();
		return false;	
	}	
	
	if (IsNumeric(dom.cn.value) == false) 
    {
      alert("Contact number should be non Alphebetic");
	  dom.cn.focus();
	  return false;
     }
	        if (IsNumeric(dom.r.value) == false)
    {
      alert("Registration number should be non Alphebetic");
          dom.r.focus();
          return false;
     }

	 if(dom.em.value=="")
	{
		alert("Plese Enter E-Mail Id ");
		dom.em.focus();
		return false;
	
	}
	if(emailcheck(dom.em.value))
	{
		alert("Please Enter Correct E-Mail");
		dom.em.focus();
		return false;
	}
	if(dom.course.value=="")
	{
		alert("Plese Select Course.");
		dom.course.focus();
		return false;
	
	}
}
	function emailcheck(email) 	                                        
	{                                                                       
																	
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
		{                                                               
		return false;                                           
		}                                                               
		return true;                                                    
	}
	  
function IsNumeric(strString)
   //  check for valid numeric strings	
   {
   var strValidChars = "0123456789.-";
   var strChar;
   var blnResult = true;

   if (strString.length == 0) return false;

   //  test strString consists of valid characters listed above
   for (i = 0; i < strString.length && blnResult == true; i++)
      {
      strChar = strString.charAt(i);
      if (strValidChars.indexOf(strChar) == -1)
         {
         blnResult = false;
         }
      }
   return blnResult;
   }
`
