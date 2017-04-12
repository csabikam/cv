<?php
/**
 * Created by PhpStorm.
 * User: csaba
 * Date: 2017.03.23.
 * Time: 13:45
 */
//include_once("saying.php");

class App
{
    protected $title;
    protected $body;

    public function  __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function render()
    {
        echo $this->getHeader($this->title);
        echo $this->getBody();
    }

    protected function getHeader($title)
    {
        return
            '
<!DOCTYPE html>
<html lang="hu">
<head>
     <title>'. $title . '</title>
           ' . $this->getMeta() . '
           ' . $this->getCssScript() . '
</head>
';
    }

    protected function getMenuBar($user = false){
        try{


            return '
<div class="container-fluid" >
    <div class="row" id="menubar">
       ' . $this->getMenu($user) . '
    </div>

 </div>';
        }
        catch(Error $e) {
            echo "SZAR" . $e->getMessage();
        }
    }

    protected function getMenu($user = false){
        return '
<header id="main-header"><a href="../../index.php" class="brand"><span class="name">Vida Csaba</span><span class="title hidden-xs">webdesign</span></a>
        <div class="responsive-nav">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="../../pages/homepages/home-unique-scroll.php" class="active">Kezdőlap</a>
                    <ul class="dropdown">
                        <li><a href="../../pages/homepages/home-unique-scroll.php">Scrollos layout</a>
                        </li>
                        <li><a href="../../pages/homepages/home-image-stack.php">Image stack</a>
                        </li>
                        <li><a href="../../pages/homepages/home-fullscreen.php">Fullscreen</a>
                        </li>
                        <li><a href="../../pages/homepages/home-fullscreen-offset.php">Fullscreen offset</a>
                        </li>
                        <li><a href="../../pages/homepages/home-fullscreen-border.php">Fullscreen border</a>
                        </li>
                        <li><a href="../../pages/homepages/home-hero-variant-1.php"> Hero 1</a>
                        </li>
                        <li><a href="../../pages/homepages/home-hero-variant-2.php">Hero 2</a>
                        </li>
                        <li><a href="../../pages/homepages/home-sidebar-variant-1.php">Sidebar 1</a>
                        </li>
                        <li><a href="../../pages/homepages/home-sidebar-variant-2.php">Sidebar 2</a>
                        </li>
                    </ul>
                </li>
                <li><a href="../../pages/portfolio/portfolio-unique-scroll.php">Képek</a>
                    <ul class="dropdown">
                        <li><a href="../../pages/portfolio/portfolio-unique-scroll.php">Scrollos nézegető</a>
                        </li>
                        <li><a href="../../pages/portfolio/portfolio-classic-2-columns.php">Két oszlopos</a>
                        </li>
                        <li><a href="../../pages/portfolio/portfolio-classic-3-columns.php">Három oszlopos</a>
                        </li>
                        <li><a href="../../pages/portfolio/portfolio-classic-4-columns.php">Négy oszlopos</a>
                        </li>
                        <li><a href="../../pages/portfolio/portfolio-masonry.php">Négy oszlopos csempés</a>
                        </li>
                        <li><a href="../../pages/portfolio/portfolio-wide-photo.php">Széles képek</a>
                        </li>
                        <li><a href="../../pages/portfolio/portfolio-category-filters.php">Címke szűrő</a>
                        </li>
                        <li><a href="../../pages/portfolio/portfolio-titan-slider.php">Slider</a>
                        </li>
                    </ul>
                </li>
                <li><a href="../../pages/about/index.php">Rólam</a>
                </li>
                <li><a href="../../pages/clients/index.php">Referencia</a>

                </li>
                <li><a href="../../pages/contact/index.php">Kapcsolat</a>
                </li>
            </ul>
        </nav>
    </header>
        ';

    }

    protected function getContent(){
        return '
<div class="hero fs">
       <div style="background-image: url(../../images/home/05.jpg);" class="bg"></div>
</div>
    ';
    }

    protected function getBody()
    {
        return '
 <body class="">
   <div id="wrapper" class="container-fluid">
        ' . $this->getMenu() . '
        ' . $this->getContent() . '
</div>
 ' . $this->getJsScript() . '
  </body>
</html>
    ';
    }

