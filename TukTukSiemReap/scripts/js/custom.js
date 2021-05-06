(function ($) {
  jQuery(document).ready(function () {
    jQuery("a[data-gal]").each(function () {
      jQuery(this).attr("rel", jQuery(this).data("gal"));
    });
    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
      animationSpeed: "slow",
      theme: "light_rounded",
      slideshow: false,
      overlay_gallery: false,
      social_tools: false,
      deeplinking: false,
    });
  });
})(jQuery);

$(document).ready(function () {
  $("#viewTheme").click(function () {
    var $selectVal = $("#themeSelect").val();
    if ($selectVal !== "") {
      window.open("https://tuktuk-b.andyjacko.com?theme=" + $selectVal);
      return false;
    }
  });
});

$(document).ready(function () {
  $("#viewThemeInt").click(function () {
    var $selectVal = $("#themeSelect").val();
    if ($selectVal !== "") {
      window.open("https://tuktuk-i.andyjacko.com?theme=" + $selectVal);
      return false;
    }
  });
});

$(document).ready(function () {
  $("#viewThemePro").click(function () {
    var $selectVal = $("#themeSelect").val();
    if ($selectVal !== "") {
      window.open("https://tuktuk-p.andyjacko.com?theme=" + $selectVal);
      return false;
    }
  });
});

$(function () {
  $("#form").validate({
    ignore: ".ignore",
    rules: {
      YourName: "required",
      ContactSubject: "required",
      YourComment: "required",
      YourEmail: {
        required: true,
        email: true,
      },
      hiddenRecaptcha: {
        required: function () {
          if (grecaptcha.getResponse() == "") {
            return true;
          } else {
            return false;
          }
        },
      },
    },
    messages: {
      YourName: "Please enter your name",
      ContactSubject: "Please enter subject",
      YourComment: "Please enter message",
      YourEmail: "Please enter a valid email address",
      hiddenRecaptcha: "Please complete reCAPTCHA",
    },

    submitHandler: function (form) {
      form.submit();
    },
  });
});
