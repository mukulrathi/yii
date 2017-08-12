
// Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });


$(document).ready(function() {

    $(".owl-carousel").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]

    });

});
// ends here
// select button

     (function ( $ ) {
  var elActive = '';
    $.fn.selectCF = function( options ) {
 
        // option
        var settings = $.extend({
            color: "#666", // color
            backgroundColor: "#f7f7f7", // background
      change: function( ){ }, // event change
        }, options );
 
        return this.each(function(){
      
      var selectParent = $(this);
        list = [],
        html = '';
        
      //parameter CSS
      var width = $(selectParent).width();
      
      $(selectParent).hide();
      if( $(selectParent).children('option').length == 0 ){ return; }
      $(selectParent).children('option').each(function(){
        if( $(this).is(':selected') ){ s = 1; title = $(this).text(); }else{ s = 0; }
        list.push({ 
          value: $(this).attr('value'),
          text: $(this).text(),
          selected: s,
        })
      })
      
      // style
      var style = " background: "+settings.backgroundColor+"; color: "+settings.color+" ";
      
      html += "<ul class='selectCF'>";
      html +=   "<li>";
      html +=     "<span class='arrowCF fa fa-chevron-right' style='"+style+"'></span>";
      html +=     "<span class='titleCF' style='"+style+"; width:"+width+"px'>"+title+"</span>";
      html +=     "<span class='searchCF' style='"+style+"; width:"+width+"px'><input style='color:"+settings.color+"' /></span>";
      html +=     "<ul>";
      $.each(list, function(k, v){ s = (v.selected == 1)? "selected":"";
      html +=       "<li value="+v.value+" class='"+s+"'>"+v.text+"</li>";})    
      html +=     "</ul>";
      html +=   "</li>";
      html += "</ul>";
      $(selectParent).after(html);
      var customSelect = $(this).next('ul.selectCF'); // add Html
      var seachEl = $(this).next('ul.selectCF').children('li').children('.searchCF');
      var seachElOption = $(this).next('ul.selectCF').children('li').children('ul').children('li');
      var seachElInput = $(this).next('ul.selectCF').children('li').children('.searchCF').children('input');
      
      // handle active select
      $(customSelect).unbind('click').bind('click',function(e){
        e.stopPropagation();
        if($(this).hasClass('onCF')){ 
          elActive = ''; 
          $(this).removeClass('onCF');
          $(this).removeClass('searchActive'); $(seachElInput).val(''); 
          $(seachElOption).show();
        }else{
          if(elActive != ''){ 
            $(elActive).removeClass('onCF'); 
            $(elActive).removeClass('searchActive'); $(seachElInput).val('');
            $(seachElOption).show();
          }
          elActive = $(this);
          $(this).addClass('onCF');
          $(seachEl).children('input').focus();
        }
      })
      
      // handle choose option
      var optionSelect = $(customSelect).children('li').children('ul').children('li');
      $(optionSelect).bind('click', function(e){
        var value = $(this).attr('value');
        if( $(this).hasClass('selected') ){
          //
        }else{
          $(optionSelect).removeClass('selected');
          $(this).addClass('selected');
          $(customSelect).children('li').children('.titleCF').html($(this).html());
          $(selectParent).val(value);
          settings.change.call(selectParent); // call event change
        }
      })
        
      // handle search 
      $(seachEl).children('input').bind('keyup', function(e){
        var value = $(this).val();
        if( value ){
          $(customSelect).addClass('searchActive');
          $(seachElOption).each(function(){
            if( $(this).text().search(new RegExp(value, "i")) < 0 ) {
              // not item
              $(this).fadeOut();
            }else{
              // have item
              $(this).fadeIn();
            }
          })
        }else{
          $(customSelect).removeClass('searchActive');
          $(seachElOption).fadeIn();
        }
      })
      
    });
    };
  $(document).click(function(){
    if(elActive != ''){
      $(elActive).removeClass('onCF');
      $(elActive).removeClass('searchActive');
    }
  })
}( jQuery ));

$(function(){
  var event_change = $('#event-change');
  $( ".select" ).selectCF({
    change: function(){
      var value = $(this).val();
      var text = $(this).children('option:selected').html();
      console.log(value+' : '+text);
      event_change.html(value+' : '+text);
    }
  });
  $( ".test" ).selectCF({
    color: "#FFF",
    backgroundColor: "#663052",
  });
})


// ends here


// loader strt here


;(function(){
  function id(v){return document.getElementById(v); }
  function loadbar() {
    var ovrl = id("overlay"),
        prog = id("progress"),
        stat = id("progstat"),
        img = document.images,
        c = 0;
        tot = img.length;

    function imgLoaded(){
      c += 1;
      var perc = ((100/tot*c) << 0) +"%";
      prog.style.width = perc;
      stat.innerHTML = "Loading "+ perc;
      if(c===tot) return doneLoading();
    }
    function doneLoading(){
      ovrl.style.opacity = 0;
      setTimeout(function(){ 
        ovrl.style.display = "none";
      }, 1200);
    }
    for(var i=0; i<tot; i++) {
      var tImg     = new Image();
      tImg.onload  = imgLoaded;
      tImg.onerror = imgLoaded;
      tImg.src     = img[i].src;
    }    
  }
  document.addEventListener('DOMContentLoaded', loadbar, false);
}());

// when header scrolls down


$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $("header").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $("header").removeClass("active");
    }
  });

// ends here


// shop inner slider page 2 

    
  // responsive menus js

(function($){
  
  function getScrollbarWidth() {
    var scroll,
        noscroll;
    var outer = $("<div></div>"),
        inner = $("<div></div>");
    
    outer.css({
      width: "100px",
      visibility: "hidden",
      msOverflowStyle: "scrollbar"
    });
    
    $("body").append(outer);
    noscroll = outer.width();
    
    outer.css({overflow:"scroll"});
    inner.css({width:"100%"});
    outer.append(inner);        
    scroll = inner.width();

    //outer.remove();

    return noscroll - scroll;
  }
  
  $(".button-menu-res").click(function(){
    $(this).closest(".menu-container").toggleClass("active");
  });
  
  
  var scrollWidth = getScrollbarWidth();
  $(".menu-container").css({marginRight:-scrollWidth})
  $(".menu-res").css("width", "+="+scrollWidth);

})(jQuery);