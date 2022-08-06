// Form
const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");
/*const count=()=>{
  let msg=document.getElementById("tdescription").value;
  let word=msg.split(' ').length;
  document.getElementById('word').innerText=word;
  document.getElementById('letter').innerText=msg.length;

}*/
let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}

// Uploaded-image-display
const image_input = document.querySelector("#tprofileimage");
var uploaded_image;

image_input.addEventListener('change', function() {
  const reader = new FileReader();
  reader.addEventListener('load', () => {
    uploaded_image = reader.result;
    document.querySelector("#profileimagepreview").style.backgroundImage = `url(${uploaded_image})`;
  });
  reader.readAsDataURL(this.files[0]);
});
/*function validname()
{
  let uname=document.getElementById("tname");
  if(uname.value.length < 8)
  {
     document.getElementById("brd1").innerHTML = "invalid username"; 
  }
  else
  {
      document.getElementById("brd1").innerHTML = "valid username"; 
  }
}
function validmail()
{
  let mail=document.getElementById("tmail").value;
  if(mail.search(/[@]/)==-1 || mail.search(/[.]/)==-1)
  {
      document.getElementById("brd2").innerHTML = "invalid email";
  }
  else if(mail.search(/[@]/)!=-1 && mail.search(/[.]/)!=-1)
  {
      document.getElementById("brd2").innerHTML = "valid email";
  }
}
function validphone()
{
  let phone = document.getElementById("tmobile").value;
  if(phone.length < 10)
  {
    document.getElementById("brd3").innerHTML = "invalid phone number";
  }
  else if(phone.search(/[!\@\#\$\%\^\&\*\(\)]/) != -1)
  {
    document.getElementById("brd3").innerHTML = "invalid phone number";
  
  }
  else{
    document.getElementById("brd3").innerHTML = "valid phone number";
  
  }
}
function validpass()
{
 
  let passcode=document.getElementById("tpass").value;
  if(passcode.length <8)
  {
      document.getElementById("brd4").innerHTML="password must be minimum 8 characters length";
  }
  else if(passcode.search(/[a-z]/)==-1)
  {
      document.getElementById("brd4").innerHTML="atleast one small case should be present";
  }
  else if(passcode.search(/[A-Z]/)==-1)
  {
      document.getElementById("brd4").innerHTML="atleast one uppercase is present";
  }
  else if(passcode.search(/[0-9]/)==-1)
  {
      document.getElementById("brd4").innerHTML="atleast one numeric value present";
  }
  else if(passcode.search(/[!\@\#\$\%\^\&\*\(\)]/)== -1)
  {
      document.getElementById("brd4").innerHTML="atleast one special case needed";
  }
  else
  {
      document.getElementById("brd4").innerHTML="valid password";
  } 

}
function showpass()
{
    let rev=document.getElementById("tpass");
    if(rev.type=="password")
    {
        rev.type="text";
        document.getElementById("showpass").innerHTML = "hide";
    }
    else{
        rev.type="password";
        document.getElementById("showpass").innerHTML = "show";
    }
}
function validcpass()
{
    let repass=document.getElementById("cpass").value;
    let opass = document.getElementById("tpass").value;
    if((repass.localeCompare(opass))!=0)
    {
        document.getElementById("brd5").innerHTML = "reenter password";
    }
    else if ((repass.localeCompare(opass))==0){
        document.getElementById("brd5").innerHTML = "valid password";
    }
}
function showcpass()
{
    let rev=document.getElementById("cpass");
    if(rev.type=="password")
    {
        rev.type="text";
        document.getElementById("showcpass").innerHTML = "hide";
    }
    else{
        rev.type="password";
        document.getElementById("showcpass").innerHTML = "show";
    }
}*/