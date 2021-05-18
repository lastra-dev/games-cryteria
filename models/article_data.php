<?php
class Article_data
{

  public function __construct()
  {
    $this->article1 = new Article();
    $this->article1->id = 0;
    $this->article1->title = "Juegos que Marcaron Infancias";
    $this->article1->image = "https://i.imgur.com/jQp4gVl.jpg";
    $this->article1->description = "En muchos de nosotros los juegos forman una parte de nuestras vidas, por eso te traemos Juegos que recordaras con Nostalgia.";
    $this->article1->keywords = "Super Mario 64, Metal Slug, Contra, Mega-Man, Street Figter, Game Blog, Blog de Juegos";
    $this->article1->author = "Eduardo Daniel Hernández Flores";
    $this->article1->body = "
<br>
<p>En muchos de nosotros los juegos forman una parte de nuestras vidas, incluso 
muchos de nosotros recordamos algunos juegos con gran nostalgia, ya que posiblemente
 fue nuestro primer juego o uno de los primeros los cuales nos lleno que horas y
 horas de diversión al poder jugarlo, por eso te traemos Juegos que recordaras con Nostalgia. </p>
<br>
<h3>Super Mario 64</h3>
<br>
<p>Super Mario 64 fue un buen impulso para la era 3D en los videojuegos, con 
unos gráficos que para la época fueron revolucionarios y que a más de unos nos
 dejo con la boca abierta, pudimos disfrutar de un maravilloso juego lleno de 
desafíos, acertijos y una increíble jugabilidad.</p>
<br>
<h3>Metal Slug</h3>
<br>
<p>Aunque es una de juegos un tanto reciente, más de uno recordara estos juegos
 con gran nostalgia y por sus característicos emotes al rescatar a los
 sobrevivientes, también con una cantidad de diversión muy completa y comedia implícita.</p>
<br>
<h3>Contra</h3>
<br>
<p>Un gran juego de acción con mucho reto de por medio, juego que muchos recordaran
 por su gran jugabilidad y que más de uno sufrió al jugarlo, ya que tenia un
 nivel de dificultad un poco alto para los juegos de la época-.</p>
<br>
<h3>Mega-Man</h3>
<br>
<p>Mega-man una gran saga de videojuegos con mucha acción y horas y horas de 
diversión, un título plataformero que le brindo diversión interminable a más
 de uno con sus colores y trabajo artístico que llamaba la atención.</p>
<br>
<h3>Street Fighter</h3>
<br>
<p>Una saga de videojuegos de peleas amada por muchos jugadores y que más de 
uno lo recordara con gran nostalgia, un titulo que te entregaba horas incontables
 de diversión y retos a la hora de hacer combos y diferentes movimientos para
 salir victorioso a tu siguiente encuentro.</p>
";

    $this->article2 = new Article();
    $this->article2->id = 1;
    $this->article2->title = "¿Qué representan los videojuegos hoy en día?";
    $this->article2->image = "https://i.imgur.com/QA5aG6j.jpg";
    $this->article2->description = "Los videojuegos ya no son solo un método de entretenimiento, han evolucionado y ahora existen en distintas áreas.";
    $this->article2->keywords = "Educación, Psicología, Ambientes Empresariales, Arquitectura, videojuegos, games blog, rating";
    $this->article2->body = "
<br>
<p>“Un videojuego es una aplicación interactiva orientada al entretenimiento
 que a través de ciertos mandos o controles permite simular experiencias en la
 pantalla de un televisor, un ordenador u otro dispositivo electrónico.”</p>
<br>
<p>Como se menciona en la anterior definición los videojuegos son aplicaciones
 interactivas que hoy en día no son solo pensadas para los niños y adolescentes,
 si no que hoy en día se han convertido en una industria muy grande a nivel
 mundial, ya sea por el siempre hecho de su creación y venta, si no que también
 por su potencia para convertirse en los llamados “e-sports”.</p>
<br>
<p>Los videojuegos ya no son simplemente un método de entretenimiento, si no que
 han evolucionado y ahora se tienen nuevas aplicaciones para los mismos en áreas,
 por ejemplo:</p>
<br>
<ul id='list'>
<li>Educación</li>
<li>Psicologia</li>
<li>Ambientes empresariales</li>
<li>Arquitectura</li>
</ul>
<br>
<p>No solo esto si no que como mencione antes los e-sports son un gran mercado
 hoy en día, que es importante por el hecho de que algunos eventos relacionados
 con videojuegos mueven grandes cantidades tanto de personas como de dinero, y
 cada vez más empresas o personas se ven interesadas por los videojuegos.</p>
<br>
<p>En resumen los videojuegos hoy en día tienen un gran impacto en la sociedad, no
 solo con aquellas personas que los consumen, si no con aquellas otras que de 
cierta forma se ven atraídas a ellos, y cada vez más personas se ven atraídas 
por este mundo de los videojuegos y aquello que nos ofrecen.</p>
";
    $this->articles = array($this->article1, $this->article2);
  }
}
