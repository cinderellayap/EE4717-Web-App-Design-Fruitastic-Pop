function chkName(event) {

// Get the target node of the event

  var myName = event.currentTarget;

// Test the format of the input name 
//  Allow the spaces after the commas to be optional
//  Allow the period after the initial to be optional

  var pos = myName.value.search(/^[A-Za-z ]*$/);

  if (pos != 0) {
    alert("The name you entered (" + myName.value + 
          ") is not in the correct form. \n" +
          "Only alphabets and character spaces are allowed.");
    myName.focus();
    myName.select();
	return false;
  } 
}

// ********************************************************** //
// The event handler function for the email text box

function chkEmail(event) {
	

// Get the target node of the event

  var myEmail = event.currentTarget;

// Test the format of the input email
 
  var pos = myEmail.value.search(/^[A-Za-z0-9\.\-]+\@[A-Za-z0-9]*\.*[A-Za-z0-9]*\.*[A-Za-z0-9]+\.[A-Za-z0-9]{2,3}$/);
  var ext = myEmail.value.search(/\.{2,}/);
 
  if (pos != 0 || ext != -1) {
    alert("The email you entered (" + myEmail.value +
          ") is not in the correct form. \n");
    myEmail.focus();
    myEmail.select();
	return false;
  } 
}

// ********************************************************** //

      var nameNode = document.getElementById("name");
      var emailNode = document.getElementById("email");
	  var messageNode = document.getElementById("message");
      nameNode.addEventListener("change", chkName, false);
      emailNode.addEventListener("change", chkEmail, false);
	  messageNode.addEventListener("change", chkmessage, false);
	  



// ********************************************************** //
// The event handler function for the message text box

function chkmessage(event) {
	
  var mymessage = event.currentTarget;
  var valmessage = mymessage.value.trim();
  
  if (valmessage == "") {
    alert("The field cannot be left blank");
    mymessage.focus();
    mymessage.select();
	return false;
  } 

}