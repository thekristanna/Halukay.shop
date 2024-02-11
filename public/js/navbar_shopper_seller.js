document.getElementById('navigateSelect').addEventListener('change', function() {
    var url = this.value; 
    if(url) { 
      window.location = url; 
    }
  });
  