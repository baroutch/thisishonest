var html = document.documentElement;
var body = document.body;
var bloc_video_tableau = new Array();

var scroller = {
    target: document.querySelector("#scroll-container"),
    ease: 0.05, // <= scroll speed
    endY: 0,
    y: 0,
    resizeRequest: 1,
    scrollRequest: 0,
};

var requestId = null;

TweenLite.set(scroller.target, {
    rotation: 0.01,
    force3D: true
});

window.addEventListener("load", onLoad);

function onLoad() {
    updateScroller();
    window.focus();
    window.addEventListener("resize", onResize);
    document.addEventListener("scroll", onScroll);

    //On charge les coordonnées des différents blocs vidéos
    $(".bloc_video").each(function () {
        bloc_video_tableau.push(this.offsetTop);
    });
}

function updateScroller() {

    var resized = scroller.resizeRequest > 0;

    if (resized) {
        var height = scroller.target.clientHeight;
        body.style.height = height + "px";
        scroller.resizeRequest = 0;
    }

    var scrollY = window.pageYOffset || html.scrollTop || body.scrollTop || 0;

    for(var i= 0; i < bloc_video_tableau.length; i++)
    {
        if(scrollY < (bloc_video_tableau[i] + 200) && scrollY > (bloc_video_tableau[i] - 200)){
            scrollY = bloc_video_tableau[i];
        }
    }

    scroller.endY = scrollY;
    scroller.y += (scrollY - scroller.y) * scroller.ease;

    if (Math.abs(scrollY - scroller.y) < 0.05 || resized) {
        scroller.y = scrollY;
        scroller.scrollRequest = 0;
    }

    TweenLite.set(scroller.target, {
        y: -scroller.y
    });

    requestId = scroller.scrollRequest > 0 ? requestAnimationFrame(updateScroller) : null;
}

function onScroll() {
    scroller.scrollRequest++;
    if (!requestId) {
        requestId = requestAnimationFrame(updateScroller);
    }
}

function onResize() {
    scroller.resizeRequest++;
    if (!requestId) {
        requestId = requestAnimationFrame(updateScroller);
    }
}

$( document ).ready(function() {

    var link = $("article.bloc_video");

    link.on("click", function(event){

        var playing_video = $(".popin-video", this)[0];

        $(".popin-video", this).css('z-index', 10);
        TweenLite.to(playing_video , 1 , {ease: Back.easeInOutSine, autoAlpha: 1, display:'block'});

        var video = $(".media-video", this)[0];
        //video.play();

        console.debug($(".popin-video", this).offset().top - $(window).scrollTop());
        if($(".popin-video", this).offset().top - $(window).scrollTop() <= 1 && $(".popin-video", this).offset().top - $(window).scrollTop() >= -1){
        }else {
            //On calle la div
            TweenLite.to(window, 2, {scrollTo:$(".popin-video", this).offset().top});
        }

    });

    $(".popin-video").each(function (index) {

        var video = $(".media-video", this)[0];
        var btnPlay = $(".play", this)[0];
        var btnMute = $(".mute", this)[0];
        var progressBar = $(".progress-bar", this)[0];
        var btnExpand = $(".expand", this)[0];
        var curtimetext = $(".curtimetext", this)[0];
        var durtimetext = $(".durtimetext", this)[0];

        btnPlay.addEventListener("click", function () {
            if (video.paused || video.ended) {
                //changeButtonType(btnPlay, 'pause');
                $(this).addClass('fa-pause');
                $(this).removeClass('fa-play');
                $(this).attr('title', 'pause');
                video.play();
            }
            else {
                //changeButtonType(btnPlay, 'play');
                $(this).removeClass('fa-pause');
                $(this).addClass('fa-play');
                $(this).attr('title', 'play');
                video.pause();
            }
        });

        video.addEventListener('playing', function() {

        });

        video.addEventListener('timeupdate', function() {
            var nt = video.currentTime * (100 / video.duration);
            progressBar.value = nt;
            var curmins = Math.floor(video.currentTime / 60);
            var cursecs = Math.floor(video.currentTime - curmins * 60);
            var durmins = Math.floor(video.duration / 60);
            var dursecs = Math.floor(video.duration - durmins * 60);
            if(cursecs < 10){ cursecs = "0"+cursecs; }
            if(dursecs < 10){ dursecs = "0"+dursecs; }
            if(curmins < 10){ curmins = "0"+curmins; }
            if(durmins < 10){ durmins = "0"+durmins; }
            curtimetext.innerHTML = curmins+":"+cursecs;
            durtimetext.innerHTML = durmins+":"+dursecs;
            console.debug($(this).offset().top);
            // a terminer
            //if($(this).offset().top >= 1 && $(this).offset().top <= -1){
                //video.pause();
            //}
        });

        btnExpand.addEventListener("click", function () {
            //Set the video in full screen
            video.webkitEnterFullscreen();
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

/*
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
        });
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

*/