# Daily Dhamma - Web Admin

[![Build Status](https://scrutinizer-ci.com/g/martiendt/daily-dhamma-admin/badges/build.png?b=master)](https://scrutinizer-ci.com/g/martiendt/daily-dhamma-admin/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/martiendt/daily-dhamma-admin/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/martiendt/daily-dhamma-admin/?branch=master)
[![StyleCI](https://styleci.io/repos/82749197/shield?branch=master)](https://styleci.io/repos/82749197)

This is web admin site for daily-dhamma app

For android app repo : [Android](https://github.com/martiendt/daily-dhamma)

Published app : 

<a href='https://play.google.com/store/apps/details?id=red.point.dailydhamma&hl=en&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
<img width="125px" alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/>
</a>

this site using : 

- Laravel 5.4 as a framework
- Firebase for NoSQL database and notification
- Datatables
- Bootstrap 3.x

## Installation
1. clone this repo into your local folder
2. run composer install
3. add `.env` into your root folder, you can copy `.env.example` as reference
```
DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_DATABASE_USERNAME
DB_PASSWORD=YOUR_DATABASE_PASSWORD
```
4. migrate your database `php artisan migrate`
5. seed your database `php artisan db:seed`
now you have your default credential, username `admin` password `password`
6. register into https://firebase.google.com and create authentication method.
follow this guide : https://firebase.google.com/docs/admin/setup#add_firebase_to_your_app
7. rename your generated authentication file into `google-service-account.json` and then copy your json file into `storage` folder

your initial setup is complete.

## TODO
Upcomming content for this app : (still under discussion)
- Parrita Suci
- Naskah Dhamma
- Dhammapada

## Feedback
Please submit an issue for your feedback for any improvement