    protected function getFooter(){

        return '

';
    }

    protected function getJsScript()
    {
        return '
<script src="../../js/vendor.js"></script>
<script src="../../js/functions.js"></script>
    ';
    }

    protected function getCssScript()
    {
        return '
<link rel="stylesheet" type="text/css" href="../../css/core.css">
<link rel="stylesheet" type="text/css" href="../../css/elements.css">
<link rel="stylesheet" type="text/css" href="../../css/custom.css">
<link rel="icon" type="image/png" href="../../favicon.png?version=4">
';
    }


    protected function getMeta()
    {
        return '
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
    ';
    }

}

class HomeFullscreen extends App{

}

class HomeFullscreenBorder extends App{
    protected function getContent(){
        return '
<div class="hero fs offset">
        <div style="background-image: url(../../images/home/06.jpg);" class="bg"></div>
</div>
    ';
    }
}

class HomeFullscreenOffset extends App{
    protected function getContent(){
        return '
<div class="hero fs offset-top">
        <div style="background-image: url(../../images/home/04.jpg);" class="bg"></div>
      </div>
    ';
    }
}

class HomeHeroVariant1 extends App{
    protected function getContent(){
        return '
<div class="hero fs">
        <div style="background-image: url(../../images/home/07.jpg);" class="bg faded"></div>
        <div class="vcenter">
          <div class="container">
            <h4>Vida Csaba</h4>
            <h1>webdesign</h1>
          </div>
        </div>
      </div>
    ';
    }
}

class HomeHeroVariant2 extends App{
    protected function getContent(){
        return '
 <div class="hero fs">
        <div style="background-image: url(../../images/home/08.jpg);" class="bg faded-more"></div>
        <div class="vcenter text-center">
          <div class="container">
            <h4>Vida Csaba</h4>
            <h1>webdesign</h1>
          </div>
        </div>
      </div>
    ';
    }
}

class HomeImageStack extends App{
    protected function getContent(){
        return '
 <div class="vcenter fs text-center">
        <div class="img-stack"><img src="../../images/home/02.jpg"><img src="../../images/home/03.jpg"></div>
 </div>
    ';
    }
}

class HomeSidebarVariant1 extends App{

    protected function getBody()
    {
        return '
<body>
<div id="wrapper" class="container-fluid sidebar">
      ' . $this->getMenu() . '
        ' . $this->getContent() . '
</div>
 ' . $this->getJsScript() . '
  </body>
</html>
    ';
    }

    protected function getMenu($user = false){
        return '
 <aside id="main-sidebar" class="centered"><a href="../../index.php" class="brand"><span class="name">Vida Csaba</span><span class="title hidden-xs">webdesign</span></a>
        <div class="responsive-nav">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <nav class="main-nav">
          <ul>
            <li><a href="../../pages/homepages/home-unique-scroll.php" class="active">Kezdőlap</a>
              <ul class="dropdown">
                <li><a href="../../pages/homepages/home-unique-scroll.php">Scrollos layout</a>
                </li>
                <li><a href="../../pages/homepages/home-image-stack.php">Image stack</a>
                </li>
                <li><a href="home-fullscreen_borderhome-fullscreen_border.php">Fullscreen</a>
                </li>
                <li><a href="../../pages/homepages/home-fullscreen-offset.php">Fullscreen offset</a>
                </li>
                <li><a href="../../pages/homepages/home-fullscreen-border.php">Fullscreen border</a>
                </li>
                <li><a href="../../pages/homepages/home-hero-variant-1.php">Hero 1</a>
                </li>
                <li><a href="../../pages/homepages/home-hero-variant-2.php">Hero 2</a>
                </li>
                <li><a href="../../pages/homepages/home-sidebar-variant-1.php">Sidebar 1</a>
                </li>
                <li><a href="../../pages/homepages/home-sidebar-variant-2.php">Sidebar 2</a>
                </li>
              </ul>
            </li>
            <li><a href="../../pages/portfolio/portfolio-unique-scroll.php">Képek</a>
              <ul class="dropdown">
                <li><a href="../../pages/portfolio/portfolio-unique-scroll.php">Scrollos nézegető</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-classic-2-columns.php">Két oszlopos</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-classic-3-columns.php">Három oszlopos</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-classic-4-columns.php">Négy oszlopos</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-masonry.php">Négy oszlopos csempés</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-wide-photo.php">Széles képek</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-category-filters.php">Címke szűrő</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-titan-slider.php">Slider</a>
                </li>
              </ul>
            </li>
            <li><a href="../../pages/about/index.php">Rólam</a>
            </li>
            <li><a href="../../pages/clients/index.php">Referencia</a>
            </li>
            <li><a href="../../pages/contact/index.php">Kapcsolat</a>
            </li>
          </ul>
        </nav>
        <div style="background-image: url(../../images/home/09.jpg);" class="bg faded"></div>
      </aside>
        ';

    }

