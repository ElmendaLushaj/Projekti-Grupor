function noDataReg() {

    var input = document.getElementById("name").value;
    var input1 = document.getElementById("code").value;
    var input3 = document.getElementById("producer").value;
    var input5 = document.getElementById("price").value;



    if (input.trim() == '' || input1.trim() == '' || input2.trim() == '' || input3.trim() == '' || input5.trim() == '') {
        alert("Please fill the required fields!");
    } else {
        if (isNaN(input1)) {
            alert("Code must be a number");
            
            
        } else if (isNaN(input5)) {
            alert("Price must be a number");
            window.open('../productForm.php');
        }
    }
}




function noDataEdit() {

    var input = document.getElementById("name").value;
    var input1 = document.getElementById("code").value;
    var input3 = document.getElementById("producer").value;
    var input5 = document.getElementById("price").value;
    var input6 = document.getElementById("id").value;


    if (input.trim() == '' || input1.trim() == '' || input2.trim() == '' || input3.trim() == '' || input5.trim() == '') {
        alert("Please fill the required fields!");
    }
    if (input6.trim() == '') {
        alert("Please fill the ID field!");
    }
    if (isNaN(input1)) {
        alert("Code must be a number");
    }
    if (isNaN(input5)) {
        alert("Price must be a number");
    }
    if (isNaN(input6)) {
        alert("ID must be a number");
    }


}

function noDatadel() {

    var input = document.getElementById("id").value;


    if (input.trim() == '') {
        alert("Please fill the required field!");
    }
    if (isNaN(input)) {
        alert("ID must be a number");
    }


}



function noDataR() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("code").value;
    var password = document.getElementById("producer").value;
    var password2 = document.getElementById("price").value;
    if (name.trim() == '' || email.trim() == '' || password.trim() == '' || password2.trim() == '') {
        alert("You must fill in all of the fields");
    } else {
        if (password.match(password2)) {
            //window.open('homepage.html');

        } else {
            alert("Your passwords do not match Up!");
        }
    }
}

function Refresh() {
    window.open('logIn.php');
}



function fileValidation() {
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (!allowedExtensions.exec(filePath)) {
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    } else {
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="' + e.target.result + '"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
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