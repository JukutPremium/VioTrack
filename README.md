<div align="center">
  <img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&customColorList=6&height=200&section=header&text=VioTrack%20WiHope&fontSize=70&fontAlignY=35" width="100%"/>
</div>

# **VioTrack Documentaion**
## Overview
> Viotrack is a website that uses PHP as its main language and Laravel as its Framework. This website aims to help record violations that occur in an agency.
## Features
- **Department Management**  
  Admins can manage department data through the dashboard.

- **Class Management**  
  Easily add, edit, or remove classes via the admin dashboard.

- **Generation Management**  
  Admins can organize and manage generation data from the dashboard.

- **User Management**  
  Full control to manage user accounts through the admin panel.

- **Rule Management**  
  Create, edit, and manage system rules via the dashboard.

- **Violation Management**  
  Track and record violations efficiently through the admin interface.
## Requirement
- **Compopser** (version 2.2.0 or higher)
- **PHP** (version 8.2 or higher)
- **Node.js** (version 22 or higher)
## Installation
**1. Clone the repository**:

```js
git clone https://github.com/JukutPremium/RememoriesBot.git
```
**2. Install Composer Package**:

```js
composer install
```
**3. Install NPM Package**:

```js
npm install
npm run build
npm run dev
```

## Configuration
**1. Generate App Key**:

```js
php artisan key:generate
```
**2. Edit the `.env` file**:

```js
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=viotrack
DB_USERNAME=root
DB_PASSWORD=
```
**3.Import the viotrack.sql file to the database you are using**:

```js
php artisan migrate:fresh --seed
```
> You can use the data that i have modified:
- <a href="https://drive.google.com/drive/folders/1Omc92wpDQlow25NzOyiMt8CHipHZr9by?usp=sharing">**Download Data**</a>

## Run Laravel
- After setting up the `.env` files, You can start by running the following command:

```js
composer run dev
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

<div align="center">
  <img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&customColorList=6&height=200&section=header&text=Shaka.Pratama();&fontSize=70&fontAlignY=35" width="100%"/>
</div>