    protected function getContent(){
        return '
 <section class="main">
        <div class="img-grid">
          <div class="item-sizer"></div><a href="../../images/portfolio/thumb-01.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-01.jpg"></a><a href="../../images/portfolio/thumb-02.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-02.jpg"></a><a href="../../images/portfolio/thumb-03.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-03.jpg"></a><a href="../../images/portfolio/thumb-04.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-04.jpg"></a><a href="../../images/portfolio/thumb-05.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-05.jpg"></a><a href="../../images/portfolio/thumb-06.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-06.jpg"></a><a href="../../images/portfolio/thumb-07.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-07.jpg"></a><a href="../../images/portfolio/thumb-08.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-08.jpg"></a><a href="../../images/portfolio/thumb-09.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-09.jpg"></a><a href="../../images/portfolio/thumb-10.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-10.jpg"></a><a href="../../images/portfolio/thumb-11.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-11.jpg"></a><a href="../../images/portfolio/thumb-12.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-12.jpg"></a><a href="../../images/portfolio/thumb-13.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-13.jpg"></a><a href="../../images/portfolio/thumb-14.jpg" data-caption="Lorem ipsum" class="item lightbox"><img src="../../images/portfolio/thumb-14.jpg"></a>
        </div>
      </section>
    ';
    }

    protected function getJsScript()
    {
        return '
<script src="../../js/vendor.js"></script>
<script src="../../js/functions.js"></script>
<script src="../../modules/tera-lightbox/tera-lightbox.js"></script>
    ';
    }
}

class HomeSidebarVariant2 extends HomeSidebarVariant1{
    protected function getMenu($user = false){
        return '
 <aside id="main-sidebar"><a href="../../index.php" class="brand"><span class="name">Vida Csaba</span><span class="title hidden-xs">webdesign</span></a>
        <div class="responsive-nav">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <nav class="main-nav">
          <ul>
            <li><a href="../../pages/homepages/home-unique-scroll.php" class="active">Layoutok</a>
              <ul class="dropdown">
                <li><a href="../../pages/homepages/home-unique-scroll.php">Scroll</a>
                </li>
                <li><a href="../../pages/homepages/home-image-stack.php">Image stack</a>
                </li>
                <li><a href="home-fullscreen_borderhome-fullscreen_border.php">Fullscreen</a>
                </li>
                <li><a href="../../pages/homepages/home-fullscreen-offset.php">Fullscreen offset</a>
                </li>
                <li><a href="../../pages/homepages/home-fullscreen-border.php">Fullscreen border</a>
                </li>
                <li><a href="../../pages/homepages/home-hero-variant-1.php">Hero 1</a>
                </li>
                <li><a href="../../pages/homepages/home-hero-variant-2.php">Hero 2</a>
                </li>
                <li><a href="../../pages/homepages/home-sidebar-variant-1.php">Sidebar 1</a>
                </li>
                <li><a href="../../pages/homepages/home-sidebar-variant-2.php">Sidebar 2</a>
                </li>
              </ul>
            </li>
            <li><a href="../../pages/portfolio/portfolio-unique-scroll.php">Képek</a>
              <ul class="dropdown">
                <li><a href="../../pages/portfolio/portfolio-unique-scroll.php">Scrollos nézegető</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-classic-2-columns.php">Két oszlopos</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-classic-3-columns.php">Három oszlopos</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-classic-4-columns.php">Négy oszlopos</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-masonry.php">Négy oszlopos csempés</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-wide-photo.php">Széles képek</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-category-filters.php">Címke szűrő</a>
                </li>
                <li><a href="../../pages/portfolio/portfolio-titan-slider.php">Slider</a>
                </li>
              </ul>
            </li>
            <li><a href="../../pages/about/index.php">Rólam</a>
            </li>
            <li><a href="../../pages/clients/index.php">Referencia</a>
            </li>
            <li><a href="../../pages/contact/index.php">Kapcsolat</a>
            </li>
          </ul>
        </nav>
      </aside>
        ';

    }

}

