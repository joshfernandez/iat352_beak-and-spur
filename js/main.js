function filter_suggestion()
{
    // retrieve value from textbox & display suggestion
    // id = "font-name"
    var fontNameValue = document.getElementById("searchbar_f").value;

    // XMLHttpRequest is created and configured
    var xhr;
    // code for IE7+, Firefox, Chrome, Opera, Safari
    if (window.XMLHttpRequest) { 
		xhr = new XMLHttpRequest();
    } 
    // code for IE6, IE5
    else if (window.ActiveXObject) { 
		xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    var data = "family-name=" + fontNameValue; 
    console.log(data);
        xhr.open("POST", "filter.php", true);     
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                           
        xhr.send(data);
        xhr.onreadystatechange = display_data;
        
        function display_data() {
            if (xhr.readyState == 4) {
            if(xhr.status == 200){
            //sends back result
            console.log(xhr.responseText);
            // document.getElementById("suggestion").innerHTML = xhr.responseText;
            // OHHH IT GRABS THE WHOLE DOCUMENT FUCK
             } else {
               console.log('There was a problem with the request.');
             }
            }
           }
        }
