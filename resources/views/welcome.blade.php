@extends("layouts.app")
@section("content")
  <div class="container-fluid">
  </div>
  <div class="video text-center">
  <iframe width="70%" height="500" src="{{url('videos/introSIPAA.mp4')}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen autoplay=1 controls=1 rel=0 showinfo=0></iframe>
</div>
   <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 20px; margin-left: 60px; margin-right: 60px;">
   
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

   
   <div class="carousel-inner">
      <div class="item active " >
         <DIV id="SLAT"><h3>Lina Paola Córdoba Orjuela</h3> <P>
Ingeniera de Sistemas y Computación<br>
Esp. Base de datos<br>
Mg. Gestión de la tecnología educativa<br>
Instructor – Investigador<br>
Área de Gestión Administrativa y Documental<br>
Centro de Gestión Administrativa y Fortalecimiento Empresarial SENA – CEGAFE<br>
lpcordoba87@misena.edu.co<br></P></DIV>
        
       
      </div>

      <div class="item" class="SLA text-center">
        <DIV id="SLAT"><h3>Diana Edith Santamaría Rodríguez</h3> <P>
Contadora Publica<br>
Esp. Planeación y gestión del desarrollo territorial<br>
Instructor – Investigador<br>
Instructor – Investigador<br>
Área de Gestión Administrativa y Documental<br>
Centro de Gestión Administrativa y Fortalecimiento Empresarial SENA – CEGAFE<br>
desantamaria@misena.edu.co<br>

            </P>
          </DIV>
      </div>
        <div class="item" class="SLA text-center">
        <DIV id="SLAT"><h3>Edilberto Corredor Niño</h3> <P>

Economista<br>
Esp. Finanzas públicas<br>
Esp. Gerencia en instituciones de seguridad social<br>
Instructor - Investigador<br>
Área de Gestión Administrativa y Documental<br>
Centro de Gestión Administrativa y Fortalecimiento Empresarial SENA – CEGAFE<br>
ecorredor9@misena.edu.co<br>
 </P>
            </DIV>

        
      </div>
        <div class="item" class="SLA text-center">
        <DIV id="SLAT">
<h3>Rocío Del Mar Rodríguez Parra</h3> <P>

Administradora de empresas<br>
Esp. Alta gerencia en mercadotecnia<br>
Mg. Administración de organizaciones<br>
Investigador<br>
Centro de Gestión Administrativa y Fortalecimiento Empresarial SENA - CEGAFE,<br>
rociodelmar_rp@misena.edu.co<br>
           
           
            </P>
            </DIV>
      </div>
<div class="item" class="SLA text-center">
        <DIV id="SLAT">
<h3>Boris Ferney Bernal</h3> <P>


Administrador de empresas<br>
Esp. Gerencia de instituciones de seguridad en salud<br>
Instructor - Investigador<br>
Área de Gestión Administrativa y Documental<br>

Centro de Gestión Administrativa y Fortalecimiento Empresarial SENA – CEGAFE<br>
bfbernal4@misena.edu.co<br>
           
           
            </P>
            </DIV>
      </div>
      <div class="item" class="SLA text-center">
        <DIV id="SLAT">
<h3>Wilson Montes Suarique</h3> <P>


  
Ingeniero electrónico<br>
Tecnólogo en análisis y desarrollo de sistemas de información <br>
Especialista tecnólogico en aplicaciones para dispositivos móviles<br>
Investigador<br>
Área de sistemas<br>
Centro de Gestión Administrativa y Fortalecimiento Empresarial SENA-CEGAFE<br>
wmontes9@misena.edu.co<br>
           
           
            </P>
            </DIV>
      </div>
      <div class="item">
         <img src="{{url('images/innovem.png')}}" class="SLA" id="innovem" >
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</body>

  
    <button type="button" class="btn" data-toggle="modal" data-target="#myModal" style="margin-top: 20PX; margin-left: 60px; background-color: #238276; color: #FFFFFF;"><strong>AYUDA&nbsp;</strong><i class="fas fa fa-question"></i></button>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="modal-body">
            <p>Dentro del Plan de Acción 2014 del SENA, se encuentran lineamientos sobre la utilización de las tecnologías de la información y las comunicaciones, destinadas al proceso de enseñanza - aprendizaje, a través de la aplicación de softwares desarrollados por funcionarios, instructores, contratistas o aprendices, para contribuir con la formación y para que ésta sea más competitiva y eficaz.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-dismiss="modal" style="background-color: #238276; color:#FFFFFF">Cerrar</button>
          </div>
        </div>
      </div>
    </div>  
@endsection
<script type="text/javascript">
    var caution = false
    function setCookie(name, value, expires, path, domain, secure) {
    var curCookie = name + "=" + escape(value) +
    ((expires) ? "; expires=" + expires.toGMTString() : "") +
    ((path) ? "; path=" + path : "") +
    ((domain) ? "; domain=" + domain : "") +
    ((secure) ? "; secure" : "")
    if (!caution || (name + "=" + escape(value)).length <= 4000)
    document.cookie = curCookie
    else
    if (confirm("La cookie no puede pesar más de 4kb!"))
    document.cookie = curCookie
    }
    function getCookie(name) {
    var prefix = name + "="
    var cookieStartIndex = document.cookie.indexOf(prefix)
    if (cookieStartIndex == -1)
    return null
    var cookieEndIndex = document.cookie.indexOf(";", cookieStartIndex + prefix.length)
    if (cookieEndIndex == -1)
    cookieEndIndex = document.cookie.length
    return unescape(document.cookie.substring(cookieStartIndex + prefix.length, cookieEndIndex))
    }
    function deleteCookie(name, path, domain) {
    if (getCookie(name)) {
    document.cookie = name + "=" + 
    ((path) ? "; path=" + path : "") +
    ((domain) ? "; domain=" + domain : "") +
    "; expires=Thu, 01-Jan-70 00:00:01 GMT"
    }
    }
    function fixDate(date) {
    var base = new Date(0)
    var skew = base.getTime()
    if (skew > 0)
    date.setTime(date.getTime() - skew)
    }
    var now = new Date()
    fixDate(now)
    now.setTime(now.getTime() + 365 * 24 * 60 * 60 * 1000)
    var visits = getCookie("counter")
    if (!visits)
    visits = 1
    else
    visits = parseInt(visits) + 1
    setCookie("counter", visits, now)
    document.write("Esta es tu visita numero: " + visits)
  </script>
  