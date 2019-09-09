$(function () {
    let flashMsgHeaderColor;
    switch (flashMsgType) {
        case 'success':
            flashMsgHeaderColor = '#4ACF1B';
            break;
        case 'warning':
            flashMsgHeaderColor = '#F7E406';
            break;
        case 'information':
            flashMsgHeaderColor = '#0EA6E4';
            break;
        case 'error':
            flashMsgHeaderColor = '#E12620';
            break;
        default:
            flashMsgHeaderColor = '#A1AFB8';
            break;
    }
    $("#bkstar123-flashing-toast div.toast-header")
        .css('background-color', flashMsgHeaderColor);
    $("#bkstar123-flashing-toast").toast('show');
});