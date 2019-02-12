# Northwest Energy Direct Ecommerce

Code for YouTube video series: [https://www.youtube.com/watch?v=o5PWIuDTgxg&list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR](https://www.youtube.com/watch?v=o5PWIuDTgxg&list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR)

## Installation and Setup

1. Clone the repo and `cd` into it
1. Rename or copy `.env.example` file to `.env`
1. Make sure nwenergydirect database is created in phpmyadmin and set database credentials for admin account in your `.env` file
1. `composer install`
1. `php artisan key:generate`
1. Set your Stripe credentials in your `.env` file. Specifically `STRIPE_KEY` and `STRIPE_SECRET`
1. Set `ADMIN_PASSWORD` in your `.env` file if you want to specify an admin password. If not, the default password is 'password'
1. `php artisan ecommerce:install`. This will migrate the database and run any seeders necessary
1. `wget -q -O /tmp/libpng12.deb http://mirrors.kernel.org/ubuntu/pool/main/libp/libpng/libpng12-0_1.2.54-1ubuntu1_amd64.deb && sudo dpkg -i /tmp/libpng12.deb && rm /tmp/libpng12.deb`
1. `npm install`
1. `npm run dev`
1. `sudo nano /opt/lampp/apache2/conf/httpd.conf`
1. Add `Listen 48505` line at the top of configuration, then save.
1. `sudo nano /opt/lampp/etc/extra/httpd-vhosts.conf`
1. Add the following VirtualHost block and save:
```
<VirtualHost *:48505>
    DocumentRoot "/opt/lampp/htdocs/nwenergydirect/public"
    ServerName nwenergydirect.local
</VirtualHost>
```
1. `sudo nano /etc/hosts`
1. Add the following hostname line `127.0.0.1       nwenergydirect.local` and save:
1. Modify permissions for storage and cache folders
1. `sudo chmod -R 777 /opt/lampp/htdocs/nwenergydirect/storage`
1. `sudo chmod -R 777 /opt/lampp/htdocs/nwenergydirect/bootstrap/cache`
1. `sudo /opt/lampp/manager-linux-x64.run`
1. Restart all, then visit http://nwenergydirect.local:48505 in browser and PRESTO!
1. Visit `/admin` if you want to access the Voyager admin backend. Admin User/Password: `admin@admin.com/password`. Admin Web User/Password: `adminweb@adminweb.com/password`

## Windows Users

The `money_format` function does not work in Windows. Take a look at [this thread](https://stackoverflow.com/questions/6369887/alternative-to-money-format-function-in-php-on-windows-platform/18990145). As an alternative, just use the `number_format` function instead.

1. In `app/helpers.php` replace `money_format` line with `return '$'.number_format($price / 100, 2);`
1. In `app/Product.php` replace `money_format` line with `return '$'.number_format($this->price / 100, 2);`
