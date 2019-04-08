$(function(){

    var $window = $(window);		//Window object

    var scrollTime = 1.2;			//Scroll time
    var scrollDistance = 500;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll

    $window.on("mousewheel DOMMouseScroll", function(event){

        event.preventDefault();

        var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
        var scrollTop = $window.scrollTop();
        var finalScroll = scrollTop - parseInt(delta*scrollDistance);

        TweenMax.to($window, scrollTime, {
            scrollTo : { y: finalScroll, autoKill:true },
            ease: Power1.easeOut,	//For more easing functions see https://api.greensock.com/js/com/greensock/easing/package-detail.html
            autoKill: true,
            overwrite: 5
        });

    });

});

$( document ).ready(function() {

    var link = $("article.bloc_video");

    link.on("click", function(event){

        var playing_video = $(".popin-video", this)[0];

        console.debug(playing_video);

        $(".popin-video", this).css('z-index', 10);
        TweenLite.to(playing_video , 1 , {ease: Back.easeInOutSine, autoAlpha: 1, display:'block'});
    });

    $(".popin-video").each(function (index) {

        var video = $(".media-video", this)[0];
        var btnPlay = $(".play", this)[0];
        var btnMute = $(".mute", this)[0];
        var progressBar = $(".progress-bar", this)[0];

        btnPlay.addEventListener("click", function () {
            if (video.paused || video.ended) {
                //changeButtonType(btnPlay, 'pause');
                $(this).removeClass('fa-play');
                $(this).addClass('fa-pause');
                $(this).attr('title', 'pause');
                video.play();
            }
            else {
                //changeButtonType(btnPlay, 'play');
                $(this).addClass('fa-play');
                $(this).removeClass('fa-pause');
                $(this).attr('title', 'play');
                video.pause();
            }
        });

        btnMute.addEventListener("click", function () {
            if (video.muted) {
                //changeButtonType(btnMute, 'mute');
                $(this).addClass('fa-volume-up');
                $(this).removeClass('fa-volume-mute');
                $(this).attr('title', 'mute');
                video.muted = false;
            }
            else {
                //changeButtonType(btnMute, 'unmute');
                $(this).addClass('fa-volume-mute');
                $(this).removeClass('fa-volume-up');
                $(this).attr('title', 'unmute');
                video.muted = true;
            }
        });

        function updateProgressBar() {
            var percentage = Math.floor((100 / video.duration) *
                video.currentTime);
            progressBar.value = percentage;
            progressBar.innerHTML = percentage + '% played';
        }

        video.addEventListener('timeupdate', updateProgressBar, false);

        function changeButtonType(btn, value) {
            btn.innerHTML = value;
            btn.className = value;
        }

    });

});

/*|===================================|*/
/*|                                   |*/
/*|   GESTION DES CHARGEMENTS EN JS   |*/
/*|                                   |*/
/*|===================================|*/

console.debug('Class history.js');
var History = window.History;
var rootUrl = History.getRootUrl();
var stateChangeVerrou = false;
var JC = {

    init: function(){
        console.debug('Initialisation ajax');
        JC.initLink();
        JC.stateChange();
    },

    initLink: function(){

        console.debug('Fonction initLink');

        $('body').find('a').click(function(event){

            stateChangeVerrou = true;
            var
                url = $(this).attr('href'),
                title = $(this).attr('title')||null;

            if($(this).attr('target') == '_blank') return true;

            if ( event.which == 2 || event.metaKey ) { return true; }
            History.pushState(null,title,url);
            event.preventDefault();
            return false;
        });
    },

    loadUrl: function(url){
        console.debug('loadUrl');
        //JC.loadingStart();
        $.ajax({
            url: url,
            cache: true,
            success: function(response){
                JC.$contentToLoad = $(response).find('#scrollcontainer');
                console.debug($(response).find('#scrollcontainer'));
                JC.removePage();
                JC.loadingStop();
            }
        });/**/
    },

    stateChange: function(){
        $(window).bind('statechange',function(){
            if(stateChangeVerrou){
                var State = History.getState();
                JC.loadUrl( State.url);
            }
        });
    },
}


$(document).ready(function() {

    $(document).ready(JC.init);

});