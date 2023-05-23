<!DOCTYPE html>
<html lang="en">
<style>
    * {
  box-sizing: border-box;
}
body {
  font-family: 'Open Sans', sans-serif;
}
a {
  text-decoration: none;
}
ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.container {
  padding-left: 15px;
  padding-right: 15px;
  margin-left: auto;
  margin-right: auto;
}
/* Small */
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
/* Medium */
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
/* Large */
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
/* End Global Rules */

/* Start Landing Page */
.landing-page header {
  min-height: 80px;
  display: flex;
}
@media (max-width: 767px) {
  .landing-page header {
    min-height: auto;
    display: initial;
  }
}
.landing-page header .container {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
@media (max-width: 767px) {
  .landing-page header .container {
    flex-direction: column;
    justify-content: center;
  }
}
.landing-page header .logo {
  color: #5d5d5d;
  font-style: italic;
  text-transform: uppercase;
  font-size: 20px;
}
@media (max-width: 767px) {
  .landing-page header .logo {
    margin-top: 20px;
    margin-bottom: 20px;
  }
}
.landing-page header .links {
  display: flex;
  align-items: center;
}
@media (max-width: 767px) {
  .landing-page header .links {
    text-align: center;
    gap: 10px;
  }
}
.landing-page header .links li {
  margin-left: 30px;
  color: #5d5d5d;
  cursor: pointer;
  transition: .3s;
}
@media (max-width: 767px) {
  .landing-page header .links li {
    margin-left: auto;
  }
}
.landing-page header .links li:last-child {
  border-radius: 20px;
  padding: 10px 20px;
  color: #FFF;
  background-color: #6c63ff;
}
.landing-page header .links li:not(:last-child):hover {
  color: #6c63ff;
}
.landing-page .content .container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 140px;
  min-height: calc(100vh - 80px);
}
@media (max-width: 767px) {
  .landing-page .content .container {
    gap: 0;
    min-height: calc(100vh - 101px);
    justify-content: center;
    flex-direction: column-reverse;
  }
}
@media (max-width: 767px) {
  .landing-page .content .info {
    text-align: center;
    margin-bottom: 15px 
  }
}
.landing-page .content .info h1 {
  color: #5d5d5d;
  font-size: 44px;
}
.landing-page .content .info p {
  margin: 0;
  line-height: 1.6;
  font-size: 15px;
  color: #5d5d5d;
}
.landing-page .content .info button {
  border: 0;
  border-radius: 20px;
  padding: 12px 30px;
  margin-top: 30px;
  cursor: pointer;
  color: #FFF;
  background-color: #6c63ff;
}
.landing-page .content .image img {
  max-width: 100%;
}
</style>
<!-- Start Landing Page -->
<div class="landing-page">
        <header>
          <div class="container">
            <a href="#" class="logo">Nombre <b>Guay</b></a>
            <ul class="links">
              <li> <a href="/welcome">Home</a></li>
              <li> <a href="https://docs.google.com/document/d/1PJ4XQMhbaTsfHtydcpAgyM3474Mv0MHhffudVmPXV-4/edit">Documento</a></li>
              <li> <a href="https://github.com/CGIS-2023/proyecto-cgis-2023-krilaclop2">Github</a></li>
              <li> <a href="">About Us</a></li>

              <div style = "margin-left:20px;" class="flex-center position-ref full-height">

            @if (Route::has('login') && Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </div>
            @elseif (Route::has('login') && !Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            </ul>
          </div>
        </header>
        <div class="content">
          <div class="container">
            <div class="info">
              <h1>Gestión de Triaje</h1>
              <p>Una aplicación para ayudar al proceso de Gestión de Triaje para la asignatura de 
                Codificación y Gestión de la Información Sanitaria, 
                3º Ingeniería de la Salud (US)</p>
              <button>Let's go</button>
            </div>
            <div class="image">
              <img src="https://img.freepik.com/free-vector/doctors-personalized-prescriptive-analytics_335657-1882.jpg?w=1380&t=st=1684878107~exp=1684878707~hmac=a359751fa8ce280b3ab12736009aaad33246cf2c587c3c4cebcb15c983c5b4e4">
            </div>
          </div>
        </div>
      </div>
      <!-- End Landing Page -->


Resources
</html>
