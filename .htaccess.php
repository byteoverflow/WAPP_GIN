<IfModule mod_rewrite.c>
  RewriteEngine On
  # !IMPORTANT! Set your RewriteBase here and don't forget trailing and leading
  #  slashes.
  # If your page resides at
  #  http://www.example.com/mypage/test1
  # then use
  # RewriteBase /mypage/test1/
  RewriteBase /GIN/
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule ^(.*)$ index.php?/$1 [L]
</IfModule>
 
<IfModule !mod_rewrite.c>
  # If we don't have mod_rewrite installed, all 404's
  # can be sent to index.php, and everything works as normal.
  # Submitted by: ElliotHaughin
 
  ErrorDocument 404 /index.php
</IfModule>