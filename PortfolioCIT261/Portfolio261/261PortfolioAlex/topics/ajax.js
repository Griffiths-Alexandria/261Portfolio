//Required function for AJAX 
var xmlHttp = createXmlHttpRequestObject(); 

//function to create object for communications
function createXmlHttpRequestObject(){ 
    var xmlHttp; 
    
    if(window.ActiveXObject){
        try{
            //testing for Internet Explorer
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP"); 
        } catch(e){
            xmlHttp = false; 
        }
    } else {
        try{
            //all other browsers
            xmlHttp = new XMLHttpRequest();
        } catch(e) {
            xmlHttp = false; 
        }
    }

    if(!xmlHttp)
        alert("can't create that object");
    else 
        return xmlHttp; 

}

//function for taking object and sending request to the server
function process(){
    //if the object matches these states (ready to go), this is what we want to happen
    if(xmlHttp.readyState===0 || xmlHttp.readyState===4){
        //variable food is the value of whatever the user types in
        food = encodeURIComponent(document.getElementById("userInput").value);
        //communicate with server - built in functions (get, url, true - asyncronously or not)
        xmlHttp.open("GET", "/ajax2.php?food=" + food, true);
        xmlHttp.onreadystatechange = handleServerResponse; //handserverresponse updates website
        //null because we are using GET 
        xmlHttp.send(null); 
    } else{
        //if the object is busy, then wait for a second - then run process() again
        setTimeout('process()', 100); 
    }
}

//third required function - what we want to do with the object
function handleServerResponse(){
    if(xmlHttp.readyState===4) {
        //if object is done communicating - check status
        if(xmlHttp.status===200){
            xmlResponse = xmlHttp.responseXML; 
            //get xml document element - the root element of the xml file
            xmlDocumentElement = xmlResponse.documentElement; 
            message = xmlDocumentElement.firstChild.data;  
            //how to change html file
            document.getElementById("underInput").innerHTML = message;
            //wait a second before giving answer
            setTimeout('process()', 100);
        } else{
            alert("Something went wrong. Sorry"); 
        }
    }
}