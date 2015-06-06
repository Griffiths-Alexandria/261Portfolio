<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/meta.php'; ?>
        <title>JavaScript Objects</title>
        <script type="text/javascript">

//Create a constructor function 

function jedi(name, lightsaber, homeplanet, side) {
    this.name = name;
    this.lightsaber = lightsaber;
    this.homeplanet = homeplanet; 
    this.side = side; 
 
}
              
           
//Create a new instance of an object      

var luke = new jedi("Luke Skywalker", "Green", "Tatooine", "Rebel Alliance/Jedi"); 
var obiwan = new jedi("Obi-Wan Kenobi", "Blue", "Stewjon", "Jedi");
var darthvader = new jedi("Darth Vader", "Red", "Tatooine", "Sith/Galactic Empire");
var yoda = new jedi("Yoda", "Green", "Dagoba", "Jedi Grand Master");



//Create function to display information of object

function jediInfo(jedi) {
document.getElementById("output").innerHTML = "Jedi's Name: " + jedi.name + "<br>" + "Lightsaber Color: " + jedi.lightsaber + "<br>" + "Home Planet: " + jedi.homeplanet + "<br>" + "Allegiance: " + jedi.side; 
    
}
        
        </script>
            
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/header.php'; ?>
    
        <p class="title">
            JavaScript Objects 
        </p>
   
        <p class="paragraph">
            "In JavaScript, objects are king. If you understand objects, you understand JavaScript." - w3schools.com <br><br>
            
            When understanding JavaScript objects, there are three things you need to understand: Variables, Properties, and Methods. 
            
            <br><br><strong>Variables</strong> contain a single value, such as a name, or age, or color. Objects, although technically variables, 
            contain more than one value. Let's say we have a JavaScript object called "Jedi". This Jedi cannot be defined by a single variable. Just like
            in real life, a Jedi has numerous <strong>properties</strong>, such as a name, lightsaber color, home planet, and an allegiance. Each of these properties, which are 
            common among ALL Jedi, will differ in its value from one Jedi to another.<br><br>
            As you can see in the code below, I created a Constructor Function. This serves as a "mold" or "blueprint" for each Jedi object. In the function, I am 
            am instantiating their common properties. We use this.name = name; - this is saying that for this objects name, we will use what ever 'name' is passed through it (defined by the variable name in the individual Jedi objects).
            <br><br>
            To create a new instance of an object, you must be sure to define each variable that is passed through the constructor function. For the Jedi object
            I need to define my object's name, lightsaber color, home planet, and allegiance. <br><br>
            When it comes time to display each individual <strong>new</strong> Jedi object, the jedi() allows me to conveniently do so. To display each 
            individual Jedi (JavaScript object) you need to pass through your variable in the display method (jediInfo()). In example, to display the information for 
            Luke Skywalker, I am going to pass 'luke' (the object variable name) through the jediInfo() display method : "jediInfo(luke)". There are no 
            quotations around luke because it is not a string - it the object's name. 
        </p>
        
        <p class="font">
            JavaScript Code
        </p>
   
  
       
        <div class="span">

            <pre>
                <code data-language="javascript">
                    <span>
//Create a constructor function 

function jedi(name, lightsaber, homeplanet, side) {
    this.name = name;
    this.lightsaber = lightsaber;
    this.homeplanet = homeplanet; 
    this.side = side; 
}


//Create a new instance of an object      

var luke = new jedi("Luke Skywalker", "Green", "Tatooine", "Rebel Alliance");
var obiwan = new jedi("Obi-Wan Kenobi", "Blue", "Stewjon", "Jedi");
var darthvader = new jedi("Darth Vader", "Red", "Tatooine", "Sith/Galactic Empire");
var yoda = new jedi("Yoda", "Green", "Dagoba", "Jedi Grand Master");


//Create method to display information of object

function jediInfo(jedi) {
document.getElementById("output").innerHTML = "Jedi's Name: " + jedi.name + "<br>" + "Lightsaber Color: " + jedi.lightsaber + "<br>" + "Home Planet: " + jedi.homeplanet + "<br>" + "Side: " + jedi.side; 

}</span></code></pre>
        
        </div>
        
        <p></p>        
        
        <p class="font">
            Output <br>
            Click the buttons below to display the JavaScript properties of the Jedi (JavaScript objects). 

            <br>
            <button type="button" onclick="jediInfo(luke)"> Luke Skywalker </button>
            <button type="button" onclick="jediInfo(obiwan)"> Obi-Wan Kenobi </button>
            <button type="button" onclick="jediInfo(darthvader)"> Darth Vader </button>
            <button type="button" onclick="jediInfo(yoda)"> Yoda </button>

        </p>

        <p id="output" class="paragraph"></p>
                
                    
        <p class="font">
            Working JSFiddle to try code. 
        <iframe height="500" src="//jsfiddle.net/acgriffiths/dfa8oLyj/2/embedded/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
        
        <br>
        Team Meeting <br>
        Team Members: Keith, Daniel, Alex, and Christian
        <iframe height="360" src="https://www.youtube.com/embed/skUKXaW80dE" frameborder="0" allowfullscreen></iframe>
        <br>
        TimeStamps: 
        <br>
        <a href="https://youtu.be/skUKXaW80dE?t=4s">Teaching about JavaScript Objects</a>
        <br>
        Sources:
        <br>
        <a href="http://www.w3schools.com/js/js_object_definition.asp">w3Schools - JavaScript Objects</a>
        <br>
        <a href="https://www.youtube.com/watch?v=6xLcSTDeB7A">thenewboston JavaScript Object tutorial</a> 
        
        </p>
        
        
        
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php'; ?>
    </body>
        
        
</html>
