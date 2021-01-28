function validate_form() {
    var fname = document.forms["myForm"]["fname"].value;
    var lname = document.forms["myForm"]["lname"].value;
    var email = document.forms["myForm"]["email"].value;
    var birthday = document.forms["myForm"]["birthday"].value;

    if (fname == "") {
        alert("First name must be filled out");
     return false;
     }

    if (lname == "") {
        alert("Last name must be filled out");
     return false;
     }

    if (email == "") {
       alert("Email must be filled out");
      return false;
     }

     if (birthday == "") {
       alert("Birthday must be filled out");
      return false;
     }


}






















