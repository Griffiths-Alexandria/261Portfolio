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
       
        

             <p id="titleanimations" class="titleanimations flipInX">
                CSS3 Animations
            </p>
            
            <p class="paragraph">
                CSS Animations allow for smoother element and style transitions. With CSS Animations, specifically using the @keyframe property,
                you can specify on a percentage scale, 0% - 100% each animation result. For this title, I specified at 0%, 40%, 70%, and 100% the perspective, rotation, and background-color.<br><br>
                There are 9 animation properties. These include: animation-delay, animation-direction, animation duration, 
                animation-fill-mode, animation-iteration-count, animation-name, animation-play-state, animation-timing-function, 
                and the shorthand property of animation. <br>
                <br>
                The page title uses the animation-delay: 2s to delay the animation 2 seconds, animation-iteration-count: infinite for an infinite loop, 
                animation-direction: alternate to make sure the animation runs forward then backward in smooth transition, animation-fill-mode: both to extend the rules for both
                forward and backward motions (to help with alternate), and animation-duration: 5s to make sure the animation runs from 0% to 100% in 5 seconds. <br><br>
                 
                 
            </p>
            
            <p class="font">
                Use the JSFiddle to view the HTML, CSS, and Result.
                <br> *Use Google Chrome for best result 
                <iframe height="500" src="//jsfiddle.net/acgriffiths/q3f5zpes/2/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
                <br> 
            
                <iframe height="315" src="https://www.youtube.com/embed/is1ryMFMfyw" frameborder="0" allowfullscreen></iframe>
        
                <br>
                Timestamps: <br>
                <a href="https://youtu.be/is1ryMFMfyw?t=8m43s">Asking About Transformations</a> <br>
                <a href="https://youtu.be/is1ryMFMfyw?t=13m5s">Presenting Animations</a> <br>
                <a href="https://youtu.be/is1ryMFMfyw?t=28m27s">Asking about Transitions</a> <br>
                <a href="https://youtu.be/is1ryMFMfyw?t=39m32s">Asking about Local Storage</a> <br>

                Animation on Personal Site: <br>
                <a href="http://lenzancestry.capturedarrow.com" title="336">Lenz Ancestry [under construction]</a>
                
                <br>
                Sources:
                <br>
                <a href="http://www.w3schools.com/css/css3_animations.asp" title="w3Schools">W3Schools Animation</a>
                
            </p>
            
        
        
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php'; ?>
        
    </body>
        
        
</html>
