/**
 * AdminLTE Demo Menu
 * ------------------
 * You should not use this file in production.
 * This file is for demo purposes only.
 */

/* eslint-disable camelcase */

(function ($) {
  'use strict'

  function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1)
  }

  function createSkinBlock(colors, callback, noneSelected) {
    var $block = $('<select />', {
      class: noneSelected ? 'custom-select mb-3 border-0' : 'custom-select mb-3 text-light border-0 ' + colors[0].replace(/accent-|navbar-/, 'bg-')
    })

    if (noneSelected) {
      var $default = $('<option />', {
        text: 'None Selected'
      })
      if (callback) {
        $default.on('click', callback)
      }

      $block.append($default)
    }

    colors.forEach(function (color) {
      var $color = $('<option />', {
        class: (typeof color === 'object' ? color.join(' ') : color).replace('navbar-', 'bg-').replace('accent-', 'bg-'),
        text: capitalizeFirstLetter((typeof color === 'object' ? color.join(' ') : color).replace(/navbar-|accent-|bg-/, '').replace('-', ' '))
      })

      $block.append($color)

      $color.data('color', color)

      if (callback) {
        $color.on('click', callback)
      }
    })

    return $block
  }

  var $sidebar = $('.control-sidebar')
  var $container = $('<div />', {
    class: 'p-3 control-sidebar-content'
  })

  $sidebar.append($container)

  // Checkboxes
  var langc=$('html').attr('dir')=='rtl'?'<h5>تخصيص الاعدادات</h5><hr class="mb-2"/>':'<h5>Customize AdminLTE</h5><hr class="mb-2"/>';
  $container.append().append(`<span>${langc}</span>`)

  //boula
  if (localStorage.getItem('darkmode')==true) {
    $('body').addClass('dark-mode');
  } else {
    $('body').removeClass('dark-mode');
  }
  //boula
  
  var $dark_mode_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('body').hasClass('dark-mode'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('body').addClass('dark-mode');
      
      //boula
      localStorage.setItem('darkmode',1)
      //boula
    } else {
      $('body').removeClass('dark-mode');
      //boula
      localStorage.setItem('darkmode',0)
      //boula
    }
  })



  var lang=$('html').attr('dir')=='rtl'?"الوضع المظلم":'Dark Mode';
  var $dark_mode_container = $('<div />', { class: 'mb-4' }).append($dark_mode_checkbox).append(`<span>${lang}</span>`)
  $container.append($dark_mode_container)

  var langhe=$('html').attr('dir')=='rtl'?"<h6>خيارات الهيدر</h6>":'<h6>Header Options</h6>';
  $container.append().append(`<span>${langhe}</span>`)

   //boula
   if (localStorage.getItem('layoutnavbarfixed')==true) {
    $('body').addClass('layout-navbar-fixed');
  } else {
    $('body').removeClass('layout-navbar-fixed');
  }
  //boula
  var $header_fixed_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('body').hasClass('layout-navbar-fixed'),
    class: 'mr-1 targetCheckbox'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('body').addClass('layout-navbar-fixed')
    //boula
    localStorage.setItem('layoutnavbarfixed',1)
    //boula
  } else {
    $('body').removeClass('layout-navbar-fixed');
    //boula
    localStorage.setItem('layoutnavbarfixed',0)
    //boula
  }
  })

  var langfi=$('html').attr('dir')=='rtl'?"مثبت":'Fixed';
  var $header_fixed_container = $('<div />', { class: 'mb-1' }).append($header_fixed_checkbox).append(`<span>${langfi}</span>`)
  $container.append($header_fixed_container)

  // var $dropdown_legacy_offset_checkbox = $('<input />', {
  //   type: 'checkbox',
  //   value: 1,
  //   checked: $('.main-header').hasClass('dropdown-legacy'),
  //   class: 'mr-1'
  // }).on('click', function () {
  //   if ($(this).is(':checked')) {
  //     $('.main-header').addClass('dropdown-legacy')
  //   } else {
  //     $('.main-header').removeClass('dropdown-legacy')
  //   }
  // })
  // var $dropdown_legacy_offset_container = $('<div />', { class: 'mb-1' }).append($dropdown_legacy_offset_checkbox).append('<span>Dropdown Legacy Offset</span>')
  // $container.append($dropdown_legacy_offset_container)

     //boula
     if (localStorage.getItem('borderbottom0')==true) {
      $('.main-header').addClass('border-bottom-0');
    } else {
      $('.main-header').removeClass('border-bottom-0');
    }
    //boula

  var $no_border_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.main-header').hasClass('border-bottom-0'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.main-header').addClass('border-bottom-0')
       //boula
       localStorage.setItem('borderbottom0',1)
       //boula
     } else {
       $('.main-header').removeClass('border-bottom-0');
       //boula
       localStorage.setItem('borderbottom0',0)
       //boula
     }
  })
  var lang_no_border=$('html').attr('dir')=='rtl'?"غير محدد":'No Border';
  var $no_border_container = $('<div />', { class: 'mb-4' }).append($no_border_checkbox).append(`<span>${lang_no_border}</span>`)
  $container.append($no_border_container)

  var lang_sidepar=$('html').attr('dir')=='rtl'?"<h6>خيارات الشريط الجانبي</h6>" :'<h6>Sidebar Options</h6>';
  $container.append(lang_sidepar)

   //boula
   if (localStorage.getItem('sidebarcollapse')==true) {
    $('body').addClass('sidebar-collapse');
  } else {
    $('body').removeClass('sidebar-collapse');
  }
  //boula

  var $sidebar_collapsed_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('body').hasClass('sidebar-collapse'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('body').addClass('sidebar-collapse')
      $(window).trigger('resize')
       //boula
       localStorage.setItem('sidebarcollapse',1)
       //boula
    } else {
      $('body').removeClass('sidebar-collapse')
      $(window).trigger('resize')
      //boula
      localStorage.setItem('sidebarcollapse',0)
      //boula
    }
  })
  var lang_co=$('html').attr('dir')=='rtl'?"الحافظه":'Collapsed';
  var $sidebar_collapsed_container = $('<div />', { class: 'mb-1' }).append($sidebar_collapsed_checkbox).append(`<span>${lang_co}</span>`)
  $container.append($sidebar_collapsed_container)

  $(document).on('collapsed.lte.pushmenu', '[data-widget="pushmenu"]', function () {
    $sidebar_collapsed_checkbox.prop('checked', true)
  })
  $(document).on('shown.lte.pushmenu', '[data-widget="pushmenu"]', function () {
    $sidebar_collapsed_checkbox.prop('checked', false)
  })

   //boula
   if (localStorage.getItem('layoutfixed')==true) {
    $('body').addClass('layout-fixed');
  } else {
    $('body').removeClass('layout-fixed');
  }
  //boula

  var $sidebar_fixed_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('body').hasClass('layout-fixed'),
    class: 'mr-1 targetCheckbox'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('body').addClass('layout-fixed')
      $(window).trigger('resize')
        //boula
        localStorage.setItem('layoutfixed',1)
        //boula
    } else {
      $('body').removeClass('layout-fixed')
      $(window).trigger('resize')
       //boula
       localStorage.setItem('layoutfixed',0)
       //boula
    }
  })
  var lang_fi2=$('html').attr('dir')=='rtl'?"مثبت":'Fixed';
  var $sidebar_fixed_container = $('<div />', { class: 'mb-1' }).append($sidebar_fixed_checkbox).append(`<span>${lang_fi2}</span>`)
  $container.append($sidebar_fixed_container)

  var $sidebar_mini_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('body').hasClass('sidebar-mini'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('body').addClass('sidebar-mini')
    } else {
      $('body').removeClass('sidebar-mini')
    }
  })
  // var $sidebar_mini_container = $('<div />', { class: 'mb-1' }).append($sidebar_mini_checkbox).append('<span>Sidebar Mini</span>')
  // $container.append($sidebar_mini_container)

  // var $sidebar_mini_md_checkbox = $('<input />', {
  //   type: 'checkbox',
  //   value: 1,
  //   checked: $('body').hasClass('sidebar-mini-md'),
  //   class: 'mr-1'
  // }).on('click', function () {
  //   if ($(this).is(':checked')) {
  //     $('body').addClass('sidebar-mini-md')
  //   } else {
  //     $('body').removeClass('sidebar-mini-md')
  //   }
  // })
  // var $sidebar_mini_md_container = $('<div />', { class: 'mb-1' }).append($sidebar_mini_md_checkbox).append('<span>Sidebar Mini MD</span>')
  // $container.append($sidebar_mini_md_container)

  // var $sidebar_mini_xs_checkbox = $('<input />', {
  //   type: 'checkbox',
  //   value: 1,
  //   checked: $('body').hasClass('sidebar-mini-xs'),
  //   class: 'mr-1'
  // }).on('click', function () {
  //   if ($(this).is(':checked')) {
  //     $('body').addClass('sidebar-mini-xs')
  //   } else {
  //     $('body').removeClass('sidebar-mini-xs')
  //   }
  // })
  // var $sidebar_mini_xs_container = $('<div />', { class: 'mb-1' }).append($sidebar_mini_xs_checkbox).append('<span>Sidebar Mini XS</span>')
  // $container.append($sidebar_mini_xs_container)
   //boula
   if (localStorage.getItem('navflat')==true) {
    $('.nav-sidebar').addClass('nav-flat');
  } else {
    $('.nav-sidebar').removeClass('nav-flat');
  }
  //boula
  var $flat_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('nav-flat'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('nav-flat')
         //boula
         localStorage.setItem('navflat',1)
         //boula
    } else {
      $('.nav-sidebar').removeClass('nav-flat')
        //boula
        localStorage.setItem('navflat',0)
        //boula
    }
  })
  var lang_nav_fla=$('html').attr('dir')=='rtl'?"نمط التنقل المسطح":'Nav Flat Style';
  var $flat_sidebar_container = $('<div />', { class: 'mb-1' }).append($flat_sidebar_checkbox).append(`<span>${lang_nav_fla}</span>`)
  $container.append($flat_sidebar_container)

     //boula
     if (localStorage.getItem('navlegacy')==true) {
      $('.nav-sidebar').addClass('nav-legacy');
    } else {
      $('.nav-sidebar').removeClass('nav-legacy');
    }
    //boula
  var $legacy_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('nav-legacy'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('nav-legacy')
        //boula
        localStorage.setItem('navlegacy',1)
        //boula
    } else {
      $('.nav-sidebar').removeClass('nav-legacy')
        //boula
        localStorage.setItem('navlegacy',0)
        //boula
    }
  })
  var lang_no_le=$('html').attr('dir')=='rtl'?"نمط التنقل القديم":'Nav Legacy Style';
  var $legacy_sidebar_container = $('<div />', { class: 'mb-1' }).append($legacy_sidebar_checkbox).append(`<span>${lang_no_le}</span>`)
  $container.append($legacy_sidebar_container)


     //boula
     if (localStorage.getItem('navcompact')==true) {
      $('.nav-sidebar').addClass('nav-compact');
    } else {
      $('.nav-sidebar').removeClass('nav-compact');
    }
    //boula
  var $compact_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('nav-compact'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('nav-compact')
       //boula
       localStorage.setItem('navcompact',1)
       //boula
    } else {
      $('.nav-sidebar').removeClass('nav-compact')
       //boula
       localStorage.setItem('navcompact',0)
       //boula
    }
  })
  var lang_nav_com=$('html').attr('dir')=='rtl'?"التنقل المدمجة":'Nav Compact';
  var $compact_sidebar_container = $('<div />', { class: 'mb-1' }).append($compact_sidebar_checkbox).append(`<span>${lang_nav_com}</span>`)
  $container.append($compact_sidebar_container)

  
     //boula
     if (localStorage.getItem('navchildindent')==true) {
      $('.nav-sidebar').addClass('nav-child-indent');
    } else {
      $('.nav-sidebar').removeClass('nav-child-indent');
    }
    //boula
  var $child_indent_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('nav-child-indent'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('nav-child-indent')
        //boula
        localStorage.setItem('navchildindent',1)
        //boula
    } else {
      $('.nav-sidebar').removeClass('nav-child-indent')
        //boula
        localStorage.setItem('navchildindent',0)
        //boula
    }
  })
  var lang_nav_chi=$('html').attr('dir')=='rtl'?"مسافة بادئة للتنقل تابعة":'Nav Child Indent';
  var $child_indent_sidebar_container = $('<div />', { class: 'mb-1' }).append($child_indent_sidebar_checkbox).append(`<span>${lang_nav_chi}</span>`)
  $container.append($child_indent_sidebar_container)

     //boula
     if (localStorage.getItem('navcollapsehidechild')==true) {
      $('.nav-sidebar').addClass('nav-collapse-hide-child');
    } else {
      $('.nav-sidebar').removeClass('nav-collapse-hide-child');
    }
    //boula
  var $child_hide_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('nav-collapse-hide-child'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('nav-collapse-hide-child')
       //boula
       localStorage.setItem('navcollapsehidechild',1)
       //boula
    } else {
      $('.nav-sidebar').removeClass('nav-collapse-hide-child')
       //boula
       localStorage.setItem('navcollapsehidechild',0)
       //boula
    }
  })
  var lang_no_child_hi=$('html').attr('dir')=='rtl'?"إخفاء المحتوى فى الهيدر":'Nav Child Hide on Collapse';
  var $child_hide_sidebar_container = $('<div />', { class: 'mb-1' }).append($child_hide_sidebar_checkbox).append(`<span>${lang_no_child_hi}</span>`)
  $container.append($child_hide_sidebar_container)

  // var $no_expand_sidebar_checkbox = $('<input />', {
  //   type: 'checkbox',
  //   value: 1,
  //   checked: $('.main-sidebar').hasClass('sidebar-no-expand'),
  //   class: 'mr-1'
  // }).on('click', function () {
  //   if ($(this).is(':checked')) {
  //     $('.main-sidebar').addClass('sidebar-no-expand')
  //   } else {
  //     $('.main-sidebar').removeClass('sidebar-no-expand')
  //   }
  // })
  // var $no_expand_sidebar_container = $('<div />', { class: 'mb-4' }).append($no_expand_sidebar_checkbox).append('<span>Disable Hover/Focus Auto-Expand</span>')
  // $container.append($no_expand_sidebar_container)

  // $container.append('<h6>Footer Options</h6>')

     //boula
     if (localStorage.getItem('layoutfooterfixed')==true) {
      $('body').addClass('layout-footer-fixed');
    } else {
      $('body').removeClass('layout-footer-fixed');
    }
    //boula
  var $footer_fixed_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('body').hasClass('layout-footer-fixed'),
    class: 'mr-1 targetCheckbox'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('body').addClass('layout-footer-fixed')
        //boula
        localStorage.setItem('layoutfooterfixed',1)
        //boula
    } else {
      $('body').removeClass('layout-footer-fixed')
       //boula
       localStorage.setItem('layoutfooterfixed',0)
       //boula
    }
  })
  var lang_fi=$('html').attr('dir')=='rtl'?"مثبت":'Fixed';
  var $footer_fixed_container = $('<div />', { class: 'mb-4' }).append($footer_fixed_checkbox).append(`<span>${lang_fi}</span>`)
  $container.append($footer_fixed_container)

  var lang_small_test=$('html').attr('dir')=='rtl'?"<h6>خيارات النص الصغيرة</h6>":'<h6>Small Text Options</h6>';
  $container.append(`${lang_small_test}`)

     //boula
     if (localStorage.getItem('textsm')==true) {
      $('body').addClass('text-sm');
    } else {
      $('body').removeClass('text-sm');
    }
    //boula
  var $text_sm_body_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('body').hasClass('text-sm'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('body').addClass('text-sm')
       //boula
       localStorage.setItem('textsm',1)
       //boula
    } else {
      $('body').removeClass('text-sm')
         //boula
         localStorage.setItem('textsm',0)
         //boula
    }
  })
  var lang_body2=$('html').attr('dir')=='rtl'?"الرئيسية":'Body';
  var $text_sm_body_container = $('<div />', { class: 'mb-1' }).append($text_sm_body_checkbox).append(`<span>${lang_body2}</span>`)
  $container.append($text_sm_body_container)

  // var $text_sm_header_checkbox = $('<input />', {
  //   type: 'checkbox',
  //   value: 1,
  //   checked: $('.main-header').hasClass('text-sm'),
  //   class: 'mr-1'
  // }).on('click', function () {
  //   if ($(this).is(':checked')) {
  //     $('.main-header').addClass('text-sm')
  //   } else {
  //     $('.main-header').removeClass('text-sm')
  //   }
  // })
  // var $text_sm_header_container = $('<div />', { class: 'mb-1' }).append($text_sm_header_checkbox).append('<span>Navbar</span>')
  // $container.append($text_sm_header_container)

  // var $text_sm_brand_checkbox = $('<input />', {
  //   type: 'checkbox',
  //   value: 1,
  //   checked: $('.brand-link').hasClass('text-sm'),
  //   class: 'mr-1'
  // }).on('click', function () {
  //   if ($(this).is(':checked')) {
  //     $('.brand-link').addClass('text-sm')
  //   } else {
  //     $('.brand-link').removeClass('text-sm')
  //   }
  // })
  // var $text_sm_brand_container = $('<div />', { class: 'mb-1' }).append($text_sm_brand_checkbox).append('<span>Brand</span>')
  // $container.append($text_sm_brand_container)

     //boula
     if (localStorage.getItem('textsm1')==true) {
      $('.nav-sidebar').addClass('text-sm');
    } else {
      $('.nav-sidebar').removeClass('text-sm');
    }
    //boula
  var $text_sm_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('text-sm'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('text-sm')
        //boula
        localStorage.setItem('textsm1',1)
        //boula
    } else {
      $('.nav-sidebar').removeClass('text-sm')
        //boula
        localStorage.setItem('textsm1',0)
        //boula
    }
  })
  var lang_sidebar_va=$('html').attr('dir')=='rtl'?"التنقل في الشريط الجانبي":'Sidebar Nav';
  var $text_sm_sidebar_container = $('<div />', { class: 'mb-1' }).append($text_sm_sidebar_checkbox).append(`<span>${lang_sidebar_va}</span>`)
  $container.append($text_sm_sidebar_container)

  
     //boula
     if (localStorage.getItem('textsm2')==true) {
      $('.main-footer').addClass('text-sm');
    } else {
      $('.main-footer').removeClass('text-sm');
    }
    //boula
  var $text_sm_footer_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.main-footer').hasClass('text-sm'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.main-footer').addClass('text-sm')
       //boula
       localStorage.setItem('textsm2',1)
       //boula

    } else {
      $('.main-footer').removeClass('text-sm')
       //boula
       localStorage.setItem('textsm2',0)
       //boula
    }
  })
  var lang_footer=$('html').attr('dir')=='rtl'?"تذييل":'Footer';
  var $text_sm_footer_container = $('<div />', { class: 'mb-4' }).append($text_sm_footer_checkbox).append(`<span>${lang_footer}</span>`)
  $container.append($text_sm_footer_container)

  // Color Arrays

  var navbar_dark_skins = [
    'navbar-primary',
    'navbar-secondary',
    'navbar-info',
    'navbar-success',
    'navbar-danger',
    'navbar-indigo',
    'navbar-purple',
    'navbar-pink',
    'navbar-navy',
    'navbar-lightblue',
    'navbar-teal',
    'navbar-cyan',
    'navbar-dark',
    'navbar-gray-dark',
    'navbar-gray'
  ]

  var navbar_light_skins = [
    'navbar-light',
    'navbar-warning',
    'navbar-white',
    'navbar-orange'
  ]

  var sidebar_colors = [
    'bg-primary',
    'bg-warning',
    'bg-info',
    'bg-danger',
    'bg-success',
    'bg-indigo',
    'bg-lightblue',
    'bg-navy',
    'bg-purple',
    'bg-fuchsia',
    'bg-pink',
    'bg-maroon',
    'bg-orange',
    'bg-lime',
    'bg-teal',
    'bg-olive'
  ]

  var accent_colors = [
    'accent-primary',
    'accent-warning',
    'accent-info',
    'accent-danger',
    'accent-success',
    'accent-indigo',
    'accent-lightblue',
    'accent-navy',
    'accent-purple',
    'accent-fuchsia',
    'accent-pink',
    'accent-maroon',
    'accent-orange',
    'accent-lime',
    'accent-teal',
    'accent-olive'
  ]

  var sidebar_skins = [
    'sidebar-dark-primary',
    'sidebar-dark-warning',
    'sidebar-dark-info',
    'sidebar-dark-danger',
    'sidebar-dark-success',
    'sidebar-dark-indigo',
    'sidebar-dark-lightblue',
    'sidebar-dark-navy',
    'sidebar-dark-purple',
    'sidebar-dark-fuchsia',
    'sidebar-dark-pink',
    'sidebar-dark-maroon',
    'sidebar-dark-orange',
    'sidebar-dark-lime',
    'sidebar-dark-teal',
    'sidebar-dark-olive',
    'sidebar-light-primary',
    'sidebar-light-warning',
    'sidebar-light-info',
    'sidebar-light-danger',
    'sidebar-light-success',
    'sidebar-light-indigo',
    'sidebar-light-lightblue',
    'sidebar-light-navy',
    'sidebar-light-purple',
    'sidebar-light-fuchsia',
    'sidebar-light-pink',
    'sidebar-light-maroon',
    'sidebar-light-orange',
    'sidebar-light-lime',
    'sidebar-light-teal',
    'sidebar-light-olive'
  ]

  // Navbar Variants

  // $container.append('<h6>Navbar Variants</h6>')

  // var $navbar_variants = $('<div />', {
  //   class: 'd-flex'
  // })
  var navbar_all_colors = navbar_dark_skins.concat(navbar_light_skins)
  var $navbar_variants_colors = createSkinBlock(navbar_all_colors, function () {
    var color = $(this).data('color')
    var $main_header = $('.main-header')
    $main_header.removeClass('navbar-dark').removeClass('navbar-light')
    navbar_all_colors.forEach(function (color) {
      $main_header.removeClass(color)
    })

    $(this).parent().removeClass().addClass('custom-select mb-3 text-light border-0 ')

    if (navbar_dark_skins.indexOf(color) > -1) {
      $main_header.addClass('navbar-dark')
      $(this).parent().addClass(color).addClass('text-light')
    } else {
      $main_header.addClass('navbar-light')
      $(this).parent().addClass(color)
    }

    $main_header.addClass(color)
  })

  var active_navbar_color = null
  $('.main-header')[0].classList.forEach(function (className) {
    if (navbar_all_colors.indexOf(className) > -1 && active_navbar_color === null) {
      active_navbar_color = className.replace('navbar-', 'bg-')
    }
  })

  $navbar_variants_colors.find('option.' + active_navbar_color).prop('selected', true)
  $navbar_variants_colors.removeClass().addClass('custom-select mb-3 text-light border-0 ').addClass(active_navbar_color)

  $navbar_variants.append($navbar_variants_colors)

  $container.append($navbar_variants)

  // Sidebar Colors

  $container.append('<h6>Accent Color Variants</h6>')
  var $accent_variants = $('<div />', {
    class: 'd-flex'
  })
  $container.append($accent_variants)
  $container.append(createSkinBlock(accent_colors, function () {
    var color = $(this).data('color')
    var accent_class = color
    var $body = $('body')
    accent_colors.forEach(function (skin) {
      $body.removeClass(skin)
    })

    $body.addClass(accent_class)
  }, true))

  var active_accent_color = null
  $('body')[0].classList.forEach(function (className) {
    if (accent_colors.indexOf(className) > -1 && active_accent_color === null) {
      active_accent_color = className.replace('navbar-', 'bg-')
    }
  })

  // $accent_variants.find('option.' + active_accent_color).prop('selected', true)
  // $accent_variants.removeClass().addClass('custom-select mb-3 text-light border-0 ').addClass(active_accent_color)

  $container.append('<h6>Dark Sidebar Variants</h6>')
  var $sidebar_variants_dark = $('<div />', {
    class: 'd-flex'
  })
  $container.append($sidebar_variants_dark)
  var $sidebar_dark_variants = createSkinBlock(sidebar_colors, function () {
    var color = $(this).data('color')
    var sidebar_class = 'sidebar-dark-' + color.replace('bg-', '')
    var $sidebar = $('.main-sidebar')
    sidebar_skins.forEach(function (skin) {
      $sidebar.removeClass(skin)
      $sidebar_light_variants.removeClass(skin.replace('sidebar-dark-', 'bg-')).removeClass('text-light')
    })

    $(this).parent().removeClass().addClass('custom-select mb-3 text-light border-0').addClass(color)

    $sidebar_light_variants.find('option').prop('selected', false)
    $sidebar.addClass(sidebar_class)
    $('.sidebar').removeClass('os-theme-dark').addClass('os-theme-light')
  }, true)
  $container.append($sidebar_dark_variants)

  var active_sidebar_dark_color = null
  $('.main-sidebar')[0].classList.forEach(function (className) {
    var color = className.replace('sidebar-dark-', 'bg-')
    if (sidebar_colors.indexOf(color) > -1 && active_sidebar_dark_color === null) {
      active_sidebar_dark_color = color
    }
  })

  $sidebar_dark_variants.find('option.' + active_sidebar_dark_color).prop('selected', true)
  $sidebar_dark_variants.removeClass().addClass('custom-select mb-3 text-light border-0 ').addClass(active_sidebar_dark_color)

  $container.append('<h6>Light Sidebar Variants</h6>')
  var $sidebar_variants_light = $('<div />', {
    class: 'd-flex'
  })
  $container.append($sidebar_variants_light)
  var $sidebar_light_variants = createSkinBlock(sidebar_colors, function () {
    var color = $(this).data('color')
    var sidebar_class = 'sidebar-light-' + color.replace('bg-', '')
    var $sidebar = $('.main-sidebar')
    sidebar_skins.forEach(function (skin) {
      $sidebar.removeClass(skin)
      $sidebar_dark_variants.removeClass(skin.replace('sidebar-light-', 'bg-')).removeClass('text-light')
    })

    $(this).parent().removeClass().addClass('custom-select mb-3 text-light border-0').addClass(color)

    $sidebar_dark_variants.find('option').prop('selected', false)
    $sidebar.addClass(sidebar_class)
    $('.sidebar').removeClass('os-theme-light').addClass('os-theme-dark')
  }, true)
  $container.append($sidebar_light_variants)

  var active_sidebar_light_color = null
  $('.main-sidebar')[0].classList.forEach(function (className) {
    var color = className.replace('sidebar-light-', 'bg-')
    if (sidebar_colors.indexOf(color) > -1 && active_sidebar_light_color === null) {
      active_sidebar_light_color = color
    }
  })

  if (active_sidebar_light_color !== null) {
    $sidebar_light_variants.find('option.' + active_sidebar_light_color).prop('selected', true)
    $sidebar_light_variants.removeClass().addClass('custom-select mb-3 text-light border-0 ').addClass(active_sidebar_light_color)
  }

  var logo_skins = navbar_all_colors
  $container.append('<h6>Brand Logo Variants</h6>')
  var $logo_variants = $('<div />', {
    class: 'd-flex'
  })
  $container.append($logo_variants)
  var $clear_btn = $('<a />', {
    href: '#'
  }).text('clear').on('click', function (e) {
    e.preventDefault()
    var $logo = $('.brand-link')
    logo_skins.forEach(function (skin) {
      $logo.removeClass(skin)
    })
  })

  var $brand_variants = createSkinBlock(logo_skins, function () {
    var color = $(this).data('color')
    var $logo = $('.brand-link')

    if (color === 'navbar-light' || color === 'navbar-white') {
      $logo.addClass('text-black')
    } else {
      $logo.removeClass('text-black')
    }

    logo_skins.forEach(function (skin) {
      $logo.removeClass(skin)
    })

    if (color) {
      $(this).parent().removeClass().addClass('custom-select mb-3 border-0').addClass(color).addClass(color !== 'navbar-light' && color !== 'navbar-white' ? 'text-light' : '')
    } else {
      $(this).parent().removeClass().addClass('custom-select mb-3 border-0')
    }

    $logo.addClass(color)
  }, true).append($clear_btn)
  $container.append($brand_variants)

  var active_brand_color = null
  $('.brand-link')[0].classList.forEach(function (className) {
    if (logo_skins.indexOf(className) > -1 && active_brand_color === null) {
      active_brand_color = className.replace('navbar-', 'bg-')
    }
  })

  if (active_brand_color) {
    $brand_variants.find('option.' + active_brand_color).prop('selected', true)
    $brand_variants.removeClass().addClass('custom-select mb-3 text-light border-0 ').addClass(active_brand_color)
  }
})(jQuery)
