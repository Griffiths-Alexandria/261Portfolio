<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/meta.php'; ?>
        <title>DOM Manipulation</title>
        <script type="text/javascript">
           
                    var xx= document.getElementById("number");
                    var button = document.getElementById("bb"); 

                    button.addEventListener("click", function(){xx.style.color="blue";}, false); 
            
        </script>
            
    </head>
    <body>
    
                      

            <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/header.php'; ?>
       
        


        <p class="title">JavaScript DOM Manipulation </p>
           
        <p class="paragraph">
            DOM Manipulation, or Document Object Model, objectifies all elements on an HTML page allowing for manipulation, i.e. adding, 
            deleting, and editing. Below is my JSFiddle illustrating how to manipulate a simple HTML paragraph. To explore further DOM manipulation and nodes, click 
            <a href=#complicated>here</a>
        </p>
       
        <p class="font">
            <iframe height="600" src="//jsfiddle.net/acgriffiths/kwo7a9t6/1/embedded/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
        </p>
        
        
        <p class="paragraph" id="complicated">                
            Though the first example is quite simple, when adding and deleting elements to the HTML page, you will need to understand the structure and hierarchy of a basic HTML page. 
            <br>
            When you create a basic paragraph in HTML, you are using the < p > text < / p > tags. According to DOM structure, this simple
            paragraph tag contains two <strong>Nodes</strong>, the element node of the < p > tag and the text node of "text".
            This is illustrated below: 
            <br><em>This example was provided by </em><a href="http://www.quirksmode.org/dom/intro.html#walk">QuirksMode.org</a>
        </p>
        
        <div class="span">
            <pre>
               
              &lt;P&gt; &lt;-- element node
               |
               |
     This is a paragraph &lt;-- text node
               
           
   
If you do


&lt;P&gt;This is a &lt;B&gt;paragraph&lt;/B&gt;&lt;/P&gt;


the element node P has two children, one of which has a child of its own:


              &lt;P&gt;
               |
         --------------
        |              |
    This is a         &lt;B&gt;
                       |
                       |
                    paragraph


Finally there are attribute nodes:


&lt;P ALIGN="right"&gt;This is a &lt;B&gt;paragraph&lt;/B&gt;&lt;/P&gt;


would give something like


              &lt;P&gt; ----------------
               |                  |
         --------------         ALIGN
        |              |          |
    This is a         &lt;B&gt;         |
                       |        right
                       |
                    paragraph


So these are element nodes, text nodes and attribute nodes.
        
        </div>
        <p class="paragraph"> 
            Identifying the different nodes will help us understand the DOM syntax using .firstChild, .lastChild, and .childNodes. These
            JavaScript identifiers help locate the HTML element you want to manipulate. 
            <br> Another example of QuirkMode.org will help understand: Supposing the P is the first child of the body, which in turn is the first child of the document, 
            you can reach the element node B by either of these commands:
            <br> document.firstChild.firstChild.lastChild;
            <br> document.firstChild.childNodes[0].lastChild;
            <br>document.firstChild.childNodes[0].childNodes[1];
            <br> but this can get really confusing very quickly, and if you have a complicated HTML document, you could easily lose
            count of your childNodes and manipulate the wrong element. 
        </p>

        <p class="font">
            Alex's Presentation: 
            <iframe height="360" src="https://www.youtube.com/embed/K1nkgLMYeUk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </p>
        
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php'; ?>
    </body>
        
        
</html>