class HomeUniqueScroll extends App{
    protected function getContent(){
        return '
 <ul class="img-scroller fs">
                <li class="active vcenter"><a href="../../images/home/01.jpg" class="item lightbox"><img src="../../images/home/01.jpg"></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-42.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-42.jpg"></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-43.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-43.jpg"></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-44.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-44.jpg"></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-45.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-45.jpg"></a></li>
      </ul>
    ';
    }

    protected function getJsScript()
    {
        return '
<script src="../../js/vendor.js"></script>
<script src="../../js/functions.js"></script>
<script src="../../modules/tera-lightbox/tera-lightbox.js"></script>
<script src="../../modules/img-scroller/img-scroller.js"></script>
    ';
    }
}

class About extends App{
    protected function getContent(){
        return '
 <div class="container mb-xl mt-xl">
        <div class="content row">
          <div class="col-md-offset-3 col-md-6"><img src="../../images/about/profile.jpg">
            <p>Ide majd írok egy csomó szöveget magamról, amiből majd az lesz az impressziód, hogy milyen jó, hogy ezt is elolvastad.</p>
            <p>Akár két paragrafusnyi szöveggel is lehet számítani.</p>
          </div>
        </div>
      </div>
    ';
    }

    protected function getBody()
    {
        return '
<body>
 <div id="wrapper" class="container-fluid">
      ' . $this->getMenu() . '
        ' . $this->getContent() . '
</div>
 ' . $this->getJsScript() . '
  </body>
</html>
    ';
    }
}

class Reference extends App{
    protected function getContent(){
        return '
 <div class="container mb-xl mt-xl">
        <div class="content">
          <div class="row">
            <div class="col-md-12">
              <h4>Webfejlesztés</h4>
              <p> 3 évig dolgoztama  Docler Holdingnál mint backend PHP fejlesztő. Ezután kezdett el érdekelni a frontend világa. Ennek a tökéletesítése a jelenlegi célom.</p>
            </div>
          </div>
          <div class="row mt-lg">
            <div class="col-md-3 col-sm-6">
              <ul class="list">
                <li>Eddigi munkahelyeim:</li>
                <li>Docler Holding</li>
                <li>SAP</li>
                <li>Acttive</li>
                <li>Ece Budapest Kft.</li>
                <li>CAS Software Szeged</li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              <ul class="list">
                <li>Az eddig használt technológiák:</li>
                <li>PHP </li>
                <li>HTML </li>
                <li> CSS</li>
                <li>JavaScript </li>
                <li>JQuery</li>
                <li>MySQL</li>
                <li>noSql</li>
                <li>SVN/GIT </li>
                <li>MVC</li>
                <li>OOP</li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              <ul class="list">
                <li>Technológiák amikkel szívesen dolgoznék:</li>
                <li>Javascript</li>
                <li>NodeJS</li>
                <li>AngularJS</li>
                <li>React</li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              <ul class="list">
                <li>noSql</li>
                <li>MongoDB</li>
                <li>JQuery</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    ';
    }
}

