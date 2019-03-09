var homeModule = {
    init:function(){
        window.onunload = function(){};
        this.loaderContainer = document.querySelector('.loader-container');
        this.fadeContainer = document.querySelector('.fade-out-container');
        this.fadeOutLink = document.querySelectorAll('.fade-out-link');
        this.navButtons = document.querySelectorAll('.home .anchor-link');
        this.notHomeNavButtons = document.querySelectorAll('.not-home .anchor-link');
        this.sideBar = document.getElementById('sidebar');
        this.infoBtn = document.getElementById('info-btn');
        this.skills = document.getElementById('skills');
        this.toggle = document.querySelector('.nav-toggle');
        this.unbinding();
        this.binding();
    },
    binding:function(){
        window.onunload = function(){};
        window.addEventListener('load',this.loader.bind(this));
        this.infoBtn && this.infoBtn.addEventListener('click', this.toggleSkills.bind(this));
        for(var i = 0, x = this.fadeOutLink.length; i < x; i++){
            this.fadeOutLink[i].addEventListener('click',this.fadeOutNavigation.bind(this));
        }
        for (var i = 0, x = this.navButtons.length; i < x; i++) {
            this.navButtons[i].addEventListener('click', function (e) {
                e.preventDefault();
                var element = e.currentTarget;
                var buttonId = element.dataset.anchor;
                this.scrollToAnchor(buttonId);
            }.bind(this))
        }
        for(var i = 0, x = this.notHomeNavButtons.length; i < x; i++){
            this.notHomeNavButtons[i].addEventListener('click',this.fadeOutNavigation.bind(this));
        }
        if(window.location.href.indexOf("skills") > -1) {
            addClass(this.skills, 'in');
         }
    },
    unbinding:function(){
        window.removeEventListener('load',this.loader.bind(this));
        for(var i = 0, x = this.fadeOutLink.length; i < x; i++){
            this.fadeOutLink[i].removeEventListener('click',this.fadeOutNavigation.bind(this));
        }
    },
    loader:function () {
        setTimeout(function(){
            removeClass(this.loaderContainer,'active');
        }.bind(this),500);

        setTimeout(function(){
            addClass(this.loaderContainer,'hidden');
        }.bind(this),1300)
    },
    toggleSkills: function(e) {
        e.preventDefault;
        hasClass(this.skills, 'in') ?
        removeClass(this.skills, 'in') :
        addClass(this.skills, 'in');
    },
    fadeOutNavigation:function (e) {
        e.preventDefault();
        var element = e.currentTarget;
        removeClass(this.fadeContainer,'hidden');
        setTimeout(function(){
            addClass(this.fadeContainer,'active')
        }.bind(this),100);
        setTimeout(function(){
            window.location.href = element.dataset.link;
        }.bind(this),1300);

    },
    scrollToAnchor: function (aid) {
        if(aid === 'skills'){
           addClass(this.skills, 'in'); 
        }
        var aTag = $("#"+ aid);
        $('html,body').animate({scrollTop: aTag.offset().top},'slow');
        removeClass(this.sideBar,'active');
        removeClass(this.toggle,'active');
    },

};
window.onpageshow = function(event) {
    if (event.persisted) {
        window.location.reload() 
    }
};
homeModule.init();
