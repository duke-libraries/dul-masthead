Masthead
=======

This masthead is designed to be included across different Duke University Library and vendor hosted systems.

It includes a javascript file that inserts the masthead markup and stylesheet into the DOM of the page on which it is included.

Including the masthead
=======

1. Add the script to the head of the web page.

    This example shows the javascript file include as well as the two parameters that customize the masthead for the page. (More details below.) In this case the masthead is for a fixed width page that is 990px wide.

    ```
    <script src="//library.duke.edu/masthead/load-masthead.js.php?width=990&amp;fixed=true"></script>
    ```

2. Optionally, you may add a placeholder div with an id of "dul-masthead-filler" that helps mask the time it takes to load the real masthead via Javascript. This div may be placed anywhere in the page markup. You may need to alter the inline styles for your particular page, for instance, if it is wider than 990px.

    A basic example:

    ```
      <!-- This is the basic masthead filler that is replaced via javascript -->
      <div id="dul-masthead-filler" style="width: 100%; text-align: center;">
          <div class="dul-masthead-wrapper" style="height: 105px; width: 990px; max-width: 990px; background-color:#053482; margin: 0 auto; margin-bottom: -2px;">
              <a href="//library.duke.edu/"><img src="//library.duke.edu/masthead/img/logo.png" alt="Duke University Libraries" id="dul-masthead-logo" style="float: left; margin: 20px;"></a>
          </div>
      </div>
    ```

Customize the masthead
=======

The load-masthead.js.php script accepts two paramters that customize the masthead to match different page designs.

| Paramater     | Default       | Accepted Values  | Notes|
| ------------- |:------------- |:---------------- |:--------------------------------------------------------------|
| fixed         | false         | true,false       | Use "true" for fixed width pages and "false" for responsive pages.|
| width         | 990           | any number       | Defines the width or max-width of the page.                   |


Development
===========

* load-masthead.js.php is the main application. It contains the complete HTML markup for the header and also checks for the parameters that set the width of the masthead and whether it should be fixed or flexible. It also checks for IE and selects the appropropriate stylesheets based on these parameters.

* Only the scss files in the scss directory should be edited manually. The css files are generated automatically with Guard (see below).

* Likewise, only the js/load-masthead.js file should be edited manually. The minified version is generated automatically. See below the instructions about Guard.

Installing and using Guard
===========

* [Guard](https://github.com/guard/guard) is a Ruby Gem that watches for changes to files and then executes an action. You can install it on your workstation by running the following:
  ```
  $ gem install guard
  ```
* Guard requires additional gems in order to execute specific actions. In this case we want it to watch for changes to scss files and then to compile css from those files. And we want it to watch for changes to a javascript file and output a minified version of that file. For these purposes we'll need to install [Guard-LiveReload](https://github.com/guard/guard-livereload), [Guard-Sass](https://github.com/hawx/guard-sass) and, [Guard-Uglify](https://github.com/pferdefleisch/guard-uglify).
  ```
  $ gem install guard-livereload
  $ gem install guard-sass
  $ gem install guard-uglify
  ```
* Once these are installed you can start guard. I've already added a Guardfile that tells Guard what to watch and where to output the files.
  To start watching for stylesheet changes open a terminal at the masthead project's root directory and enter the following:
  ```
  $ guard -g sass
  ```
  Then open another terminal at the masthead project's root directory and enter:
  ```
  $ guard -g uglify
  ```
  Now, any time the scss or javascript files change guard will output the compiled css and minified javascript.