class Contact extends App{
    protected function getContent(){
        return '
 <div class="fs vcenter">
        <div style="background-image: url(../../images/contact/01.jpg);" class="bg faded-more"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h1>Kapcsolat</h1>
              <p> Ha szeretnél egy jó weboldalt, de nem tudod, hogyan kezdj neki, írj, és segítek.</p>
              <p>Ha még nem szeretnél, vagy nem tudod konkrétan mit szeretnél, csak tapogatózol a sötétben, akkor is fordulj hozzám bizalommal, igyekszek eligazítani Téged.</p>
              <p> Telefonszám: <a href="tel:0036303144855"> 30 314 48 55</a></p>

            </div>
            <div class="col-md-5 col-md-offset-2">
              <form id="form" action="/php/mail.php" class="form mt-md">
                <label>Neved: *</label>
                <input required type="text" name="name" class="form-control">
                <label>E-mail címed: *</label>
                <input required type="email" name="email" class="form-control">
                <label>Na mondd, miújság: *</label>
                <textarea required name="message" class="form-control"></textarea>
                <button id="send" type="submit" class="btn btn-default">Elküld</button><span class="p-md">* Kötelező mezők</span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    ';
    }

    protected function getBody()
    {
        return '
<body>
 <div id="wrapper" class="container-fluid">
      ' . $this->getMenu() . '
        ' . $this->getContent() . '
</div>
 ' . $this->getJsScript() . '
  </body>
</html>
    ';
    }
}

class PortfolioCategoryFilters extends App{
    protected function getContent(){
        return '
<section>
        <div class="text-center mb-xl mt-xl"><a href="#" class="btn category-trigger">Címke</a>
          <div id="filters">
            <ul>
              <li><a href="#" data-filter="*" class="active">Mind</a></li>
              <li><a href="#" data-filter=".summer">Nyár</a></li>
              <li><a href="#" data-filter=".water">Víz</a></li>
              <li><a href="#" data-filter=".woods">Fák</a></li>
              <li><a href="#" data-filter=".mountains">Hegyek</a></li>
            </ul>
          </div>
        </div>
        <div class="img-grid">
          <div class="item-sizer"></div><a href="../../images/home/01.jpg" data-caption="Nature #1" class="item lightbox woods"><img src="../../images/home/01.jpg"></a><a href="../../images/portfolio/thumb-36.jpg" data-caption="Nature #2" class="item lightbox mountains"><img src="../../images/portfolio/thumb-36.jpg"></a><a href="../../images/portfolio/thumb-38.jpg" data-caption="Nature #3" class="item lightbox woods summer"><img src="../../images/portfolio/thumb-38.jpg"></a><a href="../../images/portfolio/thumb-39.jpg" data-caption="Nature #4" class="item lightbox mountains water"><img src="../../images/portfolio/thumb-39.jpg"></a><a href="../../images/portfolio/thumb-41.jpg" data-caption="Nature #5" class="item lightbox summer"><img src="../../images/portfolio/thumb-41.jpg"></a><a href="../../images/portfolio/thumb-31.jpg" data-caption="Nature #6" class="item lightbox mountains"><img src="../../images/portfolio/thumb-31.jpg"></a><a href="../../images/portfolio/thumb-40.jpg" data-caption="Nature #7" class="item lightbox mountains water"><img src="../../images/portfolio/thumb-40.jpg"></a><a href="../../images/portfolio/thumb-32.jpg" data-caption="Nature #8" class="item lightbox woods"><img src="../../images/portfolio/thumb-32.jpg"></a><a href="../../images/portfolio/thumb-33.jpg" data-caption="Nature #9" class="item lightbox water"><img src="../../images/portfolio/thumb-33.jpg"></a><a href="../../images/portfolio/thumb-34.jpg" data-caption="Nature #10" class="item lightbox summer"><img src="../../images/portfolio/thumb-34.jpg"></a>
        </div>
      </section>
    ';
    }

    protected function getJsScript()
    {
        return '
<script src="../../js/vendor.js"></script>
<script src="../../js/functions.js"></script>
<script src="../../modules/tera-lightbox/tera-lightbox.js"></script>
    ';
    }

}

