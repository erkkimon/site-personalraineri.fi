$(window).scroll(function()
  {
    
    // Home section's parallax effect
    
    if ($(window).width() > 1000)
    {
      var scrollPos = $(document).scrollTop();
      $("#bg").css("top", -scrollPos/3+"px");
    }
    
    var horizontalNaviHeight = 100;
    var distanceToPageTop = $(document).scrollTop();
    var homeSectionHeight = $("#home").height();
    var toggleNaviFixValue = distanceToPageTop - homeSectionHeight + horizontalNaviHeight;
    console.log(toggleNaviFixValue);
    if (toggleNaviFixValue > 1)
    {
      $("#desktop-navi").css("position", "fixed");
      $("#desktop-navi").css("bottom", "auto");
      $("#desktop-navi").css("top", "100px");
    }
    else
    {
      $("#desktop-navi").css("position", "static");
      $("#desktop-navi").css("margin-top", "-100px");
    }
    
  }); 
