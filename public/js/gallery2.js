$(function(){
    $('.thumbnails a').click(function(){                                 // При нажатии на миниатюру
        var images = $(this).find('img');
        var imgSrc = images.attr('src');
        var imgTtl = images.attr('title');

        $(".big-image img").attr({ src: imgSrc });                         // Подменяем адрес большого изображения на адрес выбранного
        $(".big-image img").attr({ title: imgTtl });
        $(this).siblings('a').removeClass('active');                       // Удаляем класс .active со ссылки чтоб убрать рамку
        images.parent().addClass('active');                                // Добавляем класс .active на выбранную миниатюру
        return false;
    });

    $('.next').click(function(){                                         // При нажатии на кнопку "вперед"
        var count = $('.thumbnails a').length;                             // Общее количество изображений
        var n = parseInt($('.thumbnails a').index($('.active')) + 1);      // Порядковый номер текущего изображения
        var activeImg = $('.thumbnails .active');                          // Активное на данный момент изображение
        var nextSrc;
        var nextTitle;

        if (count != n){                                                   // - Если изображение не последнее
            nextSrc = activeImg.next().find('img').attr('src');              // В переменную записывается адрес следующего изображения
            nextTitle = activeImg.next().find('img').attr('title');
            $('.thumbnails .active').removeClass('active');                  // Удаляется класс .active с предыдущей миниатюры
            activeImg.next().addClass('active');                             // На миниатюру следующего изображения вешается класс .active
        }else{                                                             // - Если текущее изображение последнее в списке
            nextSrc = $('.thumbnails a').first().find('img').attr('src');    // В переменную записывается адрес первого изображения
            nextTitle = $('.thumbnails a').first().find('img').attr('title');
            $('.thumbnails .active').removeClass('active');                  // Удаляется класс .active с предыдущей миниатюры
            $('.thumbnails a').first().addClass('active');                   // На первую миниатюру вешается класс .active
        }
        $('.big-image img').fadeOut("fast", function () {
            $('.big-image img').attr({ src: nextSrc });                        // Подменяем адрес большого изображения на адрес следующего
            $('.big-image img').attr({ title: nextTitle });
        });
        $('.big-image img').fadeIn("fast");
        return false;
    });


    $('.prev').click(function(){                                         // При нажатии на кнопку "назад"
        //var count = $('.thumbnails a').length;                             // Общее количество изображений
        var n = parseInt($('.thumbnails a').index($('.active')) + 1);      // Порядковый номер текущего изображения
        var activeImg = $('.thumbnails .active');                          // Активное на данный момент изображение
        var prevSrc;
        var prevTitle;

        if (n != 1){                                                       // - Если текущее изображение не первое
            prevSrc = activeImg.prev().find('img').attr('src');              // В переменную записывается адрес предыдущего изображения
            prevTitle = activeImg.prev().find('img').attr('title');
            $('.thumbnails .active').removeClass('active');                  // Удаляется класс .active активной до этого миниатюры
            activeImg.prev().addClass('active');                             // На миниатюру изображения слева вешается класс .active
        }else{                                                             // - Если текущее изображение первое
            prevSrc = $('.thumbnails a:last').find('img').attr('src');       // В переменную записывается адрес последнего изображения
            prevTitle = $('.thumbnails a:last').find('img').attr('title');
            $('.thumbnails .active').removeClass('active');                  // Удаляется класс .active с предыдущей миниатюры
            $('.thumbnails a:last').addClass('active');                      // На последнюю миниатюру вешается класс .active
        }
        $('.big-image img').fadeOut("fast", function () {
            $('.big-image img').attr({ src: prevSrc });                        // Подменяется адрес большого изображения на адрес следующего
            $('.big-image img').attr({ title: prevTitle });
        });
        $('.big-image img').fadeIn("fast");
        return false;
    });
})