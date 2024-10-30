=== Hikari Unicornified Gravatars ===
Contributors: shidouhikari 
Donate link: http://Hikari.ws/wordpress/#donate
Tags: comment, comments, avatar, gravatar, unicorn, unicornify
Requires at least: 2.8.0
Tested up to: 2.9.2
Stable tag: 0.00.02

**Hikari Unicornified Gravatars** converts avatars from people that don't have a Gravatar, into customized unicorns.

== Description ==

**Hikari Unicornified Gravatars** converts avatars from people that don't have a Gravatar, into customized unicorns.

Commenters that have their email registered in Gravatar service are kept with their original Gravatars. But people not registered in Gravatar, instead of having a default avatar that always look the same, are provided with a variety of unicorns avatars, that are related and specific to their email.

And those anonymous commenters that don't provide any email, they receive randomized unicorns avatars, which change on every page load!!


That's possible thanks to <a href="http://meta.stackoverflow.com/questions/37328/my-godits-full-of-unicorns">StackOverflow</a>, which developed a Gravatar-compatible algorithm that generates <a href="http://blog.gravatar.com/2010/04/01/unicorn-gravatars-stack-overflow/">unicorns avatars</a> in place of standard Gravatar ones.


I dedicate Hikari Unicornified Gravatars to **Ju**, my beloved frient ^-^


= Features =

* Works instantly on any place where Wordpress <code>get_avatar()</code> function is used
* Uses <a href="http://unicornify.appspot.com/use-it">Unicornify</a> service to grab unicornified avatars, the same way Gravatar works
* Emails registered in Gravatar service are not changed, and their Gravatar is preserved
* Emails not registered in Gravatar, instead of showing a default avatar, show a unicorn related to their specific email
* When email is not provided (generally in anonymous comments), random unicorns are used, which change on every page reload
* Of course, emails are preserved inside Wordpress and never sent outside of it, privacy FTW ;)



== Installation ==

**Hikari Unicornified Gravatars** requires at least *Wordpress 2.8* and *PHP5* to work.

You can use the built in installer and upgrader, or you can install the plugin manually.

1. Download the zip file, upload it to your server and extract all its content to your <code>/wp-content/plugins</code> folder. Make sure the plugin has its own folder (for exemple  <code>/wp-content/plugins/hikari-unicornified-gravatar/</code>).
2. Activate the plugin through the 'Plugins' menu in WordPress admin page.
3. Go to your comments and see those ugly default gravatars being unicornified! :D




= Upgrading =

If you have to upgrade manually, simply delete <code>hikari-unicornified-gravatar</code> folder and follow installation steps again.


= Uninstalling =

If you wanna deactivate the plugin, just use the option in plugins page. **Hikari Unicornified Gravatars** stores no data in database, so you don't have to worry about it.



== Frequently Asked Questions ==

= Can I unicornify Gravatar-registered emails too? =

At the moment it's not possible, but in future versions this feature will be added :)

= Can I replace unicorns into other types of avatars?  =

Well, if somebody develop an equivalent Gravatar-compatible algorithm, then yes, it could be possible. In future versions I'm gonna allow changing the service URL, so that the plugin can be used elsewhere in case other services like this show up.

= Can I add unicorns in other places other than comments? =

Sure, just use the <a href="http://codex.wordpress.org/Function_Reference/get_avatar"><code>get_avatar()</code></a> Wordpress function anywhere you want, as you do normally!



== Screenshots ==

1. A commenter with ugly default avatar
2. Now he is unicornified! :D
3. **<a href="http://hikari.ws/enhanced-comments/">Hikari Enhanced Recent Comments</a>** widget, with a bunch of equal avatars
4. Now they are all different! :D


== Changelog ==

= 0.00 =
* First public release.

== Upgrade Notice ==

= 0.00 and above =
If you have to upgrade manually, simply delete <code>hikari-unicornified-gravatar</code> folder and follow installation steps again.
