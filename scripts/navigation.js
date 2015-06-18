/* 
*
*/

var home = true;
var animationSpeed = 750;
var oldSlideshowHeight;

$(document).ready( function() {
    
    //Load home-page
    $('#home').load('home.php');
    $(window).resize();
    
    var current = 00;
    var navactive = false;
    $('#mainnav li').click( function() {
        if(!navactive) {
            //Clicked link
            var link = $(this).text().toLowerCase();

            //Append new page in #mainpage.
            $('#mainpage').append('<div id="'+link+'" class="page newpage"></div>');

            //Load text from file.
            $('#'+link).load(link+'.php');
            
            var nextnumber = $(this).position().left;
            var slideshowHeight = $('#slideshow img').height();  //Height of slideshow (jumbotron/header).
            console.log(oldSlideshowHeight);
            oldSlideshowHeight = slideshowHeight;       //Height of slideshow before switching page
            console.log(oldSlideshowHeight);

            //Check if clicked page is different than current page
            if(nextnumber != current) {
                navactive = true;
                
                //Check if page is homepage.
                if(nextnumber == 0) {
                    home = true;
                    $('#logo img').dequeue()
                                    .animate({ width : slideshowHeight,
                                             left : '65%',
                                             top : $('#mainnav').offset().top / 2 - $('#logo img').height() / 2
                                             }, animationSpeed);
                
                } else {
                    home = false;
                    slideshowHeight = slideshowHeight / 1.5;
                    $('#logo img').css('left', $('#logo img').position().left);
                    $('#logo img').dequeue()
                                    .animate({ width : slideshowHeight * 0.75,
                                             left : $(window).width() * 0.1,
                                             top : $('#mainnav').offset().top / 2 - $('#logo img').height() / 2
                                             }, animationSpeed);
                }
                
                //Animate #mainnav, the slideshow and the previous page.
                $('#mainnav').animate({ top : slideshowHeight }, animationSpeed); 
                $('#jumbotron').animate({ height : slideshowHeight }, animationSpeed);
                $('.active-page').animate({ top: slideshowHeight + $('#mainnav').height() }, animationSpeed);
                
                //Animate left
                if(nextnumber > current) {
                    var width = $('.active-page').width();
                    $('body').css('overflow-x', 'hidden');
                    $('.active-page').dequeue()
                                .width(width)
                                .animate({ left: '-100%'}, animationSpeed, function() {
                                $('body').css('overflow-x', 'initial');
                                $(this).remove();
                    });
                    $('.page').css('top', oldSlideshowHeight + $('#mainnav').outerHeight(true));
                    $('.page').css('margin-top', $('#mainnav').height());
                    $('.newpage').css('left', '100%')
                                .width(width)
                                .dequeue()
                                .animate({ left: 0,
                                            top: slideshowHeight + $('#mainnav').outerHeight(true) 
                                            }, animationSpeed, function() {
                                $(this).addClass('page')
                                        .addClass('active-page')
                                        .removeClass('newpage');
                                current = nextnumber;
                                navactive = false;
                                $(window).resize();
                    });
                } 
                //Animate right
                else if(nextnumber < current) {
                    var width = $('.active-page').width();
                    $('body').css('overflow-x', 'hidden');
                    $('.active-page').dequeue()
                                .width(width)
                                .animate({ left: '100%',
                                            top: slideshowHeight + $('#mainnav').outerHeight(true)
                                            }, animationSpeed, function() {
                                $('body').css('overflow-x', 'initial');
                                $(this).remove();
                    });
                    console.log($('.active-page').position().top);
                    $('.page').css('top', oldSlideshowHeight + $('#mainnav').outerHeight(true));
                    $('.page').css('margin-top', $('#mainnav').height());
                    $('.newpage').css('left', '-100%')
                                .width(width)
                                .dequeue()
                                .animate({ left: 0,
                                            top: slideshowHeight + $('#mainnav').outerHeight(true)
                                            }, animationSpeed, function() {
                                $(this).addClass('page')
                                        .addClass('active-page')
                                        .removeClass('newpage');
                                current = nextnumber;
                                navactive = false;
                                $(window).resize();
                    });
                }
            }
        
        }
    });
});