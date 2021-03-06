<?php $head['title'] = R_('Xfce 4.4 tour'); ?>

<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('As of today, the long awaited version 4.4.0 of the Xfce Desktop Environment is finally available. I will try to highlight some of the new features which have been added since the last stable release.') ?>
</p>

<h2><?php E_('Desktop Icons') ?></h2>

<p>
  <?php E_('One of the most often requested features during the 4.0 and 4.2 was support for icons on the desktop. Now, with Xfce 4.4.0, this feature was finally added to the desktop manager <b>Xfdesktop</b>.') ?>
</p>

<?php print_figure ('about/tour/4.4/desktop-icons.png', R_('Desktop Icons')) ?>

<p>
  <?php E_('The desktop manager utilizes <b>Thunar</b>\'s libraries to handle application launchers and regular files/folders on the desktop. The desktop manager is also able to display icons for minimized windows on the desktop, which is quite a popular feature from the CDE world. Of course, you can disable the desktop icons altogether if you prefer a clean desktop.') ?>
</p>

<?php print_figure ('about/tour/4.4/desktop-settings.png', R_('Desktop Settings')) ?>

<p>
  <?php E_('<b>Xfdesktop</b> also continues to provide access to the applications menu, as it did in the previous Xfce releases.') ?>
</p>


<h2><?php E_('File Manager') ?></h2>

<p>
  <?php E_('The desktop icon support goes hand in hand with the new file manager <a href="http://thunar.xfce.org/">Thunar</a> which replaces the previous file manager <b>Xffm</b>.') ?>
</p>

<?php print_figure ('about/tour/4.4/thunar.png', R_('Thunar File Manager')) ?>

<p>
  <?php E_('<b>Thunar</b> was written from scratch to provide an easy to use, but still very lightweight file manager for Xfce. Its user interface was designed to look similar to the file chooser which was introduced with GTK+ 2.4, and other file managers such as <b>Nautilus</b> and <b>pcmanfm</b> already picked up that idea as well.') ?>
</p>

<p>
  <?php E_('<b>Thunar</b> supports all the file management functionality which users will expect, and also several advanced features. For example, a so-called <i>Bulk Renamer</i> is included which allows users to rename multiple files at once using a certain criterion.') ?>
</p>

<?php print_figure ('about/tour/4.4/thunar-bulk-rename.png', R_('Thunar Bulk Rename')) ?>

<h2><?php E_('Removable Drives and Media') ?></h2>

<p>
  <?php E_('Xfce 4.4.0 provides easy access to data on removable drives and media. Just insert the media into the drive or plug the new drive in to the computer and an icon representing the removable volume will appear on the desktop and in <b>Thunar</b>\'s side pane.') ?>
</p>

<?php print_figure ('about/tour/4.4/removable-volumes.png', R_('Removable Volumes')) ?>

<p>
  <?php E_('Click on the icon to automatically mount the volume. Right-click the icon to unmount the drive or eject the media from the drive. Note however that this feature requires <a href="http://freedesktop.org/wiki/Software_2fhal">HAL</a> and is therefore only available for Linux 2.6.x and FreeBSD 6.x and above at the time of this writing (there is limited removable media support for FreeBSD 4.x and 5.x which does not require HAL).') ?>
</p>


<h2><?php E_('Text Editor') ?></h2>

<p>
  <?php E_('The new text editor <b>MousePad</b> is included with this release. <b>MousePad</b> provides all the basic editor functionality, nothing more, nothing less.') ?>
</p>

<?php print_figure ('about/tour/4.4/mousepad.png', R_('MousePad')) ?>

<p>
  <?php E_('You can think of <b>MousePad</b> as the equivalent to <b>NotePad</b> on Windows. It starts up very fast, usually in less than one second, even on older systems.') ?>
</p>

<h2><?php E_('Window Manager') ?></h2>

<p>
  <?php E_('<b>Xfwm4</b> continues to be the window manager of the hearts.') ?>
</p>

<?php print_figure ('about/tour/4.4/xfwm4-argb32.png', R_('Xfwm4 ARGB32')) ?>

