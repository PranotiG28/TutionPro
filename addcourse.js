function check()
{
	dom = document.addcourseform
	
	if(dom.code.value=="")
        {
                alert("Plese Enter Code .");
                dom.name.focus();
                return false;
                                                                                
        }
if(dom.cname.value=="")
	{
		alert("Please Enter Course Name.");
		dom.cname.focus();
		return false;
	
	}
	if(dom.duration.value=="")
	{
	 alert("Please Enter Duration.");
                dom.duration.focus();
                return false;
                                                                                
        }
 if(dom.fees.value=="")
        {
         alert("Please Enter Fees.");
                dom.fees.focus();
                return false;
                                                                                
        }

	
	if (IsNumeric(dom.duration.value) == false) 
    {
      alert("Enter correct Duration");
	  dom.duration.focus();
	  return false;
     }
	
	
	if (IsNumeric(dom.fees.value) == false) 
    {
      alert("Fees should be non Alphebetic");
	  dom.fees.focus();
	return false;
	}				
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

