function noData(){
  
    var input = document.getElementById("label").value;
    var input1 = document.getElementById("label1").value;
    if(input.trim()=='' || input1.trim()==''){
        alert("Username or Password empty");
    }
     
     
      
  }
 function SignUp(){
     var x = document.getElementById("signIn").style.display;
     if(x=="flex"){
    document.getElementById("signIn").style.display= "none";
    document.getElementById("forma2").style.display= "flex";
     }
     else{
        document.getElementById("signIn").style.display= "flex";
        document.getElementById("forma2").style.display= "none";

     }

    




 }
 
 /*
 function changeForm(form) {
    let forms = document.querySelectorAll("form>div");
    if (form == 0) {
        forms[0].classList.remove("hidden");
        forms[0].classList.add("form-style");
        forms[1].classList.add("hidden");
        forms[1].classList.remove("form-style");
    } else {
        forms[1].classList.remove("hidden");
        forms[1].classList.add("form-style");
        forms[0].classList.add("hidden");
        forms[0].classList.remove("form-style");
    }
}*/