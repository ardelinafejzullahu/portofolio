<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/contact.css">

  <meta name="viewport" content="width=device-width">
   
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 
   

</head>


<body>
    <aside>
        <nav class="nav-bar">

            <img src="image/IMG_7392.JPG" alt="">
            <a href="#home"><i class="material-icons md-36">home</i>
                <p>Home</p>
            </a>
            <a href="#portfolio"><i class="material-icons md-36">image</i>
                <p>Portfolio</p>
            </a>
            <a href="#about"><i class="material-icons md-36">person</i>
                <p>About</p>
            </a>
            
            <a href="#contact"><i class="material-icons md-36">mail</i>
                <p>Contact</p>
            </a>
        </nav>
    </aside>
  
    <div class="introduction" id="welcome-section">
        <header class="home" id="home" style="backgorund-color:#f2f2f2;">
           <br><br><br><br><br><br><br><br>
            <h1>Hey, I'm Ardelina Fejzullahu</h1>
            <h4>Web Developer, Programming Instructor</h4>
           <br><br><br><br><br><br><br><br><br>
           <br><br><br><br><br><br><br><br><br>
        </header>
    </div>
    <main class="main-content">
    <section class="portfolio" id="portfolio">
        <h2>Projects</h2>
    
        <div class="row-halves">
        
            <div class="col" id="project-title">
               
                <img src="image/adobtbaby.png" alt="projects">
                <h3>Adopt a Baby</h3>
                <p>
                   Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
            </a>
            </div>
        

            
            <div class="col" id="project-title">
                
                <img src="image/bibloteka.PNG" alt="">
                <h3>Bibloteka e Autoreve Femra</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
              </a>
            </div>
        
        </div>

        <div class="row-halves">
            
            <div class="col" id="project-title">
           
                <img src="image/food.PNG" alt="">
                <h3>Healthy Food</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
            </a>
            </div>
        

            <div class="col" id="project-title">
             
                <img src="image/studio.png" alt="">
                <h3>Studio Viki</h3>
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
            </a>
            </div>
        </div>
    </section>
   
 
    <section>
        <div class="about" id="about" style="color:#78788c; ">
            <h2>About Me</h2>
            <p style="color:#78788c;"><span style="color:#78788c;"> Hello, I'm Ardelina Fejzullahu </span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
             unknown printer took a galley of type and scrambled it to make a type specimen book.
              It has survived not only five centuries, but also the leap into electronic typesetting, 
              remaining essentially unchanged. It was popularised in the 1960s with the release of 
              Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
              software like Aldus PageMaker including versions of Lorem Ipsum.</p>

            
            <h3>My Skills</h3>
            <p style="color:#78788c;">Html5</p>
            <div class="container" style=" width: 40%; ">
                <div class="skills html">95%</div>
            </div>

            <p style="color:#78788c;">CSS3</p>
            <div class="container" style=" width: 40%;">
                <div class="skills css">80%</div>
            </div>
            
            <p style="color:#78788c;">PHP</p>
            <div class="container" style=" width: 40%;">
                <div class="skills css">80%</div>
            </div>

          

            <p style="color:#78788c;" >Bootstrap</p>
            <div class="container" style=" width: 40%;">
                <div class="skills bootstrap">75%</div>
            </div>

            <p style="color:#78788c;">JavaScript</p>
            <div class="container" style=" width: 40%;">
                <div class="skills JS">65%</div>
            </div>

           
        </div>
    </section><br><br>
    <section id="contact">
  
    <br><br><br><br>
          
          <div class="contact-wrapper">
          <form class="form1" method="POST" action="addMessage.php">
  <h2>CONTACT</h2>
  <p class="formP" type="Name:"><input name="name"  placeholder="Write your name here.."></input></p>
  <p class="formP"  type="Email:"><input  name="email"  placeholder="Write your email here..."></input></p>
  <p class="formP"  type="Message:"><input name="yourmessage"  placeholder="What would you like to tell me.."></input></p>
  <button name="submit" >Send Message</button>
  
</form>
                </div>
                </section>
                <footer>


<section class="bottom-bar">
<p><b>&copy; 2022 Ardelina Fejzullahu</b></p>
</section>
</footer>
</main>
</body>

</html>