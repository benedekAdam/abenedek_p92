# abenedek_p92

## Job application project

### Used techologies/libraries:
* PHP 7.3.5
* SQLite 3.24.0
* Phinx _(database migrations)_
* Bootstrap 4.3.1
* Medoo 1.6 _(PDO wrapper)_
* jQuery 3.4.1

### Installation:
1. Download or clone the project repo
2. Enter the project's base folder and 
3. Create a new vhost in Apache/nginx (built-in PHP webserver won't work as routing (partially) relies on _.htaccess_)
4. Run composer install
5. Open the site in a browser
6. The migrations should run automatically, setting up the db
7. You can register your own account, or login with the following one:
    * Username: developer
    * Password: p92_admin_password

### Progress:
- [x] Readme & specifiation
- [x] Basic structure
- [x] Database setup
- [x] Registration
- [ ] Login
- [ ] Profile page
- [ ] User list
- [ ] User page
- [ ] Store multiple emails per user
- [ ] Logout
- [ ] Tests