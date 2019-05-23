$(function(){
  var logoSizeFlg = 0;
  $(window)
    .on('scroll', scrollEventHandler)
    .on('load', rewirteURL);
  $(document)
    .on('click', '.staff_bt', staffButton)
    .on('click', '.course_bt', courseButton)
    .on('click', '.modal-close', modalClose)
    .on('click', '.modal-content-bg', modalClose)
    .on('click', '.sp-menu--lang', spMenuLang)
    .on('click', '.sp-menu', spMenu)
    .on('click', '.sp-menu-modal-shadow', spMenuClose)
    .on('click', '.sp-menu-modal', function(e){
      e.stopPropagation();
    }).on('click','.header-nav a, .sp-menu-modal a', pageScroll);

  var scrollAnimFlg = 0;
  function scrollEventHandler(){
    var scroll = $(window).scrollTop();

    if (scroll > 200) {
      $('.footer-reservation').addClass('display-block');
    } else {
      $('.footer-reservation').removeClass('display-block');
    }

    var ua = navigator.userAgent;
    if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0 || ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
      return;
    }
    if(scrollAnimFlg == 1){ return }
    scrollAnimFlg = 1;
    //logo setting
    // if(scroll > 160){
    //   if(logoSizeFlg == 0){
    //     $('.logo img').css({ 'width': '103px' }).on('transitionend',function(){
    //       $('.logo img').off();
    //       scrollAnimFlg = 0;
    //     });
    //     logoSizeFlg = 1;
    //   } else {
    //     scrollAnimFlg = 0;
    //   }
    // } else {
    //   if(logoSizeFlg == 1){
    //     $('.logo img').css({ 'width': '206px' }).on('transitionend',function(){
    //       $('.logo img').off();
    //       scrollAnimFlg = 0;
    //     });
    //     logoSizeFlg = 0;
    //   } else {
    //     scrollAnimFlg = 0;
    //   }
    // }
  }

  function staffButton(){
    var num = $(this).attr('data-num');
    var data = staffData[num];

    $elem = $('<div>').addClass('modal-shadow').css({'opacity':'0'}).append(
      $('<div>').addClass('modal-content-bg'),
      $('<div>').addClass('modal-close'),
      $('<div>').addClass('modal-content').append(
        $('<div>').addClass('modal-content-top-frame').append(
          $('<div>').addClass('modal-content-top-frame-img').append(
            $('<img>').attr('src', data.img)
          ),
          $('<div>').addClass('modal-content-top-frame-body').append(
            $('<div>').addClass('modal-content-title').text(data.title),
            $('<div>').addClass('modal-content-name').html(data.name + '<span>' + data.nameA +  '</span>')
          )
        )
      )
    );
    if(typeof data.treatment !== 'undefined'){
      $elem.find('.modal-content-top-frame-body').append(
        $('<div>').addClass('modal-content-stp').append(
          $('<dl>').append(
            $('<dt>').text(specialty),
            $('<dd>').html(data.treatment.replace(/\r?\n/g, '<br>'))
          )
        )
      )
    }
    $.each(data, function(k, v){
      switch(k){
        case 'strong':
          $elem.find('.modal-content').append(
            $('<div>').addClass('modal-content-text').append(
              $('<div>').addClass('modal-content-text').html(data.strong.replace(/\r?\n/g, '<br>'))
            )
          );
        break;

        case 'trigger':
          $elem.find('.modal-content').append(
            $('<div>').addClass('modal-content-text').append(
              $('<h3>').append($('<span>').text(itemName[0])),
              $('<div>').addClass('modal-content-text').html(data.trigger.replace(/\r?\n/g, '<br>'))
            )
          );
        break;

        case 'thought':
          $elem.find('.modal-content').append(
            $('<div>').addClass('modal-content-text').append(
              $('<h3>').append($('<span>').text(itemName[1])),
              $('<div>').addClass('modal-content-text').html(data.thought.replace(/\r?\n/g, '<br>'))
            )
          );
        break;

        case 'memories':
          $elem.find('.modal-content').append(
            $('<div>').addClass('modal-content-text').append(
              $('<h3>').append($('<span>').text(itemName[2])),
              $('<div>').addClass('modal-content-text').html(data.memories.replace(/\r?\n/g, '<br>'))
            )
          );
        break;

        case 'greeting':
          $elem.find('.modal-content').append(
            $('<div>').addClass('modal-content-text').append(
              $('<h3>').append($('<span>').text(itemName[3])),
              $('<div>').addClass('modal-content-text').html(data.greeting.replace(/\r?\n/g, '<br>'))
            )
          );
        break;

        default:
        break;
      }
    });
    $elem.find('.modal-content').append($('<div>').addClass('modal-close modal-close--sp'));

    var scrollbarWidth = window.innerWidth - document.body.clientWidth;
    $('html').css({
      'overflow': 'hidden',
      'padding-right': scrollbarWidth + 'px'
    });
    $('.header').css({
      'left': '-' + (scrollbarWidth / 2) + 'px'
    });
    $('body').append($elem);
    setTimeout(function(){
      $('.modal-shadow').css({'opacity':'1'}).on('transitionend', function(){ $('.modal-shadow').off(); });
    },50);
  }

  function courseButton(){
    var num = $(this).attr('data-num');
    var course_data = courseData[num];
    $elem = $('<div>').addClass('modal-shadow').css({'opacity':'0'}).append(
      $('<div>').addClass('modal-content-bg'),
      $('<div>').addClass('modal-close'),
      $('<div>').addClass('modal-content-course').append(
        $('<div>').addClass('modal-content-course-top-frame').append(
          $('<div>').addClass('modal-content-course-top-frame-img').append(
            $('<img>').attr('src', course_data.img)
          ),
          $('<div>').addClass('modal-content-course-top-frame-body').append(
            $('<div>').addClass('modal-content-course-title').text(course_data.genre),
            $('<div>').addClass('modal-content-course-name').html(course_data.name),
            $('<div>').addClass('modal-content-course-description').html(course_data.description),
            $('<div>').addClass('modal-content-course-price').html(course_data.price),
            $('<div>').addClass('modal-content-course-price-detail').html(course_data.price_detail),
          )
        )
      )
    );

    if(typeof course_data.caution !== 'undefined'){
      $elem.find('.modal-content-course-top-frame-body').append(
        $('<div>').addClass('modal-content-course-caution').append(
          $('<dl>').append(
            $('<dt>').addClass('modal-content-course-caution-headline').text(caution),
            $('<dd>').addClass('modal-content-course-caution-content').html(course_data.caution.replace(/\r?\n/g, '<br>'))
          )
        )
      )
    }

    if(typeof course_data.example !== 'undefined'){
      $elem.find('.modal-content-course-top-frame-body').append(
        $('<div>').addClass('modal-content-course-example').append(
          $('<dl>').append(
            $('<dt>').addClass('modal-content-course-example-headline').text(example),
            $('<dd>').addClass('modal-content-course-example-content').html(course_data.example.replace(/\r?\n/g, '<br>'))
          )
        )
      )
    }

    $elem.find('.modal-content-course').append($('<div>').addClass('modal-close modal-close--sp'));
    var scrollbarWidth = window.innerWidth - document.body.clientWidth;
    $('html').css({
      'overflow': 'hidden',
      'padding-right': scrollbarWidth + 'px'
    });
    $('.header').css({
      'left': '-' + (scrollbarWidth / 2) + 'px'
    });
    $('body').append($elem);
    setTimeout(function(){
      $('.modal-shadow').css({'opacity':'1'}).on('transitionend', function(){ $('.modal-shadow').off(); });
    },50);
  }

  function modalClose(){
    $('.modal-shadow').css({'opacity':'0'}).on('transitionend', function(){
      $('.modal-shadow').off();
      $(this).remove();
      $('html').css({
        'overflow': 'auto',
        'padding-right': '0'
      });
      $('.header').css({
        'left': '0'
      });
    });
  }

  var spMenuAnimFlg = 0;
  function spMenu(){
    var path = location.pathname;
    if(spMenuAnimFlg == 1){ return; }
    if($('.sp-menu').hasClass('sp-menu--on')){
      spMenuClose();
    } else {
      spMenuAnimFlg = 1;
      $('.sp-menu').addClass('sp-menu--on');
      var $elem = $('body').append(
        $('<div>').addClass('sp-menu-modal-shadow').append(
          $('<div>').addClass('sp-menu-modal').append(
            $('<ul>').append(
              $('<li>').append(
                (path == "/") ? $('<a>').attr('href','#top').text('TOP') : $('<a>').attr('href','/#top').text('TOP')
              ),
              $('<li>').append(
                path == "/" ? $('<a>').attr('href','#section1').text('ABOUT') : $('<a>').attr('href','/#section1').text('ABOUT')
              ),
              $('<li>').append(
                path == "/" ? $('<a>').attr('href','#section2').text('STORY') : $('<a>').attr('href','/#section2').text('STORY')
              ),
              $('<li>').append(
                path == "/" ? $('<a>').attr('href','#section3').text('COURSE&PRICE') : $('<a>').attr('href','/#section3').text('COURSE&PRICE')
              ),
              $('<li>').append(
                path == "/" ? $('<a>').attr('href','#section4').text('RESERVATION') : $('<a>').attr('href','/#section4').text('RSERVATION')
              ),
              $('<li>').append(
                path == "/" ? $('<a>').attr('href','#section5').text('ITEM LIST') : $('<a>').attr('href','/#section5').text('ITEM LIST'),
                $('<ul>').addClass('sp_subnav').append(
                  $('<li>').append(
                    $('<form>').attr({action:'/product/product_list.php',method:'get'}).append(
                      $('<input>').attr({type:'hidden',name:'category',value:'japanese'}),
                      $('<input>').attr({type:'submit',value:''}),
                      $('<p>').text('美容商材')
                    )
                  ),
                  $('<li>').append(
                    $('<form>').attr({action:'/product/product_list.php',method:'get'}).append(
                      $('<input>').attr({type:'hidden',name:'category',value:'basicskincare'}),
                      $('<input>').attr({type:'submit',value:''}),
                      $('<p>').text('基礎化粧品')
                    )
                  ),
                  $('<li>').append(
                    $('<form>').attr({action:'/product/product_list.php',method:'get'}).append(
                      $('<input>').attr({type:'hidden',name:'category',value:'tea'}),
                      $('<input>').attr({type:'submit',value:''}),
                      $('<p>').text('お茶')
                    )
                  ),
                  $('<li>').append(
                    $('<form>').attr({action:'/product/product_list.php',method:'get'}).append(
                      $('<input>').attr({type:'hidden',name:'category',value:'supplement'}),
                      $('<input>').attr({type:'submit',value:''}),
                      $('<p>').text('サプリメント')
                    )
                  ),
                )
              ),
              $('<li>').append(
                path == "/" ? $('<a>').attr('href','#section6').text('OTHER INFORMATION') : $('<a>').attr('href','/#section6').text('OTHER INFORMATION')
              ),
              $('<li>').append($('<a>').attr({href: 'https//1cs.jp/jyo1120/n', target: '_blank'}).text('Web予約はこちら'))
            )
          )
        )
      );
      $('body').append($elem);
      setTimeout(function(){
        $('.sp-menu-modal-shadow').addClass('sp-menu-modal-shadow--open');
        $('.sp-menu-modal').addClass('sp-menu-modal--on').on('transitionend',function(){
          $('.sp-menu-modal').off();
          spMenuAnimFlg = 0;
        });
      },50);
    }

  }
  function spMenuClose(){
    spMenuAnimFlg = 1;
    $('.sp-menu').removeClass('sp-menu--on');
    $('.sp-menu-modal-shadow').removeClass('sp-menu-modal-shadow--open');
    $('.sp-menu-modal').removeClass('sp-menu-modal--on').on('transitionend',function(){
      $('.sp-menu-modal').off();
      $('.sp-menu-modal-shadow').removeClass('sp-menu-modal-shadow--open').on('transitionend',function(){
        $('.sp-menu-modal').off();
        $('.sp-menu-modal-shadow').remove();
        spMenuAnimFlg = 0;
      });
    });
  }

  function pageScroll(e){
    var path = location.pathname;
    console.log(path);
    if(path == "/"){
      e.preventDefault();
      var ua = navigator.userAgent;
      if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0 || ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
        var num = 80.5;
      } else {
        var num = 128;
      }
      var id = $(this).attr('href');
      if(id == '#top'){
        $("html,body").animate({scrollTop:0}, 300, 'swing');
      } else {
        $("html,body").animate({scrollTop:parseInt($(id).offset().top) - num - 16}, 300, 'swing');
      }
      $('.sp-menu').removeClass('sp-menu--on');
      $('.sp-menu-modal-shadow').removeClass('sp-menu-modal-shadow--open');
      $('.sp-menu-modal').removeClass('sp-menu-modal--on').on('transitionend',function(){
        $('.sp-menu-modal').off();
        $('.sp-menu-modal-shadow').removeClass('sp-menu-modal-shadow--open').on('transitionend',function(){
          $('.sp-menu-modal').off();
          $('.sp-menu-modal-shadow').remove();
          spMenuAnimFlg = 0;
        });
      });
    }
  }

  function rewirteURL(){
    var path = location.pathname;
    if(path == '/'){
      history.replaceState('hogehoge_state', '', '/')
    }
  }

  function spMenuLang() {
    $('.lang').toggleClass('active');
  }
});
