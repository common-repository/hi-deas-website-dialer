(function ($) {
    "use strict";

    let hideas = {};

    hideas.open_window_call = (event) => {
        event.preventDefault();

        const call_url = hiDeasCallCentral.call_url;

        if(call_url === '') return;

        window.open(call_url, 'hiDeasCallCenterWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,titlebar=no,status=no,resizable=yes,width=500,height=600,left=500,top=150');
        return false;
    }

    hideas.init = () => {
        $(document).on('click', 'a.hi-deas-website-dialer-container', hideas.open_window_call);
    }

    $(window).on('load', hideas.init);


})(jQuery);