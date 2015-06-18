/* 
*
*/
$(document).ready( function() {
    
    $('#home').load('home.php');
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

            if(nextnumber != current) {
                navactive = true;
                //Animate left
                if(nextnumber > current) {
                    var width = $('.active-page').width();
                    $('body').css('overflow-x', 'hidden');
                    $('.active-page').dequeue()
                                .width(width)
                                .animate({ left: '-100%' }, 750, function() {
                                $('body').css('overflow-x', 'initial');
                                $(this).remove();
                    });
                    $('.page').css('top', slideshowHeight + $('#mainnav').outerHeight(true));
                    $('.page').css('margin-top', $('#mainnav').height());
                    $('.newpage').css('left', '100%')
                                .width(width)
                                .dequeue()
                                .animate({ left: 0 }, 750, function() {
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
                                .animate({ left: '100%' }, 750, function() {
                                $('body').css('overflow-x', 'initial');
                                $(this).remove();
                    });
                    $('.page').css('top', slideshowHeight + $('#mainnav').outerHeight(true));
                    $('.page').css('margin-top', $('#mainnav').height());
                    $('.newpage').css('left', '-100%')
                                .width(width)
                                .dequeue()
                                .animate({ left: 0 }, 750, function() {
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