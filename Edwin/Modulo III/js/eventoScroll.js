function fijarMenu(){
  var $menu; var $posicionScroll;
  $menu=document.getElementById("menu");

  $posicionScroll= document.body.scrollTop || window.pageYOffset || document.documentElement.scrollTop;
  if ($posicionScroll>=100){
    $menu.style.position="fixed";
    $menu.style.top="0px";
  }
  else
    $menu.style.position="relative";
}
