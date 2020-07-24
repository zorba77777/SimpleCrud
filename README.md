В приложении реализован паттерн "Единая точка входа". Для работы приложения необходимо настроить веб-сервер  так, чтобы он перенаправлял запросы на несуществующие страницы на файл index.php, который находится в корне сайта.

Для Apache нужно создать файл .htaccess в корне сайта, написать соответствующие правила перенаправления:

        RewriteEngine on
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule . index.php [L]

Для NGINX подойдут такие настройки:

	location / {
		if (!-e $request_filename) {
			rewrite ^/(.*)$ /index.php?q=$1;
		}
	}

	location ~ \.php$ {
		if (!-e $request_filename) {
			rewrite ^/(.*)$ /index.php?q=$1;
		}
		include fastcgi_params;
		include snippets/fastcgi-php.conf;
		fastcgi_pass unix:/run/php/php7.4-fpm.sock;
		fastcgi_param  SCRIPT_FILENAME /var/www/crud/index.php;
	}

Настройки базы данных находятся в папке config в корне сайта, в файле config.php. Чтобы приложение начало работать, необходимо внести свои настройки базы данных и создать таблицу positions следующей командой:

	CREATE TABLE positions (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		attr1 VARCHAR(255),
		attr2 VARCHAR(255)
	);