class Portfolio2Columns extends PortfolioCategoryFilters{
    protected function getContent(){
        return '
<section>
        <div class="img-grid col-2">
          <div class="item-sizer"></div><a href="../../images/portfolio/thumb-25.jpg" data-caption="Nature #1" class="item lightbox"><img src="../../images/portfolio/thumb-25.jpg"></a><a href="../../images/portfolio/thumb-26.jpg" data-caption="Nature #2" class="item lightbox"><img src="../../images/portfolio/thumb-26.jpg"></a><a href="../../images/portfolio/thumb-27.jpg" data-caption="Nature #3" class="item lightbox"><img src="../../images/portfolio/thumb-27.jpg"></a><a href="../../images/portfolio/thumb-28.jpg" data-caption="Nature #4" class="item lightbox"><img src="../../images/portfolio/thumb-28.jpg"></a><a href="../../images/portfolio/thumb-29.jpg" data-caption="Nature #5" class="item lightbox"><img src="../../images/portfolio/thumb-29.jpg"></a><a href="../../images/portfolio/thumb-30.jpg" data-caption="Nature #6" class="item lightbox"><img src="../../images/portfolio/thumb-30.jpg"></a>
        </div>
      </section>
    ';
    }

}

class Portfolio3Columns extends PortfolioCategoryFilters{
    protected function getContent(){
        return '
<section>
        <div class="img-grid col-3">
          <div class="item-sizer"></div><a href="../../images/portfolio/thumb-25.jpg" data-caption="Nature #1" class="item lightbox"><img src="../../images/portfolio/thumb-25.jpg"></a><a href="../../images/portfolio/thumb-26.jpg" data-caption="Nature #2" class="item lightbox"><img src="../../images/portfolio/thumb-26.jpg"></a><a href="../../images/portfolio/thumb-27.jpg" data-caption="Nature #3" class="item lightbox"><img src="../../images/portfolio/thumb-27.jpg"></a><a href="../../images/portfolio/thumb-28.jpg" data-caption="Nature #4" class="item lightbox"><img src="../../images/portfolio/thumb-28.jpg"></a><a href="../../images/portfolio/thumb-29.jpg" data-caption="Nature #5" class="item lightbox"><img src="../../images/portfolio/thumb-29.jpg"></a><a href="../../images/portfolio/thumb-30.jpg" data-caption="Nature #6" class="item lightbox"><img src="../../images/portfolio/thumb-30.jpg"></a><a href="../../images/portfolio/thumb-31.jpg" data-caption="Nature #1" class="item lightbox"><img src="../../images/portfolio/thumb-31.jpg"></a><a href="../../images/portfolio/thumb-32.jpg" data-caption="Nature #2" class="item lightbox"><img src="../../images/portfolio/thumb-32.jpg"></a><a href="../../images/portfolio/thumb-33.jpg" data-caption="Nature #3" class="item lightbox"><img src="../../images/portfolio/thumb-33.jpg"></a><a href="../../images/portfolio/thumb-34.jpg" data-caption="Nature #4" class="item lightbox"><img src="../../images/portfolio/thumb-34.jpg"></a><a href="../../images/home/01.jpg" data-caption="Nature #5" class="item lightbox"><img src="../../images/home/01.jpg"></a><a href="../../images/portfolio/thumb-36.jpg" data-caption="Nature #6" class="item lightbox"><img src="../../images/portfolio/thumb-36.jpg"></a>
        </div>
      </section>
    ';
    }

}

class Portfolio4Columns extends PortfolioCategoryFilters{
    protected function getContent(){
        return '
<section>
        <div class="img-grid">
          <div class="item-sizer"></div><a href="../../images/home/01.jpg" data-caption="Nature #1" class="item lightbox"><img src="../../images/home/01.jpg"></a><a href="../../images/portfolio/thumb-36.jpg" data-caption="Nature #2" class="item lightbox"><img src="../../images/portfolio/thumb-36.jpg"></a><a href="../../images/portfolio/thumb-38.jpg" data-caption="Nature #3" class="item lightbox"><img src="../../images/portfolio/thumb-38.jpg"></a><a href="../../images/portfolio/thumb-39.jpg" data-caption="Nature #4" class="item lightbox"><img src="../../images/portfolio/thumb-39.jpg"></a><a href="../../images/portfolio/thumb-40.jpg" data-caption="Nature #5" class="item lightbox"><img src="../../images/portfolio/thumb-40.jpg"></a><a href="../../images/portfolio/thumb-41.jpg" data-caption="Nature #6" class="item lightbox"><img src="../../images/portfolio/thumb-41.jpg"></a><a href="../../images/portfolio/thumb-31.jpg" data-caption="Nature #7" class="item lightbox"><img src="../../images/portfolio/thumb-31.jpg"></a><a href="../../images/portfolio/thumb-32.jpg" data-caption="Nature #8" class="item lightbox"><img src="../../images/portfolio/thumb-32.jpg"></a><a href="../../images/portfolio/thumb-33.jpg" data-caption="Nature #9" class="item lightbox"><img src="../../images/portfolio/thumb-33.jpg"></a><a href="../../images/portfolio/thumb-34.jpg" data-caption="Nature #10" class="item lightbox"><img src="../../images/portfolio/thumb-34.jpg"></a>
        </div>
      </section>
    ';
    }

}

