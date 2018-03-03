let flip = false;

function validateInfo()
{
  let numP = document.getElementById("Puppies").value;
  let numK = document.getElementById("Kittens").value;
  let numD = document.getElementById("Ducks").value;
  let username = document.getElementById("uname").value;
  let password = document.getElementById("pword").value;
  let uValid = document.getElementById("uname").validity.valid;

  if(numP==""|| numK==""|| numD=="")
  {
    alert("Empty Input Box.");
    shouldGoToPHP(false);
  }
  else if(username =="" && uValid)
  {
    alert("Email address invalid.");
      shouldGoToPHP(false);
  }
  else if(password =="")
  {
    alert("Password invalid.")
    shouldGoToPHP(false);
  }
  else {
    shouldGoToPHP(true);
  }
}

function shouldGoToPHP(yes){
  if(yes)
    document.getElementsByTagName("form")[0].setAttribute("action", "customerBackend.php");
  else {
    document.getElementsByTagName("form")[0].setAttribute("action", "");
  }
}
