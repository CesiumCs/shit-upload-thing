# thingy uploader

uploads files to a webserver and change its name to a md5 hash

you probably just shouldnt use this; its very possible that the seventeen year
who glued this shitshow together missed some important security things and 
isn't responsible for you accidentally opening your server to arbitrary code
execution from the whole world or some spooky shit like that

## how to use

step one: dont

just put the files somewhere in a folder that your webserver can access and exec
with php and MAKE SURE IT HAS SOME KIND OF AUTH OR YOU WILL BE VERY SAD!

**THIS DOES NOT PROVIDE ITS OWN AUTH.**

replace the variables that look like they point to the wrong url and make it
point to the right url.

if you wanna upload shit from the command line, get the auth header from your
browser's inspect element network tab and replace the auth variable with it in
upload.sh

## example apache stuff

this wont work without modifying for your own use case

```
Alias "/i" "/home/kira/webshare"
	<Directory "/home/kira/webshare">
		Require all granted
		Order allow,deny
		Allow from all
		LimitRequestBody 0
		Options Indexes
		<FilesMatch "ui.php">
			AuthType Basic
			AuthName "aaaaaaaaa"
			AuthUserFile /etc/apache2/.htpasswd
			Require valid-user
		</FilesMatch>
		<FilesMatch "upload.php">
			AuthType Basic
			AuthName "poop fart you're butt pants"
			AuthUserFile /etc/apache2/.htpasswd
			Require valid-user
		</FilesMatch>
		<FilesMatch "index.*">
			AuthType Basic
			AuthName "lol no index for you"
			AuthUserFile /etc/apache2/.htpasswd
			Require valid-user
		</FilesMatch>
	</Directory>
```

you can set up that `/etc/apache2/.htpasswd` thing by following some tutorial
online that uses the `htpasswd` command that comes with apache
