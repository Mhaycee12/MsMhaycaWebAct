function validateLogin(){
 
 
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    
    axios.post('/WebAct/controllers/login.php',{
         uname: username,
         pword: password
    }).then (  (response) => {
        console.log(response.data);
        if(response.data == "valid"){
          alert("Welcome")
          window.location.href = "/WebAct/view/Dashboard.html";
  
        }else{
          alert("Gawa ka muna account!");
        }
  
  
    })
  
  
  }