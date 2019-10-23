@extends('layout/maintemaplate')

@section('title', 'Sobre Nosotros')


@section('content')
    
<div class="container" id="wrap">
	  
        <div class="main-w3layouts wrapper">
                
                <div class="main-agileinfo">
                    <div class="agileits-top">
                        <form action="#" method="post">
                            <input class="text" type="text" name="Username" placeholder="Usuario" required="">
                            <input class="text email" type="email" name="email" placeholder="Correo" required="">
                            <input class="text" type="password" name="password" placeholder="Contraseña" required="">
                            <input class="text w3lpass" type="password" name="password" placeholder="Confirmar contraseña" required="">
                            <div class="wthree-text">
                                <label class="anim">
                                    <input type="checkbox" class="checkbox" required="">
                                    <span>Acepto los términos y condiciones</span>
                                </label>
                                <div class="clear"> </div>
                            </div>
                            <input type="submit" value="Registrarse">
                        </form>
                        <p>¿Ya tienes una cuenta? <a href="/login"> Iniciar Sesión!</a></p>
                    </div>
                </div>
            
            </div>


<style>

/*--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/
/*-- reset --*/
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, dl, dt, dd, ol, nav ul, nav li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
  display: block;
}

ol, ul {
  list-style: none;
  margin: 0px;
  padding: 0px;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after, q:before, q:after {
  content: '';
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

/*-- start editing from here --*/
a {
  text-decoration: none;
}

.txt-rt {
  text-align: right;
}

/* text align right */
.txt-lt {
  text-align: left;
}

/* text align left */
.txt-center {
  text-align: center;
}

/* text align center */
.float-rt {
  float: right;
}

/* float right */
.float-lt {
  float: left;
}

/* float left */
.clear {
  clear: both;
}

/* clear float */
.pos-relative {
  position: relative;
}

/* Position Relative */
.pos-absolute {
  position: absolute;
}

/* Position Absolute */
.vertical-base {
  vertical-align: baseline;
}

/* vertical align baseline */
.vertical-top {
  vertical-align: top;
}

/* vertical align top */
nav.vertical ul li {
  display: block;
}

/* vertical menu */
nav.horizontal ul li {
  display: inline-block;
}

/* horizontal menu */
img {
  max-width: 100%;
}

/*-- end reset --*/

h1 {
  font-size: 3em;
  text-align: center;
  color: #fff;
  font-weight: 100;
  text-transform: capitalize;
  letter-spacing: 4px;
  font-family: 'Roboto', sans-serif;
}

/*-- main --*/
.main-w3layouts {
  padding: 3em 0 1em;
}

.main-agileinfo {
  width: 35%;
  margin: 3em auto;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  background-size: cover;
}

.agileits-top {
  padding: 3em;
}

input[type="text"], input[type="email"], input[type="password"] {
  
  
  /* fallback for old browsers */
   
  background: linear-gradient(to top, #f2f2f2, #f2f2f2);
  
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 94.5%;
  display: block;
  border: none;
  padding: 0.8em;
  
  color: #fff;
  font-family: 'Roboto', sans-serif;
}

input.email, input.text.w3lpass {
  margin: 2em 0;
}

.text:focus, .text:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}

input[type="submit"] {
  font-size: .9em;
  color: #fff;
  background: #76b852;
  outline: none;
  border: 1px solid #76b852;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 100%;
  margin: 2em 0;
  letter-spacing: 4px;
}

input[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: #8DC26F;
}





</style>


@endsection