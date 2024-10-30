(function ($) {
    "use strict";

    let hideasAdmin = {};

    hideasAdmin.toggle_display_as = (event) => {
        let display_as = event.target.value;

        if(display_as === 'text') {
            $('#HiDeasWebsiteDialerPhoneTextSelection').show();
            $('#HiDeasWebsiteDialerPhoneIconSelection').hide();
        } else {
            $('#HiDeasWebsiteDialerPhoneTextSelection').hide();
            $('#HiDeasWebsiteDialerPhoneIconSelection').show();
        }
    }

    hideasAdmin.show_custom_image_input = (event) => {
        let input = event.target.value;

        if(input === 'custom') {
            $('#HiDeasWebsiteDialerPhoneIconURLSelection').show();
        } else {
            $('#HiDeasWebsiteDialerPhoneIconURLSelection').hide();
        }
    }

    hideasAdmin.init = () => {
        $("select[name*='HiDeasWebsiteDialerDisplayAs']").change(hideasAdmin.toggle_display_as).change();
        $(document).on('change', "input[name*='HiDeasWebsiteDialerPhoneIconSelection']", hideasAdmin.show_custom_image_input);
    }

    $(window).on('load', hideasAdmin.init);


})(jQuery);