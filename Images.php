<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <title>Atos Pattern Library-Image Data</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <script src="Java/ElementScript.js"></script>
</head>
<body>
    <div id="preset">
        <div class="body">
            <div class="headbar">
              <div class="headbarcontainer">
                  <div class="headbarleft">
                      <div class="headbarlogo">
                       <a id="AtosLogoLink" href="Page.php">
                           <div class="AtosLogoContainer">
                               <div class="LogoFrame">
                                    <img class=AtosLogo src="Images/atos.png" alt="Atos logo">
                               </div>
                               <div class="LogoTextFrame">
                                    <span class="LogoText">ATOS Accessibility Hub</span>
                               </div>
                           </div>
                       </a>  
                      </div>
                  </div>
                  <div class=headbarcentre>
                      <div class="innerheadbar"></div>
                      <H1 class=PageTitle>Images</H1>
                  </div>
                  <div class="headbarright">
                      <div class="seachbarcontainer">
                         <div class="searchbar">
                             <div class="searchfield">
                                 <input placeholder="Search..." type="text" class="inputfield">
                             </div>
                             </div>
                         </div> 
                      </div>
                  </div>
              </div> 
            <div class="bodycontent">
                <div class="wholecontent">
                    <div class="pres">
                        <div class="navbar" id="Sidenav">
                       <div class=navinner>
                           <div class="navwrap">
                               <div class="navposition"> 
                                   <div class="navlinks">
                                       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                       <a class="navlink" href="Intro.php">
                                        <div class="navbutton">
                                            <span>Introduction</span>
                                        </div>
                                       </a>
                                       <a class="navlink" href="Text.php">
                                        <div class="navbutton">
                                              <span>Text</span>
                                        </div>
                                        </a>
                                       <a class="selectedlink" href="Images.php">
                                        <div class="navbuttonselected">
                                            <span>Images</span>
                                        </div>
                                       </a>
                                       <a class="navlink" href="VideoAudio.php">
                                        <div class="navbutton">
                                              <span>Video and Audio</span>
                                        </div>
                                        </a>
                                       <a class="navlink" href="Buttons.php">
                                        <div class="navbutton">
                                            <span>Buttons</span>
                                        </div>
                                       </a>
                                       <a class="navlink" href="GraphsTables.php">
                                        <div class="navbutton">
                                            <span>Graphs and Tables</span>
                                        </div>
                                        </a>
                                        <a class="navlink" href="GraphsTables.php">
                                        <div class="navbutton">
                                            <span>Forms</span>
                                        </div>
                                        </a>
                                   </div>
                               </div>
                           </div>
                       </div> 
                    </div>
                        <div class="MenuOpen">
                             <span id="MenuButton" onclick="openNav()">&#9776;</span>
                        </div>
                        <div class="contentarea" id="main">
                            <div class="wholepagecontainer">
                                <div class="contentcontainer">
                                    <h2 id="Introduction">Introduction</h2>
                                    <p>Images have a series of accessibility issues to those with both full and partial visual impairments, in order to assist users there are a variety of criteria that can be applied to several types of images. In each of these cases it is important to consider the contrast as well as the alternative text that should be included with the images to make them fully recognisable to users.</p>
                                    <hr>
                                    <h2 id="InformativeImages">Informative Images</h2>
                                    <p>Informative images are images that are important in conveying information to a user outside of the text already being presented. For blind or partially sighted users informative images can be hard to understand/see or not seen at all in the case of blind users and there are several measures that must be considered in order to aid their understanding of what exactly is being pervade.</p>
                                    <p>One key measure that must be incorporated in all images but is specifically required and of high importance for informative images, is the inclusion of alternative text. Alternative text (alt text) is a text based alternative that describes the image and it???s contents to a blind or partially sighted user, there are no specific rules that make a good alt text but they should be as brief and concise whilst being accurate and meaningful to the image as possible. An example of alt text applied to an image is as follows:</p>
                                    <img src="Images/ImageExample.PNG" class="contentimage" alt="The HTML code used to create this example it states the source of the image, the class used for the application of CSS and the alt text attribute (alt="") which states this sentence">
                                    <p>As shown in the example the key to any alt text is to make sure that any information being provided by the alt text attribute is accurate and precise to what the image is conveying in relation to the information of the surrounding text. </p>
                                    <hr>
                                    <h2 id="DecorativeImages">Decorative Images</h2>
                                    <p>Decorative images are those images which are not required for specifically conveying information, one such example being the use of a company logo, these images do not provide information or they are described in the page content. There are However a varying rule set in the use of decorative images to that of informative images due to how they are implemented and their interpretation with assistive technologies.</p>
                                    <p>Regarding the use of alt text, there are two methods that can be applied to decorative images each dependant on how the decorative image is used within the content of the website???s page. In the case of something such as a logo all that is required is a simple alt text stating which logo it is the company of for instance the Atos logo incorporated in this page simply has the alt text alt=???Atos logo???.</p>
                                    <p>In the case of decorative images where any alt text would simply duplicate the preceding or proceeding text, it is important that repetition is avoided. An example of this would be an icon for a home page and a proceeding link that states home page, if the alt text itself also states alt=???Home Page??? this can be very confusing to users as assistive technologies would announce them as "Home Page Home Page". It is therefore important that any repetitive alt text is avoided and if necessary, the alt attribute is left blank to avoid any unnecessary confusion and continually understanding of the part of the website especially should something of importance be involved.</p>
                                    <p>Another form of decorative image is the use of background images and watermarks on any documents involved in a website. For all intents and purposes these should be avoided and not used as they cause problems with contrast between the text and background making it highly difficult for those with limited vision to read and take in any information. As an alternative to these it is important to provide simply backgrounds and where a watermark maybe required it may be useful to provide a note at the top of the document instead.</p>
                                    <hr>
                                    <h2 id="ImagesOfText">Images of Text</h2>
                                    <p></p>
                                    <hr>
                                    <h2 id="ActionableImages">Actionable Images</h2>
                                    <p></p>
                                    <hr>
                                </div>
                                <div class="sidecontainer">
                                    <div class="sidesizing">
                                        <div class="sidecontents">
                                            <div class="contentmenu">
                                                <p>Contents:</p>
                                                <a href="#Introduction" class="contentlink">
                                                    <div class="contentbutton">
                                                        <span>Introduction</span>
                                                    </div>
                                                </a>
                                                <a href="#InformativeImages" class="contentlink">
                                                    <div class="contentbutton">
                                                        <span>Informative Images</span>
                                                    </div>
                                                </a>
                                                <a href="#DecorativeImages" class="contentlink">
                                                    <div class="contentbutton">
                                                        <span>Decorative Images</span>
                                                    </div>
                                                </a>
                                                <a href="#ImagesOfText" class="contentlink">
                                                    <div class="contentbutton">
                                                        <span>Images of Text</span>
                                                    </div>
                                                </a>
                                                <a href="#ActionableImages" class="contentlink">
                                                    <div class="contentbutton">
                                                        <span>Actionable Images</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                       </div>
                    </div>
                </div>
            </div> 
        </div>
    <script src="Java/ElementScript.js"></script>
</body>
