// Login page
window.onload = function() {
    // Check if welcome parameter is present in the URL
    const urlParams = new URLSearchParams(window.location.search);
    const welcome = urlParams.get('welcome');
  
    if (welcome) {
      // Display welcome message
      const welcomeMsg = document.getElementById("welcomeMsg");
      welcomeMsg.innerText = "Registration success!";
      welcomeMsg.style.display = "block";
  
      // Hide welcome message after 10 seconds
      setTimeout(function() {
        welcomeMsg.style.display = "none";
      }, 10000);
    }
  }