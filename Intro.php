<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <title>Atos Pattern Library-Introduction</title>
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
                      <H1 class=PageTitle>Welcome to the Atos Pattern Library</H1>
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
                                       <a class="selectedlink" href="Intro.php">
                                        <div class="navbuttonselected">
                                            <span>Introduction</span>
                                        </div>
                                       </a>
                                       <a class="navlink" href="Text.php">
                                        <div class="navbutton">
                                              <span>Text</span>
                                        </div>
                                        </a>
                                       <a class="navlink" href="Images.php">
                                        <div class="navbutton">
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
                                    <p>This pattern library is designed with outlining the various accessibility techniques required for achieving Level AA of WCAG 2.1. Throughout its content the library shall look at techniques addressing the four key areas highlighted within WCAG:</p>
                                    <ol>
                                        <li>Perceivable</li>
                                        <li>Operable</li>
                                        <li>Understandable</li>
                                        <li>Robust</li>
                                    </ol>
                                    <p>This library is a living book and a work-in-progress document.</p>
                                    <hr>
                                    <h2 id="Structure">Structure</h2>
                                    <p>Each page of this library follows the same basic structure, in each section there will be a general overview followed by a breaking down into the various aspects of that section and where it is applicable. These breakdowns will also be accompanied by an overview of how they can be made accessible in order to meet WCAG level AA as well as examples of the HTML/CSS required to create them. For example, the structure of this introductory section uses the following HTML and CS to break up the text and make it more accessible to users:</p>
                                    <img src="Images/Intro%20Example.PNG" class="contentimage" alt="The HTML code used to create the previous paragraphs, headers, list and page break">
                                    <p>The use of these various features is important as breaking up text makes sections more manageable for those with reading impairments. The CSS for this section and used throughout this pattern library can be found on the ???Text??? page.</p>
                                    <hr>
                                    <h2 id="Aim">Aim</h2>
                                    <p>Ultimately the aim of this pattern library is to give a guide on making the various features involved in website design and implementation accessible for all/as many users as possible. Although it is our hopes that it can also be used as an instructional tool in assisting learning of basic HTML and CSS.</p>
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
                                                <a href="#Structure" class="contentlink">
                                                    <div class="contentbutton">
                                                        <span>Structure</span>
                                                    </div>
                                                </a>
                                                <a href="#Aim" class="contentlink">
                                                    <div class="contentbutton">
                                                        <span>Aim</span>
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