class PortfolioMasonry extends PortfolioCategoryFilters{
    protected function getContent(){
        return '
<section>
        <div class="img-grid spacious">
          <div class="item-sizer"></div><a href="../../images/portfolio/thumb-01.jpg" data-caption="Portrait #1" class="item lightbox"><img src="../../images/portfolio/thumb-01.jpg"></a><a href="../../images/portfolio/thumb-02.jpg" data-caption="Portrait #2" class="item lightbox"><img src="../../images/portfolio/thumb-02.jpg"></a><a href="../../images/portfolio/thumb-03.jpg" data-caption="Portrait #3" class="item lightbox"><img src="../../images/portfolio/thumb-03.jpg"></a><a href="../../images/portfolio/thumb-04.jpg" data-caption="Portrait #4" class="item lightbox"><img src="../../images/portfolio/thumb-04.jpg"></a><a href="../../images/portfolio/thumb-05.jpg" data-caption="Portrait #5" class="item lightbox"><img src="../../images/portfolio/thumb-05.jpg"></a><a href="../../images/portfolio/thumb-06.jpg" data-caption="Portrait #6" class="item lightbox"><img src="../../images/portfolio/thumb-06.jpg"></a><a href="../../images/portfolio/thumb-07.jpg" data-caption="Portrait #7" class="item lightbox"><img src="../../images/portfolio/thumb-07.jpg"></a><a href="../../images/portfolio/thumb-08.jpg" data-caption="Portrait #8" class="item lightbox"><img src="../../images/portfolio/thumb-08.jpg"></a><a href="../../images/portfolio/thumb-09.jpg" data-caption="Portrait #9" class="item lightbox"><img src="../../images/portfolio/thumb-09.jpg"></a><a href="../../images/portfolio/thumb-10.jpg" data-caption="Portrait #10" class="item lightbox"><img src="../../images/portfolio/thumb-10.jpg"></a><a href="../../images/portfolio/thumb-11.jpg" data-caption="Portrait #11" class="item lightbox"><img src="../../images/portfolio/thumb-11.jpg"></a><a href="../../images/portfolio/thumb-12.jpg" data-caption="Portrait #11" class="item lightbox"><img src="../../images/portfolio/thumb-12.jpg"></a><a href="../../images/portfolio/thumb-13.jpg" data-caption="Portrait #11" class="item lightbox"><img src="../../images/portfolio/thumb-13.jpg"></a><a href="../../images/portfolio/thumb-14.jpg" data-caption="Portrait #12" class="item lightbox"><img src="../../images/portfolio/thumb-14.jpg"></a>
        </div>
      </section>
    ';
    }

}

class PortfolioSlider extends PortfolioCategoryFilters{

