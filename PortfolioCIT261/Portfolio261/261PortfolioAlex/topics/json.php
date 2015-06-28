<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/meta.php'; ?>
        <title>261 Portfolio Home</title>
        <script type="text/javascript" src="json.js"></script>
    </head>
    <body>

        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/header.php'; ?>

        <p class="title">JSON</p>
        <!--JavaScript Object Notation -->
        <p class="paragraph">
            JSON is JavaScript Object Notation. 
            <br> It is a more efficient way to use JavaScript objects, and is mainly used instead of XML for faster load times.
            <br> JSON also has the ability to use JavaScript functions and to parse an external file into JavaScript objects that can be manipulated. In contrast XML needs to use specific XML syntax for compatibility and usage.
            <br><br>
            With my simple example, I am using an external JSON file which contains an array of three objects, parsing it in JavaScript and displaying it on my page. Each object has two attributes, and name and an url. In my example, you will not see the url, only the name, but if you click, the url attribute will be used. 
        </p>
        <p id="json" class="font"></p>
              
        <p class="font">HTML View</p>
            
        <div class="span">
            <pre>
            <code>
&lt;html>
    &lt;head>
        &lt;?php include $_SERVER['DOCUMENT_ROOT']. '/modules/meta.php'; ?>
        &lt;title>261 Portfolio Home&lt;/title>
        &lt;script type="text/javascript" src="json.js">&lt;/script>
    &lt;/head>
    &lt;body>

        &lt;?php include $_SERVER['DOCUMENT_ROOT']. '/modules/header.php'; ?>

        &lt;p class="title">JSON&lt;/p>
        <!--JavaScript Object Notation -->
        &lt;p id="json" class="font">&lt;/p>
    &lt;/body>
&lt;/html>
            </code>
            </pre>
        </div>
            
        <p class="font">JavaScript View</p>
            
        <div class="span">
            <pre>
            <code>
var xmlhttp = new XMLHttpRequest(); 
var url= "/topics/newjson.json";

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
        var myArr = JSON.parse(xmlhttp.responseText);
        myFunction(myArr);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(arr) {
    var out = "";
    var i;
    for(i = 0; i < arr.length; i++) {
        out += '&lt;a href="' + arr[i].url + '">' + 
        arr[i].food + '&lt;/a>&lt;br>';
    }
    document.getElementById("json").innerHTML = out;
}; 
            </code>
            </pre>
        </div>        
        
        <p class="font">JSON File</p>
            
        <div class="span">
            <pre>
            <code>
[{

    "url": "http://www.loveboatsushi.com/",
    "food": "Sushi"
},
{
    "url": "https://plus.google.com/117066604804160632688/about?gl=us&hl=en",
    "food": "Mexican"
},
{
    "url": "http://www.eggslut.com/#about",
    "food": "Eggs"

}]

            </code>
            </pre>
        </div>
        
        <p class="font">
            Team Meeting:
            <br> JSON, Local Storage, and CSS Transitions
            <iframe height="315" src="https://www.youtube.com/embed/J7Hu-RvL1F8" frameborder="0" allowfullscreen></iframe>
        </p>        
        
         <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php'; ?>
        
    </body>
</html>

