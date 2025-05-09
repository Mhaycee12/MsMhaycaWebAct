function validatesignup(){
    

    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    
    axios.post('/WebAct/controllers/signup.php',{
        fname: fullname,
        mail: email,
        uname: username,
        pword: password
   }).then (  (response) => {
       console.log(response.data);
       if(response.data == "valid"){
         alert("Account Saved")
       
 
       }else{
         alert("Signup Successfull");
         window.location.href = "/WebAct/view/Login.html";
       }
 
 
   })

}