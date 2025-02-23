// document.getElementById('loginform').addEventListener('submit', function(event) {
//     event.preventDefault();

//     const username = document.getElementById('username').value;
//     const password = document.getElementById('password').value;

//     // Check if fields are empty or contain 'lol'
//     if (username === '' || password === '') {
//         alert('PLEASE FILL ALL THE FIELDS!!');
//         return;
//     }
    
//     console.log('username:', username);
//     console.log('password:', password);
    
//     // Redirect to page1.html upon successful login
    
// });

document.getElementById("togglePassword").addEventListener("click", function() {
    const passwordField = document.getElementById("password");
    const isPassword = passwordField.getAttribute("type") === "password";
    passwordField.setAttribute("type", isPassword ? "text" : "password");
  
    // Toggle SVG visibility
    document.getElementById("eyeOpen").style.display = isPassword ? "none" : "inline";
    document.getElementById("eyeClosed").style.display = isPassword ? "inline" : "none";
  });
  
  