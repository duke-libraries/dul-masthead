<?php

if (isset($_GET['fixed'])) {
    if ($_GET['fixed'] === 'true') {
        $fixed = 'true';
    } else {
        $fixed = 'false';
    }
} else {
    $fixed = 'false';
}

if (isset($_GET['width'])) {
    $width = $_GET['width'];
} else {
    $width = '990';
}

preg_match('/(?i)msie ([0-9]*)/',$_SERVER['HTTP_USER_AGENT'], $matches);
//echo print_r($matches);
if((string)$matches[1] === '9' || (string)$matches[1] === '8' || (string)$matches[1] === '7' || (string)$matches[1] === '6') {
    $styleSheet = 'masthead-ie9.css';
    $widthType = 'width';
} else {
    if ($fixed === 'true') {
        $styleSheet = 'masthead-fixed.css';
        $widthType = 'max-width: none; width';
    } else {
        $styleSheet = 'masthead-responsive.css';
        $widthType = 'max-width';
    }
}

$droptdownWidth = (string)((integer)$width - 32);
$megamenuWidth = (string)$width;
$megamenuStyle = 'style="' . $widthType . ': ' . $megamenuWidth . 'px;"';
$dropdownStyle = 'style="' . $widthType . ': ' . $droptdownWidth . 'px; left: 0; top: auto;"';

