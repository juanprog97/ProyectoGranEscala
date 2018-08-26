#! /bin/bash
cd Nginx
rm -R greenWonder
cd ..
cd greenWonder
ng build --prod
mv dist/greenWonder ../Nginx/
cd ..
docker-compose up --build