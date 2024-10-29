=== Basic Optimization ===
Author: Micro Solutions Bangladesh
Author URI: https://microsolutionsbd.com/
Contributors: shahalom
Tags: basic optimization, wordpress optimization, disable emoji, remove shortlink, remove css version, remove js version, remove rsd links, disable embeds, disable xml-rpc, remove wlmanifest link, disable self pingback, hide wordpress version, disable heartbeat
Requires at least: 5.1
Tested up to: 5.5
Requires PHP: 7.0
Stable tag: trunk
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0

Very basic features offering by Basic Optimization for WordPress plugin. Like - Disable Emoticons, Remove Shortlink, Disable Embeds, Disable XML-RPC, Hide WordPress Version, etc. You will always able to manage this option from the setting page of the Basic Optimization for WordPress plugin. This plugin is an open source project, made possible by your contribution (code).

== Description ==
Basic Optimization for WordPress plugin help to manage basic optimization like - Disable Emoticons, Remove Shortlink, Disable Embeds, Disable XML-RPC, Hide WordPress Version, etc. Basic Optimization for WordPress plugin is an open source project, made possible by your contribution (code).


### Features ###
* **Disable Emoticons** - Remove extra code related to emojis from WordPress which was added recently to support emoticons in an older browser.
* **Remove Shortlink.** - Starting from version 3, WordPress added shortlink (shorter link of web page address) in header code. For ex: `<link rel='shortlink' href='https://mcqacademy.com/?p=187' />`. If not using shortlink for any functionality then we ned to remove them.
* **Remove asset files version** - Having query strings in the files may cause CDN not to cache the files; hence you may not be utilizing all caching benefits provided.
* **Remove RSD Links** - RSD (Really Simple Discovery) is needed if you intend to use XML-RPC client, pingback, etc. However, if you don’t need pingback or remote client to manage post then get rid of this unnecessary header.
* **Disable Embeds** - WordPress introduced oEmbed features in 4.4. The function will prevent others from embedding your blog post and disable loading related JS file.
* **Disable XML-RPC** - Do you have a requirement to use WordPress API (XML-RPC) to publish/edit/delete a post, edit/list comments, upload file? Also having XML-RPC enabled and not hardened properly may lead to DDoS & brute force attacks.
* **Remove WLManifest Link** - Do you use tagging support with Windows live writer? If not remove it by adding below.
* **Disable Self Pingback** - I don’t know why you need the self-pingback details on your blog post and I know it’s not just I get annoyed.
* **Hide WordPress Version** - This doesn’t help in performance but more to mitigate information leakage vulnerability. By default, WordPress adds meta name generator with the version details which is visible in source code and HTTP header.
* **Disable Heartbeat** - WordPress use heartbeat API to communicate with a browser to a server by frequently calling admin-ajax.php. This may slow down the overall page load time and increase CPU utilization if on shared hosting.

* **Support** - Active support through [GitHub issues page](https://github.com/Micro-Solutions-Bangladesh/basic-optimization/issues)

Note that Basic Optimization requires PHP 7+ to run.

Basic Optimization for WordPress is an open source project and I would like to invite anyone to contribute. The development and issue tracker is located on GitHub, see: [https://github.com/Micro-Solutions-Bangladesh/basic-optimization](https://github.com/Micro-Solutions-Bangladesh/basic-optimization)

### Reporting problems ###
Report bugs, issues, questions and/or feature request on our [GitHub issues page](https://github.com/Micro-Solutions-Bangladesh/basic-optimization/issues).

== Installation ==
Manual installation by uploading .zip file via WordPress admin
1. Navigate to > `Plugins` > `Add New`
2. On your top left > click on `Upload Plugin` and select your .zip file you downloaded from [wordpress.org](https://wordpress.org/plugins/basic-optimization/) and click `Install Now`
3. By activating the plugin, jQuery and jQuery Migrate are updated to the latest stable version. (Plugin settings are located under `Tools`)

Manual installation by uploading folder/directory via FTP, SFTP or SSH
1. Unzip (extract/unpack/uncompress) the .zip file you downloaded from [wordpress.org](https://wordpress.org/plugins/basic-optimization/)
2. Upload the folder `basic-optimization` to the `/wp-content/plugins/` directory on your server
3. Activate the plugin through the 'Plugins' menu in WordPress
4. By activating the plugin, jQuery and jQuery Migrate are updated to the latest stable version. (Plugin settings are located under `Tools`)

== Frequently Asked Questions ==
= Is this plugin compatible with PHP 7, 7.1, 7.2, HHVM, et cetera, et cetera? =
Short answer: probably. Long answer: I honestly don't know for sure. I made a simple plugin. That's why I recommend a minimum of PHP 7.0. Also I do specific tests to ensure that I stay compatible with PHP 7.1

= This plugin breaks my site! How do I fix it? =
Deactivate the plugin and report this on the [GitHub project page](https://github.com/Micro-Solutions-Bangladesh/basic-optimization/issues), so that I could take a look into the matter.

= Does this plugin modify my WP installation? =
**No** modification to the WordPress installation is made, therefore deactivation and/or uninstallation of this plugin returns your site to it`s original state.

= Is it possible to disable Basic Optimization? =
Yes, this is possible and done in the plugin settings.

= What is Basic Optimization? =
**Basic Optimization for WordPress** plugin help to manage basic optimization like - Disable Emoticons, Remove Shortlink, Disable Embeds, Disable XML-RPC, Hide WordPress Version, etc. Basic Optimization for WordPress plugin is an open source project, made possible by your contribution (code).

= My question isn't answered here =
Somehow we overlooked your question, We apologize for this. Please visit contact us page of <a href="https://microsolutionsbd.com/contact-us/?about=Basic%20Optimization%20Plugin">Micro Solution Bangladesh</a> for your query.

== Screenshots ==
1. Settings: enable or disable the Disable Emoticons, Remove Shortlink, Disable Embeds, Disable XML-RPC, Hide WordPress Version, etc options.


== Changelog ==
See changelog on the [GitHub project page](https://github.com/Micro-Solutions-Bangladesh/basic-optimization/releases)

== Upgrade Notice ==
See changelog on the [GitHub project page](https://github.com/Micro-Solutions-Bangladesh/basic-optimization/releases)
