PRAKTIKUM 1 
Membuat Halaman About
<img width="1366" height="720" alt="Cuplikan layar 2026-04-06 225236" src="https://github.com/user-attachments/assets/496b50ff-e2e8-4e5d-b5e4-6b80618d1d73" />
Lalu, buat Header dan Footer nya dengan css sederhana dari praktikum 4 
<img width="1366" height="720" alt="Cuplikan layar 2026-04-06 231822" src="https://github.com/user-attachments/assets/7061ad0b-03b5-4f4f-a4d7-5424a9e0a7e8" />

PRAKTIKUM 2 
Membuat Artikel pertama dan Artikel kedua
<img width="1366" height="720" alt="Cuplikan layar 2026-04-07 125023" src="https://github.com/user-attachments/assets/8fa136c9-3c9c-482b-8f11-ce474df1126d" />
Buat Dashboard Admin Dan CRUD Artikel
<img width="1366" height="720" alt="Cuplikan layar 2026-04-07 134154" src="https://github.com/user-attachments/assets/163b87b6-c68d-4903-af9a-3cf7a5fb3c4d" />
<img width="1366" height="720" alt="Cuplikan layar 2026-04-07 135752" src="https://github.com/user-attachments/assets/5d0e7540-97ff-4d93-9463-2b6789a0cb67" />

PRAKTIKUM 3
Melakukan Perubahan pada Artikel dengan menambahkan tanggal agar dapat mengambil data artikel terbaru.
<img width="1366" height="720" alt="Cuplikan layar 2026-04-07 142803" src="https://github.com/user-attachments/assets/b17080ec-56fc-4914-912f-f3524b5abd51" />
<img width="1366" height="720" alt="Cuplikan layar 2026-04-07 143007" src="https://github.com/user-attachments/assets/b1ff4803-0d0c-4a10-8495-0275d78d71b5" />
<img width="1366" height="720" alt="Cuplikan layar 2026-04-07 143023" src="https://github.com/user-attachments/assets/fb9461b3-ea19-4930-bc9a-13b89cd0e91b" />

PRAKTIKUM 4
Membuat User Login 
<img width="1366" height="720" alt="Cuplikan layar 2026-04-07 152834" src="https://github.com/user-attachments/assets/1630e992-999b-4e90-9e86-f4ffdfc49fe4" />






# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - The end of life date for PHP 8.1 was December 31, 2025.
> - If you are still using below PHP 8.2, you should upgrade immediately.
> - The end of life date for PHP 8.2 will be December 31, 2026.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