<p>
  <?php E_('This release features an enhanced compositor, supporting transparent ARGB windows, shadows, window frame transparency and much more.') ?>
</p>

<?php print_figure ('about/tour/4.4/xfwm4-switcher.png', R_('Xfwm4 Switcher')) ?>

<p>
  <?php E_('<b>Xfwm4</b> also includes a brand new application switcher, as shown in the screenshot above, which displays all windows from the current workspace with icons and window titles.') ?>
</p>

<?php print_figure ('about/tour/4.4/xfwm4-themes.png', R_('Xfwm4 Themes')) ?>

<p>
  <?php E_('Further on support for multiple image formats for window decoration themes was added, including <tt>PNG</tt>, <tt>GIF</tt> and <tt>SVG</tt> images.') ?>
</p>

<?php print_figure ('about/tour/4.4/xfwm4-tweaks.png', R_('Xfwm4 Tweaks')) ?>

<p>
  <?php E_('Advanced controls for the window manager were also added, allowing thorough tweaking of window behavior.') ?>
</p>


<h2><?php E_('Panel') ?></h2>

<p>
  <?php E_('The <b>Xfce4-panel</b> was completely rewritten for the Xfce 4.4 release. Multiple panels are supported <i>out of the box</i> now and can easily be configured using the new <b>Panel Manager</b> shown in the screenshot below.') ?>
</p>

<?php print_figure ('about/tour/4.4/panel-manager.png', R_('Panel Manager')) ?>

<p>
  <?php E_('One of the major problems in previous Xfce releases was that every plugin had to be run in the same process as the panel, and hence every plugin was able to crash the whole panel. To address this issue, support for external plugins was added to the panel.') ?>
</p>

<?php print_figure ('about/tour/4.4/panel-additem.png', R_('Panel Add Item Dialog')) ?>

<p>
  <?php E_('Developers of panel plugins can now decide whether the plugin should run as external process or as part of the panel process, depending on the stability of the plugin.') ?>
</p>

<?php print_figure ('about/tour/4.4/panel-iconbox.png', R_('Panel Icon Box Plugin')) ?>

<p>
  <?php E_('Since there is now support for multiple panels, the separate <b>Xftaskbar4</b> and <b>Xfce4-iconbox</b> utilities are no longer required. Instead, both the taskbar and the iconbox are available as panel plugins now.') ?>
</p>

<p>
  <?php E_('Most of the additional panel plugins, available via the <a href="http://goodies.xfce.org/">Xfce Goodies Project</a>, have been updated for the new panel, and several new plugins were added. For example, the brand new <b>xfce4-xfapplet-plugin</b> allows users to add GNOME panel applets to the Xfce panel.') ?>
</p>


<h2><?php E_('Time Management') ?></h2>

<p>
  <?php E_('The new time management application <b>Orage</b> replaces the <b>Xfcalendar</b>, which was introduced with Xfce 4.2.0. <b>Orage</b> provides several features to efficiently manage your time.') ?>
</p>

<?php print_figure ('about/tour/4.4/orage.png', R_('Orage')) ?>

<p>
  <?php E_('While <b>Orage</b> is very lightweight and easy to use, it supports all the important features found in larger calendar applications like <b>Outlook</b> or <b>Evolution</b>. While <b>Xfcalendar</b> used the custom <tt>dbh</tt> format in the past to store your settings, <b>Orage</b> is based on <tt>ical</tt> and therefore compatible with other calendar applications.') ?>
</p>


<h2><?php E_('Terminal Emulator') ?></h2>

<p>
  <?php E_('While <b>Terminal</b> was already available during the 4.2 days, it was not mature enough at that time to be part of the core. With this major release, it was moved into the core desktop.') ?>
</p>

<?php print_figure ('about/tour/4.4/terminal.png', R_('Terminal')) ?>

<p>
  <?php E_('Besides the basic features which you might expect from a terminal emulator, it includes some nice additional features, like multiple tabs per window, customizable toolbars and the ability to configure nearly every aspect of the application via <i>hidden options</i>. As can be seen in the screenshot above, this release also supports real transparency using <b>Xfwm4</b>\'s integrated composition manager.') ?>
