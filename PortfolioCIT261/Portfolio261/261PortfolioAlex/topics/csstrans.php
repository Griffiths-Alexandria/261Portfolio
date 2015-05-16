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
    </head>
    <body>
    
              

            <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/header.php'; ?>
       
        

            <p class="titletrans">
                CSS3 Transitions
            </p>
            
            <p class="paragraph">
                <br>The basic CSS syntax structure for transitions is: <br>
                 div {<br>
                    transition: &lt;property&gt; &lt;duration&gt; &lt;timing-function&gt; &lt;delay&gt;; <br>
                    }
                    <br>
                    CSS3 Transitions main implementation is to control the animation properties. Instead of having
                    the animation take place instantaneously, implementing the transition will stretch the animation process
                    for a more appealing display. 
                    <br>
                    One of the most important properties of using the transition element is that you will have to list your
                    properties explicity, the duration (how long the transition will last), the timing function (start to finish 
                    transition time), and the delay (how long after the hover, or other start property, will last). 
            </p>

            <p class="font">
                Here are some basic transition samples. You can edit for yourself in JSFiddle.net<br>
                <iframe height="600" src="//jsfiddle.net/acgriffiths/a6m1rv1a/3/embedded/result,html,css/"  frameborder="0"></iframe>
                <br> 
                More Cubic-Bezier easing transitions: 
                <br>
                <a href="http://easings.net/" title="easings">Easing Functions</a>
                <br>
                
                Sources: <br>
                <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Using_CSS_transitions" title="mozilla trans">Mozilla CSS3 Transitions</a>
                <br>
                <a href="http://cubic-bezier.com/#.17,.67,.83,.67">Cubic-Bezier Tool</a>
                <br>
                <a href="https://css-tricks.com/almanac/properties/t/transition/" title="cssresource">Another great resource for CSS Transitions</a>
            </p>
            
            <p class="font">
                Topic Presentations
                <iframe height="315" src="https://www.youtube.com/embed/wel4Fb70P6Y" frameborder="0" allowfullscreen></iframe>
           <br>
                Timestamps: <br>
                <a href="https://youtu.be/wel4Fb70P6Y?t=12m56s">Teaching CSS3 Transitions: 12:56</a> <br>
                <a href="https://youtu.be/wel4Fb70P6Y?t=10m7s">Questions on CSS3 Animations: 10:17</a><br>

            </p>

          <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php'; ?>  
        
    </body>
        
        
</html>
