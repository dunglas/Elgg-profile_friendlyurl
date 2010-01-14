= Profile Friendly URL =
Kévin Dunglas <dunglas@gmail.com> - http://lapin-blanc.net - 2010 - GPL v2

Creates friendly URLs for user's profiles as subdomains.
Ie: http://example.com/pg/profile/user will become http://user.example.com

== Requirements ==
 * Access to the configuration of your DNS server
 * The Apache web server (either, you need to port the rewriting rules from the .htaccess file to the syntax supported by your web server)
 * PHP installed as module (as CGI, or with some restricting Apache configurations, you need to set the `session.cookie_domain` param of the `php.ini` file to something like ".yourdomain.com")

== Install ==
1. Add a wildcard entry to your DNS server. Every should point to the web server hosting the Elgg application.
   You can add a Bind entry like: *.example.com.   3600 IN  CNAME 10 www.example.com.
2. If you are using Apache virtual hosts, add every subdomains to the Elgg vhost like this:
   <VirtualHost *>
     ServerName example.com
     ServerAlias *.punxrezo.net
     [...]
   </VirtualHost>
3. Backup then replace the .htaccess file in the your root Elgg directory by the htaccess-dist file of the plugin directory.
   Edit this new .htaccess file and replace all occurrences of "example.com" by something like "yourdomain.com".
4. Enable the profile_friendlyurl plugin from the Elgg administration.
5. In the plugin settings form set the domain name to use.

== Todo ==
 * Change every URLs to the new format (especially for river's items)