</p>


<h2><?php E_('Printing') ?></h2>

<p>
  <?php E_('<b>Xfprint</b>, the Xfce printing management application, saw several small improvements with this release. First, the <tt>a2ps</tt> converter is not mandatory anymore, whilst still recommended. Support for <tt>CUPS</tt> 1.2 was added and <b>Xfprint</b> is now able to display the printer state with the <tt>CUPS</tt>-backend.') ?>
</p>

<?php print_figure ('about/tour/4.4/xfprint.png', R_('Xfce Printing')) ?>

<p>
  <?php E_('<b>Xfprint</b> also integrates with <b>MousePad</b> to provide generic printing support for different kinds of text documents using the <tt>a2ps</tt> converter.') ?>
</p>

<?php print_figure ('about/tour/4.4/xfprint-dialog.png', R_('Xfce Print Dialog')) ?>

<p>
  <?php E_('As you can see the print dialog still looks relatively similar to that of Xfce 4.2, but the internal workings of the printing support were improved, especially the <tt>CUPS</tt> support. Besides that, the printing management functionality was moved to a library, so other applications can use the API to access the printer configuration.') ?>
</p>


<h2><?php E_('Autostart') ?></h2>

<p>
  <?php E_('Xfce 4.4.0 implements the new <a href="http://freedesktop.org/wiki/Standards_2fautostart_2dspec">Autostart Specification</a> - actually Xfce was the first desktop to implement said feature, but the others were faster to release. ;-)') ?>
</p>

<?php print_figure ('about/tour/4.4/autostart.png', R_('Xfce Autostart Editor')) ?>

<p>
  <?php E_('The specification consists of two parts, the <i>Autostart of Applications During Startup</i>, which is implemented in <b>xfce4-session</b> and the <i>Autostart Of Applications After Mount</i> which is implemented in <a href="http://foo-projects.org/~benny/projects/thunar-volman/index.html">thunar-volman</a>. This release also includes the <b>xfce4-autostart-editor</b>, shown in the screenshot above, which allows users to easily add, remove or disable autostarted applications.') ?>
</p>


<h2><?php E_('Settings') ?></h2>

<p>
  <?php E_('This release introduces new options to customize the desktop to your needs. Some examples of new settings dialogs were already shown in the sections above.') ?>
</p>

<?php print_figure ('about/tour/4.4/preferences-applications.png', R_('Preferred Applications')) ?>

<p>
  <?php E_('The preferred applications framework, which was previously only available in <b>Terminal</b>, was imported into Xfce, so users no longer need to edit shell profiles to specify which browser and terminal emulator should be used by Xfce applications. The goal was to make it as easy as possible to change an application for a certain category (GNOME users may have already noticed that GNOME adopted this approach, because it is such simple).') ?>
</p>

<?php print_figure ('about/tour/4.4/preferences-keyboard.png', R_('Keyboard Shortcuts')) ?>

<p>
  <?php E_('And then there was the problem with the keyboard shortcuts in Xfce 4.2... Xfce 4.2 limited the number of freely available keyboard shortcuts, while people wanted to assign any number of keyboard shortcuts. With Xfce 4.4 this limitation is history and the application shortcuts are now separated from the window manager shortcuts.') ?>
</p>


<h2><?php E_('Feedback') ?></h2>

<p>
  <?php E_('Please post comments on this article in my <a href="http://xfce-diary.blogspot.com/2007/01/visual-tour-of-xfce-440.html">blog</a> and use the <a href="/community/lists">xfce</a> mailinglist if you have questions about Xfce 4.4.0 or trouble with the installation.') ?>
</p>


<h2><?php E_('Links') ?></h2>

<ul>
  <li><a href="http://www.xfce.org/"><?php E_('Xfce website') ?></a></li>
  <li><a href="http://thunar.xfce.org/"><?php E_('Thunar website') ?></a></li>
</ul>

<h2><?php E_('Credits') ?></h2>

<p><?php E_('Written by Benedikt Meurer, 21 Jan 2007') ?></p>