$mastheadMarkup = '<div id="dul-masthead-dul-megamenu" ' . $megamenuStyle . '> <header class="dul-masthead-no-touch"><div class="dul-masthead-region-scoped-search"><form class="dul-masthead-mastSearch" action="//library.duke.edu/find/all" onsubmit="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Top Links\\\', eventLabel: \\\'Search Submit\\\'});"><!-- Generic reusable hidden attributes --><input type="hidden" name="" value="" id="dul-masthead-hiddenfilter1" class="dul-masthead-hiddenMastFilter"><input type="hidden" name="" value="" id="dul-masthead-hiddenfilter2" class="dul-masthead-hiddenMastFilter"><input type="hidden" name="" value="" id="dul-masthead-hiddenfilter3" class="dul-masthead-hiddenMastFilter"><div><input class="dul-masthead-mastSearchBox" placeholder="Search articles, books, our website &amp; more" name="Ntt" type="text"><div class="dul-masthead-btn-group"><button class="dul-masthead-btn" type="submit" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Top Links\\\', eventLabel: \\\'Search Button\\\'});"></button></div></div></form></div><div class="dul-masthead-region-myaccount"><a id="dul-masthead-myAccounts" href="//library.duke.edu/my-accounts" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Top Links\\\', eventLabel: \\\'My Accounts\\\'});">My Accounts</a><a href="//library.duke.edu/research/ask" id="dul-masthead-ask-librarian-link" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Top Links\\\', eventLabel: \\\'Ask a Librarian\\\'});">Ask a Librarian</a><a id="dul-masthead-account-hours" href="//library.duke.edu/about/hours" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Top Links\\\', eventLabel: \\\'Library Hours\\\'});">Library Hours</a><a id="dul-masthead-website-search-link" href="//library.duke.edu/find/all" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Top Links\\\', eventLabel: \\\'Website Search\\\'});">Search our Site</a></div><div><a onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Header\\\', eventAction: \\\'Branding\\\', eventLabel: \\\'Library Logo\\\'});" href="http://library.duke.edu"><img src="//library.duke.edu/masthead/img/logo.png" alt="Duke University Libraries" id="dul-masthead-logo"></a><input type="radio" id="dul-masthead-nav-trigger" name="nav" class="dul-masthead-nav-trigger" /><label for="dul-masthead-nav-trigger">&#9776; Menu</label><input type="radio" id="dul-masthead-nav-collapse" name="nav" checked="checked" class="dul-masthead-invis" /><label for="dul-masthead-nav-collapse" class="dul-masthead-overlay"></label><ul class="dul-masthead-mobile-menu"><li><a href="//library.duke.edu/find">Search &amp; Find</a></li><li><a href="//library.duke.edu/using">Using the Library</a></li><li><a href="//library.duke.edu/research">Research Support</a></li><li><a href="//library.duke.edu/course-support">Course Support</a></li><li><a href="//library.duke.edu/libraries">Libraries</a></li><li><a href="//library.duke.edu/about">About</a></li></ul></div><div id="dul-masthead-region-megamenu"><nav role="navigation"><div class="dul-masthead-megamenu_container"><!-- Begin Menu Container --><ul class="dul-masthead-megamenu"><!-- Begin Mega Menu --><li class="dul-masthead-megamenu_button" style="display: none;"><a class="dul-masthead-btn dul-masthead-dropdown-toggle" href="#_">Menu <span></span></a></li><li class="dul-masthead-mega_toplevel" ><a href="//library.duke.edu/find" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Search Find Portal\\\'});">Search &amp; Find</a><!-- Begin Item --><div class="dul-masthead-dropdown_fullwidth" ' . $dropdownStyle . ' style="left: 0; top: auto; "><!-- Begin Item Container --><div class="dul-masthead-menu-items"><div class="dul-masthead-col_4"><ul class="dul-masthead-primaryColumn"><li><a href="http://search.library.duke.edu/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Books Media\\\'});">Books &amp; Media</a><br><span class="dul-masthead-muted dul-masthead-smaller dul-masthead-normal">Books, journals, films &amp; more</span></li><li><a href="//library.duke.edu/find/articles" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Articles\\\'});">Articles</a><br><span class="dul-masthead-muted dul-masthead-smaller dul-masthead-normal">From journals, newspapers, magazines</span></li><li><a href="//library.duke.edu/find/journal-titles" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Online Journal Titles\\\'});">Online Journal Titles</a><br><span class="dul-masthead-muted dul-masthead-smaller dul-masthead-normal">Find by title</span></li><li><a href="//library.duke.edu/find/databases" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Research Databases\\\'});">Research Databases</a><br><span class="dul-masthead-muted dul-masthead-smaller dul-masthead-normal">Find by title and subject</span></li></ul></div><div class="dul-masthead-col_2"><ul><li><a href="//library.duke.edu/find/film-video" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Film Video\\\'});">Film &amp; Video</a></li><li><a href="//library.duke.edu/music" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Music\\\'});">Music</a></li><li><a href="//library.duke.edu/data" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Data\\\'});">Data &amp; Digital Maps</a></li><li><a href="http://guides.library.duke.edu/images" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Images\\\'});">Images</a></li><li><a href="//library.duke.edu/find/ebooks" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'eBooks\\\'});">eBooks</a></li> <li><a href="//library.duke.edu/find/newspapers" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Newspapers\\\'});">Newspapers</a></li> </ul></div><div class="dul-masthead-col_3"><ul><li><a href="//library.duke.edu/rubenstein" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Special Collections\\\'});">Special Collections</a></li><li><a href="//library.duke.edu/digitalcollections/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Digitized Collections\\\'});">Digitized Collections</a></li><li><a href="//library.duke.edu/find/scholarly" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Duke Faculty Scholarly Work\\\'});">Duke Faculty Scholarly Work</a></li><li><a href="//library.duke.edu/find/theses-dissertations" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Theses Dissertations\\\'});">Theses &amp; Dissertations</a></li><li><a href="//library.duke.edu/find/primary" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Primary Sources\\\'});">Primary Sources</a></li><li><a href="//library.duke.edu/find/website?Ntt=" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Our Website\\\'});">Our Website</a></li></ul></div><div class="dul-masthead-col_3 dul-masthead-featureColumn"><a href="//library.duke.edu/digitalcollections/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Feature\\\'});" class="dul-masthead-featureLink"><img class="dul-masthead-megaFeature img-polaroid" src="//library.duke.edu/masthead/img/promos/find.jpg"><br><div class="dul-masthead-featureCaption">Digitized Collections</div></a></div><div class="dul-masthead-col_12 dul-masthead-auxLinks"><div class="dul-masthead-col_2 dul-masthead-moreLink"><a href="//library.duke.edu/find" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'More\\\'});">More »</a></div> <div class="dul-masthead-col_10 dul-masthead-auxHelp">Not sure where to start? See our <a href="//library.duke.edu/research/guides" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Find Menu\\\', eventLabel: \\\'Aux Research Guides\\\'});">Research Guides</a> to explore by subject.</div></div></div></div><!-- End Item Container --></li><!-- End Item --><li class="dul-masthead-mega_toplevel" ><a href="//library.duke.edu/using" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Using the Library Portal\\\'});">Using the Library</a><!-- Begin Item --><div class="dul-masthead-dropdown_fullwidth" ' . $dropdownStyle . ' style="left: 0; top: auto; "><!-- Begin Item Container --><div class="dul-masthead-menu-items"><div class="dul-masthead-col_3"><ul><li><a href="//library.duke.edu/using/borrowing" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Borrowing\\\'});">Borrowing</a></li><li><a href="//library.duke.edu/using/document-delivery" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'ILL\\\'});">Document Delivery / ILL</a></li><li><a href="//library.duke.edu/using/off-campus" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Off Campus\\\'});">Connect from Off Campus</a></li></ul></div><div class="dul-masthead-col_3"><ul><li><a href="//library.duke.edu/using/room-reservations" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Reserve a Room\\\'});">Reserve a Room</a></li><li><a href="//library.duke.edu/using/places-to-study" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Places to Study\\\'});">Places to Study</a></li><li><a href="//library.duke.edu/apps/locationguide/perkins/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Find Book Locations\\\'});">Find Book Locations</a></li><li><a href="http://twp.duke.edu/writing-studio" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Writing Studio\\\'});">Writing Studio</a></li> </ul></div><div class="dul-masthead-col_3"><ul><li><a href="//library.duke.edu/using/computers" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Computers\\\'});">Computers, Printers, Scanners</a></li><li><a href="//library.duke.edu/using/labs-software" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Labs Software\\\'});">Labs &amp; Software</a></li><li><a href="//library.duke.edu/using/technology-lending" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Tech Lending\\\'});">Technology Lending</a></li><li><a href="http://link.duke.edu/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'The Link\\\'});">The Link</a></li></ul></div><div class="dul-masthead-col_3 dul-masthead-featureColumn"><a href="//library.duke.edu/services/alumni" class="dul-masthead-featureLink" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Feature\\\'});"><img class="dul-masthead-megaFeature img-polaroid" src="//library.duke.edu/masthead/img/promos/using-library-alumni.jpg"><br><div class="dul-masthead-featureCaption">Library Services for Duke Alumni</div></a></div><div class="dul-masthead-col_12 dul-masthead-auxLinks"><div class="dul-masthead-col_2 dul-masthead-moreLink"><a href="//library.duke.edu/using" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'More\\\'});">More »</a></div> <div class="dul-masthead-col_10 dul-masthead-auxHelp">Visiting the library? See our <a href="//library.duke.edu/about/hours" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Aux Hours\\\'});">hours</a> and <a href="//library.duke.edu/services/visitors" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Using Menu\\\', eventLabel: \\\'Aux Visitors\\\'});">services for visitors</a>.</div></div></div></div><!-- End Item Container --></li><!-- End Item --><li class="dul-masthead-mega_toplevel" ><a href="//library.duke.edu/research" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Research Support Portal\\\'});">Research Support</a><!-- Begin Item --><div class="dul-masthead-dropdown_fullwidth" ' . $dropdownStyle . ' style="left: 0; top: auto; "><!-- Begin Item Container --><div class="dul-masthead-menu-items"><div class="dul-masthead-col_3"><ul><li><a href="//library.duke.edu/research/specialists" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Subject Specialists\\\'});">Subject Specialists</a></li><li><a href="//library.duke.edu/research/guides" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Research Guides\\\'});">Research Guides</a></li><li><a href="//library.duke.edu/research/international" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'International Research\\\'});">International Research</a></li></ul></div><div class="dul-masthead-col_3"><ul><li><a href="//library.duke.edu/research/citing" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Citing Sources\\\'});">Citing Sources</a></li><li><a href="//library.duke.edu/research/citing/tools" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Citation Tools\\\'});">Citation Tools</a></li> <li><a href="//library.duke.edu/research/copyright-advice" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Copyright Advice\\\'});">Copyright Advice</a></li><li><a href="//library.duke.edu/research/publish-archive" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Publish Archive\\\'});">Publish &amp; Archive Your Work</a></li></ul></div><div class="dul-masthead-col_3"><ul><li><a href="//library.duke.edu/data/data-consulting" oonclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Data Consulting\\\'});">Data Consulting</a></li><li><a href="//library.duke.edu/data/data-visualization" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Data Viz\\\'});">Data Visualization</a></li><li><a href="//library.duke.edu/research/digital-research-projects" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Digital Research\\\'});">Digital Research Projects</a></li><li><a href="//library.duke.edu/edge" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'TheEdge\\\'});">The Edge</a></li></ul></div><div class="dul-masthead-col_3 dul-masthead-featureColumn"><a href="//library.duke.edu/research/plagiarism" class="dul-masthead-featureLink" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Feature\\\'});"><img class="dul-masthead-megaFeature img-polaroid" src="//library.duke.edu/masthead/img/promos/research-student.jpg"><br><div class="dul-masthead-featureCaption">Avoiding Plagiarism</div></a></div><div class="dul-masthead-col_12 dul-masthead-auxLinks"><div class="dul-masthead-col_2 dul-masthead-moreLink"><a href="//library.duke.edu/research" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'More\\\'});">More »</a></div> <div class="dul-masthead-col_10 dul-masthead-auxHelp">Teaching or taking a Duke class? Explore our <a href="//library.duke.edu/course-support" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Research Menu\\\', eventLabel: \\\'Aux Course Resources\\\'});">resources &amp; services for courses</a>.</div></div></div></div><!-- End Item Container --></li><!-- End Item --><li class="dul-masthead-mega_toplevel" ><a href="//library.duke.edu/course-support" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Course Menu\\\', eventLabel: \\\'Course Support Portal\\\'});">Course Support</a><!-- Begin Item --><div class="dul-masthead-dropdown_fullwidth" ' . $dropdownStyle . ' style="left: 0; top: auto; "><!-- Begin Item Container --><div class="dul-masthead-menu-items"><div class="dul-masthead-col_4"><ul><li><a href="//library.duke.edu/course-support/course-reserves" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Course Menu\\\', eventLabel: \\\'Reserves\\\'});">Course Reserves</a></li><li><a href="//library.duke.edu/course-support/guides" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Course Menu\\\', eventLabel: \\\'Course Guides\\\'});">Course Guides</a></li><li><a href="//library.duke.edu/course-support/training-workshops" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Course Menu\\\', eventLabel: \\\'Training Workshops\\\'});">Training &amp; Workshops</a></li></ul></div><div class="dul-masthead-col_4"><ul><li><a href="http://cit.duke.edu" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Course Menu\\\', eventLabel: \\\'CIT\\\'});">Center for Instructional Technology (CIT)</a></li><li><a href="https://sakai.duke.edu/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Course Menu\\\', eventLabel: \\\'Sakai\\\'});">Login to Sakai</a></li></ul></div><div class="dul-masthead-col_4 dul-masthead-featureColumn"><a href="//library.duke.edu/rubenstein/research/teaching" class="dul-masthead-featureLink" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Course Menu\\\', eventLabel: \\\'Feature\\\'});"><img class="dul-masthead-megaFeature img-polaroid" src="//library.duke.edu/masthead/img/promos/course-support.jpg"><br><div class="dul-masthead-featureCaption">Teaching with Special Collections</div></a></div><div class="dul-masthead-col_12 dul-masthead-auxLinks"><div class="dul-masthead-col_2 dul-masthead-moreLink"><a href="//library.duke.edu/course-support" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Course Menu\\\', eventLabel: \\\'More\\\'});">More »</a></div> <div class="dul-masthead-col_10 dul-masthead-auxHelp">Need help? Meet a <a href="//library.duke.edu/research/specialists" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Course Menu\\\', eventLabel: \\\'Aux Subject Specialist\\\'});">subject specialist</a>, see our <a href="//library.duke.edu/research/guides/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Course Menu\\\', eventLabel: \\\'Aux Research Guides\\\'});">research guides</a>, or learn how to <a href="//library.duke.edu/research/citing" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Course Menu\\\', eventLabel: \\\'Aux Cite Sources\\\'});">cite sources</a>.</div></div></div></div><!-- End Item Container --></li><!-- End Item --><li class="dul-masthead-mega_toplevel" ><a href="//library.duke.edu/libraries" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'Libraries Portal\\\'});">Libraries</a><!-- Begin Item --><div class="dul-masthead-dropdown_fullwidth" ' . $dropdownStyle . ' style="left: 0; top: auto; "><!-- Begin Item Container --><div class="dul-masthead-menu-items"><div class="dul-masthead-col_3"><ul><li><a href="/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'Perkins\\\'});">Perkins &amp; Bostock Libraries</a></li><li><a href="//library.duke.edu/lilly" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'Lilly\\\'});">Lilly Library</a></li><li><a href="//library.duke.edu/music" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'Music\\\'});">Music Library</a></li><li><a href="//library.duke.edu/marine" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'Marine\\\'});">Marine Lab Library</a></li><li><a href="//library.duke.edu/lsc" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'LSC\\\'});">Library Service Center</a></li> </ul></div><div class="dul-masthead-col_3"><ul><li><a href="//library.duke.edu/rubenstein" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'Rubenstein\\\'});">Rubenstein Rare Book &amp; Manuscript Library</a></li><li><a href="//library.duke.edu/rubenstein/uarchives" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'UArchives\\\'});">Duke University Archives</a></li><li><a href="http://dku.edu.cn/en/academics/library" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'DKU\\\'});">Duke Kunshan University Library</a></li></ul></div><div class="dul-masthead-col_3"><ul><li><a href="http://library.divinity.duke.edu/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'Divinity\\\'});">Divinity School Library</a></li><li><a href="http://library.fuqua.duke.edu/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'Ford\\\'});">Ford Library, Fuqua School of Business</a></li><li><a href="http://law.duke.edu/lib/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'Goodson Law\\\'});">Goodson Law Library</a></li><li><a href="https://mclibrary.duke.edu/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'Med Center\\\'});">Medical Center Library</a></li> </ul></div><div class="dul-masthead-col_3 dul-masthead-featureColumn"><a href="http://blogs.library.duke.edu/renovation/" class="dul-masthead-featureLink" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'Feature\\\'});"><img class="dul-masthead-megaFeature img-polaroid" src="//library.duke.edu/masthead/img/promos/libraries.jpg"><br><div class="dul-masthead-featureCaption">Rubenstein Library Renovation</div></a></div><div class="dul-masthead-col_12 dul-masthead-auxLinks"><div class="dul-masthead-col_2 dul-masthead-moreLink"><a href="//library.duke.edu/libraries" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'Libraries Menu\\\', eventLabel: \\\'More\\\'});">More »</a></div> <div class="dul-masthead-col_10 dul-masthead-auxHelp"></div></div></div></div><!-- End Item Container --></li><!-- End Item --><li class="dul-masthead-mega_toplevel" ><a href="//library.duke.edu/about" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'About Menu\\\', eventLabel: \\\'About Portal\\\'});">About</a><!-- Begin Item --><div class="dul-masthead-dropdown_fullwidth" ' . $dropdownStyle . ' style="left: 0; top: auto; "><!-- Begin Item Container --><div class="dul-masthead-menu-items"><div class="dul-masthead-col_3"><ul><li><a href="//library.duke.edu/about/hours" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'About Menu\\\', eventLabel: \\\'Hours\\\'});">Hours</a></li><li><a href="//library.duke.edu/apps/directory/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'About Menu\\\', eventLabel: \\\'Staff\\\'});">Staff &amp; Departments</a></li><li><a href="//library.duke.edu/about/jobs" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'About Menu\\\', eventLabel: \\\'Jobs\\\'});">Jobs</a></li></ul></div><div class="dul-masthead-col_3"><ul><li><a href="//library.duke.edu/about/directions" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'About Menu\\\', eventLabel: \\\'Directions\\\'});">Directions, Maps, Parking</a></li><li><a href="//library.duke.edu/about/contact" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'About Menu\\\', eventLabel: \\\'Contact\\\'});">Contact Us</a></li></ul></div><div class="dul-masthead-col_3"><ul><li><a href="http://blogs.library.duke.edu/" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'About Menu\\\', eventLabel: \\\'News\\\'});">News, Events, Exhibits</a></li><li><a href="//library.duke.edu/about/surveys-reports" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'About Menu\\\', eventLabel: \\\'Surveys Reports\\\'});">Surveys &amp; Reports</a></li><li><a href="//library.duke.edu/support" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'About Menu\\\', eventLabel: \\\'Support the Libraries\\\'});">Support the Libraries</a></li></ul></div><div class="dul-masthead-col_3 dul-masthead-featureColumn"><a href="http://blogs.library.duke.edu/magazine/" class="dul-masthead-featureLink" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'About Menu\\\', eventLabel: \\\'Feature\\\'});"><img class="dul-masthead-megaFeature img-polaroid" src="//library.duke.edu/masthead/img/promos/about.jpg"><br><div class="dul-masthead-featureCaption">Duke Libraries Magazine</div></a></div><div class="dul-masthead-col_12 dul-masthead-auxLinks"><div class="dul-masthead-col_2 dul-masthead-moreLink"><a href="//library.duke.edu/about" onclick="ga(\\\'send\\\', \\\'event\\\', { eventCategory: \\\'Masthead\\\', eventAction: \\\'About Menu\\\', eventLabel: \\\'More\\\'});">More »</a></div> <div class="dul-masthead-col_10 dul-masthead-auxHelp"></div></div></div></div><!-- End Item Container --></li><!-- End Item --></ul><!-- End Mega Menu --></div><!-- End Menu Container --></nav></div></header>';

header('Content-Type: application/javascript');
echo "(function(window,document){\n";
    echo "var _dmh = _dmh || {};\n";
    echo "_dmh.window = window;\n";
    echo "_dmh.document = document;\n";
    echo "_dmh.stylesheet = '" . $styleSheet . "'\n";
    echo "_dmh.mastheadMarkup = '" . $mastheadMarkup . "';\n";
    echo file_get_contents('js/load-masthead.min.js') . "\n";
echo "})(window,document)\n";

?>