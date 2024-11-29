<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <a href="#home" class="logo">Portfolio</a>

        <i class="fa-solid fa-bars" id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>

        </nav>

    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h3>I am</h3>
            <h1>Vincent Santos</h1>
            <h3><span id="typingText"></span></h3>
            <p>I'm a BS-Information Technology student from the University of Rizal System since senior high school. I was very passionate about the ICT field, especially in my service about giving technical support to my clients (WFH employees) when the world was under quarantine.</p>

            <div class="social-media">
                <a href="https://www.facebook.com/Vincentzipagan.22" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/vincentSantos7221" target="_blank"<i class="fa-brands fa-github"></i></a>

            </div>
            <a href="#about" class="btn">See More</a>
        </div>
        <div class="home-img">
            <img src="img/vincent.jpg" alt="#">
        </div>
    </section>

   <section class="about" id="about">
    <div class="about-img">
        <img src="img/vincent.jpg" alt="">
    </div>

    <div class="about-content">
        <h2 class="heading">ABOUT <Span>ME</Span></h2>
        <h3>Frontend Developer</h3>
        <p>I specialize in Computer System Servicing, offering reliable technical support and solutions for hardware and software issues. Additionally, I provide assistance with basic networking to ensure seamless connectivity and efficient system performance. My goal is to deliver quality service tailored to meet your technical needs.</p>
        <a href="#services" class="btn">See More</a>
    </div>

   </section>

   <section class="services" id="services">
    <h2 class="heading">My <span>Services</span></h2>

    <div class="services-container">
        <div class="services-box">
            <i class="fa-solid fa-computer"></i>
            <h3>Fullstack Developer</h3>
            <p>a software developer who is proficient in both the front-end and back-end aspects of web development. This means they can work on all layers of a web application, from the user interface (UI) to the server, database, and API integrations.</p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
            <i class="fa-solid fa-business-time"></i>
            <h3>Entrepreneur</h3>
            <p>a person who starts and operates a business, taking on financial risks in the hope of making a profit. Entrepreneurs are typically characterized by their ability to innovate, identify new opportunities, and create new products or services. They often take the initiative to develop and lead a business venture from the ground up, assuming the responsibility for its success or failure.</p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
            <i class="fa-solid fa-print"></i>
            <h3>Printing</h3>
            <p>refers to the process of transferring text or images onto a surface (typically paper) using machines like printers or presses. This can include methods such as offset printing, digital printing, or screen printing.</p>
            <a href="#" class="btn">Read More</a>
        </div>

    </div>

   </section>

   <section class="portfolio" id="portfolio">
    <h2 class="heading">Latest <span>Projects</span></h2>

    <div class="portfolio-container">
        <div class="portfolio-box">
            <img src="img/contactform.png" alt="">
            <div class="portfolio-layer">
                <h4>Contact Form</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores architecto, inventore labore fugit accusantium maxime earum eius distinctio modi non nesciunt dicta quod assumenda vero, dolore recusandae odio officia odit?</p>
                <a href="https://github.com/Lelouuuch/Contact-Form" target="_blank"></a>
            </div>
        </div>

        <div class="portfolio-box">
            <img src="img/todo.png" alt="">
            <div class="portfolio-layer">
                <h4>To-Do List</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores architecto, inventore labore fugit accusantium maxime earum eius distinctio modi non nesciunt dicta quod assumenda vero, dolore recusandae odio officia odit?</p>
                <a href="https://github.com/vincentSantos7221/todoAppList" target="_blank"></a>
            </div>
        </div>

        <div class="portfolio-box">
            <img src="img/ems.png" alt="">
            <div class="portfolio-layer">
                <h4>Employee Management System</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores architecto, inventore labore fugit accusantium maxime earum eius distinctio modi non nesciunt dicta quod assumenda vero, dolore recusandae odio officia odit?</p>
                <a href="https://github.com/Vcthor/employeemanagement" target="_blank"></a>
            </div>
        </div>
    </div>
   </section>

   <section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me</span></h2>

    <form action="#">
        <div class="input-box">
            <input type="text" placeholder="Full Name">
            <input type="email" placeholder="Email Address">
        </div>

        <div class="input-box">
            <input type="number" placeholder="Mobile Number">
            <input type="text" placeholder="Email Subject">
        </div>

        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>
   </section>

   <footer class="footer">
    <div class="footer-text">
        <p>Copyright &copy; 2024 | All Rights Reserved.</p>
    </div>

    <div class="footer-iconTop">
        <a href="#home"><i class="fa-solid fa-angle-up"></i></a>
    </div>
   </footer>

   

   
   <script>
    const text = "Entrepreneur, Fullstack Developer";
    let index = 0;
    const speed = 100; // Delay between typing each character (in ms)
    const typingElement = document.getElementById("typingText");

    function typeWriter() {
      if (index < text.length) {
        typingElement.innerHTML += text.charAt(index);
        index++;
        setTimeout(typeWriter, speed);
      }
    }

    typeWriter();

   </script>

    
</body>
</html>