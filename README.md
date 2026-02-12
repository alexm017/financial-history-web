# Capital & Control

Capital & Control is a digital portal dedicated to exploring global financial history. The project examines the economic transformations that have shaped the modern world, analyzing the delicate balance between market risks and state control.

The platform provides educational insights into historical financial crises, the psychology of markets (greed vs. fear), and the socio-economic impacts of planned economies versus free markets.

## Project Preview

![Website Homepage Preview](assets/images/main_website_preview.png)

## Installation and Setup

To run this project locally or on a dedicated server, this application requires a standard LAMP stack (Linux, Apache, MySQL, PHP). Below are the specific steps to deploy using the Apache2 web server.

### 1. Install Apache and PHP
Update your package index and install the necessary software.

```bash
sudo apt update
sudo apt install apache2 php libapache2-mod-php
```

### 2. Configure Virtual Host
Navigate to the Apache configuration directory and edit the default configuration file.

```bash
cd /etc/apache2/sites-available/
sudo nano 000-default.conf
```
Update the DocumentRoot to point to your project directory. The configuration should look like this:
```bash
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/capital-control

    <Directory /var/www/html/capital-control>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

### 3. Deploy Application
Clone or move your project files into the web server directory defined in the configuration.

```bash
sudo mkdir -p /var/www/html/capital-control
sudo cp -r * /var/www/html/capital-control/

sudo chown -R www-data:www-data /var/www/html/capital-control
sudo chmod -R 755 /var/www/html/capital-control

sudo a2ensite 000-default.conf
sudo systemctl restart apache2

sudo service apache2 start
```

### 4. Access the Application
Open a web browser and navigate to your local server address or IP:
```
http://localhost
```


