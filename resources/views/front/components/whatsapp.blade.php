<!-- GetButton.io widget -->
@push('js')
    <script type="text/javascript">
        (function () {
            var options = {
                call: "01020202019", // Call phone number
                whatsapp: "+201020202019", // WhatsApp number
                call_to_action: "{{__('general.contact_us')}}", // Call to action
                button_color: "#6f5190", // Color of button
                position: "{{ app()->getLocale()=='ar'? 'right' : 'left' }}", // Position may be 'right' or 'left'
                order: "call,whatsapp", // Order of buttons
            };
            var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
@endpush
<!-- /GetButton.io widget -->
