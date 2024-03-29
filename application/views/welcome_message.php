<!DOCTYPE html>
 <!--  ##    #######  ##        ######## ##     ## ##    ## ######## ########    ###    ##     ## -->
 <!--####   ##     ## ##    ##  ##       ##     ## ###   ##    ##    ##         ## ##   ###   ### -->
 <!--  ##   ##     ## ##    ##  ##       ##     ## ####  ##    ##    ##        ##   ##  #### #### -->
 <!--  ##    ######## ##    ##  #######  ##     ## ## ## ##    ##    ######   ##     ## ## ### ## -->
 <!--  ##          ## #########       ##  ##   ##  ##  ####    ##    ##       ######### ##     ## -->
 <!--  ##   ##     ##       ##  ##    ##   ## ##   ##   ###    ##    ##       ##     ## ##     ## -->
 <!--######  #######        ##   ######     ###    ##    ##    ##    ######## ##     ## ##     ## -->
<?php defined('BASEPATH') or exit('No script access allowed') ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>For secial day...</title>
  <link rel="shortcut icon" href="favicon.png">
  <link href="<?php echo base_url() ?>static/css/section1.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>static/css/section2.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>static/css/section3.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>static/css/section4.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>static/css/section5.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.8.8/jquery.fullPage.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
  <audio loop="loop" autoplay="autoplay">
    <source src="<?php echo base_url() ?>music/music.mp3" type="audio/mpeg" />
    Your browser does not support the audio element.
  </audio>
  <div id="fullPage">
    <div class="section">
      <div id="app">
        <div class="quotes verticalcenter">
          <p class="q1">Đức Ý Production </p>
          <p class="q2">This is a special gift for you </p>
        
        </div>
        <div class="main-section">
          <div class="heart"></div>
          <div id="top">Chúc mừng sinh nhật</div>
          <div class="love">Bối Nhi</div>
          <div class="style">Nhớ kéo xuống để xem nhé <3</div>
        </div>
      </div>
    </div>
    <div class="section">
      <!--Ảnh chỉnh sửa tại static/JS/section2.js dòng 2602 và 6909 -->
      <div id="content" class="content"></div>
    </div>
    <div class="section section4">
      <div class="paper">
        <div class="lines">
          <!--Viết lời nhắn nhủ ở slide 4 vào đây-->
          <div class="text" spellcheck="true">
           Mừng cậu xuân 18 <br>
            <span class='sentence sentence1'>    Ngày này 18 năm về trước, một cô bé  đã khóc thật nhiều để chào đón mình ra đời</span>
            <br />
            <span class='sentence sentence2'>    Và ngày hôm nay cô bé ấy chính là cậu, cậu hãy mỉm cười thật nhiều nhé để thấy rằng từng giây, từng phút đều mang lại hạnh phúc cho cậu</span>
            <br />
            <span class='sentence sentence3'>    Và tớ, tớ muốn nói với cậu rằng: chúc cậu sinh nhật vui vẻ và thành công trong tuổi mới!</span>
            <br />
            <span class='sentence sentence4'>    Xin chúc mừng sinh nhật của một trong những công dân xinh đẹp, mỹ miều, kiêu sa yêu kiều nhất trên quả đất này</span>
            <br />
            <span class='sentence sentence5'></span>
            <br />
            <span class='sentence sentence6'></span>
            <br />
            <span class='sentence sentence7'></span>
            <br />
            <span class='sentence sentence8'></span>
            <br />
            <span class='sentence sentence9'></span>
            <br />
            <span class='sentence sentence10'></span>
          </div>
        </div>
        <div class="holes hole-top"></div>
        <div class="holes hole-middle"></div>
        <div class="holes hole-bottom"></div>
      </div>
    </div>
    <div class="section section5">
      <div id="wrapper">
        <div id="candle-1" class="candle small">
          <div class="eye"></div>
          <div class="eye"></div>
          <div class="flame"></div>
        </div>
         <div class="flame-halo"></div>
        <div id="candle-2" class="candle">
          <div class="eye"></div>
          <div class="eye"></div>
          <div class="mouth"></div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.8.2/jquery.fullPage.min.js"></script>
  <script src='http://css-tricks.com/examples/BlurredText/js/jquery.lettering.js'></script>
  <script src="static/js/section2.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.4/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      var t1 = new TimelineMax({
        repeat: -1
      });

      $('#fullPage').fullpage({
        afterLoad: function(link, index){
          switch (index){
              
            case 3:
              if(($(".sentence1").html() === '') || ($(".sentence10").html() !== '')) {
                
                $(".sentence").empty();
                $('.typed-cursor').remove();

                $(".sentence1").typed({
                  strings: ["Chúc mừng sinh nhật"],
                  typeSpeed: 300,
                  backSpeed: 100,
                  cursorChar: "♡",
                  loop: false,
                  callback: function() {
                    $(".sentence2").typed({
                      strings: ["Thiên thần bé nhỏ"],
                      startDelay: 1000,
                      typeSpeed: 300,
                      backSpeed: 100,
                      cursorChar: "♡",
                      callback: function() {
                        $(".sentence3").typed({
                          strings: ["Hãy nhớ sống tốt(￣ˇ￣)"],
                          startDelay: 1000,
                          typeSpeed: 300,
                          backSpeed: 100,
                          cursorChar: "♡",
                          callback: function() {
                            $(".sentence4").typed({
                              strings: ["Sống ôn hòa, sống tốt đẹp"],
                              startDelay: 1000,
                              typeSpeed: 300,
                              backSpeed: 100,
                              cursorChar: "♡",
                              callback: function() {
                                $(".sentence5").typed({
                                  strings: ["Best wish for you", "Forever"],
                                  startDelay: 1000,
                                  typeSpeed: 300,
                                  backSpeed: 100,
                                  cursorChar: "♡",
                                  callback: function() {
                                    $(".sentence6").typed({
                                      strings: ["Hãy nhớ sống tốt (=￣ω￣=)"],
                                      startDelay: 1000,
                                      typeSpeed: 300,
                                      backSpeed: 100,
                                      cursorChar: "♡",
                                      callback: function() {
                                        $(".sentence7").typed({
                                          strings: ["Sống ôn hòa"],
                                          startDelay: 1000,
                                          typeSpeed: 300,
                                          backSpeed: 100,
                                          cursorChar: "♡",
                                          callback: function() {
                                            $(".sentence8").typed({
                                              strings: ["Và cuối cùng"],
                                              startDelay: 1000,
                                              typeSpeed: 300,
                                              backSpeed: 100,
                                              cursorChar: "♡",
                                              callback: function() {
                                                $(".sentence9").typed({
                                                  strings: ["Chúc mừng sinh nhật"],
                                                  startDelay: 1000,
                                                  typeSpeed: 300,
                                                  backSpeed: 100,
                                                  cursorChar: "♡",
                                                  callback: function() {
                                                    $(".sentence10").typed({
                                                      strings: ["Bối nhi <-->"],
                                                      startDelay: 1000,
                                                      typeSpeed: 300,
                                                      backSpeed: 100,
                                                      cursorChar: "♡",
                                                    });
                                                  }
                                                });
                                              }
                                            });
                                          }
                                        });
                                      }
                                    });
                                  }
                                });
                              }
                            });
                          }
                        });
                      }
                    });
                  }
                });
              }
              
              break;

            case 4:

              c1 = $('#candle-1'),
              c2 = $('#candle-2'),
              f = c1.find('.flame'),
              m = c2.find('.mouth'),

              fTween = TweenMax.to(f, 0.3, {
                width: 27,
                backgroundColor: 'yellow',
                repeat: -1,
                yoyo: true
              });

              if((t1.progress() > 0) && (t1.progress() < 1))
              {
                t1.progress(0);
              }
              else
              {
                t1.add(
                  [
                    TweenMax.to(c2, 0.1, {
                      scale: 1.2,
                      transformOrigin: "center bottom"
                    }),
                    TweenMax.to(m, 0.7, {
                      scale: 5,
                      transformOrigin: "center center",
                      force3D: false
                    })
                  ]
                ).add(
                  [
                    TweenMax.to(c2, 0.7, {
                      scale: 1,
                      transformOrigin: "center bottom"
                    }),
                    TweenMax.to(m, 0.7, {
                      scale: 1.1,
                      transformOrigin: "center center",
                      force3D: false
                    })
                  ]
                ).to(m, 1, {
                  width: 100,
                  borderRadius: 0,
                  x: -300,
                  autoAlpha: 0
                }, 1.2)
                .to(c1, 0.3, {
                  x: -3,
                  repeat: 4,
                  yoyo: true
                }, 1.3)
                .to([f,'.flame-halo'], 0.1, {
                  autoAlpha: 0,
                  scale: 0.5
                }, 1.3)
                .add([
                  TweenMax.to(c1, 1, {
                    height: "-=20",
                    scaleX: 1.2,
                    backgroundColor: "#FFCCCC",
                    transformOrigin: "center center"
                  }),
                  TweenMax.to(c1.find('.eye'), 1, {
                    height: "-=5"
                  }),
                ])
                .to(c1, 0.2, {
                  x: "+=20",
                  repeat: 4,
                  yoyo: true
                }).add(
                  [
                    TweenMax.to(f, 0.2, {
                      autoAlpha: 1,
                      scale: 1.2
                    })

                  ]
                ).add(
                  [
                    TweenMax.to(c1, 0.5, {
                      height: "+=20",
                      scaleX: 1,
                      x: "-=20",
                    })

                  ]
                )
              }
              break;

            default:
              break;
          }
        },

        onLeave: function(link, index){
          switch (index){

            default:
              break;
          }
        }
      });

      $('.q1').delay(1000).fadeIn(300).delay(2000).fadeOut(300, function () {
        $('.q2').delay(1000).fadeIn(300 ).delay(2500).fadeOut(300, function () {
          $('.quotes').fadeOut(300);
          $('.main-section').delay(1000).fadeIn(300, function () {
            
          });
        });
      });
    });

    $('audio')[0].volume = 0.4;

    $("#top").lettering();
    $("#bottom").lettering();

  </script>
</body>
</html>