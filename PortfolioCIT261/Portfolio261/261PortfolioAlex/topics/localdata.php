<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/meta.php'; ?>
        <title>Local Storage</title>
        <script type="text/javascript">
            function doButton(){
                var button = document.getElementById("button");
                button.addEventListener("click", saveUser, false);
                display();
            }
            
            function saveUser(){
                var username = document.getElementById("username").value;
                var food = document.getElementById("food").value;
                localStorage.setItem(username, food);
                display();  
                document.getElementById("username").value = ""; 
                document.getElementById("food").value = ""; 
            }
            
            function display(){
                var savedinfo = document.getElementById("savedinfo");
                savedinfo.innerHTML = ""; 
                
                for(var x=0; x < localStorage.length; x++) {
                    var a = localStorage.key(x);
                    var b = localStorage.getItem(a); 
                    savedinfo.innerHTML += "Name: "+a+"<br /> Favorite Food: "+b+"<br /><br />" 
                }
            }
            
            window.addEventListener("load", doButton, false); 
            
        </script>
    </head>
    <body>
             

            <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/header.php'; ?>
        
        <p class="font">Local Data Storage</p>


        <p class="paragraph"> Web Storage is a client based storage system that enables a user to define variables and it's values. 
            "With local storage, web applications can store data locally within the user's browser. Before HTML5, application data had to be stored in cookies, included in every server request. Local storage is more secure, 
            and large amounts of data can be stored locally, without affecting web site performance." - W3Schools
        </p>
                
        <p class="font">
            JavaScript Code
        </p>

        <div class="span">

            <pre>
                <code data-language="javascript">
                    <span>
//Button function 

function doButton(){
    var button = document.getElementById("button");
    button.addEventListener("click", saveUser, false);
    display();
}

//SaveUser function - stores Variable Name (key) and Variable Value (value) as 'username' and 'food'

function saveUser(){
    var username = document.getElementById("username").value;
    var food = document.getElementById("food").value;

//localStorage uses .setItem to establish the key and value and stores it locally and displays it    
    
    localStorage.setItem(username, food);
    display(); 

//these just clear the text box after you click the save button
    
    document.getElementById("username").value = ""; 
    document.getElementById("food").value = ""; 
}

//display function that reiterates through the localStorage array and displays all the things stored in that particular browser (localStorage) or session (sessionStorage)
    
function display(){
    var savedinfo = document.getElementById("savedinfo");
    savedinfo.innerHTML = ""; 

    for(var x=0; x < localStorage.length; x++) {
        var a = localStorage.key(x);
        var b = localStorage.getItem(a); //.getItem retrieves the stored items
        savedinfo.innerHTML += "Name: "+a+"<br /> Favorite Food: "+b+"<br /><br />" 
    }
}

//event that I want to occur upon "load" of window (run doButton function). 

window.addEventListener("load", doButton, false); 

            </span></code></pre>  
        </div>   
        

            <section id="userinfo">
                <form>
                   Name: <input type="text" id="username">
                   <br>
                   Favorite Food: <input type="text" id="food">
                   <br>
                   <input type="button" id="button" value="Save Choice">
                </form>
            </section>                
     
            <section id="savedinfo">
               Saved info will display here. 
            </section>
        
        <p class="font">
            Team Meeting <br>
        Team Members: Keith, Daniel, Alex, and Christian
        <br>
        Part One (I had some technical difficulties) Me teaching about basic Local Storage:<br>
        <iframe height="360" src="https://www.youtube.com/embed/acZGfEVFV98?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        <br>
        Part Two: 
        <br>
        <iframe height="360" src="https://www.youtube.com/embed/rLR27vT4daM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        <br>
        TimeStamps: 
        <br>
        <a href="https://youtu.be/rLR27vT4daM?t=15m21s">Asking about prototypes</a>
        <br>
        <a href="https://youtu.be/rLR27vT4daM?t=21m20s">Discussing Daniel's prototype code</a>
        <br>
        <a href="https://youtu.be/rLR27vT4daM?t=28m59s">Us discussing CSS</a>
        <br>
        Sources:
        <br>
        <a href="http://www.w3schools.com/html/html5_webstorage.asp">w3Schools - Web Storage</a>
        <br>
        <a href="https://www.thenewboston.com/">thenewboston</a> 
        
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php'; ?>
        
    </body>
        
        
</html>
