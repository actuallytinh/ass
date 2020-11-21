<p align="center">
    <a href="https://asspanel.com"><img src="https://cdn.discordapp.com/attachments/775500306930335815/779044673524203520/asspanel-01.png"></img></a>
    <b>Monitor your server with ease</b>
</p>

### ASS - Advanced Server Supervisor
ASS allows you to manage your server network in one panel. You can add each individual server to the panel, with a RCON feature. It will show the statistics of each server, like server uptime, player history, and more. It will also have a player management system which allows you to punish members through the panel, with each punishment logged in the panel. A future feature is for servers that don't run on LEET, there will be a plugin created to show CPU Usage, Disk Usage, and Allocated RAM.


###### Setup - File `config.php`
Edit the fields according to your database credentials.
```php
<?php
    // MySQL Settings
    define("DB_NAME", "database name");
    define("DB_USER", "database user");
    define("DB_PASS", "database password");
    define("DB_HOST", "database hostname");
```

###### Configuration - File `settings.php`
Edit only the `$settings['name']`. This is to change the community name.
```php
<?php
    // Panel Settings
    $settings['name'] = "community name";
    $settings['version'] = "1.3.1"; // DO NOT TOUCH
    $settings['copyright'] = "ASS © 2020"; // DO NOT TOUCH
```

<p>More steps coming soon once completed...</p>

##### Preview
Login Page
![Login Panel](https://cdn.discordapp.com/attachments/766246207483674644/779065143098998784/login-01.png)

##### Checklist
- [x] Create Database
- [x] MySQL Injection Prevention
- [x] Create Table "users"
- [x] Create Table "usergroups"
- [ ] Create Table "servers"
- [ ] Create Table "logs"
- [x] Login Page
###### Dashboard - Staff
- [ ] Display Server Total
- [ ] Players Online Total
- [ ] Display Server Uptime
- [ ] Display Player list
- [ ] Player Management
- [ ] Punishment Logging
###### Server Owner/Admin
- [ ] Add Server
- [ ] Individual Server Pages
- [ ] Server RCON
###### Panel Manager
- [ ] Create Accounts
- [ ] Remove Accounts
 
##### Other Information

**Project Visibility** PRIVATE 
This project will be used on chosen servers by Tinh. If you have any questions, suggestions, or concerns, please contact Tinh via Discord.
**Username** tinh#0001

Currently, the website and email provided below aren't currently working. Please wait for future updates.

**Website** [Visit](https://asspanel.com)
**Contact** info@asspanel.com
**Discord** N/A

---
<p>ASS is not affiliated with Mojang. All brands and trademarks belong to their respective owners. ASS is not a Mojang-approved software, nor is it associated with Mojang.</p>
ASS © 2020 ❤ Made with love by Tinh. All rights are reserved.
