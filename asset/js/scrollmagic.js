$(function() {

    var controller = new ScrollMagic.Controller();

    var ourScene4 = new ScrollMagic.Scene({
        triggerElement: 'body',
        triggerHook: 0.7
    })
    .setClassToggle('body', 'fade-in')
    .addTo(controller);
});
