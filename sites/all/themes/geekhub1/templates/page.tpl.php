<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>

<?php $theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));?>

<?php if (!$is_front) {print '<div class="inner">';} ?>
<div id="wrap">
  <div id="header" > <!-- Шапка сайта -->
    <h1><a href="/">GeekHub</a></h1>
    <ul class="nav">
      <li><a href="/">Головна</a></li>
      <li><a href="/?q=about">Про GeekHub</a></li>
      <li><a href="/?q=team">Команда</a></li>
      <li><a href="/?q=faq">FAQ</a></li>
      <li><a href="/?q=contacts">Зв’язок</a></li>
      <?php /*echo $theme_path . "/images/splash.png"; */?>
    </ul>
    <ul class="links">
      <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
      <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
      <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
      <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
    </ul>

   <?php
    if ($is_front) {print '
     <span class="line"></span>

        <h4 class="registration">Реєстрацію на 4й сезон закрито</h4>
        <p class="note">*залиште нам ваш емейл і ми повідомимо вас про початок реєстрації</p>
        <form action="#">
            <fieldset>
                <span></span>
                <input type="text" class="email" placeholder="Ваш email" />
                <input type="submit" value="Відіслати" />
            </fieldset>

        </form>
      <img src="http://geekhub.ck.ua/images/.png" alt="splash" />

    ';}
    ?>


  </div><!-- header -->

  <div class="content">

  <?php if ($is_front) {print '<div class="home">';} ?>

  <?php if ($page['sidebar_first']): ?>
    <div id="sidebar">
        <?php print render($page['sidebar_first']); ?>
      </div> <!-- /#sidebar -->
  <?php endif; ?>

<?php if (!$is_front) {print '<div class="details">';} ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h2>
          <?php print $title; ?>
        </h2>
      <?php endif; ?>

      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>

<?php if (!$is_front) {print '</div>';} ?><!-- /.details -->


  <?php if ($is_front) {print '
  <ul class="social_share">
    <li id="vk">
      <script type="text/javascript">
        VK.Widgets.Group("vk", {mode: 0, width: "276", height: "240"}, 30111409);
      </script>
    </li>
    <li class="sertificates_list">
      <h4><a href="/certified-professionals.html">Сертифiкованi професiонали</a></h4>
    </li>
    <li>
      <h4>Наші Спонсори</h4>
      <ul>
        <li class="de"><a href="http://povnahata.com">Дім Євангелія</a></li>
        <li class="moc"><a href="http://masterofcode.com">Masterofcode LTD</a></li>
        <li class="sergium"><a href="http://sergium.net">SerGium.net</a></li>
        <li class="clear left stuff"><a href="http://val.co.ua/">val.co.ua/</a></li>
        <li class="youthog"><a href="http://yothog.com">Youthog.com</a></li>
        <li class="jetbrains"><a href="http://jetbrains.com/">JetBrains.com</a></li>
        <li class="ucoz"><a href="http://rabota.ucoz.ua/">ucoz.ua</a></li>
        <li class="spd-ukraine"><a href="http://spd-ukraine.com/">SPD-Ukraine.com</a></li>
        <li class="ekreative"><a href="http://www.ekreative.com/">Ekreative.com</a></li>
        <li class="n3wnormal"><a href="http://n3wnormal.com/">n3wnormal.ua</a></li>
        <li class="in-ck-ua"><a href="http://in.ck.ua/">in.ck.ua</a></li>
      </ul>
    </li>
  </ul>';} ?>

  <?php if ($is_front) {print '</div>';} ?> <!-- /#home -->
  </div><!-- /#content -->

   <ul id="footer">
    <li>
      <ul class="nav">
        <li><a href="/">Головна</a></li>
        <li><a href="/?q=about">Про GeekHub</a></li>
        <li><a href="/?q=team">Команда</a></li>
        <li><a href="/?q=contacts">Зв’язок</a></li>
      </ul>
    </li>
    <li>© Copyright 2011</li>
  </ul>

</div><!-- /#wrap -->
<?php if (!$is_front) {print '</div>';} ?>