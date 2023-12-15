<p align="center">Selamat datang di repositori proyek Capstone MSIB Cycle 5 x Dicoding kami! Proyek ini merupakan bagian integral dari upaya kami untuk memenuhi persyaratan kelulusan dalam program Magang Studi Independent Bersertifikat (MSIB) di Dicoding.</p>

## Executive Summary

Our project aims to develop an E-Commerce Application for Nusantara Motif Fabrics with a focus on the theme of Social and Cultural Sustainability. The background of this project stems from our concern about the declining interest and appreciation of Indonesian culture, especially among the younger generation. According to available data, there is a significant decline in interest in Indonesian culture. Therefore, this project can help promote and preserve Indonesian culture and support the local textile industry.

## Project Background

The background of our project is influenced by the declining enthusiasm for Indonesian culture. Various cultural elements like sasirangan banjar, batik cloth, songket minangkabau, songket palembang, lurik Yogyakarta, tenun Lombok, endek Balinese, tenun Dayak, etc. are at risk of disappearing. We believe that these cultural treasures deserve to be recognised and preserved, and that technology can play an important role in achieving this goal.

## Installation Guide

1). Install Composer in your computer

2). Clone Repository on your computer
    
```git clone <name> https://github.com/asrofilnadib/Kastara_Kain-Nusantara.git``` 

3). Run ```php artisan key:generate```

4). Change or duplicate file ```.env.example``` with name ```.env```

4). compile the assets with ```npm i && npm run dev``` after that run ```gulp copy```

5). install composer packages with ```composer install --no-interaction --no-ansi```
    or update with ```composer update --no-interaction --no-ansi```

5). Run ```php artisan migrate --seed```

6). Link the images ```php artisan storage:link```

7). Run ```php artisan serve```

8). Open http://127.0.0.1:8000
