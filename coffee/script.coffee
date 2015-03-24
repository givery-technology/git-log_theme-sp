$ ->
  $(".sidebar").fadeOut(0)
  $("#naviopen").click ->
    if $(this).hasClass("active")
      $(this).removeClass("active")
      $(".sidebar").fadeOut(150)
      $(".wrapper, .footer").css
        "-webkit-filter": "blur(0px)"
        "filter": "blur(0px)"
    else
      $(this).addClass("active")
      $(".sidebar").fadeIn(150)
      $(".wrapper, .footer").css
        "-webkit-filter": "blur(5px)"
        "filter": "blur(5px)"
