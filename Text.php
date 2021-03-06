<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <title>Atos Pattern Library-Text</title>
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
                      <H1 class=PageTitle>Textual Information</H1>
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
                                       <a class="selectedlink" href="Text.php">
                                        <div class="navbuttonselected">
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
                                    <p>One of the most common ways of conveying information is through text, though as mentioned in the introduction too much reliance on text alone can make it overwhelming for users. It is also important to consider a variety of text formats and methods of displaying text in order to create a further break up. There are a wide variety of methods to choose from ranging from the use of headings to the displaying of lists and use of colour to distinguish text and links.</p>
                                    <hr>
                                    <h2 id="BaseText">Base Text</h2>
                                    <p>Base Text must be formatted in a manner that makes any words and sentences easy for the user to read and understand the information they are representing. There are a wide variety of factors to consider when creating a CSS format for the base text of a select div or a full website. The areas of concern include: line spacing, font type, colour and sizing, all of these factors contribute to the readability of the base text.</p>
                                    <h3>Font Style</h3>
                                    <p id="para1">Though there are many fancy font styles available in HTML and CSS, it is important that these are kept as simple as possible for them to be as easy to read for a wide variety of users. The two main accessible font style???s used are those of Serif (such as Times New Roman and Georgia) and Sans-Serif fonts (e.g. Arial, Tahoma and Verdana). </p>
                                    <p id="para2">There is also the option of the Dyslexie font style, a style specifically designed to assist dyslexic users. Though the Dyslexie style is similar to the Sans-Serif fonts it creates a more significant difference between potentially confusing letters in the standard sans-serif setup such as ???p???, ???q???, ???b??? and ???d???. To  apply this style it does require external installation and can be found at both <a class="contentlink" href="https://www.dyslexiefont.com/">Dyslexie font</a> and <a class="contentlink" href="https://opendyslexic.org/">The Open Dyslexic Font</a>.</p>
                                    <p id="para3">This pattern library???s pre-set font is in the Sans-Serif font style, this meets the requirements of WCAG 2.1, whilst still being presentable to users of all abilities and impairments. In terms of how this appears in CSS the following shows the three previous sections and how their styles are implemented:</p>
                                    <img src="Images/Font%20CSS.PNG" class="contentimage" alt="The CSS code used for the previous three paragraphs showing the first as font-family:serif, the second as font-family: dylexic font and the final as font-family: sans-serif.">
                                    <h3>Font Size</h3>
                                    <p>Font sizing is also an important consideration when building any website or application, largely due to its connection with other WCAG guidelines and overall presentation. In terms of WCAA, any large text is classed as 18 point or 14 point bold or font size that would yield equivalent size for Chinese, Japanese and Korean (CJK) fonts, anything below this size is considered a small font.</p>
                                    <p>Regarding this pattern library only the titles and secondary headings are classed as large text due to them being 18.5 and 18 font size respectively whilst all other present text conforms to the separate guidelines regarding small text.</p>
                                    <h3>Font Colour</h3>
                                    <p>One of the areas where font size is an important factor is in determining colour contrast between the text and the background of a page. For all small text, it is important that a contrast of 4.5:1 is achieved, whilst large text is given a minimum of 3:1 to conform to. This is targeted towards assisting any users who may have visual impairments, such as limited vision or colour blindness, allowing for the text to be distinguishable enough to read.</p>
                                    <p>For this website the contrasts are as follows: the main body text has a contrast of 15:1, headings a contrast of  6.15:1, content menu links have a contrast of 5.3:1 and any highlighted links have a contrast of 5.71:1. All content in this section, conforms to the WCAG guideline 1.4.3 ???Contrast (Minimum)??? meeting level AA, if it were to reach the level AAA criterion 1.4.6 ???Contrast (Enhanced)??? this ratio would have to be at minimum 7:1 on all small scale text and 4.5:1 on all large scale text.</p>
                                    <img src="Images/Contents%20Side%20Bar.PNG" class="contentimage" alt="The CSS code used stating the background of the content menu as #eee, the word content as black and the link text colour as #0066a1.">
                                    <h3>Line Spacing</h3>
                                    <p>As part of WCAG 2.1, text spacing is required in order to reach level AA. The success criterion 1.4.12 Text Spacing states that line height should be at least 1.5 times the font size, the spacing following paragraphs should be at least 2 times the font size, letter spacing is at least 0.12 times the font size and word spacing is at least 0.16 times the font size. The CSS for line spacing can be shown as follows:</p>
                                    <img src="Images/Line%20Height.PNG" class="contentimage" alt="The CSS code for the content area, it has the code line-height is highlighted and given the value 1.5">
                                    <hr>
                                    <h2 id="Headings">Headings</h2>
                                    <p>Headings, much like the base text of any website content, are restricted by a series of WCAG success criteria which cover all levels of accessibility.</p>
                                    <h3>Distinguishable</h3>
                                    <p>It is highly important that that any headings used within the text of a website or page are distinguishable from all other main content text both in terms of presentation and programmatically. In regards to the text and CSS elements of any headings used, it is suggested by success criterion 2.4.6 that any heading should be descriptive and of a different size/colour to the majority of the content text in order to make it clearly visible and differentiated for any sighted users. In order to assist any users with visual impairments who require screen users, it is important that any headings are done programmatically in the HTML using H1, H2, H3 etc.</p>
                                    <h3>Sequential</h3>
                                    <p>As outlined in ???1.3.2: Meaningful Sequence??? it is important that all elements of a website follow a sensical order, this is especially applicable to the headings of any content. All content headings should be seeded (H3 under H2, H2 under H1 etc.) so long as content is relatable. An example of this can be shown in the structure of this page:</p>
                                    <img src="Images/Headings.PNG" class="contentimage" alt="The HTML coding for the headings of this page with the title as a H1 tag, Introduction, Base Text and Headings as H2 tags and Font Style, Font Size, Font Colour, Line Spacing, Distinguishable and Sequential as H3 tags.">
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
                                                <a href="#BaseText" class="contentlink">
                                                    <div class="contentbutton">
                                                        <span>Base Text</span>
                                                    </div>
                                                </a>
                                                <a href="#Headings" class="contentlink">
                                                    <div class="contentbutton">
                                                        <span>Headings</span>
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
