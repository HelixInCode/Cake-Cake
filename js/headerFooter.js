const $header = document.getElementById('header')
const $footer = document.getElementById('footer')

const plantillaHeader = () => {
  return`<!-- Navbar -->
          <nav class="">
            <div class="nav-images">

              <a class="contenedor-logo" href="./index.html">
                <img id="logo" src="./img/backgrounds/Cake+Cake2png.png"  class="navbar-logo" alt="">       
              </a>
              <ul class="background-nav">
                <li class="nav-item">
                  <a href="index.html" class="nav-link">Home</a>
                </li>
               <li class="nav-item">
                  <a href="nosotros.html" class="nav-link">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a href="productos.html" class="nav-link">Productos</a>
                </li>
                <li class="nav-item">
                  <a href="servicios.html" class="nav-link">Servicios</a>
                </li>
                <li class="nav-item d-none d-md-block">
                  <a href="promociones.html" class="nav-link">Promociones</a>
                </li>
                <li class="nav-item d-none d-md-block">
                  <a href="contacto.html" class="nav-link">Contacto</a>
                </li>
              </ul>
              <ul id="navHam" class="background-nav hide d-block d-md-none">
                <li class="nav-item">
                  <a href="promociones.html" class="nav-link">Promociones</a>
                </li>
                <li class="nav-item">
                  <a href="contacto.html" class="nav-link">Contacto</a>
                </li>
                <li class="nav-item d-md-none">
                  <a href="#">
                    FAQ
                  </a>
                </li>
              </ul>

              <div id="hamburger" class="hamburger-btn d-md-none">
                <i id="ham-icon" class="fas fa-1-3x fa-bars"></i>
              </div>

              <a href="#" class="contenedor-preguntas d-none d-md-block">
                Preguntas Frecuentes
              </a>
            </div>
          </nav>`
}
const plantillaFooter = () => {
  return`<div class="footer-body">
          <div class="contenedor-delgado">
            <span>Mendoza - Argentina</span>
          </div>
          <div class="contenedor-medio">
            <ul class="enlaces">
              <li>
                <a href="https://twitter.com/cakemascake"><i class="fab fa-twitter-square fa-3x cyan-text"></i></a>
              </li>
              <li>
                <a href="https://www.facebook.com/cakemascake"><i class="fab fa-facebook fa-3x cyan-text"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/cakemascake/"><i class="fab fa-instagram fa-3x cyan-text"></i></a>
              </li>
              <li>
                <a href="https://api.whatsapp.com/send?phone=5492613624192"><i class="fab fa-whatsapp fa-3x cyan-text"></i></a>
              </li>
            </ul>
              
          </div>

          <div class="contenedor-delgado">
            <span>© 2020 Copyrigth: cakemascake.com</span>
          </div>
        </div>`
}

const insertarPlantilla = (headerFooter, plantilla) => {

  let html = document.implementation.createHTMLDocument()

  html.body.innerHTML = plantilla()
  headerFooter.append(html.body.children[0])
}

insertarPlantilla($header, plantillaHeader)
insertarPlantilla($footer, plantillaFooter)