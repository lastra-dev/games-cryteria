# Games Cryteria :video_game:

![landing-page](https://i.imgur.com/wzO8CAh.png)

## What's included

:star: Composer dependency manager  
:star: MVC Architecture  
:star: Apache secure routing  
:star: RAWG API usage for getting video game data  
:star: MariaDB with custom stored procedures

![home](https://i.imgur.com/0TFjD9m.png)

## Installation

Install [xampp](https://www.apachefriends.org/es/index.html)

Clone this repository inside xampp's htdocs  
` git clone https://github.com/lastra-dev/games-cryteria.git `  

Install dependencies with
` php composer.phar install `  

Import database using db_template.sql.

Use .env.example to create a .env file and change its values  
` RAWG_KEY="abc123"  DB_PASS="abc123" `

Run your xampp instance and go to
http://localhost/games-cryteria/

## License

Copyright © Games Cryteria - Released under the MIT License
