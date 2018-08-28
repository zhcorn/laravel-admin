/**
 * AdminLTE Demo Menu
 * ------------------
 * You should not use this file in production.
 * This file is for demo purposes only.
 */
(function ($) {
    'use strict'

    var $sidebar = $('.control-sidebar')
    var $container = $('<div />', {
        class: 'p-3'
    })

    $sidebar.append($container)

    var navbar_dark_skins = [
        'bg-primary',
        'bg-info',
        'bg-success',
        'bg-danger'
    ]

    var navbar_light_skins = [
        'bg-warning',
        'bg-white',
        'bg-gray-light'
    ]

    $container.append(
        '<h5>主题颜色修改</h5><hr class="mb-2"/>'
        + '<h6>导航栏颜色</h6>'
    )

    var $navbar_variants = $('<div />', {
        'class': 'd-flex'
    })
    var navbar_all_colors = navbar_dark_skins.concat(navbar_light_skins)
    var $navbar_variants_colors = createSkinBlock(navbar_all_colors, function (e) {
        var color = $(this).data('color')
        console.log('Adding ' + color)
        var $main_header = $('.main-header')
        $main_header.removeClass('navbar-dark').removeClass('navbar-light')
        navbar_all_colors.map(function (color) {
            $main_header.removeClass(color)
        })

        if (navbar_dark_skins.indexOf(color) > -1) {
            $main_header.addClass('navbar-dark')
            console.log('AND navbar-dark')
        } else {
            console.log('AND navbar-light')
            $main_header.addClass('navbar-light')
        }

        $main_header.addClass(color)
    })

    $navbar_variants.append($navbar_variants_colors)

    $container.append($navbar_variants)

    var $checkbox_container = $('<div />', {
        'class': 'mb-4'
    })
    var $navbar_border = $('<input />', {
        type: 'checkbox',
        value: 1,
        checked: $('.main-header').hasClass('border-bottom'),
        'class': 'mr-1'
    }).on('click', function () {
        if ($(this).is(':checked')) {
            $('.main-header').addClass('border-bottom')
        } else {
            $('.main-header').removeClass('border-bottom')
        }
    })
    $checkbox_container.append($navbar_border)
    $checkbox_container.append('<span>显示导航边线</span>')
    $container.append($checkbox_container)


    var sidebar_colors = [
        'bg-primary',
        'bg-warning',
        'bg-info',
        'bg-danger',
        'bg-success'
    ]

    var sidebar_skins = [
        'sidebar-dark-primary',
        'sidebar-dark-warning',
        'sidebar-dark-info',
        'sidebar-dark-danger',
        'sidebar-dark-success',
        'sidebar-light-primary',
        'sidebar-light-warning',
        'sidebar-light-info',
        'sidebar-light-danger',
        'sidebar-light-success'
    ]

    $container.append('<h6>暗色侧导航栏</h6>')
    var $sidebar_variants = $('<div />', {
        'class': 'd-flex'
    })
    $container.append($sidebar_variants)
    $container.append(createSkinBlock(sidebar_colors, function () {
        var color = $(this).data('color')
        var sidebar_class = 'sidebar-dark-' + color.replace('bg-', '')
        var $sidebar = $('.main-sidebar')
        sidebar_skins.map(function (skin) {
            $sidebar.removeClass(skin)
        })

        $sidebar.addClass(sidebar_class)
    }))

    $container.append('<h6>亮色侧导航栏</h6>')
    var $sidebar_variants = $('<div />', {
        'class': 'd-flex'
    })
    $container.append($sidebar_variants)
    $container.append(createSkinBlock(sidebar_colors, function () {
        var color = $(this).data('color')
        var sidebar_class = 'sidebar-light-' + color.replace('bg-', '')
        var $sidebar = $('.main-sidebar')
        sidebar_skins.map(function (skin) {
            $sidebar.removeClass(skin)
        })

        $sidebar.addClass(sidebar_class)
    }))

    var logo_skins = navbar_all_colors
    $container.append('<h6>LOGO 背景色</h6>')
    var $logo_variants = $('<div />', {
        'class': 'd-flex'
    })
    $container.append($logo_variants)
    var $clear_btn = $('<a />', {
        href: 'javascript:void(0)'
    }).text('clear').on('click', function () {
        var $logo = $('.brand-link')
        logo_skins.map(function (skin) {
            $logo.removeClass(skin)
        })
    })
    $container.append(createSkinBlock(logo_skins, function () {
        var color = $(this).data('color')
        var $logo = $('.brand-link')
        logo_skins.map(function (skin) {
            $logo.removeClass(skin)
        })
        $logo.addClass(color)
    }).append($clear_btn))

    function createSkinBlock(colors, callback) {
        var $block = $('<div />', {
            'class': 'd-flex flex-wrap mb-3'
        })

        colors.map(function (color) {
            var $color = $('<div />', {
                'class': (typeof color === 'object' ? color.join(' ') : color) + ' elevation-2'
            })

            $block.append($color)

            $color.data('color', color)

            $color.css({
                width: '40px',
                height: '20px',
                borderRadius: '25px',
                marginRight: 10,
                marginBottom: 10,
                opacity: 0.8,
                cursor: 'pointer'
            })

            $color.hover(function () {
                $(this).css({opacity: 1}).removeClass('elevation-2').addClass('elevation-4')
            }, function () {
                $(this).css({opacity: 0.8}).removeClass('elevation-4').addClass('elevation-2')
            })

            if (callback) {
                $color.on('click', callback)
            }
        })

        return $block
    }

    /** start 当前url等于标签中的url时 添加 active class 但这个方法不适用于 pjax**/
    var url = window.location.href.replace("http://", "");
    url = url.substr(url.indexOf("/") + 1, url.length).replace(/(\w+)\/(\w+)\/(\w+)(\/|\?){0,1}(.*)/ig, "$1/$2/$3");
    console.log(url);
    var meUrl;
    $(".nav-item").each(function () {
        var outThis = $(this);
        outThis.removeClass("menu-open");
        outThis.children().first().removeClass("active");
        $(this).find("a").each(function () {
            meUrl = $(this).attr("href").replace("http://", "");
            meUrl = meUrl.substr(meUrl.indexOf("/") + 1, meUrl.length).replace(/(\w+)\/(\w+)\/(\w+)(\/|\?){0,1}(.*)/ig, "$1/$2/$3");
            console.log(meUrl);
            if (meUrl == url) {
                //if(url.indexOf(meUrl)>-1){
                outThis.addClass("menu-open").show();
                outThis.children().first().addClass("active");
                return false;
            }
        });
    });

    /** end**/

    $('ul[role="menu"]').find('.nav-item').children().click(function () {
        /**最叶子节点A标签*/
        if ($(this).parent().first().hasClass("has-treeview") == false) {
            $(".active").removeClass("active");
            var outThis = $(this).parent().parent().parent();
            //最顶级 li 下的A标签
            outThis.children().first().addClass("active");
            $(this).addClass("active");
        }
    });

})(jQuery);