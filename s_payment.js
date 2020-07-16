function check()
{
	dom = document.s_payment
	
	if(dom.sid.value=="")
        {
                alert("Plese Enter Student ID .");
                dom.sid.focus();
                return false;
                                                                                
        }
	if(dom.cardno.value=="")
        {
                alert("Plese Enter Card No .");
                dom.cardno.focus();
                return false;
                                                                                
        }
 if (IsNumeric(dom.cardno.value) == false)
    {
      alert("Card No should be non Alphebetic");
          dom.cardno.focus();
          return false;
     }

if(dom.cname.value=="")
	{
		alert("Plese Enter Card Holders Name.");
		dom.cname.focus();
		return false;
	
	}
	if(dom.cvv.value=="")
	{
		alert("Plese Enter Valid CVV.");
		dom.cvv.focus();
		return false;
	
	}	
	
	if (IsNumeric(dom.amt.value) == false) 
    {
      alert("Amount value should be non Alphebetic");
	  dom.amt.focus();
	  return false;
     }
	 if(dom.contact.value=="")
	{
		alert("Please Enter Contact Number.");
		dom.contact.focus();
		return false;	
	}	
	
	if (IsNumeric(dom.contact.value) == false) 
    {
      alert("Contact number should be non Alphebetic");
	  dom.contact.focus();
	  return false;
     }
	
        if (IsNum(dom.cvv.value) == false)
    {
      alert("CVV should not exceed 3 digits");
          dom.cvv.focus();
          return false;
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
`function IsNum(strString)
   //  check for valid numeric strings
   {
   var strValidChars = "0123456789.-";
   var strChar;
   var blnResult = true;
                                                                                
   if (strString.length > 3) return false;
                                                                                
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
