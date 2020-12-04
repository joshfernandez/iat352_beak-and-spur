function main(){
    //<-- SEARCH BAR -->
    // retrieve value from textbox & display suggestion
    var fontNameValue = document.getElementById("searchbar_f").value;
    var searchBarData = "searchbar_f=" + fontNameValue; 

    //<-- PRIMARY FILTER -->
    var checked = document.querySelectorAll('.checkbox-item');
    var filterValue = [];

    // console.log(checked);

    // loop through all checkbox items
    for(var i = 0; i < checked.length; i++){
        // checks for the value of the filter (Checked/Unchecked)
        if(checked[i].checked == true){
            // store value of button in variable
            filterValue.push(checked[i].value);
            // console.log(checked[i].value);
        } 
    }
    console.log(filterValue);
    var primaryData = "font_type_filter=" + filterValue; 

    // prepping it into a json
    var toSend = {
        "searchbar_f": fontNameValue,
        "font_type_filter": filterValue,
    };

    var jsonString = JSON.stringify(toSend);

    //XMLHttpRequest is created and configured
    var xhr;
    // code for IE7+, Firefox, Chrome, Opera, Safari
    if (window.XMLHttpRequest) { 
        xhr = new XMLHttpRequest();
    }  else if (window.ActiveXObject) {  // IE 8 and older
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    // processes the echo from the PHP file 
        xhr.open("POST", "php-backend/filter-ajax.php", true);     
        xhr.setRequestHeader("Content-Type", "application/json"); 
        xhr.send(jsonString);  
        console.log(jsonString);               
        // xhr.send(searchBarData + '&' + primaryData);
        // console.log(searchBarData + '&' + primaryData);
        xhr.onreadystatechange = display_data;

        function display_data() {
            if (xhr.readyState == 4) {
            if (xhr.status == 200) {
            
            document.getElementById("filter-container").innerHTML = xhr.responseText;
            //sends back result through filter-text
            // console.log(xhr.responseText);
            
            // displays content based on 
            // document.getElementById("filter-container").innerHTML = xhr.responseText;
            } 
            else {
            console.log('There was a problem with the request.');
            }
        }
    }
}

// //check whether checkbox is filled out
// function getCheckboxes(){
//     var checked = document.querySelectorAll('.checkbox-item');

//     // print querySelectorAll into console
//     // console.log(checked);

//     var filterValue = [];

//     // loop through all checkbox items
//     for(var i = 0; i < checked.length; i++){
//         // checks for the value of the filter (Checked/Unchecked)
//         if(checked[i].checked == true){
//             // store value of button in variable
//             filterValue.push(checked[i].value);
//             // console.log(checked[i].value);
//         } 
//     }
//     console.log(filterValue);
// // 
// if(filterValue !== undefined || filterValue.length != 0){
//     console.log("Array is populated");
//     //XMLHttpRequest is created and configured
//     var xhr;
//       // code for IE7+, Firefox, Chrome, Opera, Safari
//       if (window.XMLHttpRequest) { 
// 		xhr = new XMLHttpRequest();
//     }  else if (window.ActiveXObject) {  // IE 8 and older
// 		xhr = new ActiveXObject("Microsoft.XMLHTTP");
//     }
    
//     var data = "font_type_filter=" + filterValue; 
//     // console.log(data);
//         // processes the echo from the PHP file 
//         xhr.open("POST", "php-backend/filter-ajax.php", true);     
//         xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
//         xhr.send(data);
//         xhr.onreadystatechange = display_data;

//         function display_data() {
//             if (xhr.readyState == 4) {
//             if (xhr.status == 200) {
//             //sends back result through filter-text
//             // console.log(xhr.responseText);

//             // displays content based on 
//             document.getElementById("filter-container").innerHTML = xhr.responseText;
//             } 
//             else {
//                console.log('There was a problem with the request.');
//             }
//         }
//     }
//   }

// }

// // This function runs when the key is pressed within the input box
// // AJAX for the main filtering 
// function filter_suggestion()
// {
//     // retrieve value from textbox & display suggestion
//     var fontNameValue = document.getElementById("searchbar_f").value;
    
//     //XMLHttpRequest is created and configured
//     var xhr;
//       // code for IE7+, Firefox, Chrome, Opera, Safari
//       if (window.XMLHttpRequest) { 
// 		xhr = new XMLHttpRequest();
//     }  else if (window.ActiveXObject) {  // IE 8 and older
// 		xhr = new ActiveXObject("Microsoft.XMLHTTP");
//     }

//     var data = "searchbar_f=" + fontNameValue; 
//     console.log(data);
//         // processes the echo from the PHP file 
//         xhr.open("POST", "php-backend/filter-ajax.php", true);     
//         xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
//         xhr.send(data);
//         xhr.onreadystatechange = display_data;

//         function display_data() {
//             if (xhr.readyState == 4) {
//             if (xhr.status == 200) {
//             //sends back result through filter-text
//             console.log(xhr.responseText);

//             // displays content based on 
//             document.getElementById("filter-container").innerHTML = xhr.responseText;
//             } 
//             else {
//                console.log('There was a problem with the request.');
//             }
//         }
//     }
// }