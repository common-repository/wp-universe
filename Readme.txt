=== WP-Universe ===
Contributors: raistlinthewiz
Donate link: http://featplug.huseyinuslu.net/donate
Tags: blog, wordpress, universe,categories,rss,feed, subdomain,domain, multi-user, multi
Requires at least: 2.6
Tested up to: 2.61
Stable tag: 0.1

WP-Universe creates a blog universe based on categories of a Wordpress blog.

== Description ==

WP-Universe creates a blog universe based on categories of a Wordpress blog.

Blog universe is a Wordpress blog which serves more than one domain/subdomain. WP-Universe does not require any coding/template editing
but automaticly handles the universe-creation. To explain the concept universe;

Let's assume we have a blog - http://www.myblog.com - which is our main blog. Let's say we have categories gaming, coding and life.
After enabling WP-Universe you can match categories to universe subdomains or domains;

Category Gaming -> http://gaming.myblog.com
Category Coding -> http://coding.myblog.com
Category Life   -> http://life.myblog.com

With a simple configuration your universe will be;

* http://www.myblog.com    - Main Blog / Universe / Serves all content from all categories
* http://gaming.myblog.com - Gaming Universe; will just serve content from GAMING category and it's subcategories.
* http://coding.myblog.com - Coding Universe; will just serve content from CODING category and it's subcategories.
* http://life.myblog.com   - Life Universe; will just serve content from LIFE category and it's subcategories.

= Demos & Sites Using =
WP-Universe runs on my main blog, check;

 * [http://www.huseyinuslu.net](http://www.huseyinuslu.net)   - Main Universe
 * [http://war.huseyinuslu.net](http://war.huseyinuslu.net)   - Warhammer Online Portal
 * [http://wow.huseyinuslu.net](http://wow.huseyinuslu.net)   - World of Warcraft Portal
 * [http://devel.huseyinuslu.net](http://devel.huseyinuslu.net) - Coding Portal

== Installation ==

 * Upload WP-Universe to your blog's wp-content/plugins directory 
 * Activate the plugin  
 * Goto category managment and for each category you want to be served as sub-universes, put URL of sub-universe to categories description field.
 * Enable/Redirect subdomain/domain to your Wordpress installation.

To better understand step 3;

 * Let's say we got our blog at http://www.myblog.com and have a category named Wordpress. We want it to be served as http://wordpress.myblog.com
 * Goto category managment [Managment/Category Menu under Wordpress Adminstration] 
 * Find Wordpress category and click it to edit.
 * Write http://wordpress.myblog.com to description field of the category and click "Edit Category"
 * Add a subdomain using your hosting control panel/dns controller to your default IP.

That's it!

== Frequently Asked Questions ==
 
= Do i need to add a code / edit template? =
No WP-Universe needs to coding/editing at all. Everything is simple!

= Will it work with every plugin / theme? =
WP-Universe uses standarts methods and hooks itself to Wordpress default functions (get_posts). 
So that every plugin/theme with standart coding guidelines will just work with WP-Universe. 

= What about feeds? =
Your feeds will also be universe enabled!