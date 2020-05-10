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
        document.getElementById("forma2").style.display= "none";
        document.getElementById("signIn").style.display= "flex";
      

     }

    }
 function noDataR(){
   var name = document.getElementById("label2").value;
   var email = document.getElementById("label3").value;
   var password = document.getElementById("label4").value;
   var password2 = document.getElementById("label5").value;
   if(name.trim()=='' || email.trim() =='' || password.trim()=='' || password2.trim()==''){
   alert("You must fill in all of the fields");
  }
  else{ if(password.match(password2)){
      alert ("--Welcome to pocketMarket--(Log in now)");
  }   
  else {
      alert("Your passwords do not match Up!");
  }  
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