

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/meta.php'; ?>
        <script type="text/javascript" src="ajax.js"></script>
        <title>Ajax Example</title>
    </head>
    
    <body onload="process();">
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/header.php'; ?>

        <p class="title">AJAX Example</p>
        
        <p class="paragraph">
            AJAX stands for Asynchronous JavaScript and XML. It is not a programming language, but a part of the XMLHTTPRequest component
            with the ability to send and receive data without having to refresh the page.
            <br>
            You can test out this request ability and asynchronous response below:
            <br><em>Notice the whole page does not refresh, rather just updates that one HTML Element</em>
            <br><br>
            <strong>Enter the type of food you are craving:</strong>
        <input type="text" id="userInput"/>  
        </p>
        <br>
        <p id="underInput" class="font"></p>
      
        <p class="font">HTML View</p>
        
        <div class="span">
            <pre>
            <code>
&lt;html>
    &lt;head>
     
        &lt;script type="text/javascript" src="ajax.js"&gt;&lt;/script&gt;
        &lt;title&gt;Ajax Example&lt;/title&gt;
    &lt;/head&gt;
    
    &lt;body onload="process();"&gt;


       &lt;p class="title"&gt;AJAX Example&lt;/p&gt;
        
        &lt;p class="paragraph"&gt;
        Enter the type of food you are craving:
        &lt;input type="text" id="userInput"/&gt;  
        &lt;/p&gt;
        &lt;br&gt;
        &lt;p id="underInput" class="paragraph"&gt;&lt;/p&gt;                
           
            </code>
            </pre>
        </div>
        
        <p class="font">PHP Code
            <br> I used PHP in order to store a restaurant genre array to match the user input and to provide an example of asynchronous feedback</p>
        
        <div class="span">
            <pre>
                <code>
&lt;?php

header('Content-Type: text/xml'); 
echo '&lt;?xml version="1.0" encoding="UTF-8" standalone="no" ?&gt;';

echo '&lt;response&gt;'; 
    $food = strtolower($_GET['food']);
    $foodArray = array('mexican', 'italian', 'salad', 'american', 'sushi', 'pho'); 
        if($food == 'mexican'){
            echo 'Las Cuatros Milpas is an excellent '.ucfirst($food).' restaurant';
        } elseif($food == 'italian') {
            echo 'Buca di Beppo is an excellent '.ucfirst($food).' restaurant';
        } elseif($food == 'salad') {
            echo 'Souplantation is an excellent '.$food.' restaurant';
        } elseif($food == 'american') {
            echo 'In-N-Out is an excellent '.ucfirst($food).' restaurant';
        } elseif($food == 'sushi') {
            echo 'LoveBoat Sushi is an excellent '.ucfirst($food).' restaurant';
        } elseif($food == 'pho') {
            echo 'Pho-Ever is an excellent '.ucfirst($food).' restaurant';
        } elseif ($food =='') {
            echo 'Choose a genre of food, yo!'; 
        } else
            echo 'We have great suggestions for Mexican, Italian, Salad, American, Sushi, and Pho!'; 
   
echo'&lt;/response&gt;';                    
                </code>
            </pre>
        </div>
        
        <p class="font">JavaScript Code
            <br> JavaScript is used to make the asynchronous request to the server, modifying the specific document element requested</p>
        
        <div class="span">
            <pre>
                <code>
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
        //null because we are using GET not POST 
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
   
                </code>
            </pre>
        </div>
         <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php'; ?>
    </body>
        
        
</html>
