# Small Screen Superman

Superman fansite - [sssuperman.com](https://www.sssuperman.com/)

I started this in 2017 when I was still in school, but didn't keep working on it for very long. In late 2023, I decided to go back to it more seriously. I implemented Twig for templates and cleaned things up (it was formerly just a very basic PHP site). The CSS and JavaScript is still pretty messy and not very modern or professional, though it's not a huge priority to improve it since I'd rather work on website features and content (I'll get to it eventually).

## .htaccess

My initial plan to use .env files didn't work out (for now), so environmental variables are in the .htaccess file and thus I cannot include it in this repo. Here is what the .htaccess file looks like on dev:

````
SetEnv APP_ENV "dev"
SetEnv DB_HOST "db"
SetEnv DB_NAME "db"
SetEnv DB_USER "root"
SetEnv DB_PASS "root"

<IfModule mod_rewrite.c>
  RewriteEngine On
  RewriteRule ^templates.*$ / [L,R]
  RewriteRule ^(.*)-contents.html$ /$1.php [L,R]
</IfModule>
````

## Custom/customized extensions

I didn't want to include the vendor folder in the repo, but want to keep a record of any custom/customized extensions, so I'm using Gists for that for now.
- [PHPFunctionExtension](https://gist.github.com/talia-storymaker/11576d90a848b7b87f0b45550967e835)