    protected function getContent(){
        return '
<div class="slider fs">
        <div class="slides">
                    <div class="slide dark">
                      <div style="background-image: url(../../images/portfolio/wide-thumb-01.jpg)" class="bg faded"></div>
                      <div class="vbottom fs">
                        <section>
                          <h3>Scotch Highlands</h3>
                        </section>
                      </div>
                    </div>
                    <div class="slide dark">
                      <div style="background-image: url(../../images/portfolio/wide-thumb-02.jpg)" class="bg faded"></div>
                      <div class="vbottom fs">
                        <section>
                          <h3>Tip of the Alps</h3>
                        </section>
                      </div>
                    </div>
                    <div class="slide dark">
                      <div style="background-image: url(../../images/portfolio/wide-thumb-03.jpg)" class="bg faded"></div>
                      <div class="vbottom fs">
                        <section>
                          <h3>Mossy mountains</h3>
                        </section>
                      </div>
                    </div>
                    <div class="slide dark">
                      <div style="background-image: url(../../images/portfolio/wide-thumb-04.jpg)" class="bg faded"></div>
                      <div class="vbottom fs">
                        <section>
                          <h3>Snowy rocks</h3>
                        </section>
                      </div>
                    </div>
                    <div class="slide dark">
                      <div style="background-image: url(../../images/portfolio/wide-thumb-05.jpg)" class="bg faded"></div>
                      <div class="vbottom fs">
                        <section>
                          <h3>The highest peak</h3>
                        </section>
                      </div>
                    </div>
        </div>
      </div>
    ';
    }

    protected function getJsScript()
    {
        return '
<script src="../../js/vendor.js"></script>
<script src="../../js/functions.js"></script>
<script src="../../modules/titan-slider/titan-slider.js"></script>
<script src="../../modules/tera-lightbox/tera-lightbox.js"></script>
    ';
    }

}

class PortfolioUniqueScroll extends PortfolioCategoryFilters{
    protected function getContent(){
        return '
<ul class="img-scroller">
                <li class="active vcenter"><a href="../../images/portfolio/thumb-15.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-15.jpg">
                    <div class="caption">Szeged</div></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-16.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-16.jpg">
                    <div class="caption">Urban nature</div></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-17.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-17.jpg">
                    <div class="caption">Partfürdő</div></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-19.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-19.jpg">
                    <div class="caption">Még megy</div></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-20.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-20.jpg">
                    <div class="caption">TIK</div></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-21.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-21.jpg">
                    <div class="caption">Családi TRX</div></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-22.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-22.jpg">
                    <div class="caption">...</div></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-23.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-23.jpg">
                    <div class="caption">Ide nézz</div></a></li>
                <li class="undefined vcenter"><a href="../../images/portfolio/thumb-24.jpg" class="item lightbox"><img src="../../images/portfolio/thumb-24.jpg">
                    <div class="caption">Belvárosi híd</div></a></li>
      </ul>
    ';
    }

    protected function getJsScript()
    {
        return '
<script src="../../js/vendor.js"></script>
<script src="../../js/functions.js"></script>
<script src="../../modules/img-scroller/img-scroller.js"></script>
<script src="../../modules/tera-lightbox/tera-lightbox.js"></script>
    ';
    }

}

class PortfolioWide extends PortfolioCategoryFilters{

    protected function getBody()
    {
        return '
<body>
 <div id="wrapper" class="container-fluid">
      ' . $this->getMenu() . '
        ' . $this->getContent() . '
</div>
 ' . $this->getJsScript() . '
  </body>
</html>
    ';
    }


    protected function getContent(){
        return '
 <section>
        <div class="img-grid col-1">
          <div class="item-sizer"></div><a href="../../images/portfolio/wide-thumb-01.jpg" data-caption="Nature #1" class="item lightbox"><img src="../../images/portfolio/wide-thumb-01.jpg"></a><a href="../../images/portfolio/wide-thumb-02.jpg" data-caption="Nature #2" class="item lightbox"><img src="../../images/portfolio/wide-thumb-02.jpg"></a><a href="../../images/portfolio/wide-thumb-03.jpg" data-caption="Nature #3" class="item lightbox"><img src="../../images/portfolio/wide-thumb-03.jpg"></a><a href="../../images/portfolio/wide-thumb-04.jpg" data-caption="Nature #4" class="item lightbox"><img src="../../images/portfolio/wide-thumb-04.jpg"></a><a href="../../images/portfolio/wide-thumb-05.jpg" data-caption="Nature #5" class="item lightbox"><img src="../../images/portfolio/wide-thumb-05.jpg"></a>
        </div>
</section>
    ';
    }
}