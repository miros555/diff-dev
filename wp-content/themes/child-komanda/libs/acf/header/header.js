(function($){
      $(document).ready(function(){
        $(".header-mobile .btn-menu").click(function(){
          $("body").addClass("noscroll");
          $("header").addClass("active");
          $(".header-mobile").addClass("active");
      });
      
      $("header .btn-close").click(function(){
          $("body").removeClass("noscroll");
          $("header").removeClass("active");
          $(".header-mobile").removeClass("active");
      });
    });
})(jQuery);