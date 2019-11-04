<?php
namespace TymFrontiers;
use \Michelf\Markdown;
require_once "app.init.php";
require_once APP_BASE_INC;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" manifest="./site.manifest">
  <head>
    <meta charset="utf-8">
    <title>Terms and Conditions | <?php echo PRJ_TITLE; ?></title>
    <?php include PRJ_INC_ICONSET; ?>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta name="keywords" content="<?php echo PRJ_KEYWORDS; ?>">
    <meta name="description" content="<?php echo PRJ_DESCRIPTION; ?>">
    <meta name="author" content="<?php echo PRJ_AUTHOR; ?>">
    <meta name="creator" content="<?php echo PRJ_CREATOR; ?>">
    <meta name="publisher" content="<?php echo PRJ_PUBLISHER; ?>">
    <meta name="robots" content='index'>
    <!-- Theming styles -->
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/web-theme/css/web-theme.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/web-theme/css/web-theme-<?php echo PRJ_THEME; ?>.min.css">
    <!-- optional plugin -->
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/web-plugin/css/web-plugin.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/web-dnav/css/web-dnav.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/web-fader-box/css/web-fader-box.min.css">
    <!-- Project styling -->
    <link rel="stylesheet" href="<?php echo \html_style("base.css"); ?>">
  </head>
  <body>
    <?php include PRJ_INC_HEADER; ?>
    <section id="main-content">
      <div class="view-space">
        <div class="sec-div padding -p10">
          <?php
          if (\file_exists(PRJ_ROOT . "/src/prj-terms.md") && $terms = \file_get_contents(PRJ_ROOT . "/src/prj-terms.md")) {
            $terms = Markdown::defaultTransform($terms);
            echo $terms;
          }
           ?>
        </div>
      </div>
    </section>
    <?php include PRJ_INC_FOOTER; ?>
    <!-- Required scripts -->
    <script src="<?php echo WHOST; ?>/7os/jquery/js/jquery.min.js">  </script>
    <script src="<?php echo WHOST; ?>/7os/js-generic/js/js-generic.min.js">  </script>
    <script src="<?php echo WHOST; ?>/7os/web-theme/web-theme.min.js" ></script>
    <!-- optional plugins -->
    <script src="<?php echo WHOST; ?>/7os/web-plugin/web-plugin.min.js" ></script>
    <script src="<?php echo WHOST; ?>/7os/web-dnav/web-dnav.min.js" ></script>
    <script src="<?php echo WHOST; ?>/7os/web-fader-box/web-fader-box.min.js" ></script>
    <!-- project scripts -->
    <script src="<?php echo \html_script ("base.min.js"); ?>" ></script>
  </body>
</html>
