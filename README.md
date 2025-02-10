<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).


# Laravel Deployment on Shared Hosting (cPanel)

## 🚀 Overview
This guide provides a **step-by-step** process for deploying a Laravel project on **shared hosting with cPanel**. Follow these instructions carefully to ensure a smooth deployment.

---

## **✅ Step 1: Prepare Your Laravel Project for Deployment**

### **On Your Local Computer (MacBook)**

#### **1. Navigate to Your Laravel Project Folder**
```bash
cd /Users/user/Herd/pageant
```

#### **2. Remove Development Dependencies (Optional but recommended)**
```bash
composer install --optimize-autoloader --no-dev
```

#### **3. Build Frontend Assets (If using Laravel Mix or Vite)**
```bash
npm run build
```
(If you see "missing script: build," skip this step.)

#### **4. Clear Cache and Optimize Laravel**
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan optimize
```

#### **5. Zip Your Laravel Project (EXCEPT `node_modules` & `vendor/` folders)**
```bash
zip -r laravel_project.zip . -x "node_modules/*" "vendor/*"
```
(This creates a ZIP file without unnecessary folders.)

---

## **✅ Step 2: Upload Your Laravel Project to cPanel**

### **In cPanel (`https://missunity.com.ng:2083`)**

1. **Go to File Manager → Upload → Select `laravel_project.zip`**.
2. **Once uploaded, extract it inside `/home/missunit/`**.

🚨 **DO NOT extract into `public_html/`. Laravel's files should NOT be directly in `public_html/`.**

---

## **✅ Step 3: Move `public/` Folder Contents to `public_html/ except mix-manifest.json`**

Laravel’s entry point should be inside `public_html/`, so we need to move the contents of `public/` there.

### **Steps in cPanel:**
1. **Go to File Manager → Open `laravel_project/public/`**.
2. **Select ALL files inside `public/`** (**DO NOT** select the `public/` folder itself).
3. **Click "Move" and move them to `public_html/`.**
4. **Go back to `public_html/` and edit `index.php`.**

#### **Modify `index.php` to Point to the Correct Paths:**
```php
<?php
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Ensure correct paths for Laravel bootstrap and autoload
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
```
✅ **Save and close `index.php`.**

---

## **✅ Step 4: Set Correct Permissions**

### **In cPanel File Manager:**
- **Go to `storage/` → Right-click → Set permissions to `775`.**
- **Go to `bootstrap/cache/` → Right-click → Set permissions to `775`.**
- **Go to `public_html/` → Right-click → Set permissions to `755`.**

---

## **✅ Step 5: Configure `.htaccess` (Important)**

### **Modify `.htaccess` in `public_html/`**
1. **Open or create a `.htaccess` file** and add the following:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On

    # Ensure PHP 8.2 is used
    AddHandler application/x-httpd-ea-php82 .php

    # Redirect all requests to Laravel's index.php
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

# Disable directory listing
Options -Indexes

# Disable mod_security (if necessary)
<IfModule mod_security.c>
    SecFilterEngine Off
    SecFilterScanPOST Off
</IfModule>
```
✅ **Save the file and reload your website.**

---

## **✅ Step 6: Set Up the Database**

### **1. Create MySQL Database in cPanel**
1. **Go to cPanel → MySQL Databases**.
2. **Create a new database** (e.g., `missunit_pageant`).

### **2. Create MySQL User**
1. **Create a new database user** (e.g., `missunit_user`).
2. **Set a secure password.**
3. **Assign the user to the database with "ALL PRIVILEGES".**

### **3. Import Your Database**
1. **Go to `phpMyAdmin` → Select the new database**.
2. **Click "Import" → Select your `.sql` file**.
3. **Click "Go" to import the database.**

✅ **Database setup is complete!**

---

## **✅ Step 7: Update `.env` Configuration**

1. **Go to File Manager → Open `.env` in the project folder.**
2. **Update database credentials correctly:**
```ini
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:YOUR_GENERATED_APP_KEY

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=missunit_pageant
DB_USERNAME=missunit_user
DB_PASSWORD=YOUR_DB_PASSWORD
```
3. **Save the file and close it.**

🚀 **If the `.env` file is not working properly, clear the Laravel cache manually.**
👉 **See the next step.**

---

## **✅ Step 8: Clear Laravel Cache**

### **In cPanel File Manager:**
1. **Go to `bootstrap/cache/`.**
2. **Delete all `.php` files inside (`config.php`, `routes.php`, etc.).**
3. **Go to `storage/framework/cache/` and delete all files inside.**
4. **Reload your website.**


---

## **🔥 Final Checklist Before Testing**
| **Task** | **Action** |
|----------|-----------|
| **Upload Laravel project** | ✅ `laravel_project.zip` uploaded and extracted |
| **Move `public/` contents to `public_html/`** | ✅ Done |
| **Edit `index.php` paths correctly** | ✅ Done |
| **Set correct file permissions** | ✅ `storage/` & `bootstrap/cache/` to `775` |
| **Update `.htaccess` to force PHP 8.2** | ✅ Done |
| **Create database & import `.sql`** | ✅ Done |
| **Update `.env` with correct database credentials** | ✅ Done |
| **Clear Laravel cache manually** | ✅ Done |

🚀 **Your Laravel site should now be live on cPanel!** 🎉

---

**📌 Need More Help?**
If you encounter any issues, check the Laravel logs in `storage/logs/laravel.log` and your cPanel error logs for further debugging.Also if you encounter 500|server error , you can change the .env file from production to local and from App-debug= false to True to be able to see the actual problem.

**Happy coding! 🚀**






### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
