<!-- bytedesk.com -->
<script src="{{ config('bytedesk.base_url') }}/embed/bytedesk-web.js"></script>
<script>
    const config = {
        baseUrl: '{{ config('bytedesk.base_url') }}',
        placement: '{{ config('bytedesk.placement') }}',
        autoPopup: {{ config('bytedesk.auto_popup') ? 'true' : 'false' }},
        inviteParams: {
            show: {{ config('bytedesk.invite.show') ? 'true' : 'false' }},
            text: '{{ config('bytedesk.invite.text') }}',
        },
        bubbleConfig: {
            show: {{ config('bytedesk.bubble.show') ? 'true' : 'false' }},
            icon: '{{ config('bytedesk.bubble.icon') }}',
            title: '{{ config('bytedesk.bubble.title') }}',
            subtitle: '{{ config('bytedesk.bubble.subtitle') }}'
        },
        theme: {
            theme: '{{ config('bytedesk.theme.theme') }}',
            backgroundColor: '{{ config('bytedesk.theme.background_color') }}',
            textColor: '{{ config('bytedesk.theme.text_color') }}'
        },
        window: {
            width: '{{ config('bytedesk.window.width') }}'
        },
        chatParams: {
            org: '{{ config('bytedesk.chat.org') }}',
            t: '{{ config('bytedesk.chat.t') }}',
            sid: '{{ config('bytedesk.chat.sid') }}'
        }
    };
    const bytedesk = new BytedeskWeb(config);
    bytedesk.init();
</script> 