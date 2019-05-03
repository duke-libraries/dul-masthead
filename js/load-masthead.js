(function(_dmh){

    var win = _dmh.window;
    var doc = _dmh.document;
    var stylesheet = _dmh.stylesheet;
    var noTouch = _dmh.noTouch;
    var mastheadMarkup = _dmh.mastheadMarkup;

    function insertMasthead(mastheadmarkup, document, mastheadDiv) {

        if ("ontouchstart" in doc.documentElement) {
            mastheadmarkup = mastheadmarkup.replace(/dul-masthead-no-touch/, '');
        }

        mastheadDiv.innerHTML = mastheadmarkup;

        if (document.getElementById("dul-masthead-filler")) {
            var filler = document.getElementById("dul-masthead-filler");

            filler.parentNode.replaceChild(mastheadDiv,filler);
        } else {
            var pageBody = document.getElementsByTagName("body")[0];
            pageBody.insertBefore(mastheadDiv, pageBody.firstChild);
        }

        // Toggle mobile menu on click trigger
        // See https://www.smashingmagazine.com/2017/11/building-accessible-menu-systems/
        // & https://elliotekj.com/2016/11/05/jquery-to-pure-js-event-listeners-on-dynamically-created-elements/

        document.querySelector('#dul-masthead-nav-trigger-btn').addEventListener('click', function (event) {
          if (event.target && event.target.id=='dul-masthead-nav-trigger-btn') {
            var mobileNavTrigger = event.target;
            var expanded = mobileNavTrigger.getAttribute('aria-expanded') === 'true' || false;
            mobileNavTrigger.setAttribute('aria-expanded', !expanded);
            var menu = document.getElementById('dul-masthead-mobile-menu');
            menu.hidden = !menu.hidden;
          }
        });

    }

    var head = doc.head || doc.getElementsByTagName("head")[0];

    var styleSheetLink =doc.createElement("link");
    styleSheetLink.type="text/css";
    styleSheetLink.media="all";
    styleSheetLink.rel="stylesheet";
    styleSheetLink.href=("https:"==document.location.protocol?"https://":"//")+"library.duke.edu/masthead/css/" + stylesheet;
    //styleSheetLink.href=("https:"==document.location.protocol?"https://":"//")+"localhost:8888/php_workspace/masthead/css/" + stylesheet;

    head.appendChild(styleSheetLink);

    var mastheadDiv =doc.createElement("div");
    mastheadDiv.className="dul-masthead-bar";

    if (win.addEventListener) {
        win.addEventListener("load",function(){
            insertMasthead(mastheadMarkup, doc, mastheadDiv);
        },!1);
    } else {
    // FOR IE LESS THAN 10
        win.attachEvent("onload",function(){
            insertMasthead(mastheadMarkup, doc, mastheadDiv);
        },!1);
    }


})(_dmh);