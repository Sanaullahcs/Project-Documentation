  // Function to open the selected tab content
  function openTab(event, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.remove("active");
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).classList.add("active");
    event.currentTarget.className += " active";
} 

// Function to copy the text content of the specified tab
    function copyContent(tabName) {
        var contentToCopy = document.getElementById(tabName).textContent;
        navigator.clipboard.writeText(contentToCopy).then(function() {
            console.log('Copied to clipboard');
            // Show notification
            var notification = document.getElementById(tabName).querySelector(".notification");
            notification.style.display = "block";
            setTimeout(function() {
                notification.style.display = "none";
            }, 2000); // Hide notification after 2 seconds
        }, function(err) {
            console.error('Unable to copy to clipboard: ', err);
        });
}
    
