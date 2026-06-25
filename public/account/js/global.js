
var imageurl;
var ref = "";
var urlParams;
function apiPath(path) {
  var accountPath = "/account/";
  var accountIndex = window.location.pathname.indexOf(accountPath);
  var basePath = accountIndex === -1 ? "" : window.location.pathname.substring(0, accountIndex);

  return basePath + path;
}
(window.onpopstate = function () {
    var match,
        pl     = /\+/g,  // Regex for replacing addition symbol with a space
        search = /([^&=]+)=?([^&]*)/g,
        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
        query  = window.location.search.substring(1);
  
    urlParams = {};
    while (match = search.exec(query))
       urlParams[decode(match[1])] = decode(match[2]);
})();
if (urlParams['ref'] == null) {
  ref = "";
}else{
ref = urlParams['ref'];
}
function image() {
const webcamElement = document.getElementById('webcam');
const canvasElement = document.getElementById('canvas');
const imageElement = document.getElementById('image');
const opencam = document.getElementById('opencam');
const snap = document.getElementById('snap');
const webcam = new Webcam(webcamElement, 'user', canvasElement, null);
imageElement.style.display = "none";
webcamElement.removeAttribute("style");

webcam.start()
opencam.style.display = "none";
snap.style.display = "block"
$('#snap').click(function(){
  document.getElementById("loader2").classList.remove('hidden');
    picture = webcam.snap();
    webcam.stop();
    imageurl = picture;
    webcamElement.style.display = "none";
    imageElement.style.display = "block";
    imageElement.setAttribute("src", picture);
    this.style.display = "none";
    document.getElementById('iconspan').style.display = 'none';
    setTimeout(() => {
      document.getElementById("loader2").classList.add('hidden');
    }, 1000);
});


}
function change() {
  var c = document.getElementById("country").value;
  document.getElementById("phone").value = c.toString();
  
}
function register(e) {
  document.getElementById("submit").setAttribute("disabled", true);
  document.getElementById("loader2").classList.remove('hidden');
    
    var name = document.getElementById("lname").value;
    var email = document.getElementById("email1").value;
    var phone = document.getElementById("phone").value;
    var pass = document.getElementById("password1").value;
    var pass1 = document.getElementById("password2").value;
    var ccode = document.getElementById("country").value;
    if (imageurl == null) {
      setTimeout(() => { 
        Swal.fire(
            {
                icon: 'error',
                title: 'Facial Verification',
                text: 'Complete Facial Verification to continue',
                background: '#000'
              }
           
          )
        document.getElementById("loader2").classList.add('hidden');
      }, 1500);
       
          document.getElementById("submit").removeAttribute("disabled");
        return;
    }
    
    if (name != "" && email!=""&&pass!=""&&pass1!=""&&pass==pass1) {
        document.getElementById("submit").innerHTML = "Creating Account...";

    $.post(apiPath("/register"),
    {
      name: name,
      email: email,
      phone: phone,
      password: pass,
      ref: ref,
      country: ccode,
      file: imageurl,
      
    },
    function(data,status){
     
     setTimeout(() => {
      document.getElementById("loader2").classList.add('hidden');
      Swal.fire(
        {
            icon: data.status,
            title: data.status,
            text: data.message,
            background: '#000'
          }
       
      )
     }, 2000);
      document.getElementById("submit").removeAttribute("disabled");
      if (data.status == "success") {
        document.getElementById("submit").innerHTML = "Redirecting";
        setTimeout(function(){
          location.replace("/dashboard");
        },3000);
        
      }else{
        document.getElementById("submit").innerHTML = "Register";
      }
    }).fail(function(){
      document.getElementById("loader2").classList.add('hidden');
      document.getElementById("submit").removeAttribute("disabled");
      document.getElementById("submit").innerHTML = "Register";
      Swal.fire(
        {
            icon: 'error',
            title: 'Error Creating Account',
            text: 'Registration request failed. Check that localhost is pointing to the Symfony public folder.',
            background: '#000'
          }
      )
    });
    document.getElementById("submit").removeAttribute("disabled");
    }else{
        document.getElementById("submit").innerHTML = "Create Account";
        setTimeout(() => { 
          Swal.fire(
              {
                  icon: 'error',
                  title: 'Error Creating Account',
                  text: 'All Fields Are Required',
                  background: '#000'
                }
             
            )
          document.getElementById("loader2").classList.add('hidden');
        }, 1500);
         
            document.getElementById("submit").removeAttribute("disabled");
    }
    
    var name = document.getElementById("lname").value;
    
}
function login() {
  document.getElementById("loginb").setAttribute("disabled", true);
    var email = document.getElementById("email2").value;
    var pass = document.getElementById("password12").value;
    if (email == "" || pass == "") {
      Swal.fire(
        {
            icon: 'error',
            title: 'Error',
            text: 'All fields are required!',
            background: '#000'
          }
       
      )
      document.getElementById("loginb").removeAttribute("disabled");
      return;
    }
    document.getElementById("loginb").innerHTML = "Verifying Acount...";


    $.post(apiPath("/login"),
    {
      email: email,
      password: pass,
    },
    function(data,status){
     
      Swal.fire(
        {
            icon: data.status,
            title: data.status,
            text: data.message,
            background: '#000'
          }
       
      )
      document.getElementById("loginb").removeAttribute("disabled");
      if (data.status == "success") {
        document.getElementById("loginb").innerHTML = "Redirecting";
        setTimeout(function(){
          location.replace(data.path);
        },3000);
      }else{
        document.getElementById("loginb").innerHTML = "Continue";
      }
    }).fail(function(){
      Swal.fire(
        {
            icon: 'error',
            title: 'Error',
            text: 'Login request failed. Check that localhost is pointing to the Symfony public folder.',
            background: '#000'
          }
      )
      document.getElementById("loginb").removeAttribute("disabled");
      document.getElementById("loginb").innerHTML = "Log in";
    });

}
