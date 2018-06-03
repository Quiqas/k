 <div class="clearfix"></div>
</div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
       <ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
    </div>
    <!-- Default to the left -->
    <strong> <a href="#">Kids TDAH</a>.</strong>
  </footer>

  
 
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?=$GLOBALS['COD']->dir?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=$GLOBALS['COD']->dir?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$GLOBALS['COD']->dir?>/assets/dist/js/adminlte.min.js"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/bower_components/ckeditor/ckeditor.js"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/dist/js/swiper.min.js"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script>
    $(document).ready(function(){
       $("img.lazy").lazyload({
            threshold : 200,
            effect : "fadeIn"
        });
       $("#botonmenu, #cerrar").click(function (){
            $(".menu-hidden-show").toggleClass("esconder-menu-hiden-show");
        });
       $.klAnimate();
    });
</script>
<script>
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    autoplay: {
    delay: 3000,
  },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    
  })
  </script>
  <script type="text/javascript">
    window._chatlio = window._chatlio||[];
    !function(){ var t=document.getElementById("chatlio-widget-embed");if(t&&window.ChatlioReact&&_chatlio.init)return void _chatlio.init(t,ChatlioReact);for(var e=function(t){return function(){_chatlio.push([t].concat(arguments)) }},i=["configure","identify","track","show","hide","isShown","isOnline", "page", "open", "showOrHide"],a=0;a<i.length;a++)_chatlio[i[a]]||(_chatlio[i[a]]=e(i[a]));var n=document.createElement("script"),c=document.getElementsByTagName("script")[0];n.id="chatlio-widget-embed",n.src="https://w.chatlio.com/w.chatlio-widget.js",n.async=!0,n.setAttribute("data-embed-version","2.3");
       n.setAttribute('data-widget-id','8f3528d4-43e2-443a-6649-28795f59202f');
       c.parentNode.insertBefore(n,c);
    }();
</script>
</body>
</body>
</html>