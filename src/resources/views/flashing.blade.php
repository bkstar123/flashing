@if(session()->has('flash_notification'))
    <div class="col-md-4 position-fixed"
         style="{{ session('flash_notification')['position'] }}: 0; right: 0; z-index: 1">
        <div class="toast" 
             id="bkstar123-flashing-toast"
             role="alert" 
             aria-atomic="true"
             aria-live="polite"
             style="min-width: 100%"
            {{ session('flash_notification')['important'] ? 
                'data-autohide=false' : 
                'data-delay=' . session('flash_notification')['timeout'] }}>
            <div class="toast-header"
                 style="color:white">
                <strong class="mr-auto">
                    {{ ucfirst(session('flash_notification')['type']) }}!
                </strong>
                <button type="button" 
                        class="ml-2 mb-1 close" 
                        style="color: white"
                        data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body"
                 style="background-color: #F8FCF4">
                {{ session('flash_notification')['message'] }}
            </div>
        </div>
        <script>
            let flashMsgType = @json(session('flash_notification')['type']);
        </script>
        <script src="/js/vendor/bkstar123_flashing/bkstar123-flashing.min.js"></script>
    </div>
@endif