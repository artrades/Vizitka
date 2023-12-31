<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Revalia&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Revalia&family=Roboto&display=swap" rel="stylesheet"> 
        <script src="JavaScript/code.jquery.com_jquery-3.7.1.js"></script>
    </head>

    <body>

        <header>

          <div class="header_logo">
            <h1>WD</h1>
          </div>
          
          <div class="header_menu">
             <a class="menu_item" href="#intro">ГЛАВНАЯ </a>
             <a class="menu_item" href="#about_me">ОБ АВТОРЕ</a>
             <a class="menu_item" href="#my_projects">РАБОТЫ</a>
             <a class="menu_item" href="#process">ПРОЦЕСС</a>
             <a class="menu_item" href="#send">КОНТАКТЫ</a>
          </div>
         
        </header>

        <main>

           <section class="intro">
            <a name = "intro"></a>
              <div class="intro_left">
                  <img class = "intro_img" src="img/intro_logo.svg" alt="intro">
              </div>
              <div class="intro_right">
                  <h1 class="intro_title" id="mytitle">
                    Дизайн и вёрстка
                  </h1>
                  <p class="intro_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Impedit eum officia explicabo eligendi maxime delectus ipsa perferendis sit exercitationem. 
                    Amet libero exercitationem dicta at? Commodi quam ipsa exercitationem laborum quas.
                  </p>
                  <button class="intro_button" id="myBtn">НАПИСАТЬ МНЕ</button>
                  <div class="modal" id="myModal">
                    <div class="modal_content" id="cont">
                      <div class="close" id="myClose">&times;</div>
                      <?php include "feedbackform.php" ?>
                    </div>
                  </div>
              </div>
           </section>

           
           <section class="about_me">
            <a name = "about_me"></a>
            <div class="wrapper">
              <div class="about_wrapper">
                <div class="about_block">
                  <h2 class="about_title">
                    Обо мне
                  </h2>
                  <p class="about_text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Harum quisquam ratione earum a iusto unde, adipisci voluptas minima, 
                    quidem deleniti nam qui possimus explicabo deserunt animi! 
                    Inventore odio repellendus repudiandae?
                  </p>
                </div>

              </div>
            </div>
           </section>

           <secttion class="my_projects">
            <a name = "my_projects"></a>
            <div class="my_projects_wrapper">
              <div class="my_projects">
                <div class="my_projects_block">
                  <img src="img/numbers_item.svg" alt="num" class="project_img">
                  <img src="img/numbers_item.svg" alt="num" class="project_img">
                  <img src="img/numbers_item.svg" alt="num" class="project_img">
                  <img src="img/numbers_item.svg" alt="num" class="project_img">
                  <img src="img/numbers_item.svg" alt="num" class="project_img">
                  <img src="img/numbers_item.svg" alt="num" class="project_img">
                </div>
              </div>
            </div>
           </secttion>

           <section class="skills">
            <a name = "skills"></a>
              <div class="wrapper">
                <div class="skills_wrapper">
                <div class="skills_left">
                      <img src="img/skills.png" alt="Photo" class="skills_img">
                  </div>
                  <div class="skills_right">
                      <img src="img/my_photo.svg" alt="Photo" class="skills_img">
                  </div>
                </div>
              </div>
           </section>

           <section class="process">
            <a name = "process"></a>
            <div class="wrapper">
              <div class="process_wrapper">
                <div class="process_block">
                  <h1 class="process_title">Как я работаю</h1>
                  <p class="process_text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam voluptas tempora laboriosam eos sint dolores? 
                    Dolore sapiente sint rem rerum quae minima! Quaerat reprehenderit, 
                    doloribus quae laudantium nemo exercitationem porro.
                  </p>
                </div>
                <video src="media/video.mp4" class="process_video" controls="controls"></video>
              </div>
            </div>
           </section>

           <section>
            <div class="gallery">
              <div class="gallery_str">
                <a href="img/gallery_img1.png" class="lightzoom">
                  <img src="img/gallery_img1.png" alt="картинка1" class="gallery_img">
                </a>
                <a href="img/gallery_img2.png" class="lightzoom">
                  <img src="img/gallery_img2.png" alt="картинка2" class="gallery_img">
                </a>
                <a href="img/gallery_img1.png" class="lightzoom">
                  <img src="img/gallery_img1.png" alt="картинка1" class="gallery_img">
                </a>
                <a href="img/gallery_img2.png" class="lightzoom">
                  <img src="img/gallery_img2.png" alt="картинка2" class="gallery_img">
                </a>
              </div>
              <div class="gallery_str">
                <a href="img/gallery_img1.png" class="lightzoom">
                  <img src="img/gallery_img1.png" alt="картинка1" class="gallery_img">
                </a>
                <a href="img/gallery_img2.png" class="lightzoom">
                  <img src="img/gallery_img2.png" alt="картинка2" class="gallery_img">
                </a>
                <a href="img/gallery_img1.png" class="lightzoom">
                  <img src="img/gallery_img1.png" alt="картинка1" class="gallery_img">
                </a>
                <a href="img/gallery_img2.png" class="lightzoom">
                  <img src="img/gallery_img2.png" alt="картинка2" class="gallery_img">
                </a>
              </div>
              <div class="my_logos_block">
                <img src="img/gentoo_logo2.png" class="project_logo">
                <img src="img/gentoo_logo2.png" class="project_logo">
                <img src="img/gentoo_logo2.png" class="project_logo">
                <img src="img/gentoo_logo2.png" class="project_logo">
                <img src="img/gentoo_logo2.png" class="project_logo">
              </div>
            </div>
           </section>

          <section class="send">
            <a name = "send"></a>
            <div class="wrapper">             
              <?php include "feedbackform.php" ?>
            </div>
          </section>

        </main>

        <footer>
          <div class="wrapper">
            <div class="footer_wrapper">
              <div class="footer_left">
                <h3 class="footer_name">
                  Vasya Pupkin Inc.
                </h3>
                <p class="copyright">
                  (c). 2023 Все права защищены.
                </p>
              </div>
              <div class="footer_right">
                <img src="img/vk-social-network-logo.png" alt="vk" class="soc_logo">
                <img src="img/vk-social-network-logo.png" alt="vk" class="soc_logo">
                <img src="img/vk-social-network-logo.png" alt="vk" class="soc_logo">
              </div>
            </div>
          </div>
        </footer>

        <link rel="stylesheet" href="JavaScript/lightzoom/style.css" type="text/css">
        <script type="text/javascript" src="JavaScript/lightzoom/lightzoom.js"></script>
        <script type="text/javascript">jQuery('.lightzoom').lightzoom({speed: 100, viewTitle: true, isOverlayClickClosing: true});</script>
        <script src="JavaScript/myscript.js"></script>
      </body>
</html>