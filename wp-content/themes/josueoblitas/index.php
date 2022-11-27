
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- SE MUESTRA EL CONTENIDO DEL POST -->
 
            <div class="card mb-4">
         
            <div class="card-body">
                <h2 class="card-title">Post Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on January 1, 2017 by
                <a href="#">Start Bootstrap</a>
            </div>
            </div>
            
            <!--
                AQUI VA EL HTML Y PHP DE LOS POSTS DEL HOME
             -->
       
        <?php endwhile; else : ?>
            <!-- SI NO SE CONSIGUE NINGÚN POST, SE RETORNA UN MENSAJE: -->
            <p>Lo siento, no hemos encontrado ningún post.</p>
 
        <?php endif; ?>
           <!-- SE DETIENE EL LOOP -->
